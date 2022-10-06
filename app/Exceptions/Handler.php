<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Convert a validation exception into a JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Validation\ValidationException  $exception
     * @return \Illuminate\Http\JsonResponse
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        if ($request->header('Validation-Errors', false) != 'OneLine') {
            return parent::invalidJson($request, $exception);
        }

        $oneLineErrors = [];
        $errors = $exception->errors();

        foreach ($errors as $field => $error) {
            $oneLineErrors[$field] = implode('; ', $error);
        }


        return response()->json([
            'message' => $exception->getMessage(),
            'errors' => Arr::undot($oneLineErrors),
        ], $exception->status);
    }
}
