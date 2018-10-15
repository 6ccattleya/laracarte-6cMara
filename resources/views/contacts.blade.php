@extends('layouts.default',['title' => 'Contacts'])
@section('content')
    <div class="container">
        <div class="row">
            <div style="margin-top: 40px" class="container col-md-8 col-md-offset-2">
                <h3>Get in touch</h3>
                <p class="blockquote text-muted">If you having trouble with this service, please <a href="mailto:6ccattleya@gmail.com" target="_blank">ask for help</a>.</p>
                <form class="form" action="" method="POST">
                    {{csrf_field()}}
                   <div class="form-group">
                        <input class="form-control" placeholder="Please enter your name here ..." type="text" name="name" value="">
                   </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Please enter your email here ..." type="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Please enter your message here ..." class="form-control" name="message" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Submit Enquiry" class="btn btn-dark btn-block">
                </form>
            </div>
        </div>
    </div>
@stop
