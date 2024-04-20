<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Registration;

class BiodataController extends Controller
{
    public static $pageTitle = 'Biodata';
    public function show ($id)
    {
        $pageTitle = self::$pageTitle;
        $Biodata = Biodata::find($id);
        $Movie = Registration::where('biodata_id','=',$id)->first();
        return view('biodata.show',compact('Biodata', 'Movie'));
    }
}
