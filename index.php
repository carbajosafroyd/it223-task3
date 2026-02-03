<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SQL Functions - Task 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #e7e7e7 !important;            
        }

        .code {
            font-family: Courier;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <h1>IT223 - Task 3</h1>
    <p>FROYD D. CARBAJOSA (BSIT - 2C)</p>

    <table class="table">
        <tr>
            <th>SQL Function</th>
            <th>Description</th>
            <th>Example Code</th>
            <th>Example Output</th>
        </tr>

        <tr>
            <td colspan="4"><b>1. STRING FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>CONCAT()</b></td>
            <td>Combines strings together</td>
            <td class="code">SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/concat.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>UPPER()</b></td>
            <td>Converts to uppercase</td>
            <td class="code">SELECT first_name, UPPER(first_name) AS uppercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/upper.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOWER()</b></td>
            <td>Converts to lowercase</td>
            <td class="code">SELECT email, LOWER(email) AS lowercase_email FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/lower.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LENGTH()</b></td>
            <td>Returns string length</td>
            <td class="code">SELECT first_name, LENGTH(first_name) AS name_length FROM employees ORDER BY name_length DESC LIMIT 5;</td>
            <td><a href="sql-functions/length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTRING()</b></td>
            <td>Extracts part of string</td>
            <td class="code">SELECT email, SUBSTRING(email, 1, 5) AS email_prefix FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/substring.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REPLACE()</b></td>
            <td>Replaces text in string</td>
            <td class="code">SELECT email, REPLACE(email, '@company.com', '@newdomain.com') AS new_email FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/replace.php">View Output</a></td>
        </tr>

        <tr>
            <td colspan="4"><b>2. NUMERIC FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>AVG()</b></td>
            <td>Calculates average</td>
            <td class="code">SELECT department, AVG(salary) AS avg_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/avg.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUM()</b></td>
            <td>Adds up values</td>
            <td class="code">SELECT department, SUM(salary) AS total_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/sum.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>COUNT()</b></td>
            <td>Counts rows</td>
            <td class="code">SELECT department, COUNT(*) AS employee_count FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/count.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MAX()</b></td>
            <td>Finds maximum value</td>
            <td class="code">SELECT department, MAX(salary) AS max_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/max.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MIN()</b></td>
            <td>Finds minimum value</td>
            <td class="code">SELECT department, MIN(salary) AS min_salary FROM employees GROUP BY department;</td>
            <td><a href="sql-functions/min.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>ROUND()</b></td>
            <td>Rounds numbers</td>
            <td class="code">SELECT first_name, salary, ROUND(salary, 0) AS rounded_salary FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/round.php">View Output</a></td>
        </tr>

        <tr>
            <td colspan="4"><b>3. DATE FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>NOW()</b></td>
            <td>Gets current date and time</td>
            <td class="code">SELECT NOW() AS current_datetime;</td>
            <td><a href="sql-functions/now.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CURDATE()</b></td>
            <td>Gets current date</td>
            <td class="code">SELECT CURDATE() AS current_date;</td>
            <td><a href="sql-functions/curdate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>YEAR()</b></td>
            <td>Gets year from date</td>
            <td class="code">SELECT first_name, hire_date, YEAR(hire_date) AS hire_year FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/year.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MONTH()</b></td>
            <td>Gets month from date</td>
            <td class="code">SELECT first_name, birth_date, MONTH(birth_date) AS birth_month FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/month.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATEDIFF()</b></td>
            <td>Days between dates</td>
            <td class="code">SELECT first_name, hire_date, DATEDIFF(CURDATE(), hire_date) AS days_employed FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/datediff.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DATE_FORMAT()</b></td>
            <td>Formats date display</td>
            <td class="code">SELECT first_name, hire_date, DATE_FORMAT(hire_date, '%M %d, %Y') AS formatted_date FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/date_format.php">View Output</a></td>
        </tr>

        <tr>
            <td colspan="4"><b>4. ADVANCED FUNCTIONS</b></td>
        </tr>

        <tr>
            <td><b>IF()</b></td>
            <td>Returns value based on condition</td>
            <td class="code">SELECT first_name, salary, IF(salary > 60000, 'High', 'Low') AS salary_level FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/if.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CASE</b></td>
            <td>Multiple condition checking</td>
            <td class="code">SELECT first_name, salary, CASE WHEN salary > 70000 THEN 'Senior' WHEN salary > 55000 THEN 'Mid-Level' ELSE 'Junior' END AS position_level FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/case.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>COALESCE()</b></td>
            <td>Returns first non-null value</td>
            <td class="code">SELECT first_name, COALESCE(phone, email, 'No contact') AS contact_info FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/coalesce.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>DISTINCT</b></td>
            <td>Shows unique values only</td>
            <td class="code">SELECT DISTINCT department FROM employees ORDER BY department;</td>
            <td><a href="sql-functions/distinct.php">View Output</a></td>
        </tr>
    </table>

    <hr>
    <p>Total: 22 SQL Functions</p>
</body>

</html>