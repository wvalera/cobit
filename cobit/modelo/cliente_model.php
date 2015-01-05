<?php


class Cliente_Model extends Modelo{

     function __construct() {
        parent::__construct();
    }


    public function listadoClientes(){

      $consulta = $this->db->ejecutarConsulta("SELECT c.id_cliente, c.nombre_apellido, c.cedula, c.direccion, c.telefono, c.correo, ar.nombre_area, pa.nombre

from cliente c inner join area ar on c.id_area = ar.id_area
inner join pais pa on ar.id_pais = pa.id_pais");

      return $consulta->fetchAll();
    }

    public function crear($data){

      $datos= array(
        'nombre_apellido' => $data['nombre_apellido'],
        'cedula' => $data['cedula'],
        'direccion' => $data['direccion'],
        'telefono' => $data['telefono'],
        'id_area' => $data['area'],
        'nacionalidad' => $data['nacionalidad'],
        'correo' => $data['correo']

       );
      $this->db->insertar('cliente', $datos);
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

    public function listarClienteIndividual($id) {
       $sql = 'SELECT c.id_cliente, c.nombre_apellido, c.cedula, c.direccion, c.telefono, c.correo, ar.id_area, ar.nombre_area, pa.id_pais, pa.nombre 

      from cliente c inner join area ar on c.id_area = ar.id_area
      inner join pais pa on ar.id_pais = pa.id_pais  WHERE c.id_cliente= :id';
      $consulta = $this->db->ejecutarConsulta($sql,array(':id' => $id)) ;
       return $consulta->fetch();
    }


        public function guardarEditar($data){
       
        $datos=array(
            
            'nombre_apellido'=> $data['nombre_apellido'],
            'cedula'         => $data['cedula'],
            'direccion'      => $data['direccion'],
            'telefono'       => $data['telefono'],
            'correo'       => $data['correo'],
            'id_area'    => $data['area']
        );
         $this->db->actualizar('cliente', $datos,"id={$data['id_cliente']}");
    }


    public function eliminar($id) {
        $sql = 'DELETE FROM cliente WHERE id_cliente= :id';
        $consulta = $this->db->ejecutarConsulta($sql,array(':id' => $id));
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