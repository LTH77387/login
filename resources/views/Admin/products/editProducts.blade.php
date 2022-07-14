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

                @if (Session::has('updatePizzaData'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('updatePizzaData') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif

                <a href="{{ route('adminProductList') }}" class="text-decoration-none text-dark "> <i class="fas fa-arrow-left"></i>Back</a>

                <div class="card">
                  <div class="card-header p-2">
                    <legend class="text-center">Edit Products</legend>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <form class="form-horizontal" method="POST" action="{{ route('editProduct',$edit->product_id) }}" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" value="{{ old('name',$edit->product_name) }}" name="name" ><br>
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
                              <input type="number" class="form-control" id="inputName" placeholder="Product Price" name="price" value="{{ old('price',$edit->price) }}"><br>
                              @if ($errors->has('price'))
                                  <p class="text-danger">{{ $errors->first('price') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Publish Status</label>
                            <div class="col-sm-10">
                                <select name="publish" class="form-control">
                                    @if ($edit->publish_status==0)
                                    <option value="1">Publish</option>
                                    <option value="0" selected>Unpublish</option>
                                    @else
                                    <option value="0" >Unpublish</option>
                                    <option value="1" selected>Publish</option>
                                    @endif
                                  </select>
                              @if ($errors->has('price'))
                                  <p class="text-danger">{{ $errors->first('publish') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select name="category" id="" class="form-control">
                                    {{-- <option value="">Choose Options...</option> --}}
                                    @foreach ($create as $item)

                                      @if ($item->category_id != $edit->id)
                                      <option value="{{ $item->id }}" >{{ $item->category_name }}</option>
                                      @else{
                                        <option value="{{ $item->id }}" selected>{{ $item->category_name }}</option>
                                      }
                                      @endif
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
                              <input type="number" class="form-control" id="inputName" placeholder="Product Price" name="discount" value="{{ old('discount',$edit->discount_price) }}"><br>
                              @if ($errors->has('discount'))
                                  <p class="text-danger">{{ $errors->first('discount') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Waiting Time</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputName"  name="waitingTime" value="{{ old('waitingTime',$edit->waiting_time) }}" ><br>
                              @if ($errors->has('waitingTime'))
                                  <p class="text-danger">{{ $errors->first('waitingTime') }}</p>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label  class="col-sm-2 col-form-label">Ram : </label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="inputName"  name="ram" value="{{ old('ram',$edit->ram) }}" ><br>
                              @if ($errors->has('ram'))
                                  <p class="text-danger">{{ $errors->first('ram') }}</p>
                              @endif
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Battery</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputName" name="battery" value="{{ old('battery',$edit->battery) }}" ><br>
                                  @if ($errors->has('battery'))
                                      <p class="text-danger">{{ $errors->first('battery') }}</p>
                                  @endif
                                </div>
                              </div>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Internal Storage</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputName" name="storage" value="{{ old('storage',$edit->internal_storage) }}" ><br>
                                  @if ($errors->has('storage'))
                                      <p class="text-danger">{{ $errors->first('storage') }}</p>
                                  @endif
                                </div>
                              </div>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Front Camera</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputName"  name="frontCamera" value="{{ old('frontCamera',$edit->front_camera) }}" ><br>
                                  @if ($errors->has('frontCamera'))
                                      <p class="text-danger">{{ $errors->first('frontCamera') }}</p>
                                  @endif
                                </div>
                              </div>
                              <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Back Camera</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="inputName"  name="backCamera" value="{{ old('frontCamera',$edit->back_camera) }}" ><br>
                                  @if ($errors->has('backCamera'))
                                      <p class="text-danger">{{ $errors->first('backCamera') }}</p>
                                  @endif
                                </div>
                              </div>
                          </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                             <input type="submit" value="Update" class="btn bg-dark text-white">
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
