@extends('template')

@section('content')

<div class="container">
    <div class="card login-card">
        <div class= "row no-gutters">
            <div class="col-md-12">
                <div class="card-body">
                    @if(! auth()->user()->two_factor_secret)
                    You have not enable 2fa
                    <form method="POST" action {{url ('user/two-factor-authentication')}}">
                @csrf

                <button type= "submit" class="btn-primary">
                    enable
</button>
</form> 
                    @else
                    You have 2fa enabled
                    <form method="POST" action {{url ('user/two-factor-authentication')}}">
                @csrf
                @method('DELETE')

                <button type= "submit" class="btn-primary">
                    Disable
</button>
</form>
                    @endif
                 
    @if(session('status')== 'two-factor-authentication-enabled')
    <p>You have now enabled 2FA, please scan the following QR code into your phones application.
        {!! auth()->user()->twoFactorQrCodeSvg() !!}

        <p>Please store theses recovery codes in a secure location
        @foreach(json_decode(decrypt(auth())->user()->two_factor_recovery_codes, true)) as $code)
        {{ trim($code) }} <br>
</div>
</div>
</div>
</div>
</div>
@endsection
