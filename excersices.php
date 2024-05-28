<?php
// Ejercicio 1: Declaración de Variables y Operaciones Básicas
// Enunciado:
// Escribe un script en PHP que declare dos variables con números enteros, sume sus valores, y muestre el resultado en la consola.

$numero1 = 10;
$numero2 = 20;
$suma = $numero1 + $numero2;
echo "La suma de $numero1 y $numero2 es: $suma\n";

// Ejercicio 2: Condicionales
// Enunciado:
// Escribe un script en PHP que declare una variable con un número entero y determine si el número es par o impar. Muestra el resultado en la consola.

$numero = 15;
if ($numero % 2 == 0) {
    echo "$numero es un número par.\n";
} else {
    echo "$numero es un número impar.\n";
}

// Ejercicio 3: Uso de Funciones Predeterminadas
// Enunciado:
// Escribe un script en PHP que lea una cadena de texto y la convierta a mayúsculas usando una función predeterminada de PHP. Muestra la cadena convertida en la consola.

$cadena = "hola mundo";
$cadena_mayusculas = strtoupper($cadena);
echo "La cadena en mayúsculas es: $cadena_mayusculas\n";

// Ejercicio 4: Lectura de Datos desde la Consola
// Enunciado:
// Escribe un script en PHP que lea un número desde la consola, calcule su cuadrado y muestre el resultado en la consola.

echo "Introduce un número: ";
$numero = trim(fgets(STDIN));
$cuadrado = $numero * $numero;
echo "El cuadrado de $numero es: $cuadrado\n";

// Ejercicio 5: Escritura de Datos y Almacenamiento en Variables
// Enunciado:
// Escribe un script en PHP que solicite al usuario que ingrese su nombre y edad. Luego, muestra un mensaje que incluya esta información en la consola.

echo "Introduce tu nombre: ";
$nombre = trim(fgets(STDIN));
echo "Introduce tu edad";
$edad = trim(fgets(STDIN));

echo "Tu nombre es: $nombre y tu edad es $edad \n";

// Ejercicio 6: Calculadora Simple
// Enunciado:
// Escribe un script en PHP que actúe como una calculadora simple. El usuario debe poder ingresar dos números y seleccionar una operación (suma, resta, multiplicación, división). Luego, el script debe realizar la operación seleccionada y mostrar el resultado.

echo "Introduce un número";
$number1 = trim(fgets(STDIN));

echo "Introduce otro número";
$number2 = trim(fgets(STDIN));

echo "Selecciona una opcion arimetica (+,-,*,/)";
$operation = trim(fgets(STDIN));

switch ($operation) {
    case '+':
        $result = $number1 + $number2;
        break;
    case "-":
        $result = $number1 - $number2;
        break;
    case "*":
        $result = $number1 * $number2;
        break;
        case "/":
            if($number2 == 0) {
                $result = $number1 / $number2;
            } else {
                echo "la división entre cero no es permitida";
                exit;
            };
    default:
        echo "Opción seleccionada no válida";
        break;
}
echo "El resultado de la operación es $result \n";

// Ejercicio 7: Gestor de Tareas
// Enunciado:
// Crea un script en PHP que permita al usuario gestionar una lista de tareas. El usuario debe poder agregar tareas, ver todas las tareas y eliminar una tarea específica. Usa un array para almacenar las tareas.
$tasks = [];

while(true) {
    echo "Selecciona una opción:\n";
    echo "1. Agregar tarea\n";
    echo "2. Ver todas las tareas\n";
    echo "3. Eliminar tarea\n";
    echo "4. Salir\n";
    $option = trim(fgets(STDIN));

    switch ($option) {
        case '1':
            echo "Introduce la tarea que deseas agregar";
            $task = trim(fgets(STDIN));
            $tasks[] = $task;
            echo "Tarea agreagada correctamente";
            break;
        case '2':
            echo "Lista de tareas \n";
            foreach($tasks as $index => $task){
                echo ($index + 1) . ". $tarea \n";
            }
            break;
        case '3': 
            echo "Introduce el indice de la tarea que deseas eliminar";
            $number = trim(fgets(STDIN)) -1;
            if (isset($tasks[$number])) {
                unset($task[$number]);
                $taks = array_values($taks);
                echo "Tarea eliminada \n";
            }else {
                echo "La tarea no existe en la lista \n";
            }
        case '4':
            exit("Saliendo del gestor de tareas. \n");
        default:
            echo "Opción no válida";
            break;
    }
}

// Ejercicio 4: Conversor de Monedas
// Enunciado:
// Escribe un script en PHP que convierta una cantidad de dinero de una moneda a otra. El usuario debe poder ingresar la cantidad y seleccionar la moneda de origen y la moneda de destino. Usa tasas de cambio fijas para la conversión.

$tasasDeCambio = [
    'USD' => ['EUR' => 0.85, 'GBP' => 0.75],
    'EUR' => ['USD' => 1.18, 'GBP' => 0.88],
    'GBP' => ['USD' => 1.34, 'EUR' => 1.14],
];

echo "Introduce la cantidad a cambiar";
$cantidad = trim(fgets(STDIN));

echo "Introduce la moneda de origen -> USD, EUR, GBP";
$monedaOrigen = trim(fgets(STDIN));

echo "Introduce la moneda de destino -> USD, EUR, GBP";
$monedaDestino = trim(fgets(STDIN));


if (!isset($tasasDeCambio[$monedaOrigen]) || !isset($tasasDeCambio[$monedaOrigen][$monedaDestino])) {
    echo "Error: Conversión de moneda no soportada.\n";
    exit;
} 

   $conversor = $tasasDeCambio($monedaOrigen)($monedaDestino);
   $result = $conversor * $cantidad;

   echo $cantidad . " " . $monedaOrigen . " equivalen a $result". " " . $monedaDestino;


// Ejercicio 8: Cálculo de Estadísticas de una Lista de Números
// Enunciado:
// Escribe un script en PHP que permita al usuario ingresar una lista de números (separados por comas). El script debe calcular y mostrar la suma, el promedio, el valor mínimo y el valor máximo de la lista.

echo "Introduce una lista de números separados por comas: ";
$input = trim(fgets(STDIN));

$numeros = array_map('floatval', explode(',', $input));

$suma = array_sum($numeros);
$promedio = $suma / count($numeros);
$min = min($numeros);
$max = max($numeros);

echo "Suma: $suma\n";
echo "Promedio: $promedio\n";
echo "Mínimo: $min\n";
echo "Máximo: $max\n";
?>
