<?php

namespace App\Repositories;

use App\Models\subscribe as modelSubscribe;
use App\Models\post as modelPost;
use App\Models\category as modelCategory;

class subscribeRepository extends CoreRepository
{

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return modelSubscribe::class;
    }

    public function get($user_id){

        $res = modelSubscribe::select('category_id')->where('user_id', '=', $user_id)->pluck('category_id')->toArray();
        return modelPost::whereIn('category_id', $res)->get();
    }

    public function store($request){

        $item = modelSubscribe::select('id')->where('user_id', '=', $request->input('user_id'))
            ->where('category_id', '=', $request->input('category_id'))
            ->first();

        if(isset($item)){
            //unsubscribe
            return modelSubscribe::find($item->id)->delete();
        }else{
            //subscribe
            $item = modelCategory::find($request->input('category_id'));
            if(isset($item)){
                return modelSubscribe::create($request->validated());
            }else{
                abort(response()->json(['ID' => 'The selected category_id is invalid.'], 422));
            }

        }

    }


}
