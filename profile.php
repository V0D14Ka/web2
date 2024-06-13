<?php
if (!isset($_COOKIE['User'])) {
    header('Location: /');
}
?>
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
        <div class="row">
            <div class="col-3 bar-logo"></div>
            <div class="col-9 bar-text"> Привет <?php echo $_COOKIE['User'];?>! </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>My website. TY for donates! XD <br>
                    Кот в сапогах — произведение Шарля Перро, которое знакомо почти каждому на планете. В сказке идет
                    речь о незавидном наследстве, которое получил один из сыновей мельника. После смерти отец оставил
                    ему кота и немного монет. Да вот только кот оказался не так прост: попросил купить ему сапоги на
                    последние деньги юноши. После этого он сделал все, чтобы вывести своего хозяина в маркизы, а также
                    женить на королевской дочке. Сказка говорит о том, что иногда преданность друзей и смекалка дороже
                    золота.
                </h2>
            </div>
            <div class="col-4">
                <div class="row my-photo"></div>
                <div class="row title-photo">
                    <p> Это котик </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="button-js col-12">
                <button id="myButton">Click me PLS</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="profile.php" class="form-align" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form form-width" name="title" placeholder="Title" ><br>
                    <textarea name="content" class="form-width" cols="30" rows="10" placeholder="Content"></textarea><br>
                    <input type="file" class="form padding-bot-10" name="file" placeholder><br>
                    <button type="submit" class="btn_post" name="submit">Создать пост</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>

</html>

<?php
$link = mysqli_connect("db","root","root","web2");

if (isset($_POST["submit"])) {
    $title = $_POST["title"];
    $content = $_POST["content"];
    if (!$title || !$content) {
        die("Please enter correct data");
    } 
    
    $sql = "insert into posts (title, content) values ('$title','$content')";
    if(!mysqli_query($link, $sql)) {
        die("Unable to add post");
    }
    if(!empty($_FILES['file'])) {
        if (@$_FILES['file']['type'] == 'image/gif' || @$_FILES['file']['type'] == 'image/jpeg' || @$_FILES['file']['type'] == 'image/png' 
        || @$_FILES['file']['type'] == 'image/jpg' || @$_FILES['file']['type'] == 'image/x-png' && $_FILES['file']['size'] < 102400) {
            move_uploaded_file(@$_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
            echo 'Load in: uploads/' . $_FILES['file']['name'];
        } else {
            echo "Incorrect type or size";
        }
    } else {
        echo "Nothing to upload.";
    }
    
}




?>