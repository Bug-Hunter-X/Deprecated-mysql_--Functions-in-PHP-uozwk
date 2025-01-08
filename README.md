# Deprecated mysql_* Functions in PHP

This repository demonstrates the problem of using deprecated `mysql_*` functions in PHP and provides a solution using MySQLi or PDO.

The `bug.php` file contains code that uses the deprecated `mysql_*` functions.  These functions are removed in PHP 7.0 and later, leading to errors and security vulnerabilities. 

The `bugSolution.php` file shows how to replace these deprecated functions with the recommended MySQLi or PDO extensions.

**Problem:**
Using `mysql_*` functions results in errors and vulnerabilities.

**Solution:**
Migrate to either MySQLi or PDO.  These extensions offer improved security and performance.

This example highlights the importance of keeping your PHP code up-to-date and using secure, supported extensions.