<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
    	$msg ="Þessi síða sér alla threads";
    	return $msg;
    }

    public function create()
    {
    	$msg2 ="Þessi síða býr til fleiri Threads";
    	return $msg2;
    }

    public function show($id)
    {
    	return "this is the threads with the id " .$id;
    }

};
