<?php
echo "<h2>5 × 5 Number Table</h2>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";

for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";
    
    for ($col = 1; $col <= 5; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>
