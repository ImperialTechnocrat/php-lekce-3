
<?php
session_start();
if (isset($_SESSION['prihlasen']) && $_SESSION['prihlasen'] == true) {
    echo 'Vitej ';
    if (isset($_COOKIE['user'])) {
        echo $_COOKIE['user'];


        foreach ($_SESSION['data'] as $key => $value) {
            echo $key;
            echo " $value:";
        }

    }
    ?>
    <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
    <?php
} else {
    echo 'pristup zamitnut';
}

?>
