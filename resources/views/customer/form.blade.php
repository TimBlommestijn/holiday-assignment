<div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{old('name') ?? $customer->name}}" id="">
        @error('name') <p style="color:red">{{$message}}</p> @enderror
    </div>
    <div>
        <label for="email`">Email: </label>
        <input type="email" name="email" value="{{old('email') ?? $customer->email}}" id="">
        @error('email') <p style="color:red">{{$message}}</p> @enderror
    </div>

    @csrf