<?php
class Chatbot {
    private $defaultResponse;

    public function __construct($defaultResponse = "Sorry, I don’t understand. Please contact support.") {
        $this->defaultResponse = $defaultResponse;
    }

    public function getResponse(string $message): string {
        $msg = strtolower(trim($message));

        $responses = [
            "password" => "You can reset your password at: /reset-password",
            "order"    => "Track your order here: /track-order",
            "refund"   => "Refunds are processed within 5 business days. Need help? Call us at +1800123456."
        ];

        foreach ($responses as $keyword => $reply) {
            if (strpos($msg, $keyword) !== false) {
                return $reply;
            }
        }

        return $this->defaultResponse;
    }
}
