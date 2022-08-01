<?php
$name = !isset($_POST['name']) ? $_POST['name'] : null ;
$email = !isset($_POST['email']) ? $_POST['email'] : null ;
$tel = !isset($_POST['tel']) ? $_POST['tel'] : null ;

$new_str = ;
$filename = __DIR__ . '/file.txt';
 
$text = file_get_contents($filename);
file_put_contents($filename, $new_str . PHP_EOL . $text);

?>
<html>
<body>
ФИО: <?= $name ?> <br>
Почта: <?= $email ?> <br>
Номер: <?= $tel ?> 
</body>
</html>
