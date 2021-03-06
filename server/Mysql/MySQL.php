<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MySQLi
 *
 * @author Lic. Luis Eduardo Alvarez Meneses
 */
class MySQL {

    //put your code here
    private $mysqli;

    function __construct() {
        $this->conectar();
    }

    private function conectar() {
        $dato_conn = new Datos();
        $this->mysqli = new mysqli($dato_conn->get_hostname(), $dato_conn->get_usuario(), $dato_conn->get_clave(), $dato_conn->get_DB());
        if ($this->mysqli->connect_errno) {
            return "Falló la conexión a MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
          //  exit();
        } else {
            $this->mysqli->query("SET NAMES 'utf8'");
            return "OK";
        }
    }
    /**
     * Metodo que eraliza una consulta de tipo select
     * @param type $SQL_Select
     * @return array
     */
    public function query($sql) {
        $data = array();
        if (!$resultado = $this->mysqli->query($sql)) {
            return -1;
        }
        $incremento=0;
        while ($fila = $resultado->fetch_assoc()) {
            $data[$incremento] = $fila;
            $incremento++;
        }
        $resultado->free();
        $this->mysqli->close();
        return $data;
    }
    
    public function execute_query($sql){
        $dato = $this->mysqli->query($sql);
        $this->mysqli->close();
        return $dato;
    }
    
    function getMysqli() {
        return $this->mysqli;
    }
}
