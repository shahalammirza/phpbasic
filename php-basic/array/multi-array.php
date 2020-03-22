<?php
$car = array(
    array("BMW", 20, 30),
    array("tyota", 20, 45),
    array("Audi", 25, 89),
    array("lambergini", 14, 17)
);
for($row=0; $row<4; $row++){
    echo "the row is $row";
    echo "<ul>";
    for($col=0; $col<3; $col++){
        echo "<li>".$car[$row][$col]."</li>";

    }
    echo"</ul>";
}

?>