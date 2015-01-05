<?php


class Registro extends Controlador {

      function __construct() {
        parent::__construct();   
        Session::init();
        $logeado = Session::get('logeado');
        $role = Session::get('rol');
        $usuario= Session::get('usuario');
        if(!$logeado ){
            Session::destroy();
            header('location: '.URL.'login');
            exit;
        }
         //$this->view->usuario=$usuario;
         $this->view->js = array('registro/js/default.js');     
    }

  public function nuevo(){
        $this->view->showDevelopers = $this->modelo->selectDevelopers();
        $this->view->showApplications = $this->modelo->selectApplications();
        $this->view->showAnalysts = $this->modelo->selectAnalysts();
        $this->view->showCustomers = $this->modelo->selectCustomers();
        $this->view->showTprocess = $this->modelo->selectTprocess();
        $this->view->showUsers = $this->modelo->selectUsers();
        $this->view->paises = $this->modelo->seleccionarPaises();
        $this->view->render('registro/nuevo');
    }

    
  public function index (){
    $this->view->listarDatos = $this->modelo->listadoDatos();
    $this->view->render("registro/index");
  }


  public function editar($id){
        $this->view->municipios = $this->modelo->seleccionarMunicipios();
        $this->view->registro = $this->modelo->listarRegistroIndividual($id);
        $this->view->render('registro/editar');
    }




    public function crear(){

    $data= array();
    $data['registro']           = $_POST['registro'];
    $data['documentacion']      = $_POST['documentacion'];
    $data['procedimiento']      = $_POST['procedimiento'];
    $data['nivel_impacto']      = $_POST['nivel_impacto'];     
    $data['statuss']             = $_POST['statuss'];
    $data['id_area']             = $_POST['id_area'];
    $data['id_usuario']             = $_POST['id_usuario'];
    $data['id_tp']             = $_POST['id_tp'];
    $data['id_cliente']             = $_POST['id_cliente'];
    $data['id_dev']             = $_POST['id_dev'];
    $data['id_ap']             = $_POST['id_ap'];
    $data['id_an']             = $_POST['id_an'];
    $data['fecha']      = $_POST['fecha'];
    $data['fecha_ac']      = $_POST['fecha_ac'];

    //$data['documentacion'] = $_POST['documentacion'];

    $this->modelo->crear($data);
    header('location:' .URL. 'registro');
  }

    /*public function crear(){
        $data=array();
        
        $data['registro']           = $_POST['registro'];
        $data['documentacion']      = $_POST['documentacion'];
        $data['procedimiento']      = $_POST['procedimiento'];
        $data['nivel_impacto']      = $_POST['nivel_impacto'];
        $data['area']               = $_POST['area'];
        $data['status']             = $_POST['status'];
        $data['usuario']            = $_POST['usuario'];
        $data['tproceso']           = $_POST['tproceso'];
        $data['direccion']          = $_POST['cliente'];
        $data['analista']           = $_POST['analista'];
        $data['aplicacion']         = $_POST['aplicacion'];
        $data['desarrollador']      = $_POST['desarrollador'];
        $data['fecha_creacion']     = $_POST['fecha_creacion'];
        $data['fecha_modificacion'] = $_POST['fecha_modificacion'];
        

        $this->modelo->crear($data);
        //$this->view->render("registro/index");
        header('location:' . URL .'registro');
    }*/

  public function cargarAreas($id){
    $this->modelo->cargarAreas($id);
  }

  public function eliminar($idRegistro) {
        $this->modelo->eliminar($idRegistro);
        header('location:' . URL .'registro');
    }

  public function buscar_registro_individual(){
      $data=$this->modelo->listarRegistroIndividual($_POST['id_rg']);
      echo json_encode($data);
    }


     public function guardarEditar($id){
       $data = array();
       $data['id_rg'] = $_POST['id_rg'];
       $data[''] = $_POST[''];
       $data['id_pais'] = $_POST['id_pais'];
       $data['id_area'] = $id;
       //exit(print_r($data));
       $this->modelo->guardarEditar($data);
       header('location:' . URL .'registro');
    }


     public function buscar_registros($nombre){
         $data=$this->modelo->buscar_registro($nombre);
         echo json_encode($data);
    }

  /*public function cargarAreas($id){
        header('Content-Type: text/xml; charset=utf-8'); 
        $html="";
        $array=$this->modelo->cargarAreas($id);
        $datos=array();
        foreach ($array as $key => $value) {
            $datos[$value['id_area']]=utf8_encode($value['area']);
        }
        echo json_encode($datos);
    }

    public function cargarPaises($id){
        header('Content-Type: text/xml; charset=utf-8'); 
        $html="";
        $array=$this->modelo->seleccionarPaises($id);
        $datos=array();
        foreach ($array as $key => $value) {
            $datos[$value['id_pais']]=utf8_encode($value['nombre']);
        }
        echo json_encode($datos);
    }*/

     





}

 




/*
class Registro extends Controlador {

      function __construct() {
        parent::__construct();   
        /*Session::init();
        $logeado = Session::get('logeado');
        $role = Session::get('rol');
        $usuario= Session::get('usuario');
        if(!$logeado ){
            Session::destroy();
            header('location: '.URL.'login');
            exit;
        }
         //$this->view->usuario=$usuario;
         $this->view->js = array('registro/js/default.js');
     
    }

  public function nuevo(){
        //$this->view->municipios = $this->modelo->seleccionarMunicipios();
        $this->view->paises = $this->modelo->seleccionarPaises();
        $this->view->render('registro/nuevo');
    }

    
  public function index (){
    //$this->view->paises = $this->modelo->seleccionarPaises();
    $this->view->listarDatos = $this->modelo->listadoDatos;
    $this->view->render("registro/index");

  }

  public function editar($id){
        $this->view->municipios = $this->modelo->seleccionarMunicipios();
        $this->view->registro = $this->modelo->listarregistroIndividual($id);
        $this->view->render('registro/editar');
    }

    public function crear(){
        $data=array();
        $data['nombre_apellido'] = $_POST['nombre_apellido'];
        $data['cedula'] = $_POST['cedula'];
        $data['direccion'] = $_POST['direccion'];
        $data['telefono'] = $_POST['telefono'];
        $data['area'] = $_POST['area'];
        $data['nacionalidad'] = $_POST['nacionalidad'];
        $data['correo'] = $_POST['correo'];

        $this->modelo->crear($data);
        //$this->view->render("registro/index");
        header('location:' . URL .'registro');
    }

  public function cargarAreas($id){
    $this->modelo->cargarAreas($id);
  }

  public function eliminar($id) {
        $this->modelo->eliminar($id);
        header('location:' . URL .'registro');
    }

  public function buscar_registro_individual(){
      $data=$this->modelo->listarregistroIndividual($_POST['id_registro']);
      echo json_encode($data);
    }


     public function guardarEditar($id){
       $data = array();
       
       
       $data['nombre_apellido'] = $_POST['nombre_apellido'];
       $data['cedula'] = $_POST['cedula'];
       $data['direccion'] = $_POST['direccion'];
       $data['telefono'] = $_POST['telefono'];
       $data['correo'] = $_POST['correo'];
       $data['area'] = $_POST['area'];
       $data['id_registro'] = $id;
       $this->modelo->guardarEditar($data);
       header('location:' . URL .'registro');
    }


     public function buscar_registros($nombre){
         $data=$this->modelo->buscar_registro($nombre);
         echo json_encode($data);
    }

  /*public function cargarAreas($id){
        header('Content-Type: text/xml; charset=utf-8'); 
        $html="";
        $array=$this->modelo->cargarAreas($id);
        $datos=array();
        foreach ($array as $key => $value) {
            $datos[$value['id_area']]=utf8_encode($value['area']);
        }
        echo json_encode($datos);
    }

    public function cargarPaises($id){
        header('Content-Type: text/xml; charset=utf-8'); 
        $html="";
        $array=$this->modelo->seleccionarPaises($id);
        $datos=array();
        foreach ($array as $key => $value) {
            $datos[$value['id_pais']]=utf8_encode($value['nombre']);
        }
        echo json_encode($datos);
    }*/

     





