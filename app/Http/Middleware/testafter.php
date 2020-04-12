<?php

namespace App\Http\Middleware;

use Closure;

class testafter
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
        $response = $next($request);
        echo "Действия полсе выполнения оперций в контроллере<br>";
        return $response;
    }
}
