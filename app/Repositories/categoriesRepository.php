<?php

namespace App\Repositories;

use App\Models\category as modelCategory;

class categoriesRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return modelCategory::class;
    }

    public function all(){
        return modelCategory::all();
    }

    public function store($request){

        return modelCategory::create($request->validated());

    }

    public function delete($id)
    {
        $item = modelCategory::find($id);

        if(empty($item)){
            abort(response()->json(['ID' => 'The selected ID is invalid.'], 422));
        }

        if($item->delete()){
            abort(response()->json(['message' => 'Row deleted'], 204));
        }else{
            abort(404);
        }

    }

}
