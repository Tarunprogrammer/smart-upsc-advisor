<?php
include "../config/llama.php";

$user_question = $_POST['question'];

$prompt = "Answer like a UPSC mentor:\n" . $user_question;

$response = askLlama($prompt);

echo json_encode(["answer" => $response]);
