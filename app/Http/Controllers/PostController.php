<?php

namespace App\Http\Controllers;

use App\Http\Requests\postRequest as Request;
use App\Repositories\postsRepository;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $postRepository = new postsRepository();
        return $postRepository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $postRepository = new postsRepository();
        return $postRepository->store($request);
    }

    public function delete($id)
    {
        //
        $postRepository = new postsRepository();
        $postRepository->delete($id);

    }
}
