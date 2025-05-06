@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row g-4 mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Cash Deposits</h6>
                <h2>1.7M</h2>
                <span class="text-danger">↓ 54.1% less earnings</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Capital Gains</h6>
                <h2>$563</h2>
                <span class="text-success">↑ 7.35% Increased</span>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Sales Last Month</h6>
                <h2>$874</h2>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Total Revenue</h6>
                <h2>$564</h2>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Technical Support</h6>
                <canvas id="salesChart" height="100"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Timeline Example</h6>
                <ul class="timeline list-unstyled">
                    <li><span class="badge bg-danger">●</span> All Hands Meeting <small class="text-muted">15:00 PM</small></li>
                    <li><span class="badge bg-success">●</span> Build the production release <span class="badge bg-primary">NEW</span></li>
                    <li><span class="badge bg-info">●</span> Something not important</li>
                    <li><span class="badge bg-secondary">●</span> Info state</li>
                    <li><span class="badge bg-dark">●</span> Dark state</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            datasets: [{
                label: 'Sales',
                data: [120, 190, 300, 250, 220, 300, 250, 400],
                borderColor: '#4e73df',
                backgroundColor: 'rgba(78, 115, 223, 0.05)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endpush 