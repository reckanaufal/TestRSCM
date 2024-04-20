<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Biodata;
use App\Models\Registration;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use DB;

class RegistrationController extends Controller
{
    public static $pageTitle = 'Registration';
    
    public function index ()
    {
        $pageTitle = self::$pageTitle;
        $Movie = Registration::all();
        return view ('Registration.index', compact('pageTitle', 'Movie'));
    }
    
    public function store(Request $request)
    {
        // dd($request);
        $pageTitle = self::$pageTitle;
        $Biodata = new Biodata;
        $Biodata->nama_lengkap    = $request->nama_lengkap;
        $Biodata->no_sim          = $request->no_sim;
        $Biodata->alamat          = $request->alamat;
        $Biodata->no_hp           = $request->no_hp;
        $Biodata->save();

        // $Registration = new Registration;
        // $Registration->biodata_id              = $Biodata->id;
        // $Registration->status                = '0';
        // $Registration->registration_at         = date('Y-m-d H:i:s');
        // $Registration->save();

        $user = new User;
        $user->biodata_id   = $Biodata->id;
        $user->name         = $request->nama_lengkap;
        $user->email        = $request->email;
        $user->status        = 'pengguna';
        $user->password     = Hash::make($request->password);
        $user->save();

        return view('Registration.Registration')
        ->with('success', self::$pageTitle.'  Registration Successfully');
        // return view ('', compact('pageTitle'));
    }
    public function Registration ()
    {
        $pageTitle = self::$pageTitle;
        return view ('Registration.Registration', compact('pageTitle'));
    }
    public function edit ($id)
    {
        $Movie = Registration::find(decrypt($id));
        $pageTitle = self::$pageTitle;

        return view('Registration.edit', compact('Movie', 'pageTitle'));
    }
    public function update(Request $request, $id)
    { 
        $fieldUpdateBiodata = [
            'nama_lengkap'  => $request->input('nama_lengkap'),
            'no_identitas'      => $request->input('no_identitas'),
            'tempat_lahir'      => $request->input('tempat_lahir'),
            'tgl_lahir'   => $request->input('tgl_lahir'),
            'no_hp'     => $request->input('no_hp'),
        ];
        $fieldUpdateMovie = [
            'status'     => $request->input('status'),
        ];
        $Movie = Registration::find($id);
        DB::table('biodata')->where('id', $Movie->biodata_id)->update($fieldUpdateBiodata);
        DB::table('registration')->where('id', $id)->update($fieldUpdateMovie);

        return redirect()->route('Registration.index')
            ->with('success', self::$pageTitle.' updated successfully');
    }

    public function destroy(Request $request, $id)
    {
        $Company = Registration::find($id)->delete();

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'code' => 200,
                'message' => self::$pageTitle.' deleted successfully'
            ], 200);
        }

        return redirect()->route('Registration.index')
            ->with('success', self::$pageTitle.' deleted successfully');
    }
}