<?php
    include 'connection.php';
    
    $var1 = $_POST['source'];
    $query = "SELECT * FROM technodata WHERE que_id = ".$var1;

    $result = mysql_query($query);
    
    while($person = mysql_fetch_array($result)){
        echo $person['question'];
        echo $person['answer'];
        
    }
    
?>

