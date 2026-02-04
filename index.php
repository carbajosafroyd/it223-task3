<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SQL Functions - Task 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
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
            <td><b>ASCII()</b></td>
            <td>Returns the ASCII value of the first character</td>
            <td class="code">SELECT first_name, ASCII(first_name) AS ascii_value FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/ascii.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CHAR_LENGTH()</b></td>
            <td>Returns the length of a string in characters</td>
            <td class="code">SELECT first_name, CHAR_LENGTH(first_name) AS char_length FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/char_length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CHARACTER_LENGTH()</b></td>
            <td>Returns the length of a string in characters</td>
            <td class="code">SELECT first_name, CHARACTER_LENGTH(first_name) AS character_length FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/character_length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONCAT()</b></td>
            <td>Combines strings together</td>
            <td class="code">SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/concat.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>CONCAT_WS()</b></td>
            <td>Concatenates strings with a separator</td>
            <td class="code">SELECT CONCAT_WS(', ', first_name, last_name, department) AS employee_info FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/concat_ws.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FIELD()</b></td>
            <td>Returns the index position of a value in a list</td>
            <td class="code">SELECT department, FIELD(department, 'IT', 'Sales', 'HR', 'Marketing') AS position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/field.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FIND_IN_SET()</b></td>
            <td>Returns position of a string in a comma-separated list</td>
            <td class="code">SELECT first_name, FIND_IN_SET('IT', 'Sales,IT,HR,Marketing') AS found_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/find_in_set.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>FORMAT()</b></td>
            <td>Formats a number with thousand separators</td>
            <td class="code">SELECT first_name, salary, FORMAT(salary, 2) AS formatted_salary FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/format.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>INSERT()</b></td>
            <td>Inserts a substring at a specified position</td>
            <td class="code">SELECT first_name, INSERT(first_name, 1, 0, 'Mr. ') AS modified_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/insert.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>INSTR()</b></td>
            <td>Returns the position of first occurrence of a substring</td>
            <td class="code">SELECT email, INSTR(email, '@') AS at_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/instr.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LCASE()</b></td>
            <td>Converts a string to lowercase</td>
            <td class="code">SELECT first_name, LCASE(first_name) AS lowercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/lcase.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LEFT()</b></td>
            <td>Extracts a number of characters from the left</td>
            <td class="code">SELECT first_name, LEFT(first_name, 3) AS first_three FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/left.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LENGTH()</b></td>
            <td>Returns string length</td>
            <td class="code">SELECT first_name, LENGTH(first_name) AS name_length FROM employees ORDER BY name_length DESC LIMIT 5;</td>
            <td><a href="sql-functions/string/length.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOCATE()</b></td>
            <td>Returns the position of a substring in a string</td>
            <td class="code">SELECT first_name, LOCATE('a', first_name) AS a_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/locate.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LOWER()</b></td>
            <td>Converts to lowercase</td>
            <td class="code">SELECT email, LOWER(email) AS lowercase_email FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/lower.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LPAD()</b></td>
            <td>Left-pads a string with another string to a certain length</td>
            <td class="code">SELECT first_name, LPAD(first_name, 10, '*') AS padded_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/lpad.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>LTRIM()</b></td>
            <td>Removes leading spaces from a string</td>
            <td class="code">SELECT LTRIM('   Hello World') AS trimmed_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/ltrim.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>MID()</b></td>
            <td>Extracts a substring from a string (starting at any position)</td>
            <td class="code">SELECT first_name, MID(first_name, 2, 3) AS middle_chars FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/mid.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>POSITION()</b></td>
            <td>Returns the position of a substring in a string</td>
            <td class="code">SELECT email, POSITION('@' IN email) AS at_position FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/position.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REPEAT()</b></td>
            <td>Repeats a string a specified number of times</td>
            <td class="code">SELECT first_name, REPEAT(first_name, 2) AS repeated_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/repeat.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REPLACE()</b></td>
            <td>Replaces text in string</td>
            <td class="code">SELECT email, REPLACE(email, '@company.com', '@newdomain.com') AS new_email FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/replace.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>REVERSE()</b></td>
            <td>Reverses a string</td>
            <td class="code">SELECT first_name, REVERSE(first_name) AS reversed_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/reverse.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RIGHT()</b></td>
            <td>Extracts a number of characters from the right</td>
            <td class="code">SELECT first_name, RIGHT(first_name, 3) AS last_three FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/right.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RPAD()</b></td>
            <td>Right-pads a string with another string to a certain length</td>
            <td class="code">SELECT first_name, RPAD(first_name, 10, '*') AS padded_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/rpad.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>RTRIM()</b></td>
            <td>Removes trailing spaces from a string</td>
            <td class="code">SELECT RTRIM('Hello World   ') AS trimmed_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/rtrim.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SPACE()</b></td>
            <td>Returns a string of specified number of spaces</td>
            <td class="code">SELECT CONCAT('Hello', SPACE(5), 'World') AS spaced_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/space.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>STRCMP()</b></td>
            <td>Compares two strings</td>
            <td class="code">SELECT first_name, last_name, STRCMP(first_name, last_name) AS comparison FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/strcmp.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTR()</b></td>
            <td>Extracts a substring from a string</td>
            <td class="code">SELECT email, SUBSTR(email, 1, 5) AS email_substr FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/substr.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTRING()</b></td>
            <td>Extracts part of string</td>
            <td class="code">SELECT email, SUBSTRING(email, 1, 5) AS email_prefix FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/substring.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>SUBSTRING_INDEX()</b></td>
            <td>Returns a substring before a specified number of delimiter occurs</td>
            <td class="code">SELECT email, SUBSTRING_INDEX(email, '@', 1) AS username FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/substring_index.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>TRIM()</b></td>
            <td>Removes leading and trailing spaces from a string</td>
            <td class="code">SELECT TRIM('   Hello World   ') AS trimmed_text FROM employees LIMIT 1;</td>
            <td><a href="sql-functions/string/trim.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>UCASE()</b></td>
            <td>Converts a string to uppercase</td>
            <td class="code">SELECT first_name, UCASE(first_name) AS uppercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/ucase.php">View Output</a></td>
        </tr>

        <tr>
            <td><b>UPPER()</b></td>
            <td>Converts to uppercase</td>
            <td class="code">SELECT first_name, UPPER(first_name) AS uppercase_name FROM employees LIMIT 5;</td>
            <td><a href="sql-functions/string/upper.php">View Output</a></td>
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
    <p>Total: 49 SQL Functions (33 String + 6 Numeric + 6 Date + 4 Advanced)</p>
</body>

</html>