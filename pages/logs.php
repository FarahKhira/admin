<?php
    $connection = mysqli_connect('localhost','root','');
    mysqli_select_db('fiber','$connection');
    $result1 = mysqli_query("SELECT * FROM logs ORDER by id DESC");

    while($extract = mysqli_fetch_array($result1)){
        echo $extract['username'] . ": " . $extract['msg'] . "<br>";
    }
?>