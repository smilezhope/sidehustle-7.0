<?php
function check_vote()
{
$name = "chisom";
$age = 18;
$ward = 020;
if ($age<=17){
    echo "you're not eligible to vote";
}elseif ($ward !== 020){
    echo "This is not your ward, so you can not vote.";
}else{
    echo " you can vote";
}
}
 check_vote();
?>