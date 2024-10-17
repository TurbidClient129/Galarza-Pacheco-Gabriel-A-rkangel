<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// Definir un arreglo de 5 empleados con su sueldo mensual
$employees = [
    ["name" => "Semen", "salary" => 3000],
    ["name" => "Anon", "salary" => 2500],
    ["name" => "Mahoraga", "salary" => 4000],
    ["name" => "Laios", "salary" => 3200],
    ["name" => "Alberto el hambriento", "salary" => 2800],
];


usort($employees, function($a, $b) {
    return $a['salary'] - $b['salary'];
});

echo "Empleados ordenados por sueldo:\n";echo "<P>";
foreach ($employees as $employee) {
    echo $employee['name'] . " - $" . $employee['salary'] . "\n";echo "<p>";
}

array_push($employees, ["name" => "Pepinillo", "salary" => 3500]);
array_push($employees, ["name" => "Gary", "salary" => 2700]);


usort($employees, function($a, $b) {
    return $a['salary'] - $b['salary'];
});


echo "<p>";;echo "\nEmpleados actualizados ordenados por sueldo:\n";echo "<p>";
foreach ($employees as $employee) {
    echo $employee['name'] . " - $" . $employee['salary'] . "\n";echo "<p>";
}
?>


</body>
</html>