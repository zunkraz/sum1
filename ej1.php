<?php
//1. Calcular el sueldo total de un trabajador basado en las horas trabajadas y el sueldo por hora, incluyendo bonificaciones y descuentos.

$hoursWorked = readline("Please tell me how much hours did you work per day \n \n");
$monthlyPayment = readline("Please tell me how much do you gain like stable quantity \n \n");
$minimunHours = 40;
$resultGet = $hoursWorked * $monthlyPayment / $minimunHours;
$taxes = $resultGet * 0.16;
$salary = $resultGet - $taxes;
echo "your salary minus taxes is: $salary";