@extends('layouts.app')
@section('content')





  {{--  @foreach($users as $benutzer)
        {{$benutzer->email}}

        @endforeach--}}

    @foreach($ads as $benutzer)
        <li>
            {{$benutzer->titel}}
        </li>
    @endforeach







@endsection