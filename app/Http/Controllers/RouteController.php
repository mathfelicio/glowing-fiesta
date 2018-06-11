<?php

namespace ProvaB4\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    /**
     * @param Request $request
     * @param string $name
     * @return string
     */
    public function index(Request $request, $name)
    {
        return route($name, $request->all());
    }
}
