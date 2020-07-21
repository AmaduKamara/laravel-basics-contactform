@extends('layouts.app')

@section('content')
  
  @include('inc.contact-showcase')
  <h1>Contact Form</h1>

  <div class="mb-5">

    {{-- Error messages for empty fields submission --}}
    @include('inc.messages')

    {!! Form::open(['url' => 'contact/submit']) !!}
      <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
      </div>
      <div class="form-group">
        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email address']) }}
      </div>
      <div class="form-group">
        {{ Form::label('message', 'Message') }}
        {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Message...']) }}
      </div>
      <div>
        {{ Form::submit('Submit', ['class' => 'btn btn-success']) }}
      </div>
    {!! Form::close() !!}
  </div>

@endsection