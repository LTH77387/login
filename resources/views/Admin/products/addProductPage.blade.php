<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
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
          <div class="row mt-4">
            <div class="col-8 offset-3 mt-5">

              <div class="col-md-9">

                @if (Session::has('createPizza'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('createPizza') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                <a href="{{ route('adminProductList') }}" class="text-decoration-none text-dark "> <i class="fas fa-arrow-left"></i>Back</a>

                <div class="card">
                  <div class="card-header p-2">
                    <legend class="text-center">Add Products</legend>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <form class="form-horizontal" method="POST" action="{{ route('adminCategoryAdd') }}" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" ><br>
                              @if ($errors->has('name'))
                                  <p class="text-danger">{{ $errors->first('name') }}</p>
                              @endif
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Product Image</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="inputName" placeholder="Pizza Image" name="image" >
                                  @if ($errors->has('image'))
                                      <p class="text-danger">{{ $errors->first('image') }}</p>
                                  @endif
                                </div>
                              </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Product Price</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputName" placeholder="Product Price" name="price" ><br>
                              @if ($errors->has('image'))
                                  <p class="text-danger">{{ $errors->first('price') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publish Status</label>
                            <div class="col-sm-10">
                             <select name="publish" class="form-control">
                               <option value="0">Unpublish</option>
                               <option value="1">Publish</option>
                             </select>
                              @if ($errors->has('price'))
                                  <p class="text-danger">{{ $errors->first('publish') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                              <select name="category" class="form-control">
                                <option value="">Choose Option...</option>
                            @foreach ($create as $item)

                           <option value="{{ $item->id }}">{{ $item->category_name }}</option>

                            @endforeach
                          </select>
                              @if ($errors->has('price'))
                                  <p class="text-danger">{{ $errors->first('category') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Discount Price</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputName" placeholder="Product Price" name="discount" ><br>
                              @if ($errors->has('image'))
                                  <p class="text-danger">{{ $errors->first('discount') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Waiting Time</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputName" placeholder="Product Price" name="waitingTime" ><br>
                              @if ($errors->has('waitingTime'))
                                  <p class="text-danger">{{ $errors->first('waitingTime') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Ram:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputName" placeholder="Ram" name="ram" ><br>
                                @if ($errors->has('ram'))
                                    <p class="text-danger">{{ $errors->first('ram') }}</p>
                                @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Battery:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputName" placeholder="Battery" name="battery" ><br>
                                @if ($errors->has('battery'))
                                    <p class="text-danger">{{ $errors->first('battery') }}</p>
                                @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Internal Storage:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputName" placeholder="Internal Storage" name="storage" ><br>
                                @if ($errors->has('storage'))
                                    <p class="text-danger">{{ $errors->first('storage') }}</p>
                                @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Front Camera:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputName" placeholder="Front Camera" name="frontCamera" ><br>
                                @if ($errors->has('frontCamera'))
                                    <p class="text-danger">{{ $errors->first('frontCamera') }}</p>
                                @endif
                              </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Back Camera:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="inputName" placeholder="Back Camera" name="backCamera" ><br>
                                @if ($errors->has('backCamera'))
                                    <p class="text-danger">{{ $errors->first('backCamera') }}</p>
                                @endif
                              </div>
                          </div>

                          {{-- <select class="form-select" multiple size="4"  multiple aria-label="multiple select example" name="">
                            <option value="1">Forest Green</option>
                            <option value="2">White</option>
                            <option value="3">Light Blue</option>
                            <option value="4">Black</option>

                          </select> --}}

                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                             <input type="submit" value="Add" class="btn bg-dark text-white">
                            </div>
                          </div>
                        </form>

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
