<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Exception;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Exceptions\TokenBlacklistedException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $exception) {
            if ($exception instanceof TokenInvalidException){
                return response()->json(["status" => 'fail', 'code' => 401, "messager" => 'Token is Invalid'], 401);
            }else if ($exception instanceof TokenExpiredException){
                return response()->json(["status" => 'fail', 'code' => 401, "messager" => 'Token is Expired'], 401);
            }else if ($exception instanceof UnauthorizedHttpException || $exception instanceof TokenBlacklistedException){
                return response()->json(["status" => 'fail', 'code' => 401, "messager" => 'The token has been blacklisted'], 401);
            }
        }
        return $next($request);
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
