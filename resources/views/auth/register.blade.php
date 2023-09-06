<x-registerlayout>
    <form class="login-form" 
        action="/register"
        method="POST"
    >
        @csrf
            <h2>Login</h2>
            <div class="input-container">
                <input type="text" name="name" value="{{old("name")}}" required />
                <label>Name</label>
                <i class="bx bxs-user"></i>
             @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror 
        </div>
        <div class="input-container">
            <input type="text" name="email" value="{{old("email")}}" required />
            <label>Email</label>
            <i class="bx bxs-user"></i>
         @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror 
    </div>
        <div class="input-container">
            <input type="password" name="password"  value="{{old("password")}}"  required>
            <label >Password</label>
            <i class='bx bxs-user'></i>
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
       
             <div class="input-container">
                <input type="username" name="username"  value="{{old("username")}}"  required>
                <label >Username</label>
                <i class='bx bxs-user'></i>
                @error('username')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="input-container">
                <input type="password" name="password_confirmation"  value="{{old("password")}}"  required>
                <label >Comfirmed password</label>
                <i class='bx bxs-user'></i>
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
        <div>
            <button type="submit">register</button>
        </div>
    </form>
</x-registerlayout>