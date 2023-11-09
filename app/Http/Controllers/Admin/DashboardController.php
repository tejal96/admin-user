<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function store(){
        $data = request()->validate([
            'name' => ['required', 'string'],
            'email'=>['required','unique:users,email'],
            'password'=>['required']
        ]);
        }

    public function referral()
    {
        $referrals = \App\Models\Referral::all();
        return view('admin.referral', compact('referrals'));
    }
    public function user_list()
    {
        $users = \App\User::whereRoleIs(['user'])->get();
        return view('admin.user-list',compact('users'));
    }
    public function admin_list()
    {
    }
}
