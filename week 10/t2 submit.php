<?php
    $maker = $_POST["maker"];
    $year = $_POST["year"];
    $model = $_POST["model"];
    $engine = $_POST["engine"];
    $price = $_POST["price"];
    $add1 = $_POST["add1"];
    $add2 = $_POST["add2"];
    $add3 = $_POST["add3"];
    if($add1 != "yes"){
        $add1 = "no";
    }
    else{
        $add1 = "yes";
    }
    if($add2 != "yes"){
        $add2 = "no";
    }
    else{
        $add2 = "yes";
    }
    if($add3 != "yes"){
        $add3 = "no";
    }
    else{
        $add3 = "yes";
    }
    $date = date("Y") - $year;
    echo "You added new item: <b>$maker $model</b><br>
    Produced in $year ($date years old) with $engine engine<br>
    Tax payed: <b>$add1</b><br>
    Technical check passed: <b>$add2</b><br>
    Doesn't require investment: <b>$add3</b><br>
    $$price";
?>