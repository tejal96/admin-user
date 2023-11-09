@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
               <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                </div>
            </div>
            <a href="{{ route('refer.create') }}">
            <button class="btn btn-primary" type="submit">ADD REFERRAL</button>
            </a>
        </div>          
    </div>
     
{{--{{ __('You are logged in!') }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
