<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }
    
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        
        return view('admin.admin', ['contacts' => $contacts]);
    }
    
    public function checkLogin(Request $request)
    {
        $username = $request->get('username');
        $pasword = $request->get('password');

        $users = DB::table('users')->first();
        
        if ($users->name === $username && $users->password === $pasword) {
            return Redirect('/contacts');
        } else {
            return Redirect('/login');
        }
    }
}
