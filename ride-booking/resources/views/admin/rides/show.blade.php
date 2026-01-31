<h1>Ride Details</h1>
<p>Passenger: {{ $ride->passenger->name }}</p>
<p>Driver: {{ optional($ride->driver)->name }}</p>
<p>Status: {{ $ride->status }}</p>
<p>Pickup: {{ $ride->pickup_lat }}, {{ $ride->pickup_lng }}</p>
<p>Destination: {{ $ride->destination_lat }}, {{ $ride->destination_lng }}</p>
