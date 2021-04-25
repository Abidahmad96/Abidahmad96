@extends('front/layout.layout')
@section('page_title', 'Home Page')
@section('page_name', $result[0]->title)
@section('container')


<p>{{$result[0]->short_desc}}</p>
<p>{{$result[0]->long_desc}}</p>


@endsection