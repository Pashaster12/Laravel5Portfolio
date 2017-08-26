<?php

namespace App\Http\Middleware;

use Closure;

class BreadCrumbs
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
        $url = $_SERVER['REQUEST_URI'];
        $urls = explode('/', $url);
        
        $crumbs = array();

        if (!empty($urls) && $url != '/') {
            foreach ($urls as $key => $value) {
                $prev_urls = array();
                for ($i = 0; $i <= $key; $i++) {
                    $prev_urls[] = $urls[$i];
                }

                if ($key == count($urls) - 1)
                    $crumbs[$key]['url'] = '';
                elseif (!empty($prev_urls))
                    $crumbs[$key]['url'] = count($prev_urls) > 1 ? implode('/', $prev_urls) : '/';

                switch ($value) {
                    case 'portfolio' :
                        $crumbs[$key]['text'] = 'Портфолио';
                        break;
                    case 'pricingbox' :
                        $crumbs[$key]['text'] = 'Наши цены';
                        break;
                    case 'blog' :
                        $crumbs[$key]['text'] = 'Блог';
                        break;
                    case 'contacts' :
                        $crumbs[$key]['text'] = 'Контакты';
                        break;
                    default :
                        $crumbs[$key]['text'] = 'Главная страница';
                        break;
                }
                
                if ($key > 0)
                    $crumbs[$key]['text'] = $crumbs[$key]['text'];
            }
        }
        
        $request->attributes->Add(['breadcrumbs' => $crumbs]);
        
        return $next($request);
    }
}
