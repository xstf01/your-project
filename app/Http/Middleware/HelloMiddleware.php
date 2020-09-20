<?php

namespace App\Http\Middleware;

use App\Http\Requests\HelloRequest;
use Closure;

class HelloMiddleware
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
echo "HelloMiddleware.php<br />";
        $response = $next($request);

	 return $response;

    }
}
