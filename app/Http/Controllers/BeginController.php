<?php

namespace App\Http\Controllers;

use App\Coin;
use App\Jobs\SyncCoins;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BeginController extends Controller
{
    public function index(){
        //dispatch(new SyncCoins());
        $deneme = (Coin::with('current')->get());
        return view('welcome',compact('deneme'));
    }

    public function getCoins(){
        $deneme = (Coin::with('current')->take(10)->get());
        return response()->json($deneme);
    }

    public function detail($id){
        $coinDetail = Coin::with(['current','histories'])->find($id);
        return view('Detail',compact('coinDetail'));
    }

}
