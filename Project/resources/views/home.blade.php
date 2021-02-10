@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

					<div>
						Send your email:

						<form action="{{ route('sendMail') }}" method="POST">
							@csrf
							@method('POST')
							<input type="text" name="text">
							<input type="submit" value="SEND">
						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
