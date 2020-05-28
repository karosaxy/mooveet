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

        return view('scan.create');
    }

    public function scan(Request $request)
    {
        //$message =  'There are no Trucks Available at your current Location, Try again Later';
        
        $trucks = Truck::where('truck_location', $request->pickup_location)->where('truck_size', $request->truck_size)->get();
     
        //dd($trucks);

          if (count($trucks)===0){
              session()->flash('message', 'Sorry we could not find any Truck matching your criteria.');
          }
        //   return view('scan.show')->$message;

        //     else
           return view('scan.show')->withTrucks($trucks);
      

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, OrderTruck $orderTruck)
    {
        

        $validatedData = $request-> validate([
            'name'=>['required'],
            'phone'=>['required'],
            'pickup_location'=>['required'],
            'destination'=>['required'],
            'truck_size'=>['required'],
            'goods_type'=>['required'],
        ]);
        // $trucks = [];
        // $data = Truck::where('truck_location', $request->pickup_location)->get();
        
        // foreach($data as $truck){
        //     array_push($trucks, $truck->id);
        // }

       

      $saveOrderTruck =  OrderTruck::create([
         
            'name'=> $request->name,
            'phone'=> $request->phone,
            'pickup_location'=> $request->pickup_location,
            'destination'=> $request->destination,
            'truck_size'=> $request->truck_size,
            'goods_type'=> $request->goods_type,

            
        ]);
        //dd($saveOrderTruck);

        if($saveOrderTruck){
           // dd("Saved");
            return view('scan.show');
        }else{
            return 'Scan was unsuccessful, Try Again';
        }
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderTruck  $orderTruck
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $truck = Truck::where('truck_location', $request->pick_location)->where('truck_size', $request->truck_size)->get();
           dd($truck);
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
