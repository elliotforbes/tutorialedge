<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Log;

class AdminMiddleware {

    
    protected $auth;
    
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;   
    }
    
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if($this->auth->guest())
        {
            if($request->ajax())
            {
                return response('Unathorized.', 401);
            }
            else
            {
                return redirect()->guest('auth/login');   
            }
        }
	}

}
