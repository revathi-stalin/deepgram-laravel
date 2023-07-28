<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranscriptionController extends Controller
{
    public function transcribeAudio()
    {

// curl \
//   --request POST \
//   --header 'Authorization: Token 156ff5962cda1a59a6e8076c462b4698ca76a24c' \
//   --header 'Content-Type: application/json' \
//   --data '{"url":"https://static.deepgram.com/examples/interview_speech-analytics.wav"}' \
//   --url 'https://api.deepgram.com/v1/listen'
 
// curl \
//   --request POST \
//   --header 'Authorization: Token 156ff5962cda1a59a6e8076c462b4698ca76a24c' \
//   --header 'Content-Type: audio/wav' \
//   --data-binary @/home/targetbay/Downloads/Kadhal-Sadugudu.mp3 \
//   --url 'https://api.deepgram.com/v1/listen'

// curl https://api.deepgram.com/v1/listen?punctuate=true \
//   -H "Authorization: Token YOUR_DEEPGRAM_API_KEY" \
//   -H "Content-Type: application/json" \
//   -d '{"url":"https://static.deepgram.com/examples/nasa-spacewalk-interview.wav"}' \
//   | jq '.results.channels[0].alternatives[0].transcript'

        $token = '156ff5962cda1a59a6e8076c462b4698ca76a24c';
        $audioFilePath = '/home/targetbay/Downloads/espn-bears.m4a';
        $apiUrl = 'https://api.deepgram.com/v1/listen?punctuate=true';
        
        // Initialize cURL session
        $ch = curl_init();
        
        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Set headers
        $headers = array(
            'Authorization: Token ' . $token,
            'Content-Type: audio/wav',
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        // Set the audio file to be sent
        $fileData = file_get_contents($audioFilePath);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fileData);
        
        // Execute the cURL request
        $response = curl_exec($ch);
        
        // Check for cURL errors
        if (curl_errno($ch)) {
            echo 'Error: ' . curl_error($ch);
        }
        
        // Close cURL session
        curl_close($ch);
        
        // Process the response as needed
        echo $response;


    }

}
