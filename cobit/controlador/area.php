<?php

class Area extends Controlador{

	 function __construct() {
        parent::__construct();

        $this->view->js = array('area/js/default.js');               
    }

    
  public function nuevo(){
      $this->view->paises = $this->modelo->seleccionarPaises();
      $this->view->render('area/nuevo');

    }


	public function index (){
		$this->view->listadoAreas= $this->modelo->listarAreas();
    $this->view->paises = $this->modelo->seleccionarPaises();
		$this->view->render('area/index');
	}

	public function crear(){

		$data= array();
    $data['id_area'] = $_POST['id_area'];
		$data['nombre_area'] = $_POST['nombre_area'];
		$data['descripcion'] = $_POST['descripcion'];
    $data['id_pais'] = $_POST['id_pais'];
		$this->modelo->crear($data);
		header('location:' .URL. 'area');
	}

	public function editar($id){

    $this->view->verarea =$this->modelo->listarAreaIndividual($id);
    $this->view->pais = $this->modelo->seleccionarPaises();
		$this->view->render('area/editar');
	}


     public function guardarEditar($id){
       $data = array();
       $data['id_area'] = $_POST['id_area'];
       $data['nombre_area'] = $_POST['nombre_area'];
       $data['id_pais'] = $_POST['id_pais'];
       $data['id_area'] = $id;
       //exit(print_r($data));
       $this->modelo->guardarEditar($data);
       header('location:' . URL .'area');
    }


     public function eliminar($idArea) {
        $this->modelo->eliminar($idArea);
        header('location:' . URL .'area');
    }
    
     public function buscar_area($nombre){
         $this->modelo->buscar_area($nombre);
    }

    public function buscar_area_individual(){
      $data=$this->modelo->listarAreaIndividual($_POST['id_area']);
      echo json_encode($data);
    }






}



?>