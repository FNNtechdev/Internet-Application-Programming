<?php
echo "<h2>Number Table (1–25)</h2>";

echo "<table border='1' cellpadding='10'>";

$num = 1;

for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 5; $col++) {
        echo "<td>$num</td>";
        $num++;
    }

    echo "</tr>";
}

echo "</table>";
?>
