
<?php

function fattorialeRic($num) {


    if ($num <= 0 || $num == 1) {

        return 1;

    }


    return $num * fattorialeRic($num -1);

}



echo fattorialeRic(7);


?>