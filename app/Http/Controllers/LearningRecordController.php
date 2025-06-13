<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LearningRecordController extends Controller
{
    public function addLearningRecord(Request $request)
    {
        $payload = [
            'day' => $request->input('day'),
            'summary' => $request->input('summary'),
            'learned' => $request->input('learned'),
        ];

        $proxyUrl = 'http://localhost:3000/add-record';

        try {
            $client = new Client();
            $response = $client->post($proxyUrl, [
                'json' => $payload
            ]);

            $responseData = json_decode($response->getBody(), true);
            return response()->json(['success' => true, 'data' => $responseData]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'error' => $e->getMessage()], 500);
        }
    }
}
