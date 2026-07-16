<?php
class Chatbot {
    private $defaultResponse = "Sorry, I don’t understand. Please contact support.";
    public function getResponse(string $message): string {
        $msg = strtolower(trim($message));

        if (strpos($msg, "password") !== false) {
            return "You can reset your password at: /reset-password";
        } elseif (strpos($msg, "order") !== false) {
            return "Track your order here: /track-order";
        } elseif (strpos($msg, "refund") !== false) {
            return "Refunds are processed within 5 business days. Need help? Call us at +1800123456.";
        }
        return $this->defaultResponse;
    }
}
