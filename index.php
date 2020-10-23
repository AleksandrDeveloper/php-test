<?php  

    $db = mysqli_connect('127.0.0.1','root','root','my_db');
    if(!$db) die (mysqli_connect_error());

    mysqli_set_charset($db,'utf8') or die(mysqli_connect_error());
    $insert = "SELECT name, text, data FROM user ORDER BY ID DESC ";
    $data = mysqli_fetch_all(mysqli_query($db,$insert),MYSQLI_ASSOC);

    foreach ($data as $value) {
        print_r("Nmae: {$value['name']} <br>");
        print_r("Text: {$value['text']} <br>");
        print_r("Data: {$value['data']} <br>");
        echo('<hr>');
    };
?>