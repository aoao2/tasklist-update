<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    public function show($id) {
        $user = User::find($id);
        $tasks = $user->tasks()->orderBy('created_at', 'desc');
        
        $data = [
            'user' => $user,
            'tasks' => $tasks];
            
        return view('welcome', $data);
    }
}