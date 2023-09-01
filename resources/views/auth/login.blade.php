<x-layout>
    <form
        action="/login"
        method="POST"
    >
        @csrf
       
        <div>
            <label for="">email</label>
            <input
                type="email"
                name="email"
                value="{{old("email")}}"
            >
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
       
        <div>
            <label for="">Password</label>
            <input
                type="password"
                name="password"
            >
        </div>
     
        <div>
            <button type="submit">login</button>
        </div>
</x-layout>
