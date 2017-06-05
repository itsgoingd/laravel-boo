<?php namespace LaravelBoo;

use Illuminate\Contracts\Debug\ExceptionHandler as IlluminateHandler;
use Illuminate\Support\ServiceProvider;

class BooServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->instance(
			IlluminateHandler::class, new ExceptionHandler($this->app->make(IlluminateHandler::class))
		);
	}
}
