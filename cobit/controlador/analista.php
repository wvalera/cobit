<?php

class Analista extends Controlador{

	 function __construct() {
        parent::__construct();

        $this->view->js = array('analista/js/default.js');               
    }

    
  public function nuevo(){
      $this->view->paises = $this->modelo->seleccionarPaises();
      $this->view->render('analista/nuevo');

    }


	public function index (){
		$this->view->listadoanalistas= $this->modelo->listarAnalistas();
    $this->view->paises = $this->modelo->seleccionarPaises();
		$this->view->render('analista/index');
	}

	public function crear(){

		$data= array();
    $data['id_analista'] = $_POST['id_analista'];
		$data['nombre_analista'] = $_POST['nombre_analista'];
		$data['descripcion'] = $_POST['descripcion'];
    $data['id_pais'] = $_POST['id_pais'];
		$this->modelo->crear($data);
		header('location:' .URL. 'analista');
	}

	public function editar($id){

    $this->view->veranalista =$this->modelo->listaranalistaIndividual($id);
    $this->view->pais = $this->modelo->seleccionarPaises();
		$this->view->render('analista/editar');
	}


     public function guardarEditar($id){
       $data = array();
       $data['id_analista'] = $_POST['id_analista'];
       $data['nombre_analista'] = $_POST['nombre_analista'];
       $data['id_pais'] = $_POST['id_pais'];
       $data['id_analista'] = $id;
       //exit(print_r($data));
       $this->modelo->guardarEditar($data);
       header('location:' . URL .'analista');
    }


     public function eliminar($idanalista) {
        $this->modelo->eliminar($idanalista);
        header('location:' . URL .'analista');
    }
    
     public function buscar_analista($nombre){
         $this->modelo->buscar_analista($nombre);
    }

    public function buscar_analista_individual(){
      $data=$this->modelo->listaranalistaIndividual($_POST['id_analista']);
      echo json_encode($data);
    }






}



?>