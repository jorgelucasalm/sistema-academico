<?php

declare(strict_types=1);

$pdo = require('../connect.php');
$sql = 'insert into professores (codigo, nome, cpf, dt_nascimento) values (?, ?, ?, ?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_POST['cod']);
$prepare->bindParam(2, $_POST['nome']);
$prepare->bindParam(3, $_POST['cpf']);
$prepare->bindParam(4, $_POST['date']);
$prepare->execute();