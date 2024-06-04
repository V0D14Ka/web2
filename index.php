<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Yashin V.S</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="col-12 index">
            <h1> Авторизируйтесь </h1>
            <?php
            if(!isset($_COOKIE['User'])) {
                ?>
                <a href='/registration.php'> Пожалуйста зарегистрируйтесь !</a> or <a href="/login.php"> Или авторизируйтесь</a>
                <?php 
            } else {
                //some code
            }
            ?>
        </div>
    </div>
</body>

</html>