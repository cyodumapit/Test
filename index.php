<?php
echo 'Hello World, I am Dumapit';
$var1 = 10;
$var2 = 10;
$var3 = 10;
$sum = $var1 + $var2 + $var3;

echo '<br>';
echo '<p class="text1"> The sum of '.$var1.' and '.$var2.' and '.$var3.' is'.$sum;

if($sum < 10){
    echo 'The echo is less than 10';
}

else{
    echo 'The echo is less than 10';
}

for($i = 0; $i <= $sum; $i++){
    echo '<br>'.$i;
}

?>