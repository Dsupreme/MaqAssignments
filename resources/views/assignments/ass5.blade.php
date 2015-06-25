@extends('...master')

    @section('head_css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ass5.css') }}"/>
    @endsection

    @section('head_js')
        <script type="text/javascript" src="{{ asset('js/game.js') }}"></script>
    @endsection

    @section('nav-content')
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ url('assignments') }}">Assignments</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    @endsection

@section('content')
    <div id="gameZone">
        <div class="modes">
            <button id="easy_mode" href="#gameZone" class="btn waves-effect waves-light spacing theme-color" >Difficulty: Easy</button>
            <button id="medium_mode" href="#gameZone" class="btn waves-effect waves-light spacing theme-color" >Difficulty: Medium</button>
            <div id="game" class="btn spacing gameName">Brick Break</div>
            <button id="expert_mode" href="#gameZone" class="btn waves-effect waves-light spacing theme-color" >Difficulty: Expert</button>
            <button id="insane_mode" href="#gameZone" class="btn waves-effect waves-light spacing theme-color" >Difficulty: Insane</button>

        </div>
        <canvas id="backgroundCanvas" style="position: absolute">
            Your browser doesn't support HTML5. Please install the latest version.
        </canvas>
        <svg id="svgRoot">
            <circle id="ball" r="8" style="display: none" />
            <rect id="pad" height="15px" width="200px" style="display: none" />
        </svg>
    </div>
@endsection