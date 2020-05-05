@extends('layouts.app2')

@section('content')
<div class="container pt-3">
    <div class="row justify-content-center">
       

        <div class="col-md-8">
            <div class="card">
            <div class="card-header">
                Welcome {{ Auth::user()->name }}
                <a href="" class="text-reset">
                    <input class="btn btn-success text-white" style="float:right;" type="button" value="Edit Profile">
                </a>
                <a href="{{ route('trucks.create') }}" class="text-reset">
                    <input class="btn btn-secondary text-white" style="float:right;" class="input-btn" type="button" value="Register A Truck">
                </a>
            
            </div>

                <div class="card-body">
                     <img alt="User Pic" src="{{ asset('/storage/images/'.Auth::User()->avatar) }}" class="rounded-circle">

                    <form action="/upload" method="post" enctype="multipart/form-data">
                  
                        
                        <input type="file" name="image" id="">
                        @csrf
                        <input type="submit" name="upload" value="Upload" id="">
                    
                    </form>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table mb-4">
                        <thead class="thead-dark">
                          <tr>
                            <h3>Profile Details</h3>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Name:</th>
                              <td>
                                  {{ Auth::user()->name}}                        
                                </td>
                                <th scope="row">Email:</th>
                                <td>
                                    {{ Auth::user()->email}}                      
                                  </td>
                                  <th scope="row">Phone:</th>
                                  <td>
                                      {{ Auth::user()->phone}}                        
                                    </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.trucks')
@endsection
