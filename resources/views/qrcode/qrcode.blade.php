@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('QR CODE') }}</div>

                <div class="card-body">
		<!--QR CODE START-->
		<div class="visible-print text-center">
                  <h1>Laravel 8 - QR Code Generator Example</h1>
     
                       {!! QrCode::size(250)->generate('said ben hmed'); !!}
     
                    <p>example by Said ben hmed.</p>
        </div>
		<!--QR CODE END-->
    </div>
</div>
@endsection
