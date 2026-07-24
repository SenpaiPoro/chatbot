<?php
class Chatbot {
    private $defaultResponse;
    private $responses = [];
    public function __construct($defaultResponse = "Sorry, I don’t understand. Please contact support.") {
        $this->defaultResponse = $defaultResponse;
        $this->loadResponsesFromDB();
    }
    private function loadResponsesFromDB(): void {
        include __DIR__ . '/../db_connect.php';
        $result = $conn->query("SELECT keyword, reply FROM chatbot_responses");
        while($row = $result->fetch_assoc()){
            $this->responses[strtolower($row['keyword'])] = $row['reply'];
        }
    }
    public function getResponse(string $message): string {
        $msg = strtolower(trim($message));
        foreach ($this->responses as $keyword => $reply) {
            if (strpos($msg, $keyword) !== false) {
                return $reply;
            }
        }
        return $this->defaultResponse;
    }
}
