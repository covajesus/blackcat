<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
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
        // Lista de idiomas soportados
        $availableLocales = ['es', 'en', 'pt'];

        // Obtener el idioma del parámetro de la URL
        $locale = $request->route('locale');

        // Si no hay idioma en la URL, usar el de la sesión o español por defecto
        if (!$locale) {
            $locale = Session::get('locale', 'es');
        }

        // Verificar si el idioma es válido
        if (!in_array($locale, $availableLocales)) {
            $locale = 'es'; // Idioma por defecto
        }

        // Establecer el idioma en la aplicación
        App::setLocale($locale);

        // Guardar en la sesión
        Session::put('locale', $locale);

        // Compartir el locale con todas las vistas
        view()->share('currentLocale', $locale);
        view()->share('availableLocales', $availableLocales);

        return $next($request);
    }
}
