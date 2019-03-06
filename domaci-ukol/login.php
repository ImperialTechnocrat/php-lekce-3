<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

    <form method="POST">
    Jméno: <input type="text"name="firstName"><br>
    Heslo: <input type="password"name="secret"><br>
    <input type="checkbox"name="optIn"> Souhlasím<br>
    <input type="submit"><br>
</form>
<?php
var_dump($_POST);
if ($_POST["firstName"] == "admin" And $_POST["secret"] == "top-secret") {
    session_start();
    $_SESSION['prihlasen'] = true;
    setcookie('user', $_POST["firstName"]);
    $_SESSION['data'] =  ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];
    echo ("OK");
    ?>
    <a class="nav-link" href="admin.php">Administrace <span class="sr-only">(current)</span></a>
<?php
}   else {
    echo ("gotohell.");
}
?>

</div>
</body>
</html>