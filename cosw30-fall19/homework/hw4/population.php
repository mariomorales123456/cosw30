<?php 
    $populousCities = array(
        "New York, New York" => 8622698,
        "Los Angeles, California" => 3999759,
        "Chicago, Illinois" => 2716450,
        "Houston, Texas" => 2312717,
        "Phoenix, Arizona" => 1626078,
        "Philadelphia, Pennsylvania" => 1580863,
        "San Antonio, Texas" => 1511946,
        "San Diego, California" => 1419516,
        "Dallas, Texas" => 1341075,
        "San Jose, California" => 1035317,
        "Austin, Texas" => 950715,
        "Jacksonville, Florida" => 892062,
        "San Francisco" => 884363,
        "Columbus" => 879170,
        "Fort Worth" => 874168
    );
    $rank = 1;
    
    echo("<p>By Population:</p>");
    echo("<table>");
        echo("<tr><th colspan=\"3\">The 15 Most Populous Cities as of July 1, 2017</th></tr>");
        echo("<tr><th>Rank</th><th>City, State</th><th>2017 total population</th></tr>");
        foreach ($populousCities as $city => $population){
            $formatPopulation = number_format($population);
            echo("<tr><td>$rank</td><td>$city</td><td>$formatPopulation</td></tr>");
            $rank++;
        }
    echo("</table>");
    
    ksort($populousCities);
    $rank = 1;
    
    echo("<p>By City:</p>");
    echo("<table>");
        echo("<tr><th colspan=\"3\">The 15 Most Populous Cities as of July 1, 2017</th></tr>");
        echo("<tr><th>Rank</th><th>City, State</th><th>2017 total population</th></tr>");
        foreach ($populousCities as $city => $population){
            $formatPopulation = number_format($population);
            echo("<tr><td>$rank</td><td>$city</td><td>$formatPopulation</td></tr>");
            $rank++;
        }
    echo("</table>");
?>