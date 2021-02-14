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
                                <div class="text-center">
                                    @foreach ($question->options()->get() as $option)

                                        <div class="col-md-6">
                                            <button type="button" class="btn optionButton" data-question="{{ $question['id'] }}" data-option="{{ $option['id'] }}" style="width:50%">
                                                @foreach ($option->getSymbols() as $symbol)
                                                    <img src="/img/symbols/{{ $symbol }}.svg" style="width: 32px;">
                                                @endforeach
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
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

<script type="text/javascript">

    $(document).ready(function() {
        console.log( "ready!" ); // This never displays

        // And this never executes
        $('.optionButton').on('click', function (e) {
            console.log('we clicked a button');
            var question_id = $(this).data('question');
            var option_id   = $(this).data('option');
            $.ajax({
                url: "{{url('/api/answer/')}}",
                type: "POST",
                data: {
                    question_id: question_id,
                    option_id: option_id
                },
                success: function (name) {
                    alert(message);
                },
                error: function () {
                    console.log('we had an error');
                }
            });
        });
    });
</script>
@endsection
