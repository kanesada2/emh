<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GameController extends Controller {


    public function index(Request $request) {
        $response = [
            'player' => '',
            'market' => '', 
            'synergy' => '',
            'leaderboard' => '',
        ];

        return $response;
    }

    public function reroll(Request $request) {

    }

    public function issue(Request $request) {

    }
}