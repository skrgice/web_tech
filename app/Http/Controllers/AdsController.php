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
use Illuminate\Support\Facades\View;



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

        $file = $request->file('file');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $ad->image = $filename;

        Image::make($file)->resize(550, 300)->save( public_path('uploads/ad/' . $filename ) );


        $ad->save();

        return view('home')->with('ads', Ad::all());



    }

    public function index()
    {
        return View::make('index')
            // all the bears (will also return the fish, trees, and picnics that belong to them)
            ->with('users', User::all());
    }

    public function showAds()
    {
        return View::make('index') -> with('ads', Ad::all());
    }



}
