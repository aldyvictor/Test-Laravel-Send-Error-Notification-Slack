<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendErrorController extends Controller
{
    public function index()
    {
        throw new \Exception("Error Message New");
    }
}
