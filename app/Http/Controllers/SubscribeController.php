<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
//use Illuminate\Http\Request;
use App\Http\Requests\subscribeRequest as Request;
use App\Repositories\subscribeRepository;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        //
        $subscribeRepository = new subscribeRepository();
        return $subscribeRepository->get($user_id);
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
        $subscribeRepository = new subscribeRepository();
        return $subscribeRepository->store($request);
    }

}
