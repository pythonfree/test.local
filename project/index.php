<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Интернет-магазин</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <div class="logo">Интернет-магазин</div>
    <button class="btn-cart" type="button">Корзина</button>
</header>
<main>
    <div class="products"></div>
</main>
<script src="./js/main.js?<?= rand(0, PHP_INT_MAX); ?>"></script>
</body>
</html>
