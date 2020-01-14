<?php
require __DIR__ . '/vendor/autoload.php';

if (!session_id()) {
    session_start();   
}

// Declare the class instance
$db = new Christhompsontldr\Sparrow();

$db->setDb([
    'type'     => 'mysqli',
    'hostname' => getenv('DB_HOSTNAME'),
    'database' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD')
]);

$db->from('registrations')->insert([
    'name'       => ((isset($_POST['name'])) ? $_POST['name'] : ''),
    'email'      => ((isset($_POST['email'])) ? $_POST['email'] : ''),
    'ip'         => ((isset($_SERVER['HTTP_X_REAL_IP'])) ? $_SERVER['HTTP_X_REAL_IP'] : ''),
    'created_at' => date('Y-m-d H:i:s'),
])->execute();

$_SESSION['registered'] = true;

header('Location: /');
exit;