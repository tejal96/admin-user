<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function index(){
        return view('user.addreferral');
    }
    
    public function store(Request $request){
        // dd($request->all());
$referral = new Referral;
$referral->name=$request->input('name');
$referral->email=$request->input('email');
$referral->phone_number=$request->input('phonenumber');
$referral->save();
return redirect()->back()->with('success','Referral added successfully!');
}

public function show() {
  $referrals=DB::table('referrals')->get();
  return view ('admin.showreferral',compact('referrals'));
}

public function approve($id) {
    DB::table('referrals')
      ->where('id', $id)
      ->update(['status' => 1]);
      
   return back()->with('success', 'Approved Successfully');
   }
   public function disapprove($id) {
    DB::table('referrals')
    ->where('id', $id)
      ->update(['status' => 0]);
      return back()->with('error', 'Disapproved Successfully');
   }

public function delete($id) {
    DB::table('referrals')
    ->where('id', $id)
      ->delete();
      return back()->with('warning', 'Deleted Successfully');
   }

public function edit($id) {
    $referral = Referral::findOrFail($id);
    return view('admin.editreferral', compact('referral'));
  }
    
    }

