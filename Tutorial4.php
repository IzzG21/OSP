<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial4</title>
</head>

<body>
<h1>Tutorial 4</h1>

<h3>Question 1</h3>
<?php
    //Integer
    $int = 35;

    //Float
    $float = 35.7;

    //String
    $string = "Open Source Programming";

    //Boolean
    $height = 100;

    //HTML table
    echo "<table border = '1' width = '400' cellspacing = '0'>";
        echo "<tr bgcolor = 'yellow'>";
            echo "<td>Integer</td>";
            echo "<td>Float</td>";
            echo "<td>String</td>";
            echo "<td>Boolean</td>";
        echo "<tr>";
        echo "<tr bgcolor = 'lightgray'>";
            echo "<td>$int</td>";
            echo "<td>$float</td>";
            echo "<td>$string</td>";
            if($height){
                echo "<td>$height. True, it is an integer.</td>";
            }
        echo "<tr>";
    echo "</table>";
?>

<br>
<h3>Question 2</h3>
<?php
    //Set values to variables
    $sales = 190000;
    $rent = 25000;
    $salary = 37500;
    $supplies = 410;
    $total = $rent + $salary + $supplies;   //Addition
    $operating_income = $sales - $total;    //Subtraction
    $net_income = $operating_income * 0.60; //Multiplication

    echo "<p align='center'> <font color=blue size='4pt'> Book Store Operating Cost </font> </p>";
    echo "Sales: $", $sales, "<br>";
    echo "<br>";
    echo "<div style='padding-left:50px;'> Expenses:</div>";
    echo "<div style='padding-left:150px;'> Rent: $", $rent, "</div>";
    echo "<div style='padding-left:150px;'> Salary: $", $salary, "</div>";
    echo "<div style='padding-left:150px;'> Supplies: $", $supplies, "</div>";
    echo "<br>";
    echo "<div style='padding-left:50px;'> Total: $", $total, "</div>";
    echo "<div style='padding-left:50px;'> Operating Income: $", $operating_income, "</div>";
    echo "<div style='padding-left:50px;'> Income after taxes(net): $", $net_income, "</div>";
?>

<br>
<h3>Question 3</h3>

<form method='POST'>
<h2>Please input your name:</h2>
<input type="text" name="name">
<input type="submit" value="Submit name">
</form>

<?php
    //Get name from query string and store to local variable
    $name=$_POST['name'];
    echo "Welcome, $name";
?>

</body>
</html>