<?php
/**
 * Restaurant Management System
 * Main entry point
 */

session_start();

// Define base path
define('BASE_PATH', __DIR__);
define('CLASSES_PATH', BASE_PATH . '/classes');
define('CONFIG_PATH', BASE_PATH . '/config');

// Include configuration
require_once CONFIG_PATH . '/config.php';

// Include database connection
require_once CONFIG_PATH . '/database.php';

// Include autoloader
require_once BASE_PATH . '/autoloader.php';

// Simple router
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page) {
    case 'menu':
        require_once 'pages/menu.php';
        break;
    case 'orders':
        require_once 'pages/orders.php';
        break;
    case 'reservations':
        require_once 'pages/reservations.php';
        break;
    case 'admin':
        require_once 'pages/admin.php';
        break;
    default:
        require_once 'pages/home.php';
}
?>
