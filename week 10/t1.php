<?php
    $usernames = ["billgates","johndoe","stevejobs"];
    $name = $_POST["username"];
    $pass = $_POST["pass"];
    $conf_pass = $_POST["conf_pass"];
    if($name === ""){
        echo "<div class = error>Username shouldnt be empty</div>";
    }
    if(in_array($name, $usernames)){
        echo "<div class = error>Username $name is already reserved</div>";
    }
    if($pass === "" or $conf_pass === ""){
        echo "<div class = error>Password and Confirm password shouldn't be empty</div>";
    }
    if($pass != $conf_pass){
        echo "Password and Confirm Password doesn't equal each other";
    }
?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
</style></head>
<body>
<form action = "task9_1.php" method="post">
    <input type="text" name = "username"><br>
    <input type = "password" name = "pass"><br>
    <input type="password" name = "conf_pass"><br>
    <input type="submit"/>
</form>
</body>
</html>