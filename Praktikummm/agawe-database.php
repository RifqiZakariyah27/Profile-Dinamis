<?php
    include "koneksi.php";

    $sql = "CREATE DATABASE profile";

    if($koneksi -> query($sql) === TRUE)
    {
        echo "Database saget dikanggo";
    }
    else
    {
        echo "Database mboten saget dikanggo";
    }
?>