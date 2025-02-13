<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function render($request, Throwable $exception)
    {
        if ($this->isHttpException($exception)) {
            if ($exception instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
                $tittle = 'Error Not Found';
                $imgError = 'assets/img/404.png';
                $error = '404';
                $desError = 'Page Not Found. Go Back.';
                return response()->view('errorMessage', compact('tittle', 'imgError', 'error', 'desError'), 404);
            }

            if ($exception instanceof \Symfony\Component\HttpKernel\Exception\HttpException && $exception->getStatusCode() == 403) {
                $tittle = "Don't have access";
                $imgError = "assets/img/403.jpg";
                $error = "403";
                $desError = "Don't have access. Go Back.";
                return response()->view('errorMessage', compact('tittle', 'imgError', 'error', 'desError'), 403);
            }
        }

        return parent::render($request, $exception);
    }
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
