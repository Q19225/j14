<?php 
function primeCheck($num)
{
    
        for ($i = 2; $i <= $num/2; $i++)
        {
            if ($num % $i == 0)
            {
                return false;
            }
        }
    return true;
}

$primeNumber = primeCheck(5);

if ($primeNumber == true)
{
    echo " Is Prime";
}
else
{
    echo"Is Not Prime";
}
?>



 