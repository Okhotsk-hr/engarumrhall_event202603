<?php
session_start();
echo "a";

if (isset($_POST['windowSize'])) {
    $_SESSION['windowSize'] = $_POST['windowSize'];
    echo "b";
    echo $_SESSION['windowSize'];
}
