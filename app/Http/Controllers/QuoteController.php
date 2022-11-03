<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Quotes;
class QuoteController extends Controller
{
    public function index()
    {
    	$quote_one = Quotes::query();
    	return view("managequote.home",["quote_one"=>$quote_one]);
    }
}
