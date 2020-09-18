<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest as Request;
use App\Repositories\categoriesRepository;
//use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryRepository = new categoriesRepository();
        return $categoryRepository->all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $categoriesRepository = new categoriesRepository();
        return $categoriesRepository->store($request);

    }


    public function delete($id)
    {
        //
        $categoriesRepository = new categoriesRepository();
        $categoriesRepository->delete($id);

    }

}
