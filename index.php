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
            <h1> Страница постов </h1>
            <?php
            if(!isset($_COOKIE['User'])) {
                ?>
                <a href='/registration.php'> Пожалуйста зарегистрируйтесь</a> или <a href="/login.php"> авторизируйтесь. </a>
                <?php 
            } else {
                $link = mysqli_connect("127.0.0.1","root","root","web2");
                $sql = "select * from posts";
                $res = mysqli_query($link, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($post = mysqli_fetch_array($res)) {
                        echo "<a href='/posts.php?id=" . $post["id"] ."'>". $post["title"] . "</a><br>";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

</html>