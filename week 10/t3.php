<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = $carName = $carModel= $caryear = $carEng= $carPrice = NULL;
$arr_of_adds = array();
if (isset($_REQUEST["id"])){
    $selected_car = $cars[$_REQUEST["id"]];
    $carName = $selected_car["maker"];
    $carModel = $selected_car["model"];
    $carYear = $selected_car["year"];
    $carEng = $selected_car["engine"];
    $carPrice = $selected_car["price"];
    
}
?>
<html>
<head>
<style>
select{
  width:200px;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
}
table tr td{
  padding:3px;
  
}
</style>
</head>
<form action="task9_3.php">
<select name="id" onchange="this.parentNode.submit()">
	<option value="-1">Select car</option>
<?php 
    foreach($cars as $car){
        echo "<option value = $car[id]>$car[maker]</option>";
    }
?>
</select>
</form>
<form action="task9_3.php">

<?php
    $adds = ["tax", "check", "investment"];
    
    echo "<table>
    <tr>
    <th>Maker:</th>
    <td><select name='maker' required>";
    foreach($cars as $car){
        if($carName === $car['maker']){
            echo "<option value = $car[maker] selected>$car[maker]</option>";
            
        }
        else{
            echo "<option value= $car[maker]>$car[maker]</option>";
        }
    }
    echo "
    </select></td>
</tr>
<tr>
    <th>Year:</th>
    <td><input type='text' name = 'year' value = $carYear></td>
</tr>
<tr>
    <th>Model:</th>
    <td><input type='text' name = 'model' value = $carModel></td>
</tr>
<tr>
    <th>Engine:</th>
    <td>";
    foreach($cars as $car){
        if($carEng === $car['engine']){
            echo "<input type='radio' name = 'engine' value = $car[engine] checked>$car[engine]";
            
        }
        else{
            echo "<input type='radio' name = 'engine' value = $car[engine]>$car[engine]";
        }
    }
    echo "</td>
</tr>
<tr>
    <th>Price:</th>
    <td><input type='text' name = 'price' value = $carPrice></td>
</tr>
<tr>
    <th>Additional:</th>
    <td>";
    for($i = 0; count($adds) > $i;$i++){
        if( in_array($selected_car["additional"][$i], $adds)){
            echo "<input type='checkbox' name = '$adds[$i]' value = 'yes' checked>$adds[$i]<br>";
        }
        else{
            echo "<input type='checkbox' name = '$adds[$i]' value = 'yes'>$adds[$i]<br>";
        }
    }
    echo "</td>
</tr>
</table>
        </table>";
?>
    <input type="submit"/>
</form>