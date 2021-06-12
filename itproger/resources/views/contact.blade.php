@extends('layouts.app')

@section('title')
    Contact Page
@endsection

@section('content')
<h1>Contact Page</h1> 


<form action="{{ route('contact-form') }}" method="post">
    @csrf
   <div class="form-group">
       <label for="name">Enter Name</label>
       <input type="text" name="name" placeholder="Enter Name" id="name" class="form-control">
   </div>
   <div class="form-group">
    <label for="email">Enter Email</label>
    <input type="text" name="email" placeholder="Enter Email" id="email" class="form-control">
   </div>
   <div class="form-group">
    <label for="subject">Message Subject</label>
    <input type="text" name="subject" placeholder="Message Subject" id="subject" class="form-control">
   </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea  name="message" id="message" class="form-control" placeholder="Enter Message"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Send</button>
</form>
@endsection

@section('aside')
    @parent
       <h2>add other section</h2>
@endsection
