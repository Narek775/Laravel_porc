@extends('layouts.app')
@section('title')
    All Messages
@endsection
@section('content')
    <h1>All Messages</h1> 
   @foreach ($data as $item)
       <div class="alert alert-info">
           <h3>{{ $item->subject}}</h3>
           <p>{{ $item->email }}</p>
           <p><small>{{ $item->created_at }}</small></p>
           <a href="{{ route('contact-data-one', $item) }}"><button class="btn btn-warning">Enter butten</button></a>
       </div>
   @endforeach
   @endsection  