<h1>All Rides</h1>
@foreach($rides as $ride)
<a href="/admin/rides/{{ $ride->id }}">Ride #{{ $ride->id }}</a><br>
@endforeach
