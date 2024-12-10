<?php

// $apiUrl = "http://localhost:3000/table/list"; 


// $curl = curl_init();
// curl_setopt($curl, CURLOPT_URL, $apiUrl);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($curl, CURLOPT_HTTPHEADER, [
//     'Content-Type: application/json',
//     'Authorization: Bearer YOUR_ACCESS_TOKEN' 
// ]);

// $response = curl_exec($curl);


// if (curl_errno($curl)) {
//     echo "cURL Error: " . curl_error($curl);
//     curl_close($curl);
//     exit;
// }

// curl_close($curl);

// // เชื่อมต่อฐานข้อมูลหรือ API
// $api_url = 'http://localhost:3000/table/list'; // URL ของ API ที่คุณจะเรียก
// $response = file_get_contents($api_url); // ใช้ file_get_contents หรือ cURL
// $data_array = json_decode($response, true);

// // ส่งข้อมูลในรูปแบบ JSON
// header('Content-Type: application/json');
// echo json_encode($data_array);

$response = !empty($response) ? json_decode($response, true) : [];
$data = $response['data'] ?? [];




?>
