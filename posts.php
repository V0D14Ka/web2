<!DOCTYPE html>
<?php 
    $link = mysqli_connect("db","root","root","web2");
    $id = $_GET['id'];
    $sql = "select * from posts where id=$id";
    $res = mysqli_query($link, $sql);
    $rows = mysqli_fetch_array($res);
    $title = $rows['title'];
    $content = $rows['content'] 
?>
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
    <?php 
        echo "<h1> $title </h1>";
        echo "<p> $content </p>";
    ?>
</body>

</html>
