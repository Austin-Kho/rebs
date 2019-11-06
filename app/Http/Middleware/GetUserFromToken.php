<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Middleware\BaseMiddleware;

class GetUserFromToken extends BaseMiddleware
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
        if (!$token = $this->auth->setRequest($request)->getToken()) {
            // HTTP Header 나 URL Parameter 에 token 값이 없으면 400 JWTException 을 던진다.
            throw new JWTException('token_not_provided', 400);
        }

        if (!$user = $this->auth->authenticate($token)) {
            // token 값으로 사용자 로그인을 한다. 해당 사용자가 없으면 404 JWTException 을 던진다.
            throw new JWTException('user_not_found', 404);
        }

        $this->events->fire('tymon.jwt.valid', $user);

        // 미들웨어는 Chain of Responsibility 디자인 패턴의 구현이다
        // @see https://en.wikipedia.org/wiki/Chain-of-responsibility_pattern
        return $next($request);
    }
}
