<?php
include '../db_connect.php';
$sql = "SELECT CURDATE() AS `current_date`";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURDATE() Function</title>
</head>

<body>
    <h2>CURDATE() Function</h2>
    <p>Current date</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Current Date</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['current_date'] . "</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../index.php">Back</a></p>
</body>

</html>