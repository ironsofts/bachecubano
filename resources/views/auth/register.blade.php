@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <a href="{{ URL::current() }}">
                        <h1 class="product-title h2">Registrarte en Bachecubano</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<ol class="breadcrumb">
    <li><a href="{{ config('app.url') }}">Inicio</a></li>
    <li class="ml-2">/</li>
    <li class="current ml-2">Registrarte en {{ config('app.name') }}</li>
</ol>

@include('blocks.register')

@push('script')
{!! ReCaptcha::htmlScriptTagJsApi() !!}
@endpush

@endsection