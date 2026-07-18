<?php
header('Content-Type: application/json');

// Load the class file and detect the class defined inside (handles namespaces)
$before = get_declared_classes();
require_once __DIR__ . '/classes/chatbot.php';
$after = get_declared_classes();
$new = array_diff($after, $before);
$botInstance = null;
if (!empty($new)) {
    // pick the last declared class from the included file
    $classes = array_values($new);
    $className = end($classes);
    if (class_exists($className)) {
        $botInstance = new $className();
    }
}

if (isset($_POST['message'])) {
    if ($botInstance && method_exists($botInstance, 'getResponse')) {
        $reply = $botInstance->getResponse($_POST['message']);
        echo json_encode(["reply" => $reply]);
    } else {
        http_response_code(500);
        echo json_encode(["error" => "Chatbot class not found or invalid."]);
    }
}
