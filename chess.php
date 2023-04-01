<?php
        for($row = 1; $row<=8; $row++){
            echo "<div class='row'>";
            for($col = 1; $col <= 8; $col++){
                $to_black = $row+$col;
                if($to_black%2==0){
                    echo "<div class='col' bgcolor='white'></div>";
                }
                else{
                    echo "<div class='col to-black'></div>";
                }
            }
            echo "</div>";
        }
    ?>