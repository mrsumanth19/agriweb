<?php
// Check if vendor directory exists
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    die('Please run "composer require twilio/sdk" in the project directory first');
}

require_once __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

class TwilioSMS {
    private $account_sid;
    private $auth_token;
    private $twilio_number;
    private $client;

    public function __construct($account_sid, $auth_token, $twilio_number) {
        if (empty($account_sid) || empty($auth_token) || empty($twilio_number)) {
            throw new Exception('Twilio credentials are required');
        }
        
        $this->account_sid = $account_sid;
        $this->auth_token = $auth_token;
        $this->twilio_number = $twilio_number;
        $this->client = new Client($account_sid, $auth_token);
    }

    public function sendSMS($to, $message) {
        try {
            // Validate phone number format
            if (!preg_match("/^\+[1-9]\d{1,14}$/", $to)) {
                throw new Exception('Invalid phone number format. Must be in E.164 format (e.g., +1234567890)');
            }

            $message = $this->client->messages->create(
                $to,
                [
                    'from' => $this->twilio_number,
                    'body' => $message
                ]
            );
            return [
                'success' => true,
                'message_sid' => $message->sid,
                'error' => null
            ];
        } catch (Exception $e) {
            return [
                'success' => false,
                'message_sid' => null,
                'error' => $e->getMessage()
            ];
        }
    }

    public function sendBulkSMS($numbers, $message) {
        $results = [];
        foreach ($numbers as $number) {
            $results[$number] = $this->sendSMS($number, $message);
        }
        return $results;
    }
}

// Example usage - save this in message.php
try {
    $account_sid = 'your_twilio_account_sid';
    $auth_token = 'your_twilio_auth_token';
    $twilio_number = 'your_twilio_number';

    $sms = new TwilioSMS($account_sid, $auth_token, $twilio_number);

    // Send a single message
    $result = $sms->sendSMS('+919949390988', 'THIS IS A CONFIRMATION MESSAGE FROM AGRIWEB TEAM , YOU ARE SUCCESSFULLY REGISTERED FOR THE AGRIWEB, YOU CAN GET NOTIFICATIONS AND INFORMATION FOR THE CROP AND FIELDS');
    
    if ($result['success']) {
        echo "Message sent successfully! SID: " . $result['message_sid'];
    } else {
        echo "Error sending message: " . $result['error'];
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}