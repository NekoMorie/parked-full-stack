@extends('frontend.layout.app')

@section('content')
<div class="resource-detail-page">
    <!-- Hero Section -->
    <div class="resource-hero">
        <div class="container">
            <h1 class="text-center mb-4">{{ $data['judul'] }}</h1>
        </div>
    </div>

    <!-- Content Section -->
    <div class="container my-5">
        <div class="row g-5">
            <!-- Image Column -->
            <div class="col-lg-6">
                <div class="resource-image-wrapper">
                    <img src="{{ asset($data['gambar']) }}" alt="{{ $data['judul'] }}" class="img-fluid rounded shadow">
                </div>
            </div>
            
            <!-- Content Column -->
            <div class="col-lg-6">
                <div class="resource-content">
                    {!! $data['isi'] !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
