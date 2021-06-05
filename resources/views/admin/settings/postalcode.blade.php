@extends('admin.support.master')
@section('title', 'Postal Code | Counties')
@section('page_title', 'Postal Code | Counties')
@section('content')

	<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Postal Code</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{URL::to('/admin/counties/postalcode/add')}}" method="post">
                                	{{csrf_field()}}
                                    <input type="hidden" name="county_id" value="{{base64_encode($data->id)}}">
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label class="control-label">County</label>
                                                    <input type="text" class="form-control" name="county" value="{{$data->label}}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Postal Code</label>
                                                    <input type="text" class="form-control" name="postal_code" required>
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
                                <h4 class="card-title">Postal Code List</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>County</th>
                                                <th>Postcode</th>
                                                <th>Created at</th>
                                                <th class="text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@php $s=1; @endphp
                                            @foreach($data->postCodes as $val)
                                                <tr>
                                                    <td>{{$s}}</td>
                                                    <td>{{$data->label}}</td>
                                                    <td>{{$val->postal_code}}</td>
                                                    <td>{{date('d-M-Y | H:i A', strtotime($val->created_at))}}</td>
                                                    <td class="text-nowrap">
                                                            <a class="btn btn-sm btn-danger delete" href="javascript:void(0)" data-id="{{base64_encode($val->id)}}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @php $s++; @endphp
                                            @endforeach
                                            @if(count($data->postCodes) == '0')
                                                <tr>
                                                    <td colspan="5">No Postcode Found.</td>
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
                    window.location.href = 'delete/'+del_id;
                }
            });
        });
    </script>
@endsection
