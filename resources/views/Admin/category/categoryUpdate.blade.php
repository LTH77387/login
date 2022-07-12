<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Edit Page</title>
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
                    @if (Session::has('categoryEdit'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      {{ Session::get('categoryEdit') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                <a href="{{ route('adminCategoryPage') }}" class="text-decoration-none text-dark "> <i class="fas fa-arrow-left"></i>Back</a>

                <div class="card">
                  <div class="card-header p-2">
                    <legend class="text-center">Edit Category</legend>
                  </div>
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <form class="form-horizontal" method="POST" action="{{ route('categoryEdit',$categoryData->category_id) }}">
                            @csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Category Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{ $categoryData->category_name }}">
                              @if ($errors->has('name'))
                                  <p class="text-danger">{{ $errors->first('name') }}</p>
                              @endif
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
