
<?php


class Tproceso_Model extends Modelo{

	function __construct() {
        parent::__construct();
    }


 public function listarTproceso(){
    	//$consulta= $this->db->ejecutarConsulta("SELECT * FROM area");
        $sql='SELECT * FROM tipo_proceso ';
        $consulta = $this->db->ejecutarConsulta($sql);
    	return $consulta->fetchAll();

    }

      public function seleccionarPaises(){
      $sqlPais= $this->db->ejecutarConsulta("SELECT * FROM pais");
      return $sqlPais->fetchAll();
    }

    public function listarTprocesoIndividual($id){


    	$consulta= $this->db->ejecutarConsulta('SELECT id_tp, tproceso, descripcion from tipo_proceso where id_tp='.$id);
        return $consulta->fetch();

        /*$sql='SELECT id_tp, tproceso, descripcion FROM tipo_proceso  WHERE id_tp=:id';
        $consulta= $this->db->ejecutarConsulta($sql, array(':id' =>$id));
        return $consulta->fetch();*/
    }

    public function crear($data){

    	$datos=array(

            //'id_area' => $data['id_area'],
    		'tproceso' => $data['tproceso'],
    		'descripcion'=> $data['descripcion'],

    		);

    	$this->db->insertar('tipo_proceso', $datos);
    }


    public function guardarEditar($data){       
       $datos=array(
       		  'id_tp'   => $data['id_tp'],
            'tproceso'   => $data['tproceso'],
            'descripcion'   => $data['descripcion'],
                     
        );
         $this->db->actualizar('tproceso', $datos,"id_tp={$data['id_tp']}");
    }

    public function eliminar($idTproceso) {
        $sql = 'DELETE FROM tipo_proceso WHERE id_tp= :id';
        $consulta = $this->db->ejecutarConsulta($sql,array(':id' => $idTproceso));
    }

     public function buscar_tproceso($nombre) {

       $consulta = $this->db->ejecutarConsulta("SELECT id_tp, tproceso, descripcion FROM tipo_proceso  WHERE  tproceso like '%$nombre%' or descripcion like '%$nombre%'");
       $consulta->setFetchMode(PDO::FETCH_ASSOC);
       $data = $consulta->fetchAll();
        echo json_encode($data);
    }

}