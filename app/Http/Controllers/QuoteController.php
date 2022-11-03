<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Quotes;
class QuoteController extends Controller
{
    public function index()
    {
    	$quote_one = Quotes::query()->get();
    	return view("managequote.home",["quotes_one"=>$quote_one]);
    }

    public function show($id) {
    	$quote_one = Quotes::query()->where("id",$id)->first();
    	return view("managequote.edit_quote",["quotes_one"=>$quote_one]);
    }
}
