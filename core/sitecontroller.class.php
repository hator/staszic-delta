<?php

	class SiteController {

	protected $controller;
	protected $view;
	public	  $params = array();

	/*public function checkForController($name) {
		return file_exists('controllers/'. $name .'.php');
	}
	
	public function checkForView($name) {
		return file_exists('views/'. $name .'.php');
	}
	
	public function setController($name) {
		$this->controller = $name;
	}
	
	public function getController() {
		return $this->controller;
	}
	
	public function setView($name) {
		$this->view = $name;
	}
	
	public function getView() {
		return $this->view;
	}*/
	
	public function required($name) {
		require_once(BASEPATH.$name);
	}
	
	public function executeController($name) {
		if($name) {
			$this->controller = $name;
		}
		//try {
		require_once('controllers/'. $this->controller.'.php');
		$this->clearParams();
		/*} catch (Exception $e) {
			die('Wystąpił błąd modułu <em>'. $this->controller .'</em>: '. $e->getMessage());
		}*/
	}
	
	public function executeView($name) {
		if($name) {
			$this->view = $name;
		}
		//try {
		require_once('views/'. $this->view.'.view.php');
		/*} catch (Exception $e) {
			$this->clearParams();
			die('Wystąpił błąd widoku <em>'. $this->view .'</em>: '. $e->getMessage());
		}*/
		//$this->clearParams();
	}
	
	public function setParam($name, $value) {
		$this->params[$name] = $value;
	}
	
	public function getParam($name) {
		return $this->params[$name];
	}

	public function clearParams() {
		$this->params = array();
	}
}

?>