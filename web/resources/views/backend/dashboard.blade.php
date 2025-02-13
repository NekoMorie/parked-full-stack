@extends('backend.layout.app')

@section('contentAdmin')
    <!-- Page Content -->
    <div id="content">
        <h2 class="mb-4">Dashboard</h2>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <h2 class="card-text">{{ $totalUsers }}</h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Form</h5>
                        <h2 class="card-text">{{ $totalForms }}</h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Current Time</h5>
                        <h2 class="card-text" id="current-time"></h2>
                        <p class="card-text" id="current-date"></p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="mb-4">ML Monitoring & ML Report</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="model-monitoring.html" class="card-link" style="text-decoration: none; color: inherit;">
                    <div class="card ml-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Model Monitoring</h5>
                            <img src="{{ asset('assets/img/grafana.png') }}" alt="Model Monitoring Icon"
                                class="img-fluid mb-3 ml-image" style="height: 150px; width: auto;">
                            <br>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 mb-4">
                <a href="model-reports.html" class="card-link" style="text-decoration: none; color: inherit;">
                    <div class="card ml-card">
                        <div class="card-body text-center">
                            <h5 class="card-title">Model Reports</h5>
                            <img src="{{ asset('assets/img/evidently.png') }}" alt="Model Reports Icon"
                                class="img-fluid mb-3 ml-image" style="height: 150px; width: auto;">
                            <br>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
