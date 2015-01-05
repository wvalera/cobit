<?php


/**
* 
*/
class Tproceso extends Controlador
{
	
	function __construct() {
        parent::__construct();

        $this->view->js = array('tproceso/js/default.js');               
    }

    
  public function nuevo(){
      //$this->view->paises = $this->modelo->seleccionarPaises();
      $this->view->render('tproceso/nuevo');

    }


	public function  index(){

		$this->view->listaTproceso = $this->modelo->listarTproceso();
		$this->view->render('tproceso/index');
	}

	public function crear(){

		$data= array();
    	//$data['id_tp'] = $_POST['id_tp'];
		$data['tproceso'] = $_POST['tproceso'];
		$data['descripcion'] = $_POST['descripcion'];
   	$this->modelo->crear($data);
		header('location:' .URL. 'tproceso');
	}

	public function editar($id){

   		   $this->view->t_proceso =$this->modelo->listarTprocesoIndividual($id);
       	 $this->view->render('tproceso/editar');
	}


     public function guardarEditar($id){
       $data = array();
       $data['tproceso'] = $_POST['tproceso'];
       $data['descripcion'] = $_POST['descripcion'];
       $data['id_tp'] = $id;
       //exit(print_r($data));
       $this->modelo->guardarEditar($data);
       header('location:' . URL .'tproceso');
    }

     public function eliminar($idTproceso) {
        $this->modelo->eliminar($idTproceso);
        header('location:' . URL .'tproceso');
    }
    
     public function buscar_tproceso($nombre){
         $this->modelo->buscar_tproceso($nombre);
    }

    public function buscar_tproceso_individual(){
      $data=$this->modelo->listarTprocesoIndividual($_POST['id_tp']);
      echo json_encode($data);
    }
}

