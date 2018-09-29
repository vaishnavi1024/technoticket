<?php
    include 'connection.php';

    $fname = $_POST['inputfname'];
    $lname = $_POST['inputlname'];
    
    if(!$_POST['submit'])
    {
        echo "please fill out the form";
        header('Location: index.php');
    }else{
        mysql_query("INSERT INTO people (`id`,`fname`,`lname`)
                     VALUES (NULL,'$fname','$lname')") or die(mysql_error());
        echo "User has been created !";
        header('Location : index.php');
    }
    
?>