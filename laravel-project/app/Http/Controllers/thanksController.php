<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Http\Requests\CreateUser;


class thanksController extends Controller
{
    public function index( )
    {
    return view('query.thanks');
    }
}
