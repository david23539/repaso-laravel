<?php

namespace App\Http\Middleware;

use Closure;

class EsAdmin
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
        if(is_null($request->route('admin'))){
            return redirect('fruteria/peras');
            //return back() -> retorno a la ruta anterior
//            return redirect()->action('FrutasController@peras')-> withInput(); esto manda los datos de una ruta a otra
        }
        return $next($request);
    }
}
