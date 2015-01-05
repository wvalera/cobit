<?php


class Analista_Model extends Modelo{


function __construct() {
        parent::__construct();
    }


    public function listarAnalistas(){
    	//$consulta= $this->db->ejecutarConsulta("SELECT * FROM area");
        $sql='SELECT id_an ,analista, fecha_ingreso, correo, contacto, nombre_area FROM analista INNER JOIN area on area.id_area= analista.id_area';
        $consulta = $this->db->ejecutarConsulta($sql);
    	return $consulta->fetchAll();

    }

      public function seleccionarPaises(){
      $sqlPais= $this->db->ejecutarConsulta("SELECT * FROM pais");
      return $sqlPais->fetchAll();
    }

    public function listaranalistaIndividual($id){

        $sql='SELECT a.id_area, a.nombre_area, a.descripcion, p.id_pais, p.nombre, p.descripcion FROM area a INNER JOIN pais p ON a.id_pais = p.id_pais WHERE a.id_area=:id';
        $consulta= $this->db->ejecutarConsulta($sql, array(':id' =>$id));
        return $consulta->fetch();
    }

    public function crear($data){

    	$datos=array(

            'id_area' => $data['id_area'],
    		'nombre_area' => $data['nombre_area'],
    		'descripcion'=> $data['descripcion'],
            'id_pais'=> $data['id_pais'],

    		);

    	$this->db->insertar('area', $datos);
    }


    public function guardarEditar($data){
       
       $datos=array(

            'id_area'   => $data['id_area'],
            'nombre_area'   => $data['nombre_area'],
            'descripcion'   => $data['descripcion'],
            'id_pais'   => $data['id_pais'],
          
        );
         $this->db->actualizar('area', $datos,"id_area={$data['id_area']}");
    }

    public function eliminar($idArea) {
        $sql = 'DELETE FROM area WHERE id_area= :id';
        $consulta = $this->db->ejecutarConsulta($sql,array(':id' => $idArea));
    }

     public function buscar_area($nombre) {

       $consulta = $this->db->ejecutarConsulta("SELECT a.id_area, a.nombre_area, a.descripcion, p.id_pais, p.nombre, p.descripcion FROM area a INNER JOIN pais p ON a.id_pais = p.id_pais WHERE  nombre_area like '%$nombre%' or nombre like '%$nombre%'");
       $consulta->setFetchMode(PDO::FETCH_ASSOC);
       $data = $consulta->fetchAll();
        echo json_encode($data);
    }

}


?>