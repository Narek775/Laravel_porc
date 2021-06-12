@extends('layouts.app')

@section('title')
    Update Message
@endsection

@section('content')
<h1>Update Message</h1> 


<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf
   <div class="form-group">
       <label for="name">Enter Name</label>
       <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name" id="name" class="form-control">
   </div>
   <div class="form-group">
    <label for="email">Enter Email</label>
    <input type="text" name="email" value="{{ $data->email }}"  placeholder="Enter Email" id="email" class="form-control">
   </div>
   <div class="form-group">
    <label for="subject">Message Subject</label>
    <input type="text" name="subject" value="{{ $data->subject }}"  placeholder="Message Subject" id="subject" class="form-control">
   </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea  name="message" id="message" class="form-control" placeholder="Enter Message">{{ $data->message }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection

@section('aside')
    @parent
       <h2>add other section</h2>
@endsection
