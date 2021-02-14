@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dice Games') }}</div>

                <div class="card-body">
                    @if (count($quizzes))
                        @foreach ($quizzes as $quiz)
                            <p>{{ $quiz['name'] }}</p>
                        @endforeach
                    @else
                        <div class="alert alert-success" role="alert">
                            There are currently no games to play
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
