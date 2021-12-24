<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Mixed_;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handle(Request $request, Closure $next )
    {

        if(!auth()->check() && ! $request->user()->role_id == 1)
        {
            abort(403);
        }

        return $next($request);
    }
}
