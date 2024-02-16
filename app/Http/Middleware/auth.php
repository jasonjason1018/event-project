<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class auth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
    */
    protected $blackList = [
        'bookkeeping' => ['index', 'login', 'logout', 'test'],
        'groupbuyVendor' => ['index', 'login', 'logout']
    ];

    
    public function handle(Request $request, Closure $next)
    {
        $pathInfo = explode('/', $_SERVER['REQUEST_URI']);
        $PATH = $pathInfo[1];
        $function = $pathInfo[2];
        if(isset($this->blackList[$PATH])){
            $list = $this->blackList[$PATH];
            if(array_search($function, $list) === false){
                $isLogin = $request->session()->get($PATH.'_login_data')->isLogin??false;
                if(!$isLogin){
                    return redirect("/$PATH/index");
                }
            }
            return $next($request);
        }else{
            return $next($request);
        }
    }
}
