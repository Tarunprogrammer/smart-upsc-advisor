<?php
require '../config/llama.php';
$data = json_decode(file_get_contents('php://input'), true);

$question = $data['question'];
$user_answer = $data['answer'];

$prompt = "As a UPSC examiner, evaluate this answer based on: 
1. Content accuracy 2. Structure 3. Vocabulary. 
Question: $question
Student Answer: $user_answer";

$evaluation = callAI($prompt);
echo json_encode(['feedback' => $evaluation]);
?>