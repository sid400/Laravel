<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
   public function Update(Request $request){
       $user = \Auth::user();

       if ($request->isMethod('post')){
    if (\Hash::check($request->post('password'), $user->password)){
//        dd($request->all());
            if (is_null($request->post('newPassword'))){
           $user->fill([
               'name' => $request->post('name'),
               'email' => $request->post('email'),
           ])
           ;}
            else{
                $user->fill([
                'name' => $request->post('name'),
               'email' => $request->post('email'),
               'password' =>\Hash::make( $request->post('newPassword')),
                ]);
            }

           $user->save();
               return redirect()->route('admin::profile::update')->with('DONE', 'Данные изменены');
    }
           return redirect()->route('admin::profile::update')->with('DONE', 'Неверный пароль');
       }
       $DONE = session('DONE');
       return view('admin.profiles.update',compact('user','DONE'));
   }
}
