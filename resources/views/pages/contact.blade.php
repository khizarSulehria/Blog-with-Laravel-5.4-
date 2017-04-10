@extends('layouts.master')

@section('content')
    <h1>contact page here</h1>
    <div class="container">
        <form method="" action="">
            <div class="form-group">
                <span class="span">Email Address</span>
                <input type="email" name="email" class="form-control">
            </div>


            <div class="form-group">
                <span class="span">Subject</span>
                <input type="text" name="subject" class="form-control">
            </div>


            <div class="form-group">
                <span class="span">Message</span>
                <textarea name="message" rows="5" cols="6" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control btn btn-success" value="Send Message">
            </div>

        </form>
    </div>
@endsection