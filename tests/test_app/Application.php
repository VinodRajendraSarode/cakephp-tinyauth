<?php

namespace TestApp;

use Cake\Http\BaseApplication;

class Application extends BaseApplication {

	/**
	 * @param \Cake\Http\MiddlewareQueue $middleware The middleware queue to set in your App Class
	 * @return \Cake\Http\MiddlewareQueue
	 */
	public function middleware($middleware) {
		return $middleware;
	}

}
