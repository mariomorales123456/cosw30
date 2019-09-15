<?php

    $residency = $_POST['residency'];
    $units = $_POST['units'];
    $unitcost = $residency * $units;
    $services = $_POST['services'];
    $parking = $_POST['parking'];
    $total = ($residency * $units) + $services + $parking + 20;
    $scholarship = rand(0, $total);
    $nettotal = $total - $scholarship;
    
    
    echo("<p>Cost of Tuition: $units units x \$$residency = \$$unitcost</p>");
    echo("<p>Student Health Fee: \$20</p>");
    echo("<p>College Services Card: \$$services</p>");
    echo("<p>Parking Permit: \$$parking</p>");
    echo("<p>Total Registration Costs: \$$total</p>");
    echo("<p>Scholarship Award: \$$scholarship</p>");
    echo("<p>Total College Balance Due: \$$nettotal</p>");
    

?>