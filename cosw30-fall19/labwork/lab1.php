<!DOCTYPE html>
<?php 
/*
Mario Morales
Lab 1 PHP 
8/28/19
*/
?>
<html>
    <head>
        <title>My First PHP Page</title>
        <style>
            body {
                background-color: teal;
                color: white;
            }
            h1 {
                font-style: italic;
            }
            
        </style>
    </head>
    <body>
        <h1>Mario Morales</h1>
        <p>I've been in the computer science and web dev field for a year now. I have previously
            gone to school for a bachelor's in animal health sciences, basically veterinary
            nurse. I did that for 3 years but chose to change fields. This is one of my last classes to 
            graduate with an AS degree.
        </p>
        <h2>Few of my hobbies:</h2>
        <ul>
            <li>Gaming</li>
            <li>Spending time with family</li>
            <li>Spending time with friends</li>
        </ul>
        <p>
        <a href="https://github.com/mariomorales123456/cosw30">My GitHub!</a>
        </p>
        <?php
            echo '<p>I spend a lot of time on <a href="www.reddit.com">Reddit</a> main page
            because it is my main source of major news. Im also a TCG nerd so I look at
            <a href="www.mtgstocks.com">MTGstocks</a> a website that lists changes in card 
            prices. </p>
            <p>This assignment was really difficult just because there was so many different
            steps in setting up three different accounts. However the actual coding part
            is not too bad.</p>
            ';
        ?>
    </body>
</html>


