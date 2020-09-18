<?php

namespace App\Repositories;

use App\Models\post as modelPost;

class postsRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return modelPost::class;
    }

    public function all(){
        return modelPost::all();
    }

    public function store($request){
        return modelPost::create($request->validated());
    }

    public function delete($id)
    {
        $item = modelPost::findOrFail($id);

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
