@extends('admin.support.master')
@section('title', 'Archive | Orders')
@section('page_title', 'Archive | Orders')
@section('content')

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Archive Orders</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Pst. Code</th>
                                                <th>Service</th>
                                                <th>Supplier</th>
                                                <th>Skip Size</th>
                                                <th>Del. Date</th>
                                                <th>Col. Date</th>
                                                <th>Price</th>
                                                <th>Delivery Instructions</th>
                                                <th>Created at</th>
                                                <th class="text-nowrap">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($databelt as $data)
	                                            <tr>
	                                            	<td>{{$data->id}}</td>
                                                    <td><a href="javascript:void()" class="orderDetail" data-id="{{$data->id}}">{{empty($data->details) ? '' : $data->details->first_name.' '.$data->details->last_name}}</a></td>
                                                    <td>{{empty($data->details) ? '' : $data->details->email}}</td>
                                                    <td>{{empty($data->details) ? '' : $data->details->phone}}</td>
                                                    <td>{{$data->postal_code}}</td>
                                                    <td>{{empty($data->sType) ? '' : $data->sType->service}}</td>
                                                    <td>{{$data->supplier_name}}</td>
                                                    <td>{{$data->skip_size}}</td>
                                                    <td>{{date('d-M-Y', strtotime($data->delivery_date))}}</td>
                                                    <td>{{date('d-M-Y', strtotime($data->collection_date))}}</td>
                                                    <td><strong>{{empty($data->billing) ? '' : '£ '.$data->billing->total_amount}}</strong></td>
                                                    <td><p class="cut-text">{{empty($data->details->comments) ? '-' : $data->details->comments}}</p></td>
                                                    <td>{{date('d-M-Y | H:i A', strtotime($data->created_at))}}</td>
	                                                <td class="text-nowrap">
                                                        <div class="btn-group">
	                                                      <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                                                        Action
	                                                      </button>
	                                                      <div class="dropdown-menu">
	                                                        <a class="dropdown-item changeState" href="javascript:void(0)" data-href="{{URL::to('/admin/orders/status/1/'.base64_encode($data->id))}}">Orders</a>
                                                            <a class="dropdown-item changeState" href="javascript:void(0)" data-href="{{URL::to('/admin/orders/status/2/'.base64_encode($data->id))}}">Booked</a>
                                                            <a class="dropdown-item changeState" href="javascript:void(0)" data-href="{{URL::to('/admin/orders/status/3/'.base64_encode($data->id))}}">Delivered</a>
                                                            <a class="dropdown-item changeState" href="javascript:void(0)" data-href="{{URL::to('/admin/orders/status/4/'.base64_encode($data->id))}}">Collected</a>
                                                            <hr style="margin: 0;">
                                                            <a class="dropdown-item deleteOrder" href="javascript:void(0)" data-href="{{URL::to('/admin/orders/delete/'.base64_encode($data->id))}}" style="color:red;">Delete</a>
	                                                      </div>
	                                                    </div>
	                                                </td>
	                                            </tr>
                                            @endforeach
                                            @if(count($databelt) == '0')
                                                <tr>
                                                    <td colspan="14">No Orders Found.</td>
                                                </tr>
                                            @endif
                                                <tr>
                                                    <td colspan="14">{{ $databelt->links() }}</td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                @foreach($databelt as $data)
                <div class="modal fade orderModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Order Details</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body" id="contentResult">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Name</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->first_name.' '.$data->details->last_name}}</strong></p>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->email}}</strong></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Phone</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->phone}}</strong></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Marketing</label>
                                        <p><strong>{{$data->details->newsletter == '1' ? 'Yes' : 'No'}}</strong></p>
                                    </div>
                                    <div class="col-md-1">
                                        <label>T&Cs</label>
                                        <p><strong>Agreed</strong></p>
                                    </div>
                                    <div class="col-md-12"><hr></div>
                                    
                                    
                                    <div class="col-md-4">
                                        <label>Service</label>
                                        <p><strong>{{empty($data->sType) ? '' : $data->sType->service}}</strong></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Skip Size</label>
                                        <p><strong>{{$data->skip_size}}</strong></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Delivery Date</label>
                                        <p><strong>{{date('d-M-Y', strtotime($data->delivery_date))}}</strong></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Collection Date</label>
                                        <p><strong>{{date('d-M-Y', strtotime($data->collection_date))}}</strong></p>
                                    </div>
                                    <div class="col-md-2">
                                        <label>Price</label>
                                        <p><strong>{{empty($data->billing) ? '' : '£ '.number_format($data->billing->total_amount, 2)}}</strong></p>
                                    </div>
                                    <div class="col-md-8">
                                        <label>Delivery Instructions</label>
                                        <p><strong>{{empty($data->details->comments) ? '-' : $data->details->comments}}</strong></p>
                                    </div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-12"><hr></div>
                                    
                                    <div class="col-md-6">
                                        <h5>Delivery/Billing Details</h5>
                                        
                                        <label>Address</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->address}}</strong></p>
                                        <br>
                                        <label>Address 2</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->city}}</strong></p>
                                        <br>
                                        <label>County</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->country}}</strong></p>
                                        <br>
                                        <label>Postcode</label>
                                        <p><strong>{{$data->postal_code}}</strong></p>
                                        <br>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <h5>Different Billing Details</h5>
                                        
                                        <label>Address</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->b_address}}</strong></p>
                                        <br>
                                        <label>Address 2</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->b_city}}</strong></p>
                                        <br>
                                        <label>County</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->b_country}}</strong></p>
                                        <br>
                                        <label>Postcode</label>
                                        <p><strong>{{empty($data->details) ? '' : $data->details->b_postal_code}}</strong></p>
                                        <br>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-3">
                                    <form method="post" action="{{URL::to('/admin/orders/supplier')}}">
                                        {{csrf_field()}}
                                        <input type="hidden" name="order_id" value="{{base64_encode($data->id)}}">
                                        <label>Skip Supplier Booked with:</label>
                                        <input type="text" class="form-control" name="supplier" value="{{$data->supplier_name}}" required>
                                    </div>
                                    <div class="col-md-1">
                                        <br>
                                        <button type="submit" class="btn btn-primary form-control" style="color: #fff;margin-top: 7px;"><span class="fa fa-save"></span></span></button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                @endforeach

@endsection
@section('addStyle')

<style>
    .cut-text { 
      text-overflow: ellipsis;
      overflow: hidden; 
      width: 160px; 
      height: 1.2em; 
      white-space: nowrap;
    }
</style>

@endsection
@section('addScript')
	@if(session()->has('success'))
		<script type="text/javascript">
			$(document).ready(function(){
	           $.toast({
	            heading: 'Success.!',
	            text: "{{ session()->get('success') }}",
	            position: 'top-center',
	            loaderBg:'#ff6849',
	            icon: 'success',
	            hideAfter: 3500, 
	            stack: 6
	          });
			});
		</script>
	@endif
	@if(session()->has('error'))
	<script type="text/javascript">
		$(document).ready(function(){
           $.toast({
            heading: 'Error.!',
            text: "{{ session()->get('error') }}",
            position: 'top-center',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500
            
          });
		});
	</script>
	@endif
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '.changeState', function(){
				var href = $(this).data('href');
				if(confirm('Are you sure want to change status.?')){
					window.location.href = href;
				}
			});
			
			
			$(document).on('click', '.orderDetail', function(){
				var id = $(this).data('id');
				$('.orderModal'+id).modal('show');
				
			});

            
            $(document).on('click', '.deleteOrder', function(){
                var href = $(this).data('href');
                if(confirm('Are you sure want to delete this.?')){
                    window.location.href = href;
                }
                
            });
		});
	</script>
@endsection
