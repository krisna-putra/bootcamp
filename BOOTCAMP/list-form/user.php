<?php

if ($_REQUEST["REQUES_METHOD"]==["POST"]){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $comment = htmlspecialchars(trim($_POST['comment']));

    if (empty ($name) || empty ($email)){
        echo "Harap Diisi Sesuai Ketentuan";
        exit;
    }

    echo "<h1>form data lengkap</h1>";
    echo "<p><strong>Nama:</strong>$name</p>";
    echo "<p><strong>Email:</strong>$Email</p>";
    echo "<p><strong>Comment:</strong><br>" . nl2br($comment) . "</p>";
}else {
    echo "Data Tidak Lengkap";
}

?>