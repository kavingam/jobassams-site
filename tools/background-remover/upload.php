<?php
if ($_FILES['image']['error'] !== UPLOAD_ERR_OK) {
    http_response_code(400);
    echo 'Upload error';
    exit;
}

$tmpPath = $_FILES['image']['tmp_name'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.remove.bg/v1.0/removebg');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$post = [
    'image_file' => new CURLFile($tmpPath),
    'size' => 'auto'
];

curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'X-Api-Key: D7TUEK6e3FJfzQDE179XfWSU'
]);

$result = curl_exec($ch);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
curl_close($ch);

header('Content-Type: ' . $contentType);
echo $result;

?>