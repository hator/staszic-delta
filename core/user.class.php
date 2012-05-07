<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: index.php');
		die();
	}
	/********/
	
	
	class User {
		
		public $id, $email, $admin;
		
		public function __construct($autologin = true)
		{
			if( $autologin ) {
				if( isset($_SESSION['user']) ) {
					
					$user = unserialize($_SESSION['user']);
					
					$this->id = $user->id;
					$this->email = $user->email;
					$this->admin = $user->admin;
					
					return 1;
				}
			}
		}
		
		/**
		* login
		* @return  1 if login succeeded
		*		  -1 if user already logged in
		*		  -2 if login failed
		*/
		
		public function login($_email, $_password)
		{
			if( $this->id ) {
				return 1;
			} elseif( isset($_SESSION['user']) ) {
				
				$user = unserialize($_SESSION['user']);
				
				$this->id = $user->id;
				$this->email = $user->email;
				$this->admin = $user->admin;
				
				return 1;
			}
			
			$db = DBManager::instance();
			
			$email = Validator::SqlInjection( /*Validator::Username(*/$_email/*)*/ );
			$password = hash('sha256', $_password.$_email);
			
			$result = $db->query('SELECT `id`,`admin_level` FROM `users` WHERE `email`=\''.$email.'\' AND `passwd`=\''.$password.'\'');

			
			if (!$result || $result->num_rows != 1) {
				return -2;
			}
		
			$userdata = $result->fetch_assoc();
			
			$this->id = $userdata['id'];
			$this->email = $_email;
			$this->admin = $userdata['admin_level'];
		
			$_SESSION['user'] = serialize($this);
			
			return 1;
		}
		
		public function logout()
		{
			unset($_SESSION['user']);
			session_destroy();
		}
		
		
		/**
		*
		* @return -1 if username is invalid
		*		  -2 if password is invalid
		*         -4 if email is invalid
		*		  -8 if insertion failed
		*/
		public function register($_email, $_password) {
			$flags = 0;
			$fail = false;
			
			$db = DBManager::instance();
			
			if( !Validator::Password($_password) ) {
				$fail = true;
				$flags += -2;
			} if( !Validator::Email($_email) ) {
				$fail = true;
				$flags += -4;
			}
			if ($fail) {
				return $flags;
			}
			
			$email = Validator::SqlInjection($_email);
			
			$check = $db->query("SELECT id FROM `users` WHERE email='".$email."'");
			
			if( !(!$check || !$check->num_rows > 0) ) {
				return -8;
			}
			
			$password = hash('sha256', $_password.$_email);
			
			$result = $db->query("INSERT INTO `users` (`id`, `passwd`, `email`, `admin_level`) VALUES (null, '".$password."', '".$email."', 0)");
			
			return 1;
		}
	
	}
	
?>