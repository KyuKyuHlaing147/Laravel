@extends('master')
@section('content')




	<!-- Content -->
	<div class="container mt-5 px-5">
		<!-- Category -->
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 ">
				
				<div class="card categoryCard border-0 shadow-sm p-3 mb-5 rounded text-center">
				  	<img src="{{$category->photo}}" class="card-img-top" alt="...">
				  	<div class="card-body">
				    	<p class="card-text font-weight-bold text-truncate"> {{$category->name}} </p>
				  	</div>

				</div>
				
			</div>
		</div>

		<div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>
		
		
		<div class="row mt-5">
			<h1> All Item </h1>
		</div>

	    <!--  Item -->
		<div class="row">
			<div class="col-12">
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">	 
		            <div class="MultiCarousel-inner">
		            	@foreach($subcategories as $subcategory)
		            	@foreach($subcategory->items as $item)
		            	<div class="item">
		               
		                    <div class="pad15">
		                    	<a href="{{route('ItemDetail')}}">
		                    	<img src="{{$item->photo}}" class="img-fluid"></a>
		                        <p class="text-truncate">{{$item->name}}</p>
		                        <p class="item-price">
		                        
		                        	<strike>{{$item->discount}} Ks</strike> 
		                        	<span class="d-block">{{$item->price}}Ks</span>
		                        
		                        </p>

		                        <div class="star-rating">
									<ul class="list-inline">
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
										<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
									</ul>
								</div>

								<a href="#" class="addtocartBtn text-decoration-none">Add to Cart</a>

		                    </div>
		                   
		                </div>
		                @endforeach
		                @endforeach
  
		            </div>
		            <button class="btn btnMain leftLst"><</button>
		            <button class="btn btnMain rightLst">></button>
		        </div>
		    </div>
		</div>

	    

	    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none"></div>

	</div>



@endsection