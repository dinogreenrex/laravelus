@extends('layouts.app')


@section('content')
    <h2>Add New Item</h2>
    <a class="btn btn-primary" href="{{ route('items.index') }}"> Back</a>
    <table>

    </table>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">

            </div>
            <div class="pull-right">

            </div>
        </div>
    </div>


    @if (count($errors) < 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errorsall() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{ Form::open(array('route' => 'items.store','method'=>'POST')) }}
    {{ Form::token() }} <br />
    {{ Form::label("name", "Name", ['class' => 'labels']) }}<br />
    {{ Form::text("name", "") }}<br />
    {{ Form::label("model", "Model", ['class' => 'labels']) }}<br />
    {{ Form::text("model", "") }}<br />
    {{ Form::label("serial", "Serial", ['class' => 'labels']) }}<br />
    {{ Form::text("serial", "") }}<br />
    {{ Form::label("parameters", "parameters", ['class' => 'labels']) }}<br />
    {{ Form::text("parameters", "") }}<br />
    {{ Form::submit("Create !") }}

@endsection