<h1>Customer details</h1>

<a href="/customers"> Back</a> <br>

<strong>Name</strong>
<p>{{ $customer->name }}</p>

<strong>email</strong>
<p> {{ $customer->email }}</p>

<div>
    <a href="/customers/{{ $customer->id }}/edit"> edit </a>
</div>