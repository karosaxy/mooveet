<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\OrderTruck;
use App\Truck;
use Illuminate\Http\Request;

class OrderTruckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $request = DB::table('trucks')->where('truck_location', '$request')->get();

        return view('scan.index', compact($request));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('scan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $validatedData = $request-> validate([
            'name'=>['required'],
            'phone'=>['required'],
            'pickup_location'=>['required'],
            'destination'=>['required'],
            'truck_size'=>['required'],
            'goods_type'=>['required'],
        ]);

        OrderTruck::create([
            'truck_id'=>Truck::where('id', 'pickup_location'),
            'name'=> $request->name,
            'phone'=> $request->phone,
            'pickup_location'=> $request->pickup_location,
            'destination'=> $request->destination,
            'truck_size'=> $request->truck_size,
            'goods_type'=> $request->goods_type,
        ]);

        return view('scan.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderTruck  $orderTruck
     * @return \Illuminate\Http\Response
     */
    public function show(OrderTruck $orderTruck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderTruck  $orderTruck
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderTruck $orderTruck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderTruck  $orderTruck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderTruck $orderTruck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderTruck  $orderTruck
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderTruck $orderTruck)
    {
        //
    }
}
