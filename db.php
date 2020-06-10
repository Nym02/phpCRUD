<?php 
    $db = mysqli_connect("localhost", "root","", "phpcrud");

    if($db){

    } else{
        die("Connection Error". mysqli_error($db));
    }


?>