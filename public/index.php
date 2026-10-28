<?php
declare(strict_types=1);
require_once __DIR__ . '/../app/includes/functions.php';
$routes = [
  '/' => 'home.php',
  '/about' => 'about.php',
  '/publications' => 'publications.php',
  '/research' => 'research.php',
  '/contact' => 'contact.php',
];
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rtrim($path, '/') ?: '/';
if (isset($routes[$path])) {
  $view = $routes[$path];
  http_response_code(200);
} else {
  $view = '404.php';
  http_response_code(404);
}
require __DIR__ . '/../app/includes/header.php';
require __DIR__ . '/../app/views/' . $view;
require __DIR__ . '/../app/includes/footer.php';
