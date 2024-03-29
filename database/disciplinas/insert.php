<?php

declare(strict_types=1);

$pdo = require('../connect.php');
$sql = 'insert into disciplinas (codigo, nome, professor_disciplina) values (?, ?, ?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_POST['cod']);
$prepare->bindParam(2, $_POST['nome']);
$prepare->bindParam(3, $_POST['professor']);
$prepare->execute();

echo $prepare->rowCount();