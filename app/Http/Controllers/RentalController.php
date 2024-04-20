<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Rental;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental = Rental::where('created_by', session()->get('id'))->get();
        return view('rental.index', compact(
            'rental',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mobil $mobil)
    {
        // $dataMobil = $mobil->getDataMobil();
        // dd($dataMobil);
        $dataMobil = Mobil::all();
        return view('rental.create', compact(
            'dataMobil',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rental = Rental::where('id', $request->mobil_id)->first();

        // get rentang data rental from db
        if (!empty($rental)) {
            $startRental = Carbon::parse($rental->tgl_mulai);
            $endRental = Carbon::parse($rental->tgl_selesai);
            $dateRangeRental = [];
    
            while ($startRental->lte($endRental)) {
                $dateRangeRental[] = $startRental->format('Y-m-d'); 
                $startRental->addDay();
            }
            // get rentang data rental from db
            
            // get rentang from input crete rental
            $start = Carbon::parse($request->tgl_mulai);
            $end = Carbon::parse($request->tgl_selesai);
            $dateRange = [];
    
            while ($start->lte($end)) {
                $dateRange[] = $start->format('Y-m-d'); 
                $start->addDay();
            }
            // get rentang from input crete rental
            $result = array_intersect($dateRangeRental, $dateRange);
            // dd($result);
            if ($result != null) {
                $alertResult = '';
                foreach ($result as $item) {
                   $alertResult .= $item.' '; 
                }
                return redirect()->route('rental.create')
                ->with('delete', self::$pageTitle.' Rental failed because date '.$alertResult.'is use');
            } else {
                $rental = new Rental;
                $rental->mobil_id = $request->mobil_id;
                $rental->tgl_mulai = $request->tgl_mulai;
                $rental->tgl_selesai = $request->tgl_selesai;
                $rental->status = '0';
                $rental->created_at = date('Y-m-d');
                $rental->created_by = $request->session()->get('id');
                $rental->save();
        
                return redirect()->route('rental.index')
                ->with('success', self::$pageTitle.'  Registration Successfully');
            }
        } else {
            $rental = new Rental;
            $rental->mobil_id = $request->mobil_id;
            $rental->tgl_mulai = $request->tgl_mulai;
            $rental->tgl_selesai = $request->tgl_selesai;
            $rental->status = '0';
            $rental->created_at = date('Y-m-d');
            $rental->created_by = $request->session()->get('id');
            $rental->save();
    
            return redirect()->route('rental.index')
            ->with('success', self::$pageTitle.'  Registration Successfully');
        }

    }

    public function pengembalian($id)
    {
        $rental = Rental::where('id', decrypt($id))->first();
        dd($rental);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit(Rental $rental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rental $rental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rental::find($id)->delete();
        return redirect('mobil')->with('delete','Data berhasil dihapus.');
    }
}
