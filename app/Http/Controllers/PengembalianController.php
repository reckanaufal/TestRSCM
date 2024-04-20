<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Success;

class PengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getDataMobil = DB::table('rental as r')
                            ->join('mobil as mo', 'r.mobil_id', '=', 'mo.id')
                            ->select('mo.no_plat', 'mo.merek', 'r.tgl_mulai', 'r.tgl_selesai')
                            ->where('r.status', '0')
                            ->get();
        return view('pengembalian.index', compact('getDataMobil',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $data = Rental::where('mobil_id', $request->rental_id)->get();;
        // dd($data);
        if(empty($data)){
            return redirect()->route('pengembalian.index')->with('delete', 'data sudah ada.');
        }else{
            $pay = new Pengembalian;
            $pay->rental_id = $request->rental_id;
            $pay->total = $request->total;
            $pay->save();

            $fieldUpdate = [
                'status'      => '1',
            ];
            $update = DB::table('rental')->where('mobil_id', $request->rental_id)->update($fieldUpdate);
            // dd($update);
            return redirect('pengembalian')->with('success', 'Data Berhasil disimpan.');
        }
    }




        // $get = Pengembalian::where('id', $request->rental_id);



    public function pengembalian(Request $request)
    {
        $getDataMobil = DB::table('rental as r')
        ->join('mobil as mo', 'r.mobil_id', '=', 'mo.id')
        ->select('mo.no_plat', 'mo.merek', 'r.tgl_mulai', 'r.tgl_selesai')
        ->where('r.status', '0')
        ->get();
        
        $rental = DB::table('rental')
                    ->join('mobil', 'rental.mobil_id', '=', 'mobil.id')
                    ->where('mobil.no_plat', $request->plat_nomor)
                    ->first();
        
        if(empty($rental))
        {
            return redirect ()->route('pengembalian.index')->with('delete', 'Cannot found Plat Number.');
        }
        $startRental = Carbon::parse($rental->tgl_mulai);
        $endRental = Carbon::parse($rental->tgl_selesai);

        $diff_in_days = $startRental->diffInDays($endRental);
        $payment = $rental->tarif * $diff_in_days;
        
        return view('pengembalian.index', compact('payment', 'rental', 'diff_in_days', 'getDataMobil',));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function show(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengembalian  $pengembalian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}
