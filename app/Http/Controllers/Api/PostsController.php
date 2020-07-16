<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    function index(){
    	$posts = DB::table("posts")->get();
    	//return $posts;
    	return json_encode($posts);
    }
}
