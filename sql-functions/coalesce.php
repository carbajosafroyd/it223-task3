<?php
include '../db_connect.php';
$sql = "SELECT first_name, COALESCE(phone, email, 'No contact') AS contact FROM employees LIMIT 5";
$result = $conn->query($sql);
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COALESCE() Function</title>
</head>

<body>
    <h2>COALESCE() Function</h2>
    <p>First non-null value</p>
    <p><b>SQL Query:</b></p>
    <pre><?php echo $sql; ?></pre>
    <p><b>Results:</b></p>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Contact</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['first_name'] . "</td>
                    <td>" . $row['contact'] . "</td>
                </tr>";
        }
        $conn->close();
        ?>
    </table>
    <p><a href="../index.php">Back</a></p>
</body>

</html>