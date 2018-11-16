<html>
<head>
<style>
select{
  width:100%;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr th{
  padding:3px;
  
}
</style>
</head>
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
?>
<form action="task9_2_submit.php" method = "post">
    <table>
        <tr>
            <th>Maker:</th>
            <td><select name="maker" required>
                <option value="Toyota">Toyota</option>
                <option value="Mercedec">Mercedec</option>
                <option value="BMW">BMW</option>
            </select></td>
        </tr>
        <tr>
            <th>Year:</th>
            <td><input type="text" name = "year" required></td>
        </tr>
        <tr>
            <th>Model:</th>
            <td><input type="text" name = "model" required></td>
        </tr>
        <tr>
            <th>Engine:</th>
            <td><input type="radio" name = "engine" value = "Petroleum" checked>Petroleum
            <input type="radio" name = "engine" value = "Gas">Gas
            <input type="radio" name = "engine" value = "Diesel">Diesel</td>
        </tr>
        <tr>
            <th>Price:</th>
            <td><input type="text" name = "price" required></td>
        </tr>
        <tr>
            <th>Additional:</th>
            <td><input type="checkbox" name = "add1" value = "yes">tax payed<br>
            <input type="checkbox" name = "add2" value = "yes">technical check passed<br>
            <input type="checkbox" name = "add3" value = "yes">doesn't require investment</td>
        </tr>
    </table>
    <input type="submit"/>
</form>