<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Biodata;
use DB;
class CheckinController extends Controller
{
    public static $pageTitle = 'Check-in';
    public function index ()
    {
        $pageTitle = self::$pageTitle;
        return view ('checkin.checkin', compact('pageTitle'));
    }

    public function CheckinMovie (Request $request)
    {
        $pageTitle = self::$pageTitle;
        $getMovie = Registration::where('tiket_id','=',$request->tiket_id)->first();
        if ($getMovie != null) {
            if ($getMovie->status == 1) {
                return redirect('/checkin')
                    ->with('error', 'ID pernah dipakai.');
            } else {
                $Biodata = Biodata::find($getMovie->biodata_id);
                $this->UpdateStatus($getMovie->biodata_id);
                return redirect('biodata/'. $getMovie->biodata_id);
            }
        } else {
            return redirect('/checkin')
                ->with('error', 'ID tidak valid atau salah, Silahkan coba lagi.');
        }
    }
    public function UpdateStatus ($id)
    {
        $fieldUpdate = [
            'status'  => 1,
            'registration_at' => date('Y-m-d H:i:s')
        ];
        $update = DB::table('registration')->where('biodata_id', $id)->update($fieldUpdate);
    }
}
