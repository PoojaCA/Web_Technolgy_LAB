<?php
$allTheStates="Mississipi Alabama Texas Kansas Massachusetts";
$statesArray=[];
$states1=explode(' ',$allTheStates);
$i=0;

foreach($states1 as $state)
{
if(preg_match('/xas$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
print"<br> The sates that ends in xas:\n".$state;
}
}

foreach($states1 as $state)
{
if(preg_match('/^k.*s$/i',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "<br> The sates that starts in k and ends in s:\n".$state; 
}
}

foreach($states1 as $state)
{
if(preg_match('/^M.*s$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
print"<br> The sates that starts with M and ends with S:\n".$state;
}
}

foreach($states1 as $state)
{
if(preg_match('/a$/',($state)))
{
$statesArray[$i]=($state);
$i=$i+1;
echo "<br> The sates that ends in a:\n".$state;
}
}

foreach($statesArray as $element=>$value)
{
print("<br>".$value. " is the element".$element);
}
?>
