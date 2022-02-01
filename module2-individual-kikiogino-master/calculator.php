
<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <link href="calculator.css" rel="stylesheet" type="text/css" >
        <title>Calculator</title>
        
    </head>
    <body>
        <div id = "box">
        <form name = "input" method = "GET">
        <input type = "text"  name = "numOne" id = "input"/>
        <br/>
        <input type = "text"  name = "numTwo" id = "input"/>
        <br/>
        <label for="add">+</label>
        <input type = "radio" name = "operation" value = "add">
        <label for="subtract">-</label>
        <input type = "radio" name = "operation" value = "subtract" />
        <label for="multiply">*</label>
        <input type = "radio" name = "operation" value = "multiply" />
        <label for="divide">÷</label>
        <input type = "radio" name = "operation" value = "divide" />
        <br/>
        <input type = "submit" value ="Calculate!" id = "calculate" />
</form>
</div>
    <?php
       $numOne = $_GET['numOne'];
       $numTwo = $_GET['numTwo'];
       

       if ($_GET['operation'] == add){
        $answer = $numOne + $numTwo;
        echo $answer;
       }
       else if ($_GET['operation'] == subtract){
        $answer = $numOne - $numTwo;
        echo $answer;
       }
       else if ($_GET['operation'] == multiply){
        $answer = $numOne * $numTwo;
        echo $answer;
    }
    else if ($_GET['operation'] == divide){
        if ($_GET['numTwo']==0){
            echo "cannot divide by 0";
        }      
        $answer = $numOne / $numTwo;
        echo $answer;
    }

    ?>
</body></html>


