<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Creative Coder</a>
      <div class="d-flex">
        <a href="/" class="nav-link">Home</a>
        <a href="/#blogs" class="nav-link">Blogs</a>
        <a href="#subscribe" class="nav-link">Subscribe</a>
        @if (auth()->check())
        <a href="" class="nav-link">{{auth()->user()->name}}</a>
        @endif
        @if (!auth()->check())
        <a href="/login" class="nav-link">login</a>
        <a href="/register" class="nav-link">Register</a>

        @else
        <form action="/logout" class="btn-btn-link" method="POST" >
          @csrf
          <button type="submit" class="btn btn-link">logout</button>

        </form>
        @endif

      </div>
    </div>
  </nav>