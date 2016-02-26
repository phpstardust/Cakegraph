<?php

App::uses('AppHelper', 'View/Helper');

class CakegraphHelper extends AppHelper {
	
	public $components = array('Session','Cookie','RequestHandler');
	
	public $helpers = array('Html', 'Form', 'Session');
	
	
	
	
	public function html() {
		
		echo '<html prefix="og: http://ogp.me/ns#">' ."\r\n";
		
	}
	
	
	
	
	public function opengraph($params = array()) {
		
		foreach($params as $param=>$value):
		
			echo '<meta property="og:' .$param .'" content="' .$value .'" />' ."\r\n";
		
		endforeach;
		
	}
	
	
	
	
}

?>
