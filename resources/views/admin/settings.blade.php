@extends('layouts.base')

@section('content')

<!-- Page title -->
<div class="page-header-2 text-white">
    <div class="row align-items-center">
        <div class="col-auto mb-3">
            <h2 class="page-title">
                Mes paramètres
            </h2>
        </div>

    </div>
</div>
<div class="row row-deck row-cards">
    <div class="card col-lg-12 p-2">
    </div>
</div>

@endsection


@section('scripts')


@endsection

@section('styles')
    <link href={{asset("template/assets/dist/css/easytrak-payments.min.css")}} rel="stylesheet" />
@endsection
