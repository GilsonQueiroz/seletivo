<?php 

function formatSalary(float $baseSalary)
{

	return number_format($baseSalary, 2, ",", ".");

}

//uso: <ins>R$ {function="formatSalary($value.baseSalary)"}</ins>

 ?>