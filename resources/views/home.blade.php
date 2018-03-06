@extends('layouts.app')

@section('content')
    <ul>
        <li><a href="{{route('items.create')}}">Create Item</a></li>
    </ul>
<div class="container">
<!--    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::check())
                        You are logged in!
                    @else
                        <p>Please Login</p>
                    @endif
                </div>
            </div>
        </div>
    </div>-->
</div>
    <div id="root">
        <script type="text/babel">

            ReactDOM.render(
                    <h1>Hello, world!</h1>,
                document.getElementById('root')
            );

        </script>
        <div id="div5">

        </div>
    </div>
    <script>
        var Greeting = React.createClass({
            render: function() {
                return (
                    React.createElement('h1', null, 'Hello, world!')
                );
            }
        });
    </script>
    <link rel="stylesheet" href="{{url('css/home.css')}}" />
    <script type="text/javascript" src={{url('js/home.js')}}>

            </script>
    <div id='div1' class="myDiv">

    </div>
    <div id="div2">

    </div>
    <div id="div3" class="div3">

    </div>
@endsection
