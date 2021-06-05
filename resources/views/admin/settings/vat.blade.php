@extends('admin.support.master')
@section('title', 'VAT Setup')
@section('page_title', 'VAT Setup')
@section('content')

	<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Update VAT</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{URL::to('/admin/settings/VAT/update')}}" method="post">
                                	{{csrf_field()}}
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Active VAT</label>
                                                    <span class="label-unit">%</span>
                                                    <input type="number" step="any" class="form-control" name="active_vat" value="{{$vat->vat}}" required>
												</div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-8">
                                            	<br>
			                                    <div class="form-actions mt-1">
			                                        <button type="submit" class="btn btn-success"> <i class="fa fa-upload"></i> Update</button>&nbsp;&nbsp;
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
                                <h4 class="card-title">VAT Update History</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>VAT</th>
                                                <th>Updated at</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@php $s=1; @endphp
                                        	@foreach($history as $data)
	                                            <tr>
	                                            	<td>{{$s}}</td>
	                                                <td>{{$data->vat}} %</td>
	                                                <td>{{date('d-M-Y | H:i A', strtotime($data->created_at))}}</td>
	                                            </tr>
	                                            @php $s++; @endphp
                                            @endforeach

                                            @if(count($history) == '0')
                                                <tr>
                                                    <td colspan="3">No Services Found.</td>
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
					window.location.href = 'type/delete/'+del_id;
				}
			});
		});
	</script>
@endsection
