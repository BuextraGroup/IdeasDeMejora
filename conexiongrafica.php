<?php
    class conexion{
        private $servidor;
        private $usuario;
        private $contrasena;
        private $basedatos;
        public function __construct(){
            $this->servidor = "localhost";
            $this->usuario = "buextrag_adminbd";
            $this->contrasena = "Adminbbdd9826#";
            $this->basedatos = "buextrag_mejoras";
        }
        function conectar(){
            $this->conexion = new mysqli($this->servidor,$this->usuario, $this->contrasena, $this->basedatos);
            $this->conexion->set_charset("utf8");
        }
        function cerrar(){
            $this->conexion->close();
        }          
    }
?>