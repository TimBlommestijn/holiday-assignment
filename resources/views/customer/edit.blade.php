<h1>Edit Customer Details</h1>

<form action="/customers/{{ $customer->id }}" method="post">
    @csrf
    @method('PATCH')
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $customer->name }}" id="">
        @error('name') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div>
        <label for="email`">Email: </label>
        <input type="email" name="email" value="{{ $customer->email}}" id="">
        @error('email') <p style="color:red">{{$message}}</p> @enderror
    </div>

    @csrf

    <button type="submit"> edit customer </button>
</form>