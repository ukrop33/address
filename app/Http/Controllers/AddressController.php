<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MoveMoveIo\DaData\Facades\DaDataAddress;

class AddressController extends Controller
{
    public function index()
    {
        return view('index')->with('suggestions', null);
    }

    public function check(Request $request)
    {
        /**
         * DaData standardization example
         *
         * @return void
         */
        $this->validate($request, [
            'address' => 'required'
        ]);
         #echo $request->input('address');

        try {
            $dadata = DaDataAddress::prompt($request->input('address'));


            return view('index')->with('suggestions', $dadata['suggestions']);
            #dd($dadata);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function save()
    {
        return view('index')->with('suggestions', null);
    }
}
