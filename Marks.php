<?php
$students = [
    ["Name" => "Faith", "Marks" => 85],
    ["Name" => "John", "Marks" => 70],
    ["Name" => "Mary", "Marks" => 90],
    ["Name" => "David", "Marks" => 60]
];

echo "<h2>Student Marks</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Marks</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>".$student["Name"]."</td>";
    echo "<td>".$student["Marks"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>
