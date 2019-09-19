<?php 


    $numParagraphs = $_POST['paragraphs'];
    
    $text = $_POST['text'];
    
    $textExplode = explode(' ', $text);
    
    shuffle($textExplode);
    
    $textImplode = implode(' ', $textExplode);
    
    print_r($textExplode);
    
    
    /*foreach($textExplode as $key => $word){
         echo "<p>$key Value: $word</p>";
    }*/
    

    /*$text = "Spicy jalapeno bacon ipsum dolor amet swine ham hock rump tenderloin ham boudin beef. 
             Doner strip steak cupim shoulder, capicola ground round andouille bresaola sirloin ham rump. 
             Kielbasa ball tip beef ribs buffalo pig burgdoggen flank sausage. 
             Tri-tip hamburger t-bone, drumstick jerky pancetta frankfurter andouille turkey capicola ham hock.";
    
    */
    for ($i = 1; $i <= $numParagraphs; $i++){
        echo "<p>$textImplode</p>";
    }
    
    

?>