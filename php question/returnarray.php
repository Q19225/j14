<?php 
$str = 'ABCD';
$strReversed = '';
$length = count($str);
for($i=$length-1; $i >= 0; $i--){
    $strReversed .= $str[$i];
}
echo $strReversed;
 ?>