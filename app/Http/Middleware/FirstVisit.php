<?php

namespace App\Http\Middleware;

use Closure;
use Jenssegers\Agent\Agent;

class FirstVisit
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
        if(!$request->session()->has('first_visit')){
            $agent = new Agent();
            $request->session()->put('first_visit', true);
            $request->session()->put('user-agent', $request->server('HTTP_USER_AGENT'));
            $request_uri = explode('?', $request->server('REQUEST_URI'));
            if(isset($request_uri[0]))
                $request->session()->put('uri', $request_uri[0]);
            else
                $request->session()->put('uri', null);
            if(isset($request_uri[1]))
                $request->session()->put('query', $request_uri[1]);
            else
                $request->session()->put('query', null);
            $request->session()->put('addr', $request->server('REMOTE_ADDR'));
            $http_reffer = explode('?', $request->server('HTTP_REFERER'))[0];
            $request->session()->put('reffer', $http_reffer);
            $request->session()->put('device', $agent->device());                       //Device name
            $platform = $agent->platform();
            $request->session()->put('platform', $platform);                            //Operating system name
            $request->session()->put('platform_version', $agent->version($platform));   //Platform version
            $browser = $agent->browser();
            $request->session()->put('browser', $browser);                              //Browser name
            $request->session()->put('browser_version', $agent->version($browser));     //Browser version
            $request->session()->put('is_desktop', $agent->isDesktop());                //Desktop detection
            $request->session()->put('is_phone', $agent->isPhone());                    //Phone detection
            $request->session()->put('is_robot', $agent->isRobot());                    //Robot detection
        }
        return $next($request);
    }
}
