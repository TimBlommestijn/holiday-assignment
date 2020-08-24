<h1>add new customer</h1>

<form action="/customers" method="post">

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{old('name')}}" id="">
        @error('name') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div>
        <label for="email`">Email: </label>
        <input type="email" name="email" value="{{old('email')}}" id="">
        @error('email') <p style="color:red">{{$message}}</p> @enderror
    </div>

    @csrf

    <button type="submit"> submit </button>
</form>