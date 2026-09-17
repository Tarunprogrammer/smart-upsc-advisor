<?php
require '../config/llama.php';
$input = json_decode(file_get_contents('php://input'), true);

$prompt = "Create a " . $input['duration'] . " day study plan for UPSC focusing on " . $input['focus_area'] . ". Format as JSON.";
$aiResponse = callAI($prompt); 

// Logic to save this plan to the database 'user_plans' table
echo json_encode(['status' => 'success', 'plan' => $aiResponse]);
?>