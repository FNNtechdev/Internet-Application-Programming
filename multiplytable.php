<?php
echo "<h2>Multiplication Table</h2>";
echo "<table border='1' cellpadding='8'>";

for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    
    for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
