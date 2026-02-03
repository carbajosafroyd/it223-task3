<?php
include '../db_connect.php';
$sql = "SELECT DISTINCT department FROM employees ORDER BY department";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISTINCT() Function</title>
</head>

<body>
    <h2>DISTINCT Function</h2>
    <p>Unique values</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Department</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['department'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../index.php">Back</a></p>
</body>

</html>