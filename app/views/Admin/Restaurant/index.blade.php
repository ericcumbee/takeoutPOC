@extends('layouts.main.layout')
@section('content')
<div class="row col-md-8">
{{Form::open()}}
    <table class="table">

        @foreach($restaurants as $rest)
            <tr>
                <td>{{$rest['id']}}</td>
                <td>{{$rest['name']}}</td>
            </tr>
        @endforeach
    </table>
</div>

@stop