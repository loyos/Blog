<?php
 
class IndexController extends AppController {

    public $helpers = array ('Html','Form');

    function index() {
        // $this->set('posts', $this->Post->find('all'));
		
		// al terminar la función index, se va para la vista llamada igual que esta función, que en este caso es index
    }
	
	function prueba() {
        
		$suma = 10 + 15;		
		$this->set('resultado', $suma);
    }
	
	function hola() {
        
    }
}

?>