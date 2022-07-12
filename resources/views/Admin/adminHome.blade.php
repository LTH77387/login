@extends('app.app')
@section('content')
{{-- <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Admin Profile</a>
      <form class="d-flex input-group w-auto">

      </form>
    </div>
  </nav> --}}
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('adminProfile') }}">Admin Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('userProfileList') }}">User Profile</a>
          </li>
          <li class="nav-item">
              <a href="{{ route('adminCategoryPage') }}" class="nav-link">Category</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('adminProductList') }}" class="nav-link">Products</a>
        </li>
          <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
            <input type="submit" value="Logout" class="btn bg-danger">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

@endsection
