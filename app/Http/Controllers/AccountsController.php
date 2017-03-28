<?php

namespace App\Http\Controllers;

use App\Account;
use App\Task;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
   public function index(){
       $accounts = Account::all();
       return view('/account/index', compact('accounts'));
   }

   public function edit($id){
       $account = Account::findOrFail($id);
       return view('/account/edit', compact('account'));
   }

   public function store(Request $request){
       $input = $request->all();
       return $input;
   }

   public function update(Request $request){
       $account = Account::find($request->get('id'));

       $account->update($request->except('id'));
       return redirect('/account/index');
   }
}
