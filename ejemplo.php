<?php
/**
* ejemplo.php 
*
* Este archivo contiene una función para multiplicar 3 números y una clase que hará uso
* de dicha función.
*
*/

/**
* multiplicarTresNumeros
*
* Función que multiplica tres números
*
* @param $v1 Primer número que se usará en la multiplicación.
* @param $v2 Segundo número que se empleará en la multiplicación.
* @param $v3 Tercer número que se utilizará en la multiplicación.
* @return resultado de la multiplicación.
*/
function multiplicarTresNumeros ($v1, $v2, $v3)
{
	return $v1*$v2*$v3;
}

/**
* Clase Ejemplo
*
* Clase que se empleará para realizar la multiplicación de los tres 
* atributos o propiedades de la clase haciendo uso de la función 
* multiplicarTresNumeros
*
* @author Benjamín Serrano Gómez-Landero
*/
class Ejemplo {

	var $a;
	var $b;	
  var $c;
	function multiplicar ()
	{
		return multiplicarTresNumeros($this->a, $this->b, $this->c);
	}
}

