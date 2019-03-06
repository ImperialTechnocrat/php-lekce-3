<?php
session_start();
if (isset($_SESSION['prihlasen']) && $_SESSION['prihlasen'] == true) {
    echo 'přihlášen';
} else {
    echo 'nepřihlášen';
}