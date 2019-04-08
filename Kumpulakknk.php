<?php
//SCRIPT NYA JGN DI OTAK-ATIK NANTI ERROR
//Date: Senin 8 April 2019
//Fitur: KTP & KK Generate
//Author: Santri Pas7w7 || Youtube Santri Teknologi (Santri Pasuruan)
@ini_set('output_buffering',0);
$data = array('3213127112370008 | 3213120302110029 | 3213120302110032 ', 3213125506840001 ', '3213122607790001)
$data2 = $data[array_rand($data)];
$data3 = explode(' | ', $data2);
//$ktp = base64_encode($data3[0]);
//$kk = base64_encode($data3[1]);
$ktp = $data3[0];
$kk = $data3[1];
//$data4 = array('KTP' => $ktp, 'NO_KK' => $kk);
//print(json_encode(array('src'=>'Hasil', 'result'=>$data4)));
echo ".::[ KTP & KK Generate ]::.\n\n";
echo "decoded by GhostDecoded || www.androhackerz81.zone.id\n";
echo "Thanks To; zerovn || babby cyber team\n\n";
echo "No. KTP : ".$ktp."\n";
echo "No. KK : ".$kk."\n";
?>

