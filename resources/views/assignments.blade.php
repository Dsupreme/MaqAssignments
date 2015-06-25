@extends('master')

    @section('head_css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ass.css') }}"/>
    @endsection

    @section('head_js')
        <!--<script type="text/javascript" src="{{ asset('js/game.js') }}"></script>-->
    @endsection

    @section('nav-content')
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('assignments') }}">Assignments</a></li>
        </ul>
    @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="collection">
                <h4 class="center collection-head">Pre Boot-camp Assignments</h4>
                    <a href="{{url('assignments/ass1') }}" class="collection-item">Assignment 1</a>
                    <a href="{{url('assignments/ass2') }}" class="collection-item">Assignment 2</a>
                    <a href="{{url('assignments/ass3') }}" class="collection-item">Assignment 3</a>
                    <a href="{{url('assignments/ass4') }}" class="collection-item">Assignment 4</a>
                    <a href="{{url('assignments/ass5') }}" class="collection-item">Assignment 5</a>
                    <a href="{{url('assignments/ass6') }}" class="collection-item">Assignment 6</a>
                </div>
                {{--<ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header active"><i class="mdi-content-send"></i>Assignment 1</div>
                        <div class="collapsible-body"><p>Random Text 1</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-send"></i>Assignment 2</div>
                        <div class="collapsible-body"><p>Random Text 2</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-send"></i>Assignment 3</div>
                        <div class="collapsible-body"><p>Random Text 3</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-send"></i>Assignment 4</div>
                        <div class="collapsible-body"><p>Random Text 3</p></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="mdi-content-send"></i>Assignment 5</div>
                        <div class="collapsible-body"><p>Random Text 3</p></div>
                    </li>
                    <li>
                         <div class="collapsible-header"><i class="mdi-content-send"></i>Assignment 6</div>
                         --}}{{--<div class="collapsible-body"><p>Random Text </p></div>--}}{{--
                     </li>
                </ul>--}}
            </div>
        </div>
    </div>
@endsection