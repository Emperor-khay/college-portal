@auth
<nav class="navbar navbar-expand-lg bg-dark bg-gradient sticky-top">
    <div class="container-fluid">
      <h1 class="navbar-brand text-light" >Welcome,  {{ (Auth::user()->firstname) }} {{ (Auth::user()->lastname) }}!</h1>
      <button class="navbar-toggler  bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">Home</a>
          </li> --}}
          <li class="nav-item mx-2 text-light">
            <a class="nav-link btn btn-secondary text-light " href="{{ route('dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item mx-2 text-light">
            <a class="nav-link btn btn-secondary text-light text-light-hover" href="{{ route('courses.level') }}">Course Registration</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-secondary text-light" href="">Advising Appointments</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-secondary text-light" href="{{ route('request.result') }}">Upload result</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-secondary text-light" href="{{ route('view.result') }}">View result</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-secondary text-light" href="{{ route('profile') }}">Profile</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link btn btn-secondary text-light btn btn-danger" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
@endauth
