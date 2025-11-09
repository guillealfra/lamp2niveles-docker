<?php
// Configuración de la conexión a la base de datos
define('DB_HOST', getenv('DB_HOST') ?: 'db');
define('DB_NAME', getenv('DB_NAME') ?: 'users');
define('DB_USER', getenv('DB_USER') ?: 'ejemplo_user');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'oracle');
define('DB_CHARSET', 'utf8mb4');

// Hacer la conexion
function getDBConnection() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        error_log("Error de conexión: " . $conn->connect_error);
        return false;
    }
    
    $conn->set_charset(DB_CHARSET);
    return $conn;
}
?>