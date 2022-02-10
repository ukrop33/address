<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MoveMoveIo\DaData\Facades\DaDataAddress;

class DadataController extends Controller
{
    /**
     * Class DaData
     * @package App\DaData
     */

    /**
     * DaData standardization example
     *
     * @return void
     */
    public function standardizationExample(): void
    {
        $dadata = DaDataAddress::standardization('мск сухонска 11/-89');

        dd($dadata);
    }
}
