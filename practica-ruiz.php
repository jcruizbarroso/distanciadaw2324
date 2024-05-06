<?php
/**
 * Script para el ejercicio 1.2.
 *
 * El script contiene funciones documentadas para el ejercicio.
 *
 * @package Ejercicio1.2
 * @version 1.0
 * @author Juan Carlos Ruiz Barroso
 * @copyright Copyright (c) 2024
 * @license MIT License
 */

/**
 * Calcula el 20% de la suma de dos números.
 *
 * La función toma dos números como entrada, los suma y luego calcula el 20% del resultado.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return float El 20% de la suma de los dos números.
 */
function calcularPorcentajeDeSuma($num1, $num2) {
// Sumar los dos números
$suma = $num1 + $num2;
    
// Se calcula el 50% de la suma
$porcentaje = $suma * 0.50;
    
return $porcentaje;
}

/**
 * Determina si la resta de dos números es par o impar.
 *
 * La función toma dos números como entrada, los resta y posteriormente devuelve si el resultado es par o impar.
 *
 * @param int $num1 El primer número.
 * @param int $num2 El segundo número.
 * @return string "par" si la resta es par, "impar" si la resta es impar.
 * @internal Esta función hace uso de  operaciones aritméticas para la determinación de la paridad de la resta.
 */
function determinarParidadDeResta($num1, $num2) {
// Restar los dos números
$resta = $num1 - $num2;
    
// Se determina si la resta es par o impar
if ($resta % 2 == 0) {
    	return "Par";
} else {
    	return "Impar";
}
}

?>
