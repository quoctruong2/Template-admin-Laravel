@extends('admin.layout.master')

@section('content')
    <div class="page-wrapper">

        <div class="page-body">
            <div class="row">
                <!-- task, page, download counter  start -->
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-c-yellow update-card">
                        <div class="card-block">
                            <div class="row align-items-end">
                                <div class="col-8">
                                    <h4 class="text-white">54</h4>
                                    <h6 class="text-white m-b-0">All questions</h6>
                                </div>
                                <div class="col-4 text-right">
                                    <canvas id="update-chart-1" height="50"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p style="color: white;">View all</p>
                        </div>
                    </div>
                </div>
                <!-- task, page, download counter  end -->
            </div>
        </div>
    </div>
@endsection
@section('script')
@endsection
