@extends('admin.support.master')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')
@section('content')

<!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <h3><strong>24/7 Direct Skips </strong>Analytical Dashboard</h3>
                <br>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                    <h3 class="dashboard_count">{{$data['orders']}}</h3>
                                    <h6 class="card-subtitle">Orders</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="fa fa-thumbs-up text-success"></i></h2>
                                    <h3 class="dashboard_count">{{$data['booked']}}</h3>
                                    <h6 class="card-subtitle">Booked</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                                    <h3 class="dashboard_count">{{$data['delivered']}}</h3>
                                    <h6 class="card-subtitle">Delivered</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <br>
                <div class="card-group">
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="fa fa-check text-success"></i></h2>
                                    <h3 class="dashboard_count">{{$data['collected']}}</h3>
                                    <h6 class="card-subtitle">Collected</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="fa fa-ban text-warning"></i></h2>
                                    <h3 class="dashboard_count">{{$data['archive']}}</h3>
                                    <h6 class="card-subtitle">Archive</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="fa fa-dollar text-purple"></i></h2>
                                    <h3 class="dashboard_count">{{$data['vat_applied']->vat}} %</h3>
                                    <h6 class="card-subtitle">VAT Applied</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <br>
                
                <div class="row">
                    <div class="col-lg-6 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Services</h3>
                                <table class="table browser m-t-30 no-border">
                                    <tbody>
                                        @foreach($data['service'] as $val)
                                            <tr>
                                                <td>{{$val->service}}</td>
                                                <td class="text-right"><span class="label label-light-info">{{count($val->orders)}} Orders</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-xlg-6">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Counties</h3>
                                <table class="table browser m-t-30 no-border">
                                    <tbody>
                                        @foreach($data['counties'] as $val)
                                            <tr>
                                                <td>{{$val->label}}</td>
                                                <td class="text-right"><span class="label label-light-info">{{count($val->postCodes)}} Postcodes</span></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
@endsection
@section('addStyle')

<style>
    .dashboard_count {
        font-size: 45px;
        text-align: right;
        font-weight: 600;
    }
</style>

@endsection