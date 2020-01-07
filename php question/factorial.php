<?php 
function Factorial_Function($number) {
$input = $number;
$fact=1;
//iterating using for loop
for($i=$input; $i>=1;$i--) {
$fact = $fact * $i;
}
return $fact;
}
//calling the factorial function
$result = Factorial_Function(9);
echo 'Factorial of the number 9  is '.$result;
?>
