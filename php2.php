<?php
    function square($num){
        $squareRootArray = array();
        for($i = 1; $i <= $num; $i++){
            $squareRootArray[$i] =  sqrt($i);
        }
        return $squareRootArray;
    }
    $squareRootArray = square(10);
    print_r ($squareRootArray);

?>