<?php
include '../db_connect.php';
$sql = "SELECT first_name, salary, CASE WHEN salary > 70000 THEN 'Senior' WHEN salary > 55000 THEN 'Mid' ELSE 'Junior' END AS level FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASE Function</title>
</head>

<body>
    <h2>CASE Function</h2>
    <p>Multiple conditions</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Salary</th>
            <th>Level</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['first_name'] . "</td><td>$" . $row['salary'] . "</td><td>" . $row['level'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../index.php">Back</a></p>
</body>

</html>