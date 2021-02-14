@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($quiz)
                    <div class="card-header">{{ __($quiz['name']) }}</div>
                    @if ($quiz['status'] == 'open')
                        <div class="card-body">
                            @foreach ($quiz->questions()->get() as $question)
                                <p>{{ $question['title'] }}</p>
                                @foreach ($question->options()->get() as $option)
                                    <p>{{ $option['dice'] }}</p>
                                @endforeach
                            @endforeach
                        </div>
                    @elseif($quiz['status'] == 'closed')
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                This quiz is now closed
                            </div>
                        </div>
                    @else
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                This quiz is not available
                            </div>
                        </div>
                    @endif
                @else
                    <div class="card-header">{{ __('Quiz not found') }}</div>
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            Quiz was not found
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
