@extends('lara-installer::layouts.setup')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-md-8">

        <div class="card">
            <div class="card-header">
                @lang('setup.check_requirements')
            </div>
            <div class="card-body">

                <ul>
                    @foreach($results as $key => $successful)
                    <li>
                        @lang('setup.requirements.' . $key)
                        @if($successful)
                        {{--
                        <x-icon.check class="text-success" /> --}}
                        <p>Success</p>
                        @else
                        {{--
                        <x-icon.ban class="text-danger" /> --}}
                        <p>Failed</p>
                        @endif
                    </li>
                    @endforeach
                </ul>

                <a href="{{ route('database') }}"
                    class="btn {{ !in_array(false, $results, true) ? 'btn-primary' : ' btn-danger disabled' }}">
                    @lang('setup.continue')
                </a>

            </div>
        </div>

    </div>
</div>

@endsection
