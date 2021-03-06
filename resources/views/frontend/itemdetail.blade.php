@extends('master')
@section('content')
<!-- Subcategory Title -->
<div class="jumbotron jumbotron-fluid subtitle">
    <div class="container">
        <h1 class="text-center text-white"> <!-- {{ $items->codeno }} --> </h1>
    </div>
</div>

    <div class="container">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb bg-transparent">
                <li class="breadcrumb-item">
                    <a href="#" class="text-decoration-none secondarycolor"> Home </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#" class="text-decoration-none secondarycolor"> <!-- {{ $items->subcategory->name }} --> </a>
                </li>
            </ol>
        </nav>

        <div class="row mt-5">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <img src="{{ $item_detail->photo }} " class="img-fluid">
            </div>  


            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                
                <h4> <!-- {{ $items->name }}  --></h4>

                <div class="star-rating">
                    <ul class="list-inline">
                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                        <li class="list-inline-item"><i class='bx bxs-star' ></i></li>
                        <li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
                    </ul>
                </div>

                <p>
                   <!--  {{$items->description}} -->
                </p>

                <p> 
                    <span class="text-uppercase "> Current Price : </span>
                    <span class="maincolor ml-3 font-weight-bolder"> <!-- {{ $items->price }} -->  Ks </span>
                </p>

                <p> 
                    <span class="text-uppercase "> Brand : </span>
                    <span class="ml-3"> <a href="" class="text-decoration-none text-muted"> <!-- {{ $items->brand->name }}  --></a> </span>
                </p>


                <a href="#" class="addtocartBtn text-decoration-none" data-id='{{ $item_detail->id }}' data-name='{{ $item_detail->name }}' data-photo='{{ $item_detail->photo }}' data-codeno='{{ $item_detail->codeno }}' data-price='{{ $item_detail->price }}' data-discount='{{ $item_detail->discount }}'>
                    <i class="icofont-shopping-cart mr-2"></i> Add to Cart
                </a>
                
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h3> Related Item </h3>
                <hr>
            </div>
            
           <!--  @foreach($items as $item) -->

            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                
                <a href="">
                    <img src="{{ $item->photo }}" class="img-fluid">
                </a>
        </div>
       <!--  @endforeach -->

        
    </div>
@endsection