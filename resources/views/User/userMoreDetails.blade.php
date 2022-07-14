<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>More Details</title>
     {{-- Font awesome --}}
     <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
     <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<style>
   /* From uiverse.io by @e-coders */
button {
 position: relative;
 overflow: hidden;
 border: 1px solid #18181a;
 color: #18181a;
 display: inline-block;
 font-size: 15px;
 line-height: 15px;
 padding: 18px 18px 17px;
 text-decoration: none;
 cursor: pointer;
 background: #fff;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
}

button span:first-child {
 position: relative;
 transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
 z-index: 10;
}

button span:last-child {
 color: white;
 display: block;
 position: absolute;
 bottom: 0;
 transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
 z-index: 100;
 opacity: 0;
 top: 50%;
 left: 50%;
 transform: translateY(225%) translateX(-50%);
 height: 14px;
 line-height: 13px;
}

button:after {
 content: "";
 position: absolute;
 bottom: -50%;
 left: 0;
 width: 100%;
 height: 100%;
 background-color: black;
 transform-origin: bottom center;
 transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
 transform: skewY(9.3deg) scaleY(0);
 z-index: 50;
}

button:hover:after {
 transform-origin: bottom center;
 transform: skewY(9.3deg) scaleY(2);
}

button:hover span:last-child {
 transform: translateX(-50%) translateY(-50%);
 opacity: 1;
 transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
}
</style>
</head>
<body>
    <div align="center" style="margin-top: 100px">
        <a href="{{ route('userHome') }}" class="text-decoration-none text-dark "> <i class="fas fa-arrow-left"></i>Back</a>

        <div class="card mb-3 h-100" style="width: 270px;" >
            @foreach ($productData as $item)
            <img src="{{ asset('uploads/' . $item->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $item->product_name }}</h5>
             <label for=""><b>Price</b>: </label> <label for=""><b>{{ $item->price }}</b> <b>MMK</b></label><br><br>
             <label for=""><b>Discount Price</b>: </label> <label for=""><b>{{ $item->discount_price }}</b> <b>MMK</b></label><br><br>
             <label for=""><b>Waiting Time</b>: </label> <label for=""><b>{{ $item->waiting_time }}</b> <b>Days</b></label><br><br>
             <label for=""><b>Ram</b>: </label> <label for=""><b>{{ $item->ram }} </b></label><br><br>
             <label for=""><b>Battery</b> : </label> <label for=""><b>{{ $item->battery }}</b> <b>MAH</b></label><br><br>
             <label for=""><b>Internal Storage</b> : </label> <label for=""><b>{{ $item->internal_storage }}</b> <b>GB</b></label><br><br>
             <label for=""><b>Front Camera </b>: </label> <label for=""><b>{{ $item->front_camera }}</b> <b>MP</b></label><br><br>
             <label for=""><b>Back Camera </b>: </label> <label for=""><b>{{ $item->back_camera }}</b> <b>MP</b></label><br><br>


             <button><span class="text">Order Now</span><span>Thanks!</span></button>


            </div>

            @endforeach
            </div>
    </div>
</body>
</html>
