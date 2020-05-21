<div class="card col-md-8 m-auto p-0">
    <div class="card-header">
        <h3>Truck Details</h3>
    </div>
    <div class="card-body p-0">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                
                <th scope="col">Truck Name</th>
                <th scope="col">Truck Type</th>
                <th scope="col">Truck Size</th>
                <th scope="col">Truck Location</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach (Auth::user()->trucks as $truck)
              <tr>
              <td>{{ $truck->truck_name }}</td>
              <td>{{ $truck->truck_type }}</td>
              <td>{{ $truck->truck_size }}</td>
              <td>{{ $truck->truck_location }}</td>
              <td>
                <form action="{{ route('trucks.destroy', $truck->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                    <a href=""><button type="submit" class="btn btn-danger">Delete</button></a>
                </form>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
    </div>
</div>
  