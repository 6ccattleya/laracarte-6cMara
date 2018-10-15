@extends('layouts.default',['title' => 'About'])
@section('content')
    <div class="container">
        <div>
            <h3>What is Laracarte ?</h3>
            <p class="text-muted">Laracarte is a clone of <a href="https://laramap.com" target="_blank">laramap.com</a></p>
            <div class="row">
                <div class="col-md-6">
                    <p class="alert alert-danger">
                        <i class="fa fa-exclamation-triangle"></i> This app has been build by <a href="https://github.com/6ccattleya" target="_blank">@mara_cisse</a> for learning purpose.
                    </p>
                </div>
            </div>
            <p class="text-muted">Fell free and help improve <a target="_blank" href="https://github.com/6ccattleya/laracarte-6cMara">source code</a></p>
        </div>
        <hr>
        <div>
            <h3>What is Laramap</h3>
            <p class="text-muted">Laramap is the website by whith laracarte was inspired 🙋</p>
            <p class="text-muted">More infos <a target="_blank" href="https://github.com/webdevmatics/Laramap">here</a></p>
        </div>
        <hr>
        <div>
            <h3>Which tools and services are using in Laracarte?</h3>
            <p class="text-muted">Basicaly it's build with laravel & bootstrap. But thre's bunch of services for email and other sections.</p>
            <ul>
                <li>Laravel</li>
                <li>Bootstrap</li>
                <li>Amazon s3</li>
                <li>Mandrill</li>
                <li>GoogleMaps</li>
                <li>Gravatar</li>
                <li>Antony Martin's Geolocalisation Package</li>
                <li>Machel Fortin's Markdown Parser Package</li>
                <li>Heroku hebergment server</li>
            </ul>
        </div>
    </div>
@stop
