<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Product List Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body>
    <section class="content">


        <div class="container-fluid">
          @if (Session::has('createPizza'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('createPizza') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
          <div class="row mt-4">
            <div class="col-8 offset-3 mt-5">

              <div class="col-md-9">
                <a href="{{ route('adminProductList') }}" class="text-decoration-none text-dark "> <i class="fa fa-arrow-left"></i>Back</a>

                <div class="card">
                  <div class="card-header p-2">
                    <legend class="text-center">Product Information</legend>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                     <div class="text-center">
                        <img src="{{ asset('/uploads/' . $productList->image) }}" class="img-thumbnail" width="100px" height="100px" class="rounded-circle" style="border-radius: 30px">
                    </div>
                        <div class="text-center">
                            <div class="">
                                <label>Pizza Name:</label> <label>{{ $productList->product_name }}</label>
                            </div>
                            <div class="">
                                <label>Description:</label> <label>{{ $productList->description }}</label>
                            </div>
                            <div class="">
                                <label>Price:</label> <label>{{ $productList->price }}</label>
                            </div>
                            <div class="">
                                <label>Category ID:</label> <label>{{ $productList->category_id }}</label>
                            </div>
                            <div class="">
                                <label>Waiting Time:</label> <label> {{ $productList->waiting_time }} Days</label>
                            </div>
                            <div class="">
                                <label>Discount:</label> <label> {{ $productList->discount_price }}MMK</label>
                            </div>


                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

</body>
</html>
