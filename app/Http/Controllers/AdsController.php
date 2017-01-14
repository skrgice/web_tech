<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;
use App\Http\Requests;
use Auth;
use Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Facades\Storage;
use DB;
use App\User;

class AdsController extends Controller
{
    public function test(){

    }
    /**
     * @param Request $request
     * @return string
     */
    public function insert_ad(Request $request)
    {

        $ad = new Ad();

        $ad->titel = $request->get('titel');
        $ad->category = $request->get('category');
        $ad->price = $request->get('price');
        $ad->state = $request->get('state');
        $ad->zip = $request->get('zip');
        $ad->address = $request->get('address');
        $ad->number = $request->get('number');
        $ad->email = $request->get('email');
        $ad->name = $request->get('name');
        $ad->description = $request->get('description');
        $ad->image = $request->file('file')->store('images');


        $ad->save();

        return view('home');



    }

    public function index()
    {
        $ads = Ad::all();

        return View::make('home', compact('ads'));
    }



}
