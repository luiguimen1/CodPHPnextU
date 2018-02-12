<?php

class Datos {
    
    private $hostname = 'localhost';
    private $usuario = 'mirayapr_UserJca';
    private $clave = 'UserJca2017';
    private $db = 'mirayapr_Jcali';

    function getPre() {
        return $this->pre;
    }

    public function Datos() {
        
    }

    public function get_hostname() {
        return $this->hostname;
    }

    public function get_usuario() {
        return $this->usuario;
    }

    public function get_clave() {
        return $this->clave;
    }

    public function get_DB() {
        return $this->db;
    }

}
