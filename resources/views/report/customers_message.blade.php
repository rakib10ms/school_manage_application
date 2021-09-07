@extends('layout.main') @section('content')
<section>
    <div class="card-header d-flex align-items-center">
        <h4>Customers Message</h4>
    </div>
    <div class="table-responsive">
        <table id="product-data-table" class="table" style="width: 100%">
            <thead>
                <tr>
                    <th class="not-exported"></th>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    
                    <!-- <th class="not-exported">Action</th> -->
                </tr>
            </thead>
            <tbody>
            	@php($i=1)
            	@foreach($contact as $row)
            	<tr>
            		<td></td>
            		<td>{{ $i }}</td>
            		<td>{{ $row->name }}</td>
            		<td>{{ $row->email }}</td>
            		<td>{{ $row->phone_number }}</td>
            		<td>{{ $row->message }}</td>
            		<!-- <td>
            			<a type="button" class="btn btn-primary" href="">Delete</a>
            		</td> -->
            	</tr>
            	@php($i++)
            	@endforeach
            </tbody>
            
        </table>
    </div>
</section>
@endsection