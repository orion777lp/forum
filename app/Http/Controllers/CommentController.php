<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Repositories\commentsRepository;
//use Illuminate\Http\Request;
use App\Http\Requests\commentRequest as Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $commentsRepository = new commentsRepository();
        return $commentsRepository->store($request);
    }

}
