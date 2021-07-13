<?php

try
{

  $pdo = new PDO('mysql:host=localhost;port=3306;dbname=gvidia', 'root', '',);
}

catch(PDOException $error)
{
    echo $error->getMessage();
}

?>
