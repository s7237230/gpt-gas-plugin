
<?php
$data = file_get_contents('php://input');
$response = file_get_contents("https://script.google.com/macros/s/YOUR_SCRIPT_ID/exec", false, stream_context_create([
  "http" => [
    "method" => "POST",
    "header" => "Content-Type: application/json",
    "content" => $data
  ]
]));
echo $response;
?>
