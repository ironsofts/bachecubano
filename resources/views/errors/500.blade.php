@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <a href="{{ URL::current() }}">
                        <h2 class="product-title">Uhmmmm, ha ocurrido un error</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Start Contact Us Section -->
<section id="content" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h5>Estamos al tanto y trataremos de solucionarlo cuanto antes</h5>
                <img src="{{ asset('img/bachecubano-working.png') }}" class="img-fluid" loading=lazy>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Us Section  -->
@endsection