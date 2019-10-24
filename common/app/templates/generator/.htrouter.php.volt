if (!file_exists(__DIR__ . '/' . $_SERVER['REQUEST_URI'])) {
    $_GET['_url'] = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
}
return false;
