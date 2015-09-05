<?php
	abstract class Persona
	{
		private $_nom;
		private $_ape;
		private $_edad;
		private $_legajo;
		private $_doc;
		private $_nroDoc;
		private $_sexo

		public function __construct($nom, $ape, $edad, $legajo, $doc, $nroDoc, $sexo)
		{
			$this->_nom = $nom;
			$this->_ape = $ape
			$this->_edad = $edad;
			$this->_legajo = $legajo;
			$this->_doc = $doc;
			$this->_nroDoc = $nroDoc;
			$this->_sexo = $sexo;
		}

		public function ToString()
		{
			$cadena = "Nombre: ". $this->_nom .". Apellido: " . $this->_ape . ". Edad: " . $this->_edad . ". Legajo: " . $this->_legajo;
			return $cadena . ". Tipo Doc: " . $this->_doc . ". Nro: " . $this->_nroDoc . ". Sexo:" . $this->_sexo;
		} 
	}
?>