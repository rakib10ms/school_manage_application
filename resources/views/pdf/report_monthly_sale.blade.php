<style type="text/css">
	table {
       		border-collapse: collapse;
		  }
	.title {text-align: center; font-family: Arial, Helvetica, sans-serif;}
	.report{text-align: center; color: black; height: 3%; padding: 10px; font-weight: bold;
			text-decoration: underline; font-family: Arial, Helvetica, sans-serif;}
	.a{text-align: center;  color: black; font-family: Arial, Helvetica, sans-serif;}
	.year{text-align: center; background-color: grey; color: white;}
	.b{text-align: center; background-color: #FFF8DC;}
	.c{text-align: center; background-color: #FFFAF0; font-weight: bold;}
	.grand_total{
		font-weight: bold;
	}

	p {text-align: right;}
	.date {text-align: center;
			 padding: 0px 0px 0px 0px;}
	/*.x{ display: inline-block;  font-size: small;}*/

	/*.image{
		  margin: auto;
		  width: 10%;
		  padding: 25px 0px 20px 450px;
	}*/
</style>			



				@if($setting->logo_position > 0)
					<style type="text/css">
						.image{
						  margin: auto;
						  width: 10%;
						  /*height: 1%;*/
						  padding: 25px 0px 20px 450px;}
					</style>
				@else
					<style type="text/css">
						.image{
						  margin: auto;
						  width: 10%;
						  /*height: 1%;*/
						  padding: 70px 0px 2px 180px;}
					</style>
				@endif

				@if($setting->text_font == 0)
				<style type="text/css">
					.x{ display: inline-block; font-size: small; }
				</style>
				@elseif($setting->text_font == 1)
				<style type="text/css">
					.x{ display: inline-block; font-size: medium; }
				</style>
				@else
				<style type="text/css">
					.x{ display: inline-block; font-size: large; }
				</style>
				@endif

					<div class="x">
						<img src="{{ $setting->site_logo }}" class="image" /><br><br>
						<h1 class="title" style="margin: 12px;">{{ $setting->company_name }}</h1>
						<p class="title" style="margin: -10px;">{{ $setting->address }}</p>
						<p class="title"><strong>Phone:</strong> {{ $setting->phone }}  <strong> Email:</strong> {{ $setting->email }}</p>	
						<p class="date"><strong>Date:</strong> {{ $date }}</p>
					</div>
					<p class="report">Monthly Sales Report</p>


<table class="table table-bordered" style="border-top: 1px solid #dee2e6; border-bottom: 1px solid #dee2e6;" border="1px" width="100%">
						<thead>
							<tr>
								
						    	<th colspan="14" class="text-center">{{$year}}</th>
						    	
						    </tr>
						</thead>
					    <tbody>
						    <tr>
						      <td class="a"><strong></strong></td>
						      <td class="a"><strong>January</strong></td>
						      <td class="a"><strong>February</strong></td>
						      <td class="a"><strong>March</strong></td>
						      <td class="a"><strong>April</strong></td>
						      <td class="a"><strong>May</strong></td>
						      <td class="a"><strong>June</strong></td>
						      <td class="a"><strong>July</strong></td>
						      <td class="a"><strong>August</strong></td>
						      <td class="a"><strong>September</strong></td>
						      <td class="a"><strong>October</strong></td>
						      <td class="a"><strong>November</strong></td>
						      <td class="a"><strong>December</strong></td>
						      <td class="a"><strong>Total</strong></td>
						      
						    </tr>
						    <tr>	
						        <td class="a">
						        	<strong>Product Discount</strong>						       
						        </td>
						        @php($sum=0)
						        @foreach($total_discount as $key => $discount)
						        @if($discount > 0)
						        <td>
						        {{$discount}}
						    	</td>
						    	@endif
						    	@if($discount <= 0)
						    	<td></td>
						    	@endif
						    	 {{ $sum = $sum + $discount }}
						        @endforeach   
						         <td class="c"><span>{{ $sum }}</span></td>     
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Order Discount</strong>						        	
						        </td>
						         @php($sum=0)
						         @foreach($total_discount as $key => $discount)
						         @if($order_discount[$key] > 0)
						        	<td>{{$order_discount[$key]}}</td>
						         @endif
						         @if($order_discount[$key] <= 0)
						        	<td></td>
						         @endif
						          {{ $sum = $sum + $order_discount[$key] }}
						         @endforeach  
						          <td class="c"><span>{{ $sum }}</span></td>      
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Product Tax</strong>						        	
						        </td>
						        @php($sum=0)
						        @foreach($total_discount as $key => $discount)
						        @if($total_tax[$key] > 0)
						        	<td>{{$total_tax[$key]}}</td>
						        @endif
						        @if($total_tax[$key] <= 0)
						        	<td></td>
						        @endif
						        {{ $sum = $sum + $total_tax[$key] }}
						        @endforeach	
						         <td class="c"><span>{{ $sum }}</span></td>					        
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Order Tax</strong>						        	
						        </td>
						        @php($sum=0)
						        @foreach($total_discount as $key => $discount)
						        @if($order_tax[$key] > 0)
						        	<td>{{$order_tax[$key]}}</td>
						        @endif
						        @if($order_tax[$key] <= 0)
						        	<td></td>
						        @endif
						         {{ $sum = $sum + $order_tax[$key] }}
						        @endforeach
						         <td class="c"><span>{{ $sum }}</span></td>
						        
						    </tr>
						     <tr>						    	
						        <td class="a">						        	
						        	<strong>Shipping Cost</strong>						        	
						        </td>
						        @php($sum=0)
						        @foreach($total_discount as $key => $discount)
						        @if($shipping_cost[$key] > 0)
						        	<td>{{$shipping_cost[$key]}}</td>
						        @endif
						        @if($shipping_cost[$key] <= 0)
						        	<td></td>
						        @endif
						          {{ $sum = $sum + $shipping_cost[$key] }}
						        @endforeach
						         <td class="c"><span>{{ $sum }}</span></td>
						    </tr>
						     <tr>						    	
						        <td class="a">					        	
						        	<strong>Grand total</strong>	
						        </td>
						        @php($sum=0)
						       	@foreach($total_discount as $key => $discount)
						       	@if($total[$key] > 0)
						        	<td class="grand_total">{{$total[$key]}}</td>
						        @endif
						        @if($total[$key] <= 0)
						        	<td></td>
						        @endif
						         {{ $sum = $sum + $total[$key] }}
						        @endforeach	
						         <td class="c"><span>{{ $sum }}</span></td>					        
						    </tr>
	  
					    </tbody>
					</table>
<br>
<br>
<br>
<br>
<p>Developed By {{ $setting->developed_by }}</p>