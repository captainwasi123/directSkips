@extends('admin.support.master')
@section('title', 'Holidays')
@section('page_title', 'Holidays')
@section('content')

	<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Holiday</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{URL::to('/admin/settings/holiday/add')}}" method="post">
                                	{{csrf_field()}}
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Date *</label>
                                                    <input type="date" class="form-control" name="holi_date" required>
												</div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Remarks (Optional)</label>
                                                    <input type="text" class="form-control" name="remarks">
                                                </div>
                                            </div>
                                            <!--/span-->
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
                                <h4 class="card-title">Holidays List</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%">#</th>
                                                <th style="width: 30%">Date</th>
                                                <th style="width: 50%">Remarks</th>
                                                <th style="width: 10%" class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@php $s=1; @endphp
                                        	@foreach($databelt as $data)
	                                            <tr>
	                                            	<td style="width: 10%">{{$s}}</td>
	                                                <td style="width: 30%">{{date('d-M-Y', strtotime($data->holiday))}}</td>
                                                    <td style="width: 50%">{{$data->remarks}}</td>
	                                                <td style="width: 10%" class="text-nowrap">
	                                                        <a class="btn btn-sm btn-danger delete" href="javascript:void(0)" data-id="{{base64_encode($data->id)}}"><i class="fa fa-trash"></i></a>
	                                                </td>
	                                            </tr>
	                                            @php $s++; @endphp
                                            @endforeach

                                            @if(count($databelt) == '0')
                                                <tr>
                                                    <td colspan="4">No Records Found.</td>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on('click', '.delete', function(){
				var del_id = $(this).data('id');
				if(confirm('Are you sure want to delete this.?')){
					window.location.href = 'holiday/delete/'+del_id;
				}
			});
		});
	</script>
@endsection
