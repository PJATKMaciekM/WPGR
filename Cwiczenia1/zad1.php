<?php
    $owoce = array ("mango", "papaja", "banan", "aronia", "pomarańcza", "porzeczka");
    for($i = 5; $i >= 0; $i--) {
        echo $owoce[$i];
        echo "<br>";
        if($owoce[$i][0] == "p") {
            echo ("owoc zaczyna się od litery p");
        }
        echo "<br>";
    }
?>