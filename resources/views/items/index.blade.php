@extends('layouts.app')

@section('content')
    <div class="new">
        <a href="{{ url("items/create") }}">Create new Item</a>
    </div>
    <table class="x-table-layout">
    <tr>
    @foreach($items as $item)
            <td class="x-table-layout-cell">
            {{$item->name}}
        </td>
            <td class="x-table-layout-cell">
            {{ $item->model }}
        </td>


    @endforeach
        </tr>
    </table>
@stop