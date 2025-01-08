This code uses the mysql_* functions which are deprecated and removed in PHP 7.0 and later.  Using them will lead to errors and security vulnerabilities.
```php
<?php
$conn = mysql_connect("localhost", "user", "password");
if (!$conn) {
die("Connection failed: " . mysql_error());
}
mysql_select_db("database", $conn);

$result = mysql_query("SELECT * FROM table");

while ($row = mysql_fetch_array($result)) {
  echo $row['column'] . "<br>";
}

mysql_close($conn);
?>
```