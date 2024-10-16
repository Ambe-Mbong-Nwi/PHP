<?php
//mktime(hour, minute, second, month, day, yearr, is_dst) is used to get timestamp for particular date.
$target = mktime(0, 0, 0, 30, 12, 2024);
$today = time();
$difference = ($target - $today);
$days = (int) ($difference/86400);   //timestamp returns in second so this is conversion to days and ensuring the number is an integer
print "My birthday is in $days days"; 
print "Our event will occur in $difference seconds";
?>