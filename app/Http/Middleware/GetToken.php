<?php

namespace App\Http\Middleware;

use Closure;
use Curl;
class GetToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public $attributes;
    public function handle($request, Closure $next)
    {
        $request->attributes->add(['myAttribute' => 'myValue']);
        return $next($request);
    }
}
