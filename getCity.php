<?php

$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];;

$url = "http://ip-api.com/json/{$ip_address}";

$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET'
));
$response = curl_exec($ch);
$data = (object) json_decode($response);
curl_close($ch);

$city = $data->city;
print_r('your city' . ' ' . $city);

?>



<?php
                $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];

            ?>
            <script>
                let ip = '<?= $ip_address ;?>'

                let p = document.getElementById('loca');

                var IPs = [`${ip}`];

                // ip-api endpoint URL
                // see http://ip-api.com/docs/api:batch for documentation
                var endpoint = 'https://api.techniknews.net/ipgeo/';

                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Result array
                        var response = JSON.parse(this.responseText);
                        // console.log(response);
                        p.innerHTML = response.city
                        // response.forEach(function (item) {
                        //     console.log(item.query + " is in " + item.city + ", " + item.country); 
                        //     p.innerHTML = item.city
                        // });
                    }
                };
                var data = JSON.stringify(IPs);
                // console.log("sending:", data);

                xhr.open('POST', endpoint, true);
                xhr.send(data);

            </script>
