<?php /* db.php */
// Update host if your database is remote. Default: localhost
define('DB_HOST','localhost');
define('DB_NAME','dbnxk0gnshlclx');
define('DB_USER','up0ghncfmfakv');
define('DB_PASS','vznwqmh2glra');

// Try PDO connection (MySQL). If you use PostgreSQL, replace DSN accordingly.
try{
  $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
  $pdo = new PDO($dsn, DB_USER, DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]);
} catch (Exception $e){
  // Very simple error message — change for production
  die('Database connection failed: ' . $e->getMessage());
}
