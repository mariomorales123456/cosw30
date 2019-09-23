<?php

    /*VARS*/
    
    $userSentence = $_POST['userText'];
    $wordArray = explode(' ', $userSentence);
    $wordCount = count($wordArray);
    
    /////////////////////////////////////////////
    
    /*SORT AND PRINT ARRAY*/
    
    echo("<p>Your list is $wordCount words</p>");
    
    echo("<p><strong>Your original list is:</strong></p>");
    for ($i = 0; $i < $wordCount; $i++){
        echo("<p>$wordArray[$i]</p>");
    }
    
    sort($wordArray);
    
    echo("<p><strong>An alphabetized version of your list is:</strong></p>");
    for ($i = 0; $i < $wordCount; $i++){
        echo("<p>$wordArray[$i]</p>");
    }
    
    rsort($wordArray);
    
    echo("<p><strong>A reverse alphabetized version of your list is:</strong></p>");
    for ($i = 0; $i < $wordCount; $i++){
        echo("<p>$wordArray[$i]</p>");
    }
    
    ////////////////////////////////////////////////////////
    
    /*PUSH*/
    
    echo("<p><strong>Adding 3 new words</strong></p>");
    
    array_push($wordArray, "three", "new", "words");
    
    $wordCount = count($wordArray);
    
    echo("<p>The list is $wordCount words</p>");
    
    foreach ($wordArray as $word){
        echo("$word ");
    }
    
    /*POP*/
    
    echo("<p><strong>Removing 3 words</strong></p>");
    
    array_splice($wordArray, 0, 3);
    
    $wordCount = count($wordArray);
    
    echo("<p>The list is $wordCount words</p>");
    
    foreach ($wordArray as $word){
        echo("$word ");
    }
    
    ///////////////////////////////////////////////
    
    echo("<p></p>");
    
    echo("<div><a href=\"quote.html\">Return to Word Generator</a></div>");
    
?>