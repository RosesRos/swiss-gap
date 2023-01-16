<?php

if (empty( $_POST )) die("Bad request");

//get client ip
$stip = $_SERVER['REMOTE_ADDR'];

//pixel_fb
$fb=$_POST['pixel'];
//form data
$tname = $_POST['firstName'];
$tlname = $_POST['lastName'];
$tmail = $_POST['email'];
$tphone = $_POST['phone'];

$sub_id = $_POST['subid'];
$campaign = $_POST['utm_campaign'];
$mbid = $_POST['mbid'];
$source = $_POST['utm_source'];
$content = $_POST['utm_content'];
$tal = $_POST['al'];
$tap = $_POST['ap'];
$tgi = $_POST['gi'];

// формируем запись в таблицу google (изменить)
$url_table = "https://docs.google.com/forms/u/0/d/e/1FAIpQLScpcEmRuqooMyXvJBXuCaKzqWC1enJwFub3oNB2fViLZAIaAg/formResponse"; // как получить будет показанно на видео
// сохраняем url, с которого была отправлена форма в переменную utm
$utm = $_SERVER["HTTP_REFERER"];


// массив данных (изменить entry, draft и fbzx)
$post_data = array (
"entry.809177760" => "$tname", // name
"entry.1519376600" => "$tlname", // lastname
"entry.1016980112" => "$tmail", // email
"entry.361408668" => "$tphone",

"entry.1233877797" => "$ipcountry", // country
"entry.1642840662" => "$tal", // bayer
"entry.984445373" => "$tgi", // box
"entry.1476560485" => "$mbid", // mbId
// как получить эти данные будет показанно на видео
"draftResponse" => "[null,null,&quot;6608265830681404897&quot;]", 
"pageHistory" => "0",
"fbzx" => "-6608265830681404897"
);

//get ccode from server future
$ccc = file_get_contents("https://ipapi.co/". $stip ."/country_calling_code/");
$ccode = file_get_contents("http://ip-api.com/json/". $stip."?fields=message,country,countryCode,regionName,city,zip,timezone,proxy,mobile,query");
$object = json_decode($ccode, true);
$councode = $object["countryCode"];
$ipcountry = $object["country"];
$ipcity = $object["city"];
$ipregionname = $object["regionName"];
$ipmobile = $object["mobile"];
$ipproxy = $object["proxy"];


$curl = curl_init();
$description ="";
$agent = 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.121 Safari/537.36';
$data=[];
$data=[
    "ai"=> $_POST["ai"],
    "ci"=> "1",
    "gi"=> $_POST["gi"],
    //"userip"=> $_SERVER['REMOTE_ADDR'],
    "userip"=> "$stip",
    "firstname"=> "$tname",
    "lastname"=> "$tlname",
    "email"=> "$tmail",
    "password"=> "FixGo3245",
    "phone"=> "$tphone",
    "so"=> $source,
    "sub"=> $sub_id,
    "MPC_1"=> "$mbid",
    "MPC_2"=> "FreeParam",
    "MPC_3"=> "FreeParam",
    "MPC_4"=> "FreeParam",
    "MPC_5"=> "FreeParam",
    "MPC_6"=> "FreeParam",
    "MPC_7"=> $campaign,
    "MPC_8"=> "FreeParam",
    "MPC_9"=> "FreeParam",
    "MPC_10"=> (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"
];


curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://bo.hellleadbox.com/api/signup/procform',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_USERAGENT => $agent,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        'x-trackbox-username: '."$tal",
        'x-trackbox-password: '."$tap",
        'x-api-key: 2643889w34df345676ssdas323tgc738',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);
$redirect = json_decode($response, true);
$URL = $redirect["data"];
curl_close($curl);
print_r($URL);
header("Location: success.php?fb=$fb&url=$URL");
die();
?>





<?php

// my set up api

$request = (object) $_REQUEST;

/** @CUSTOM PARAMS */
$ai = '2958191';
$ci = '1';
$gi = '306';
$country = "PL";
/** @CUSTOM PARAMS /end */


$data = [
    "ai" => $ai,
    "ci" => $ci,
    "gi" => $gi,
    "userip" => $_SERVER['HTTP_X_FORWARDED_FOR'],
    "firstname" => $request->firstName,
    "lastname" => $request->lastName,
    "email" => $request->email,
    "phone" => $request->phone,
    "password" => $request->password,
    "country" => $country,
    "so" => "swissgap",
    "countrycode" => "PL",
    "co" => "PL",
    "autoLoginLink" => "https:\/\/tg.trafagon.com/u/d/",
    // "sub" => $request->clickid,
    // "medium" => $request->arb
];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://tg.trafagon.com/api/signup/procform',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'x-trackbox-username: INHOUSE',
    'x-trackbox-password: INHOUSe123',
    'x-api-key: 2643889w34df345676ssdas323tgc738',
    'Content-Type: application/json',
    'Cookie: AWSALB=n9JSZd3BKa2YTvq9n/mCmozim4+HpjY5nJJOg6BFtfKxt0jmIb5lvCv+qMOc7jhn0fHUew/V9Vzslo8EXe2VOVF8d5UTvhPWAqETyMbb6C3G1oEIq2d8L2lnVAJt; AWSALBCORS=n9JSZd3BKa2YTvq9n/mCmozim4+HpjY5nJJOg6BFtfKxt0jmIb5lvCv+qMOc7jhn0fHUew/V9Vzslo8EXe2VOVF8d5UTvhPWAqETyMbb6C3G1oEIq2d8L2lnVAJt; PHPSESSID=26gi7i9anuptdnjjflbfd72f99'
  ),
));

$response = curl_exec($curl);
$response = json_decode($response, true);

curl_close($curl);

if ($response['status'] === true) {
    $autologinUrl = $response["data"];
    header("Location: $autologinUrl");
    exit();
} else {
    die(header("Location: https://gapswiss.io/qS4v3XbW?pixel={pixel}"));
}

// echo '<pre>';
// print_r($autologinUrl);
// echo '<pre>';

?>