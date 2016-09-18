<?php

/* Clase Abstracta Figura Geometrica */
abstract class FiguraGeometrica {

	/* Atributos */
	protected $_color;
	protected $_perimetro;
	protected $_superficie;

	/* Constructor */
	function __construct() {
		
	}

	/* Metodo abstracto */
	abstract protected function CalcularDatos();

	/* Metodo abstracto */
	abstract public function Dibujar();

	/* Getter */
	public function GetColor() {
		return $this->_color;
	}

	/* Setter */
	public function SetColor($color) {
		$this->_color = $color;
	}

	/* Funcion Virtual */
	public function ToString(){	

	}
}


/* Clase rectangulo */
class Rectangulo extends FiguraGeometrica {

		/* atributos */
		private $_ladoUno;
		private $_ladoDos;

		/* Constructor */
		public function __construct($l1, $l2) {
			$this->_ladoUno = $l1;
			$this->_ladoDos = $l2;
			$this->CalcularDatos();
		}

		/* Calcular datos del objetos*/
		protected  function CalcularDatos() {
			$this->_superficie = $this->_ladoUno * $this->_ladoDos;
			$this->_perimetro = $this->_ladoUno * 2 +  $this->_ladoDos * 2;
		}

		/* Dibuja el objeto en cuestion */	
		public function Dibujar() {
			$l1 = $this->_ladoUno;
			$l2 = $this->_ladoDos;

			/* Color */
			echo "Color: ". $this->_color . "<br />";

			/* Dibujo el objeto */
			for ($i=0; $i < $l2; $i++) { 
				for ($c=0; $c < $l1; $c++) { 
					echo "* "; 
				}
				echo "<br>";
			}
			
		}

		/*  ?????  */
		public function ToString(){	
			echo "Superficie: " . $this->_superficie . "<br />";
			echo "Perimetro: " . $this->_perimetro . "<br />";
			echo "Base: " . $this->_ladoUno . "<br />";
			echo "Altura: " . $this->_ladoDos . "<br />";
			$this->Dibujar();
		}

}

?>
