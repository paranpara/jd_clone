<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $redirectTo = '/admin/home';
    
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    
    public function showAdminLoginForm()
    {
        return view('admin.login');
    }
    
    
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
