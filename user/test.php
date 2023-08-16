<?php 
//$hasil_jawaban = [$nomor1,$nomor2,$nomor3,$nomor4,$nomor5,$nomor6,$nomor7,$nomor8,$nomor9,$nomor10,$nomor11,$nomor12,$nomor13,$nomor14,$nomor15,$nomor16,$nomor17,$nomor18,$nomor19,$nomor20];
$jawaban = ['b','a','d','a','c','b','a','d','c','b','a','d','a','d','b','d','b','a','a','b'];
$hasil_jawaban = ['b','a','a','a','c','b','a','a','c','b','a','d','a','a','b','d','b','a','a','b'];
$nilai = 0;
foreach($hasil_jawaban as $key=>$value){
    if($value==$jawaban[$key]){
     $nilai = $nilai + 5;
    }
}
echo $nilai;
?>