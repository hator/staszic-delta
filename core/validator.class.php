<?php

	class Validator {
	
		public static function SqlInjection($_input) {
			return addslashes($_input);
		}
		
		public static function XSS($_input) {
			return self::HTML(htmlspecialchars($_input));
		}
		
		public static function HTML($input) {
			$input = str_replace("<","&lt;",$input);
			$input = str_replace(">","&gt;",$input);

			return $input;
		}
		
		public static function HTMLdecode($input) {
			$input = str_replace("&lt;","<",$input);
			$input = str_replace("&gt;",">",$input);

			return $input;
		}
		
		//public static function Username($_input) {
		//	return preg_match('/[a-zA-Z].[a-zA-Z0-9_-]*/', $_input);
		//}
		
		public static function Password($_input) {
			return (strlen($_input)>=6);
		}
		
		public static function Email($_input) {
			//return preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/", $_input);
			return preg_match("/^\\w(\\w|[+.-])*@(\\w|-)+(\\.(\\w|-)+)+$/", $_input);
		}
		
	}

?>