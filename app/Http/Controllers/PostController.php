<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function showPostsByUser($user_id) {
        $posts = User::find($user_id)->posts;

        return response()-json($posts);
    }
}
