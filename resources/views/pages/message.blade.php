@extends('layouts.app')

@section('content')
  <h1>Messages List</h1>

  
  @if (count($messages) > 0)
    @foreach ($messages as $message)
    <div class="card mt-3">
      <div class="card-body">
        <p>{{ $message->message }}</p>
        <p>Sent By: <small class="text-black-50">{{ $message->name }}</small></p>
        <p>Email: <small>{{ $message->email }}</small> </p>
      </div>
    </div>
    @endforeach
    <div class="mt-3">
      {{ $messages->links() }}
    </div>
  @else
    <h3>No message received.</h3>  
  @endif  

@endsection