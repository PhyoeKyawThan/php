<?php
//upper half-diamond
for($row = 0; $row < 10; $row++){
    echo "<div>";

    for($space = 0; $space < 10-$row; $space++){
        echo "<span class='space'></span>";
        
    }
    for($star = 0; $star < $row+1; $star++){
            echo "<span class='star'>*</span>";
    }
    
    echo "</div>";
}
//last half
for($row = 0; $row < 10; $row++){
    echo "<div>";

    for($space = 0; $space < $row+2; $space++){
        echo "<span class='space'></span>";
        
    }
    for($star = 1; $star < 10-$row; $star++){
            echo "<span class='star'>*</span>";
    }
    
    echo "</div>";
}

?>