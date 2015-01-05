<?php


class Cliente extends Controlador {

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
         $this->view->js = array('cliente/js/default.js');
     
    }

  public function nuevo(){
        //$this->view->municipios = $this->modelo->seleccionarMunicipios();
        $this->view->paises = $this->modelo->seleccionarPaises();
        $this->view->render('cliente/nuevo');
    }

    
  public function index (){
    $this->view->paises = $this->modelo->seleccionarPaises();
    $this->view->listaClientes = $this->modelo->listadoClientes();
    $this->view->render("cliente/index");

  }

  public function editar($id){
        $this->view->municipios = $this->modelo->seleccionarMunicipios();
        $this->view->cliente = $this->modelo->listarClienteIndividual($id);
        $this->view->render('cliente/editar');
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
        //$this->view->render("cliente/index");
        header('location:' . URL .'cliente');
    }

  public function cargarAreas($id){
    $this->modelo->cargarAreas($id);
  }

  public function eliminar($id) {
        $this->modelo->eliminar($id);
        header('location:' . URL .'cliente');
    }

  public function buscar_cliente_individual(){
      $data=$this->modelo->listarClienteIndividual($_POST['id_cliente']);
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
       $data['id_cliente'] = $id;
       $this->modelo->guardarEditar($data);
       header('location:' . URL .'cliente');
    }


     public function buscar_clientes($nombre){
         $data=$this->modelo->buscar_cliente($nombre);
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