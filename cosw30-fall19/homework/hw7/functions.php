<?php
    
    function calculateCostDay($watts, $hours){
       $yearlyCost = (($watts/1000)*0.15)*($hours);
       return ("<p>It would cost $$yearlyCost per day</p>");
    }
    function calculateCostMonth($watts, $hours){
       $yearlyCost = (($watts/1000)*0.15)*($hours * 30.4);
       return ("<p>It would cost $$yearlyCost per month</p>");
    }
    function calculateCostYear($watts, $hours){
       $yearlyCost = (($watts/1000)*0.15)*($hours * 365);
       return ("<p>It would cost $$yearlyCost per year</p>");
    }
    
    $wattsCurrent;
    $hoursCurrent;
    
    if($_POST['watts'] != 0){
        $wattsCurrent = $_POST['watts'];
        $hoursCurrent = $_POST['hours'];
    }
    else {
        $amps = $_POST['amps'];
        $volts = $_POST['volts'];
        $hoursCurrent = $_POST['hours'];
        $wattsCurrent = $amps * $volts;
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Homework 7</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <div>
        <h1>Calculating Appliance Cost</h1>
        <form action="functions.php" method="POST">
            <fieldset>
            <label for="amps">Amps: <input type="number" name="amps" value="0"></label><br>
            <label for="volts">Volts: <input type="number" name="volts" value="0"></label><br>
            <label for="watts">Watts: <input type="number" name="watts" value="0"></label><br>
            <label for="hours">Hours used per day: <input type="number" name="hours" value="0"></label><br>
            <label for="display">Display: </label>
            <select name="display">
                <option value="1">Cost Per Day</option>
                <option value="2">Cost Per Month</option>
                <option value="3">Cost Per Year</option>
            </select>
            <input type="submit" value="Calculate Cost">
            </fieldset>
        </form>
        </div>
        <p><strong>Result: </strong> 
<?php
    if($_POST['display'] == 1){
        echo calculateCostDay($wattsCurrent, $hoursCurrent);
    }
    else if ($_POST['display'] == 2){
        echo calculateCostMonth($wattsCurrent, $hoursCurrent);
    }
    elseif($_POST['display'] == 3) {
        echo calculateCostYear($wattsCurrent, $hoursCurrent);
    }
?>
    </p> 
    </body>
</html>