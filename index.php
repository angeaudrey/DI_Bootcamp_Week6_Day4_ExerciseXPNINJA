<?php
function mergetab($x,$y){


$var=  array_merge($x,$y);

return $var;
}

    $tab = array(1, 2, 3, 4,5);
    $tab1 = array(2, 3, 4, 5, 6,7,8);

 print_r(mergetab($tab,$tab1));
    
?>
