
  
<div class="container">
    <div class="col-md-8">
    <a href="{{ route('home') }}">
            <input type="button" value="back">
        </a>
        <h2 class="navbar pb-0 text-muted">{{__("Truck Registration")}}</h2>
        <hr>
        <div class="row">
            <form action="/truck" method="post">
                @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Truck Name</label>
                        <input type="text" class="form-control @error('truck_name') is-invalid @enderror" name="truck_name" value="{{ old('truck_name') }}" id="exampleFormControlInput1" placeholder="Truck Name">

                        @error('truck_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Truck Location</label>
                        <input type="text" class="form-control @error('truck_location') is-invalid @enderror" name="truck_location" value="{{ old('truck_location') }}" id="exampleFormControlInput1" placeholder="Location">
                        @error('truck_location')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Truck Type</label>
                        <select class="form-control @error('truck_type') is-invalid @enderror" name="truck_type" value="{{ old('truck_type') }}" id="exampleFormControlSelect1">
                        <option>Semi-Trailer</option>
                        <option>Tanker</option>
                        <option>Box-Truck</option>
                        <option>Flatbed</option>
                        <option>Refrigerator</option>
                        </select>

                        @error('truck_type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Truck Size</label>
                        <select class="form-control @error('truck_size') is-invalid @enderror" name="truck_size" value="{{ old('truck_size') }}" id="exampleFormControlSelect1">
                        <option>Less than 5 tonnes</option>
                        <option>5-10 tonnes</option>
                        <option>10-15 tonnes</option>
                        <option>15-20 tonnes</option>
                        <option>20-25 tonnes</option>
                        <option>25 tonnes and above</option>
                        </select>

                        @error('truck_size')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>  
                    <hr>
                    <button class="btn btn-info my-4 btn-block" type="submit" name="register"> {{ __('Register') }}</button>
            
            </form>
        </div>
    </div>
 </div>