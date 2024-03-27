<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DiscordController extends Controller {

    public function token(Request $request) {
        $response = Http::withHeaders([
            'Content-Type' => 'application/x-www-form-urlencoded',
        ])->asForm()->post('https://discord.com/api/oauth2/token', [
            'client_id' => config('discord.client_id'),
            'client_secret' => config('discord.client_secret'),
            'grant_type' => 'authorization_code',
            'code' => $request->get('code'),
        ]);

        return $response;
    }

}