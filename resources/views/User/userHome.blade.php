<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Home Page</title>
            <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>
    /* From uiverse.io by @alexmaracinaru */
button {
  cursor: pointer;
  font-weight: 700;
  font-family: Helvetica,"sans-serif";
  transition: all .2s;
  padding: 10px 20px;
  border-radius: 100px;
  background: #cfef00;
  border: 1px solid transparent;
  display: flex;
  align-items: center;
  font-size: 15px;
  margin-left: 20px;
}

button:hover {
  background: #c4e201;
}

button > svg {
  width: 34px;
  margin-left: 10px;
  transition: transform .3s ease-in-out;
}

button:hover svg {
  transform: translateX(5px);
}

button:active {
  transform: scale(0.95);
}


</style>
</head>
<body>

{{-- <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand">Admin Profile</a>
      <form class="d-flex input-group w-auto">

      </form>
    </div>
  </nav> --}}
  {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Contact Us</a>
              </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('userProfileShow',Auth()->user()->id) }}">Profile</a>
          </li>


        </ul>
      </div>
    </div>
  </nav> --}}
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Conatct Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('userProfileShow',Auth()->user()->id) }}">Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('userPasswordChangePage') }}">Change Password</a></li>
              <li><hr class="dropdown-divider"></li>
              <form action="{{ route('logout') }}" method="GET">
                @csrf
                <li><a class="dropdown-item text-danger" href="">Logout</a></li>
              </form>
            </ul>
          </li>

        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>

  <div class="container px-4 px-lg-5" id="home">

    <!-- Heading Row-->
    <div class="row gx-4 gx-lg-5 align-items-center my-5">
        <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" id="code-lab-pizza" src="{{ asset('img/13 pro max.jpg') }}" alt="..." /></div>
        <div class="col-lg-5">
            <h1 class="font-weight-light">Oh So. Pro.</h1>
            <p>You Can Buy All Brands You Want!</p>
            <a class="btn btn-primary" href="#!">Enjoy!</a>
        </div>
    </div>

    <!-- Content Row-->
    <div class="d-flex justify-content-around">

        <div class="col-4 me-5">

            <div class="">
                <div class="py-5 text-center">

                    <form  method="GET" action="{{ route('userSearch') }}">
                       @csrf
                        <input class="form-control col-4" type="search" placeholder="Search" aria-label="Search" name="userSearch"><br>
                        <input type="submit" value="Search" class="btn bg-dark text-white">

                    </form>

                 <div class="">
                        <div class="m-2 p-2"><a href="{{ route('userHome') }}" class="text-decoration-none text-dark">All</a></div>
                        @foreach ($category as $item)
                        <div class="m-2 p-2"><a href="{{ route('userCategory',$item->id) }}" class="text-decoration-none text-dark">{{ $item->category_name }}</a></div>

                        @endforeach
                    </div>
                <hr>
                 {{-- <div class="text-center m-4 p-2">
                        <h3 class="mb-3">Start Date - End Date</h3>

                        <form>
                            <input type="date" name="" id="" class="form-control"> -
                            <input type="date" name="" id="" class="form-control">
                        </form>
                    </div>
                    <hr> --}}
                    <div class="text-center ml-2 p-2">
                        <h3 class="mb-3">Min - Max Amount</h3>

                        <form method="GET" action="{{ route('userPriceSearch') }}">
                            @csrf
                            <input type="number" name="minPrice" id="" class="form-control" placeholder="minimum price" value="{{ old('minPrice') }}"> -
                            <input type="number" name="maxPrice" id="" class="form-control " placeholder="maximun price" value="{{ old('maxPrice') }}"><br>
                            <input type="submit" value="Search" class="btn bg-dark text-white">
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="mt-5">

            <div class="row gx-4 gx-lg-5" id="pizza">
               @if ($count==0)
                <p class="text-center text-danger">There is no  data.</p>

               @else

               @foreach ($productData as $item)
               <div class="col-md-6 mb-5">
                   <div class="card h-100" style="width: 270px">
                       <!-- Sale badge-->
                       @if ($item->buy_one_get_one_status==0)
                       <div class="badge bg-danger
                        text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                        Sale

                       </div>
                       @endif
                       <!-- Product image-->
                       <img class="card-img-top" src="{{ asset('uploads/' . $item->image) }}" alt="..." >
                       <!-- Product details-->
                       <div class="card-body p-4">
                           <div class="text-center">
                               <!-- Product name-->
                               <h5 class="fw-bolder">{{ $item->product_name }}</h5>
                               <!-- Product price-->
                               <span class="text-muted text-decoration-line-through">{{ $item->price }}</span> {{ $item->price - $item->discount_price }}
                               <span class="fs-5"> <b>MMK</b></span>
                           </div>
                       </div>
                       <!-- Product actions-->
                      <div class="" id="btn">
                       <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                           {{-- <div class="text-center"><button  class="btn btn-outline-dark mt-auto">Add To Cart</button></div><br> --}}
                      <a href="{{ route('userMoreDetails',$item->id) }}" class="text-decoration-none">
                        <button>
                            <span>More Datails</span>
                            <svg width="34" height="34" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="37" cy="37" r="35.5" stroke="black" stroke-width="3"></circle>
                                <path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
                            </svg>
                        </button>
                      </a>
                       </div>

                      </div>

                   </div>
               </div>
             @endforeach
                 @endif
               {{-- <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Frealfood.tesco.com%2Fmedia%2Fimages%2F1400x919-MargaritaPizza-555a4065-2573-4b41-bcf3-7193cd095d8f-0-1400x919.jpg&imgrefurl=https%3A%2F%2Frealfood.tesco.com%2Fgallery%2F10-perfect-pizza-recipes.html&tbnid=Q6rpKnhQYKqzeM&vet=12ahUKEwiXq5Km7sL4AhWxhNgFHVDxA1gQMyghegUIARDRAg..i&docid=2JjMk-sV-FYGSM&w=1400&h=919&q=pizza&ved=2ahUKEwiXq5Km7sL4AhWxhNgFHVDxA1gQMyghegUIARDRAg" alt="" class="card-img-top">
               <div class="card-body p-4">
                   <div class="text-center">
                       <h5 class="fw-bolder">Cheese Pizza</h5>
                       <span class="text-muted text-decoration-line-through">40000 <span class="fs-5"><b>MMK</b></span></span>

                   </div>
               </div> --}}
{{-- <div class="row gx-4 gx-lg-5">
<div class="col-md-6 mb-5">
    <div class=" card h-100" style="width: 270px">
        <img src="{{ asset('uploads/62b395d1c911b_pizza3.jpeg') }}" alt="" class="card-img-top" style="height: 250px">
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder">Cheese Pizza</h5>
                <span class="text-muted text-decoration-line-through">40000 </span>30000 <span class="fs-5"><b>MMK</b></span>
                <a href="{{ route('pizzaUI') }}"> <button class="btn btn-primary float-end mt-2 col-12"><i class="fas fa-shopping-cart"></i> Order Now</button></a>

            </div>

        </div>

    </div>

</div>
<div class="col-md-6 mb-5">
    <div class=" card h-100" style="width: 270px">
        <img src="{{ asset('uploads/62b33f7025cb0_pizza2.jpeg') }}" alt="" class="card-img-top">
        <div class="card-body p-4">
            <div class="text-center">
                <h5 class="fw-bolder">BBQ Pizza</h5>
                <span class="text-muted text-decoration-line-through">40000 </span> 30000 <span class="fs-5"><b>MMK</b></span>
                <a href="{{ route('BBQ') }}"> <button class="btn btn-primary float-end mt-2 col-12"><i class="fas fa-shopping-cart"></i> Order Now</button></a>

            </div>

        </div>

    </div>

</div>
</div> --}}






            </div>
        </div>
    </div>
</div>
<form action="{{ route('userSend',auth()->user()->id) }}" class="my-4" method="POST">
    @csrf
<div class="text-center d-flex justify-content-center align-items-center" id="contact">

    <div class="col-8 border shadow-sm ps-5 pt-5 pe-5 pb-2 mb-5">
        @if (Session::has('contactSuccess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ Session::get('contactSuccess') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <h3>Contact Us</h3>



            <input type="text" name="name" id="" class="form-control my-3" placeholder="Name">
            @if ($errors->has('name'))
            <p class="text-danger">{{ $errors->first('name') }}</p>
        @endif
            <input type="text" name="email" id="" class="form-control my-3" placeholder="Email">
            @if ($errors->has('email'))
            <p class="text-danger">{{ $errors->first('email') }}</p>
        @endif
            <textarea class="form-control my-3" id="exampleFormControlTextarea1"  rows="3" placeholder="Message" name="message" style="resize: none"></textarea>
            @if ($errors->has('message'))
            <p class="text-danger">{{ $errors->first('message') }}</p>
        @endif
        <input type="submit" value="Send" class="btn bg-dark text-white">
        </form>
    </div>
</div>

</body>
</html>
