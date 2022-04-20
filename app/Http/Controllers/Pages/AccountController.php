<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function account(){

        return view('Pages.AccountSettings.Account');
    }
    public function connection(){

        return view('Pages.AccountSettings.Connections');
    }
    public function notification(){

        return view('Pages.AccountSettings.Notifications');
    }

}
