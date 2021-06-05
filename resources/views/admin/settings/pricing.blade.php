@extends('admin.support.master')
@section('title', 'Pricing | Counties')
@section('page_title', 'Pricing | Counties')
@section('content')

	<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Pricing</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{URL::to('/admin/counties/pricing/add')}}" method="post">
                                	{{csrf_field()}}
                                    <input type="hidden" name="county_id" value="{{base64_encode($data->id)}}">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">County</label>
                                                    <input type="text" class="form-control" name="county" value="{{$data->label}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Service Type</label>
                                                    <select class="form-control" name="service_type" required>
                                                        <option value="" selected disabled>Select</option>
                                                        @foreach($type as $t)
                                                            <option value="{{$t->id}}">{{$t->service}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">4 yd</label>
                                                    <input type="number" step="any" class="form-control" name="four_yd">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">6 yd</label>
                                                    <input type="number" step="any" class="form-control" name="six_yd" required>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">8 yd</label>
                                                    <input type="number" step="any" class="form-control" name="eight_yd">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">12 yd</label>
                                                    <input type="number" step="any" class="form-control" name="twelve_yd">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                            	<br>
			                                    <div class="form-actions mt-1">
			                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>&nbsp;&nbsp;
			                                        <button type="reset" class="btn btn-inverse">Cancel</button>
			                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"><strong>{{$data->label}}</strong> : pricing</h4>
                                <hr>
                                <div class="table-responsive m-t-10">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Service Type</th>
                                                <th>4 yd</th>
                                                <th>6 yd</th>
                                                <th>8 yd</th>
                                                <th>12 yd</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $s=1; @endphp
                                            @foreach($pricing as $val)
                                                <tr>
                                                    <td>{{$s}}</td>
                                                    <td>{{empty($val->type) ? '' : $val->type->service}}</td>
                                                    <td>{{empty($val->four_yd) ? '-' : '£ '.number_format($val->four_yd)}}</td>
                                                    <td>{{empty($val->six_yd) ? '-' : '£ '.number_format($val->six_yd)}}</td>
                                                    <td>{{empty($val->eight_yd) ? '-' : '£ '.number_format($val->eight_yd)}}</td>
                                                    <td>{{empty($val->twelve_yd) ? '-' : '£ '.number_format($val->twelve_yd)}}</td>
                                                </tr>
                                                @php $s++; @endphp
                                            @endforeach
                                            @if(count($pricing) == '0')
                                                <tr>
                                                    <td colspan="7">No items found.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
    <!-- This is data table -->
    <script src="{{URL::to('/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
            $('#myTable').DataTable();
			$(document).on('click', '.trash', function(){
				var del_id = $(this).data('id');
				if(confirm('Are you sure want to delete this.?')){
					window.location.href = 'counties/delete/'+del_id;
				}
			});
		});
	</script>
@endsection
