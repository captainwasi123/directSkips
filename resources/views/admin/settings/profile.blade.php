@extends('admin.support.master')
@section('title', 'User Profile')
@section('page_title', 'User Profile')
@section('content')

	<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">User Profile</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{URL::to('/admin/settings/profile/update')}}" method="post">
                                	{{csrf_field()}}
                                    <div class="form-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4"></div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" name="username" value="{{Auth::user()->username}}" readonly>
                                                    <br><br>
                                                    <label class="control-label">Old Password</label>
                                                    <input type="password" class="form-control" name="old_password" required>
                                                    <br><br>
                                                    <label class="control-label">New password</label>
                                                    <input type="password" class="form-control" name="new_password" required>
                                                    <br><br>
                                                    <label class="control-label">Confirm Password</label>
                                                    <input type="password" class="form-control" name="confirmation_password" required>

                                                    <br><br>
                                                    <div class="form-actions mt-1">
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-upload"></i> Update</button>&nbsp;&nbsp;
                                                        <button type="reset" class="btn btn-inverse">Cancel</button>
                                                    </div>
												</div>
                                            </div>
                                            <div class="col-md-4"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
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
@endsection
