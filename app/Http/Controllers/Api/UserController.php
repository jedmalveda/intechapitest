<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUsers()
    {
        $content = [
            'data' => [
                'name' => 'Sample',
                'role' => 'Administrator'
            ],
            'message' => 'Success'
        ];

        return $content;
    }
}
