<?php namespace Bantenprov\ProfilNpwp\Http\Middleware;

use Closure;

/**
 * The ProfilNpwpMiddleware class.
 *
 * @package Bantenprov\ProfilNpwp
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProfilNpwpMiddleware
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
        return $next($request);
    }
}
