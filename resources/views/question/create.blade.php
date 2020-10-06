@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create new questionnaire</div>

                <div class="card-body">
                   <form action="/questionnaires/{{ $questionnaire->id }}/questions" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input name="question[question]" value="{{ old('question.question') }}" type="text" class="form-control" id="question" aria-describedby="emailHelp" placeholder="Enter question">
                            <small id="questionHelp" class="form-text text-muted">ask simple and to-the pint questions for best results</small>
                            @error('question.question')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <fieldset>
                                <legend>choices</legend>
                                <small id="choicesHelp" class="form-text text-muted">give choices that give you the most insight into your question.</small>

                                <div>
                                    <div class="form-group">
                                        <label for="answer3">choice3</label>
                                        <input type="text" name="answers[][answer]" value="{{ old('answers.0.answer') }}" class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter choice 1">
                                        <small id="answer1Help" class="form-text text-muted">Giving a purpose will increase responses.</small>
                                        @error('answers.0.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer2">choice2</label>
                                        <input type="text" name="answers[][answer]" class="form-control" id="answer2" value="{{ old('answers.1.answer') }}" aria-describedby="choicesHelp" placeholder="Enter choice 2">
                                        <small id="answer2Help" class="form-text text-muted">Giving a purpose will increase responses.</small>
                                        @error('answers.1.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer3">choice3</label>
                                        <input type="text" name="answers[][answer]" class="form-control"value="{{ old('answers.2.answer') }}" id="answer3" aria-describedby="choicesHelp" placeholder="Enter choice 3">
                                        <small id="answer3Help" class="form-text text-muted">Giving a purpose will increase responses.</small>
                                        @error('answers.2.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <div class="form-group">
                                        <label for="answer4">choice4</label>
                                        <input type="text" name="answers[][answer]" class="form-control"value="{{ old('answers.3.answer') }}" id="answer4" aria-describedby="choicesHelp" placeholder="Enter choice 4">
                                        <small id="answer4Help" class="form-text text-muted">Giving a purpose will increase responses.</small>
                                        @error('answers.3.answer')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Question</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
