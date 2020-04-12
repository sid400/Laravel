<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
class ValidateProfileChange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('post')){
        $rules = [
            'name'=> 'required|string|min:4',
            'email'=> ['required','email',Rule::unique('users')->ignore(Auth::user()->id)],
            'password' => 'required'
        ];
        $validator = \Validator::make($request->all(), $rules);
        if ($validator->fails()){
            return redirect()->back()
                ->withErrors($validator->errors())
                ->withInput();
        }
    }
        return $next($request);
    }
}
