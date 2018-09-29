<?php
    include 'connect.php';
    
    $var1 = $_POST['source'];
    $query = "SELECT * FROM pms WHERE dt = 2016-05-20";

    $result = mysql_query($query);
    
    while($person = mysql_fetch_array($result)){
        echo $person['dt']."\t";
        echo $person['tm']."\t";
        echo $person['srlact']."\n";
        
    }
    
?>
