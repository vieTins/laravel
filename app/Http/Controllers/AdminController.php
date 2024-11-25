<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use function Laravel\Prompts\table;


session_start(); // Removed unused session_start() function
class AdminController extends Controller
{
    public function index()
    {
        return view('/admin.admin_login');
    }
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function show_dashboard()
    {
        $this->AuthLogin();
        return view('/admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->Email;
        $admin_password = md5($request->Password);
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'mat khau hoac email khong dung, nhap lai nhe');
            return Redirect::to('/admin');
        }
    }
    public function logout()
    {
        $this->AuthLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
}
