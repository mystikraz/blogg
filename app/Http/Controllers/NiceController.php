<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\NiceAction;

class NiceController extends Controller
{
    $actions=NiceAction::all();
    return view('home',['actions',=>$actions]);
}
