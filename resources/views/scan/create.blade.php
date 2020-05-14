@extends('layouts.app2')
@section('content')
    <div class="container">
        <h2 class="navbar pb-0 text-muted">{{__("Scan For A Truck")}}</h2>
        <hr>
        <div class="card">
            <form class="border mt-5 border-light shadow p-5" action="{{ route('scan.search') }}" method="post">
                @csrf
            
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control form-control mb-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name">
            
                    @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="col">
                    <input type="text" class="form-control form-control mb-4 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="phone">
                    
                    @error('phone')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
            
            
                <div class="row">
                    <div class="col">
                    <input type="text" class="form-control form-control mb-4 @error('pickup_location') is-invalid @enderror" name="pickup_location" value="{{ old('pickup_location') }}" placeholder="PickUp">
                    
                    @error('pickup_location')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="col">
                    <input type="text" class="form-control @error('destination') is-invalid @enderror" name=
                    "destination" value="{{ old('destination') }}" placeholder="Destination">
                    
                    @error("destination")
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                    </div>
                </div>
            
                <div>
                    <label for="exampleFormControlSelect1 text-nude">Choose A Category</label>
                    <select class="form-control form-control mb-4 @error('goods_type') is-invalid @enderror"  name="goods_type" value="Choose A Category" id="exampleFormControlSelect1" required>
                    <option value="Choose a Category" disabled>Choose A Category</option>
                    <option>Regular</option>
                    <option>Fragile</option>
                    <option>Perishables</option>
                    <option>Hazardous</option>
                    <option>Livestocks</option>
                    </select>
            
                    @error('goods_type')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
            
                <div>
                    <label for="exampleFormControlSelect1 text-nude">Required Truck Size</label>
                    <select class="form-control form-control mb-4 @error('truck_size') is-invalid @enderror" name="truck_size" value="Select A Truck Size" id="exampleFormControlSelect1" required>
                    <option>Less than 5 tonnes</option>
                    <option>5-10 tonnes</option>
                    <option>10-15 tonnes</option>
                    <option>15-20 tonnes</option>
                    <option>20-25 tonnes</option>
                    <option>25 tonnes and above</option>
                    </select>
            
                    @error('truck_size')
                        <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <hr>
                <button class="btn btn-info my-4 btn-block" type="submit" name="scan"> {{ __('Scan') }}</button>
            </form>
        </div>
    </div>
@endsection
