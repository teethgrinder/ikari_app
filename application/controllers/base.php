<?php

class Base_Controller extends Controller {


    /**
     * @var View
     */
    public $layout = 'layouts.master';

    /**
     * @var bool
     */
    public $restful = true;

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}