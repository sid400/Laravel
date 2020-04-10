<?php

namespace App\Http\Middleware;
use Closure;

class testbefore
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

        echo "Действия перед выполнением оперций в контроллере<br>";
        return $next($request);
    }
}
