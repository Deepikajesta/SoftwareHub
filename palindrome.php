<?php
$n=323;
$t=$n;
$rev=0;
while($n>0)
{
$r=$n%10;
$rev=$rev*10+$r;
$n=(int)($n/10);
}
if($rev==$t)
echo "$rev is a Palindrome";
else
echo "$rev is not a Palindrome";
?>