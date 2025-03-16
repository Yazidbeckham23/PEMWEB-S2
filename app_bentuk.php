<?php
require_once "lingkaran.php";

$lingkaran1 = new lingkaran(8.4);
$lingkaran2 = new lingkaran(10);

echo "jari2 lingkaran 1 = ".$lingkaran1->jari;
echo "<br>nilai PHI ".$lingkaran1::PHI;
echo "<br>luasnya".$lingkaran1->getluas();
echo "<br>kelilingnya ".$lingkaran1->getkeliling();
echo "<hr>";
$lingkaran1->cetak();
echo "<hr>";
$lingkaran2->cetak();

?>