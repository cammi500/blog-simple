
<x-loginlayout>

    <form class="login-form"  action="/login"  method="POST">
            @csrf
        <h2>Login</h2>
        <div class="input-container">
            <input type="email" name="email"  value="{{old("email")}}"  required>
            <label >Email</label>
            <i class='bx bxs-user'></i>
            @error('email')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="input-container">
            
            <input type="password" name="password" required>
            <label >Password</label>
            <i class='bx bxs-lock-alt'></i>
        </div>

        <div class="link ">
            <a href="#">Forgot password</a>
            <div class="btn">
            <button type="submit">Login</button>
        </div>
</div>
</x-loginlayout>