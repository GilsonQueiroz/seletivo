<?php 

function formatSalary($baseSalary)
{

	return number_format((float)$baseSalary, 2, ",", ".");

}

//uso: <ins>R$ {function="formatSalary($value.baseSalary)"}</ins>

 ?>