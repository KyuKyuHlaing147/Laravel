<!-- <div>
    Simplicity is an acquired taste. - Katharine Gerould
</div> -->

<!-- @foreach($categories as $category)
  <a href="{{route('filterpage',$category->id)}}" class="dropdown-item">{{$category->name}}</a>
@endforeach -->

@foreach($categories as $category)
			          	<li class="dropdown-submenu">
			          		<a class="dropdown-item" href="{{route('filterpage',$category->id)}}">
			          			{{$category->name}}
			          			<i class="icofont-rounded-right float-right"></i>
			          		</a>
				            <ul class="dropdown-menu">
				            	<h6 class="dropdown-header">
				           			{{$category->name}}
				            	</h6>
				            	
				              	<li><a class="dropdown-item" href="#"></a></li>
				              	
				              
			  
				            </ul>
         				</li>
			          	
			          	@endforeach