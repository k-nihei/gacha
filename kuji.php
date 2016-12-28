<?php
$atari = 0;
$hazure = 0;

$ct = 0;
while ($atari < 2) {
if ($hazure > 10000000) { $hazure = 10000000; } 
$select = rand(1, 20 + $hazure);
if ($select <= 5) {
print $ct++ . 'アタリ<br />';
$atari++;
} else {
print $ct++ . 'ハズレ<br />';
$hazure++;
}
}