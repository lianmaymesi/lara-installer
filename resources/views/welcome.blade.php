@extends('lara-installer::layouts.setup')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8">

        <div class="card">
            <div class="card-header">
                @lang('welcome')
            </div>
            <div class="card-body">

                <p>@lang('intro')</p>

                <ol>
                    <li>@lang('intro.step1')</li>
                    <li>@lang('intro.step2')</li>
                    <li>@lang('intro.step3')</li>
                </ol>

                <a href="{{ route('requirement') }}" class="btn btn-primary">
                    @lang('check_requirements')
                </a>
            </div>
        </div>

    </div>
</div>

@endsection
