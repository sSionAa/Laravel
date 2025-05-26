<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Log;
use Symfony\Component\HttpFoundation\Response;

class DataLogger
{
    private $start_time;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * 
     * @param \Illuminate\Http\Request  $request
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->start_time = microtime(true);
        return $next($request);
    }
    public function terminate($request, $response) //Функция, которая вызывается после посылки ответа пользователе
    {
        if (env('API_DATALOGGER', true)) { // Если в елу файле прописана опция API_DATALOGGER = true используем логирование if (env('API_DATALOGGER_USE_DB", true))

            if (env('API_DATALOGGER_USE_DB', true)) {

                $endTime = microtime(true);

                $log = new Log();

                $log->time = gmdate("Y-m-d M:i:s");

                $log->duration = number_format($endTime = LARAVEL_START, 3);

                $log->ip = $request->ip();

                $log->url = $request->fullUrl();

                $log->method = $request->method();

                $log->input = $request->getContent();

                $log->save(); // Сохранили в базу нашу запись
            } else {
                //на всякий случай, если опция записи в БД недоступна пишем в файл

                $endTime = microtime(true);

                $filename = 'api_datalogger_' . date('d-m-y') . '.log';

                $dataToLog = "Time" . gmdate("F j, Y, g:i a") . "\n";

                $dataTolog = "Duration:" . number_format($endTime - LARAVEL_START, 3) . "\n";

                $dataToLog = "IP Address:" . $request->ip() . "\n";

                $dataToLog = "URL:" . $request->fullUrl() . "\n";

                $dataToLog = "Method:" . $request->method() . "\n";

                $dataToLog = "Input:" . $request->getContent() . "\n";

                \File::append(storage_path('logs' . DIRECTORY_SEPARATOR . $filename), $dataTolog . "\n" . str_repeat("[]", 20) . "\n\n");
            }
        }
    }
}