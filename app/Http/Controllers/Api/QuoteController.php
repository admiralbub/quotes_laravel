<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Quotes;
//use App\Http\Requests\QuotesValidator;

class QuoteController extends Controller
{
    public function store(Request $request)
    {
        
        $validator = \Validator::make($request->all(), [
            'quotes' => 'required|unique:quotes,quotes,' . $request->id . '|max:220|min:10',
           
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } else {
            $article = Quotes::create($request->all());
        }


        
    }

    public function update(Request $request,$id)
    {
        $validator = \Validator::make($request->all(), [
            'quotes' => 'required|max:220|min:10',
        ]);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        } else {
           
            Quotes::where('id', $id)->update($request->all());
        }
    }
}
