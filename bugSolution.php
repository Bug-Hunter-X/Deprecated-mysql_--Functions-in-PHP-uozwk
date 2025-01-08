This updated code uses MySQLi, which is the recommended approach for interacting with MySQL databases in PHP.

```php
<?php
$conn = new mysqli("localhost", "user", "password", "database");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM table");
if ($result) {
  while ($row = $result->fetch_assoc()) {
    echo $row['column'] . "<br>";
  }
  $result->free_result();
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>
```
Alternatively, you can use PDO for database interaction, offering a more database-agnostic approach.