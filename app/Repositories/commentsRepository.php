<?php

namespace App\Repositories;

use App\Models\comment as modelComment;

class commentsRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return modelComment::class;
    }

    public function store($request){

        if(is_null($request->input('parent_id'))){
            return modelComment::create($request->validated());
        }else{
            if(is_null(modelComment::find($request->input('parent_id')))){
                abort(response()->json(['parent_id' => 'The selected parent_id is invalid.'], 422));
            }else{
                return modelComment::create($request->validated());
            }
        }

    }

}
