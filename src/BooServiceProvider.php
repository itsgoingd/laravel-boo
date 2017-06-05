<?php namespace LaravelBoo;

use Illuminate\Contracts\Debug\ExceptionHandler as IlluminateHandler;

class BooServiceProvider
{
	public function register()
	{
		$app->singleton(IlluminateHandler::class, new ExceptionHandler($app->make(IlluminateHandler::class)));
	}
}
