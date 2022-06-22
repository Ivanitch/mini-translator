<?php
require_once __DIR__ . '/init.php';
/* @var string $path */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"><link rel="canonical" href="https://bootstrap5.ru/examples/sign-in" />
    <meta name="description" content="Мини-переводчик ученицы 9-го класса">
    <title>Английский язык</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://bootstrap5.ru/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="mask-icon" href="https://bootstrap5.ru/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://bootstrap5.ru/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet"></head>
<body class="text-center">
<!-- Прелоадер -->
<div id="preloader">
    <div class="preloader__image"></div>
</div>
<div id="wrapper">
    <div id="error" class="close"></div>
    <div id="success" class="close"></div>
    <form id="form-abb" method="get" action="<?= $path . '/handler.php' ?>">
        <input type="text" id="abb" class="form-control" placeholder="Введите аббревиатуру" name="abb" required>
        <button id="query_button" class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Показать</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>