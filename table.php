<?php
// Sample data
$students = [
    ["Name" => "John", "Course" => "Computer Science", "Grade" => "A"],
    ["Name" => "Mary", "Course" => "Information Technology", "Grade" => "B"],
    ["Name" => "David", "Course" => "Software Engineering", "Grade" => "A"],
    ["Name" => "Grace", "Course" => "Data Science", "Grade" => "C"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Information Table</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Course</th>
        <th>Grade</th>
    </tr>

    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student["Name"] . "</td>";
        echo "<td>" . $student["Course"] . "</td>";
        echo "<td>" . $student["Grade"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
