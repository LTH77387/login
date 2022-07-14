<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Category Page</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

</head>
<body>
      <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        @if (Session::has('deleteSuccess'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('deleteSuccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
        @if (Session::has('addCategory'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('addCategory') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
          @if (Session::has('updateCategory'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('updateCategory') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::has('deleteCategory'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ Session::get('deleteCategory') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

        <div class="row mt-4">
          <div class="col-12">
            <a href="{{ route('adminHome') }}">
                <button class="btn bg-dark text-white mb-3" style="margin-top: 20px;">
                    <i class="fa fa-backspace"></i> Back
                </button>
            </a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
               <a href="{{ route('addProductPage') }}">   <button class="btn btn-sm btn-outline-dark" >Add Products</button></a>
               {{-- <a href="{{ route('categoryDownload') }}"><button class="btn bg-success btn-sm text-white">Download CSV</button></a> --}}
                </h3>

                <div class="card-tools">

                  <div class="input-group input-group-sm" style="width: 150px;">
                    <span class="float-right">Total Results- {{ $productList->total()}}</span><br><br>
                   <form action="" method="GET"> <div class="input-group-append">
                   @csrf
                   <input type="text" name="searchCategory" class="form-control float-right" placeholder="Search">

                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div></form>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap text-center">

                  <thead>
                    <tr>
                      <th>Product ID</th>
                      <th>Product Name</th>
                      <th>Product Image</th>
                      <th>Product Price</th>
                        <td>Publish Status</td>
                    </tr>
                  </thead>
                  <tbody>

                @if ($productList->total()==0)
                  <tr>
                    <td colspan="5" class="text-muted">There is no result.</td>
                  </tr>
                @else
                @foreach ($productList as $item)
                <tr>
               <td>{{ $item->id }}</td>
               <td>{{ $item->product_name }}</td>
               <td>                    <img src="{{ asset('/uploads/' . $item->image) }}" class="img-thumbnail" width="150px" height="200px">
               </td>
               <td>{{ $item->price }}</td>

                <td>
                    @if ($item->publish_status==1)

                    Publish
                        @else

                        Unpublish
                    @endif
                </td>
                  <td>
                      <a href="{{ route('productListAdmin',$item->id) }}"><button class="btn btn-sm bg-dark text-white"><i class="fa fa-eye"></i></button></a>
                 <a href="{{ route('productEdit',$item->id) }}">  <button class="btn btn-sm bg-dark text-white"><i class="fas fa-edit"></i></button></a>
                   <a href="{{ route('productsDelete',$item->id) }}"><button class="btn btn-sm bg-danger text-white"><i class="fas fa-trash-alt"></i></button></a>
                 </td>
                </tr>
              @endforeach
                @endif



                  </tbody>
                </table>
                {{ $productList->links() }}
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</body>
</html>
