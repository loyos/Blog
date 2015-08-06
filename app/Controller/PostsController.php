<?php
 
class PostsController extends AppController {
	public $helpers = array('Html','Form');

	function index() {
	
		$all_data = $this->Post->find('all');  // Este comando trae todos los datos de la base de datos en la tabla posts a traves del modelo Post
									// find() es una función que trae cakePhp y que el modelo Post hereda para buscar datos en la tabla Post.
		
		// debug($all_data);
		
		
		$this->set('posts', $all_data); // La función this->set se encarga de mandar informacion al a vista a traves de variables
		
	}
	
	function delete($id){
		
		$this->Post->delete($id);  // este comando borra el post con el id indicado
		
		$mensaje = "El post con id " . $id . "fue borrado";

		$this->set("mensaje", $mensaje);
		
	}
}
?>