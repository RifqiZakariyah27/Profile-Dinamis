<?php
    include "koneksi.php";

    $sql = "INSERT INTO user
    (
        id,
        nama,
        role,
        availability,
        age,
        location,
        years_experience,
        email
    )
    VALUE
    (
        '1',
        'Arkademy',
        'Front End',
        'Full Time',
        '16',
        'Malang',
        '1',
        'rifqi.zakariyah27@gmail.com'
    )";

    if($koneksi -> query($sql) == TRUE)
    {
        echo "Insert Done!";
    }
    else
    {
        echo "Insert Fails!";
    }
    
?>