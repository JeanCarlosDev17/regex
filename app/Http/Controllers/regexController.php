<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegexPostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class regexController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regex');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegexPostRequest $request)
    {

        return redirect()->back()->with("result","guardado");
    }


}
