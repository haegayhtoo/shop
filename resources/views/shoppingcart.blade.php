@extends('master')
@section('content')

	
	<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{ route('index') }}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table">
						
					</tbody>
					<tfoot>
						<tr>
                            <td><textarea class="notes" placeholder="Yours Note Here!"></textarea></td>

                            <td>
                            	@role('Customer')
                            	<a href="#" class="btn btn-info float-right buy_now">Checkout</a>
                            	@else
                            	<a href="{{route('loginpage')}}" class="btn btn-info float-right">login To Checkout</a>
                            	@endrole
                            </td>
                        </tr>
					</tfoot>
				</table>
				{{-- <a href="{{route('homepage')}}" class="btn btn-success">Continue Shopping</a> --}}
				

			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			
		</div>
		

	</div>
	


	@endsection

	@section('totalqty')
		<i class="icofont-shopping-cart"></i> 
		<span class="badge badge-pill badge-light badge-notify cartNotistyle cartNoti" id="totalqty">0 </span>
	@endsection

	@section('totalprice')
	<span class="totalprice"> 0 </span><span>ks</span>
	@endsection

	@section('script')
	<script src="{{ asset('frontend/js/main.js') }}"></script>
	@endsection

	