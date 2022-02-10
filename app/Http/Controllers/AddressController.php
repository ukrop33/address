<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use MoveMoveIo\DaData\Facades\DaDataAddress;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->forget('success');
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

        try {
            $dadata = DaDataAddress::prompt($request->input('address'));


            return view('index')->with('suggestions', $dadata['suggestions']);
            #dd($dadata);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }

    public function save(Request $request)
    {
        $dadata = DaDataAddress::standardization($request->input('save-address'));
        #dd($dadata);

        $address = new Address();
        $address->

        session(['success' => 'Адрес сохранен']);
        return view('index')->with('suggestions', null);
    }
}
