<?php


class Registro_Model extends Modelo{

     function __construct() {
        parent::__construct();
    }


    public function listadoDatos(){

      $consulta = $this->db->ejecutarConsulta('SELECT r.id_rg, r.registro, r.documentacion, r.procedimiento, r.nivel_impacto, r.statuss, ar.nombre_area, r.fecha, r.fecha_ac, u.login, t.tproceso, cl.nombre_apellido , an.analista

      from registro r

      inner join area ar on r.id_area = ar.id_area
      inner join usuarios u on r.id_usuario=u.id
      inner join tipo_proceso t on r.id_tp = t.id_tp
      inner join cliente cl on r.id_cliente = cl.id_cliente
      inner join analista an on r.id_an=an.id_an');

      return $consulta->fetchAll();
    }

    

    public function selectDevelopers(){
      $consulta = $this->db->ejecutarConsulta("SELECT id_dev, desarrollador from desarrollador");
      return $consulta->fetchAll();
    }


    public function selectApplications(){
      $consulta = $this->db->ejecutarConsulta("SELECT id_ap, aplicacion from aplicacion");
      return $consulta->fetchAll();
    }

    public function selectAnalysts(){
      $consulta = $this->db->ejecutarConsulta("SELECT id_an, analista from analista");
      return $consulta->fetchAll();
    }

    public function selectCustomers(){
      $consulta = $this->db->ejecutarConsulta("SELECT id_cliente, nombre_apellido from cliente");
      return $consulta->fetchAll();
    }

    public function selectUsers(){
      $consulta = $this->db->ejecutarConsulta("SELECT id, login from usuarios");
      return $consulta->fetchAll();
    }

    public function selectTprocess(){

      $consulta = $this->db->ejecutarConsulta("SELECT id_tp, tproceso from tipo_proceso");
      return $consulta->fetchAll();

    }

        public function seleccionarPaises(){

      $consulta = $this->db->ejecutarConsulta("SELECT * FROM pais");
      return $consulta->fetchAll();
    }

    public function cargarAreas($id){

      $consulta = $this->db->prepare('SELECT * FROM area where id_pais = :id');
      $consulta->setFetchMode(PDO::FETCH_ASSOC);
      $consulta->execute(array(':id' =>$id));
      $data = $consulta->fetchAll();
      echo json_encode($data);

    }

    public function listarRegistroIndividual($id){      

        $sql='SELECT r.id_rg, r.registro, r.documentacion, r.procedimiento, r.nivel_impacto, r.statuss, ar.nombre_area, r.fecha, u.login, t.tproceso, cl.nombre_apellido , an.analista

      from registro r

      inner join area ar on r.id_area = ar.id_area
      inner join usuarios u on r.id_usuario=u.id
      inner join tipo_proceso t on r.id_tp = t.id_tp
      inner join cliente cl on r.id_cliente = cl.id_cliente
      inner join analista an on r.id_an=an.id_an where r.id_rg=:id';
        $consulta= $this->db->ejecutarConsulta($sql, array(':id' =>$id));
        return $consulta->fetch();
    }




    public function crear($data){

      $datos=array(

        'registro' => $data['registro'],
        'documentacion' => $data['documentacion'],
        'procedimiento' => $data['procedimiento'],
        'nivel_impacto' => $data['nivel_impacto'],
        'statuss' => $data['statuss'],
        'id_area' => $data['id_area'],
        'id_usuario' => $data['id_usuario'],
        'id_tp' => $data['id_tp'],
        'id_cliente' => $data['id_cliente'],
        'id_dev' => $data['id_dev'],
        'id_ap' => $data['id_ap'],
        'id_an' => $data['id_an'],
        'fecha' => $data['fecha'],
        'fecha_ac' => $data['fecha_ac'],

        
        
        

        );

      $this->db->insertar('registro', $datos);
    }

   /* public function crear($data){

      $datos= array(

        'registro'      =>    $data['registro'],
        'documentacion' =>    $data['documentacion'],
        'procedimiento' =>    $data['procedimiento'],        
        'nivel_impacto' =>    $data['nivel_impacto'],
        'id_area'       =>    $data['area'],
        'statuss'       =>    $data['status'],
        'id_usuario'    =>    $data['usuario'],
        'id_tp'         =>    $data['tproceso'],
        'id_cliente'    =>    $data['cliente'],
        'id_an'         =>    $data['analista'],
        'id_ap'         =>    $data['aplicacion'],
        'id_dev'        =>    $data['desarrollador'],
        'fecha_creacion' =>   $data['fecha_creacion'],
        'fecha_modificacion'=>$data['fecha_modificacion']
       );
      $this->db->insertar('registro', $datos);
    }*/
    

        public function guardarEditar($data){
       
       $datos=array(

            'id_rg'   => $data['id_rg'],
            'registro'   => $data['registro'],
            'descripcion'   => $data['descripcion'],
            'id_pais'   => $data['id_pais'],
          
        );
         $this->db->actualizar('registro', $datos,"id_rg={$data['id_rg']}");
    }


     public function eliminar($idRegistro) {
        $sql = 'DELETE FROM area WHERE id_rg= :id';
        $consulta = $this->db->ejecutarConsulta($sql,array(':id' => $idRegistro));
    }

    public function buscar_cliente($nombre) {

       $consulta = $this->db->ejecutarConsulta("SELECT c.id_cliente, c.nombre_apellido, c.cedula, c.direccion, c.telefono, c.correo, ar.nombre_area, pa.nombre

from cliente c inner join area ar on c.id_area = ar.id_area
inner join pais pa on ar.id_pais = pa.id_pais where nombre_apellido like '%$nombre%' or cedula like '%$nombre%' or nombre_area like '%$nombre%'");
       $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $data = $consulta->fetchAll();
        return $data;
    }

    /*public function seleccionarMunicipios() {
        $consulta = $this->db->ejecutarConsulta('SELECT * FROM municipios');
        return  $consulta->fetchAll();      
         
    }    
    public function cargarParroquias($id){
        $consulta = $this->db->prepare('SELECT * FROM parroquias where idMunicipio = :id');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute(array(':id' => $id));
        $data = $consulta->fetchAll();
        return $data;
        //retorna el formato json
        
    }*/

   

}