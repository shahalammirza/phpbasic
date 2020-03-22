<?php
    function mul($a,$b,$c=25){
        $d=$a*$b*$c;
        return $d;
    }
    echo "the answer is:".mul(12,13)."<br>";
    $answer=mul(12,16);
    echo "the answer is:".$answer."<br>";
    echo "fainal answer is:".($answer+mul(12,13));
?>