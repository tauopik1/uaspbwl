@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="mb-4">{{ __('Halo,') }} <strong>{{ Auth::user()->name }}</strong>! {{ __('Halo Tim Guru-guru yang cantik dan ganteng') }}</p>
                    
                    <div class="alert alert-info" role="alert">
                        {{ __('Selamat datang di portal absensi. Mari tingkatkan efisiensi dalam mengabsensi anak murid . Semangat!!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
