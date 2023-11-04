<?php 

$warna = [" Hijau " , " Kuning ", " Kelabu ", " Merah Muda " ];

echo "Balonku ada lima";
echo"<br>";

echo"Rupa-rupa warnanya";
echo"<br>";

$hasil = array_push($warna,"dan Biru");
foreach ($warna as $warni =>$warnaWarni ) { 
  echo " $warnaWarni  ";
}
echo"<br>";

$hijau = array_shift($warna);
echo"Meletus balon $hijau DORR!!";
echo"<br>";

echo"Hatiku sangat kacau";
?>