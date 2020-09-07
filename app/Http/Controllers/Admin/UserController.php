<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $user = Auth::user();

        $data = compact('user');

        return view('admin.user.info', $data);
    }
}
