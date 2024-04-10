<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://bhagavad-gita3.p.rapidapi.com/v2/chapters/1/verses/1/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: bhagavad-gita3.p.rapidapi.com",
		"X-RapidAPI-Key: 6930282ed7msh4faa8ee1c6ab1bfp192912jsn2bf8ca1ae65d"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>