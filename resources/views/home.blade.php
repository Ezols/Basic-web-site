@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo alias sit temporibus ab aperiam similique non totam corrupti incidunt sequi magnam, doloribus quidem sed quod nesciunt aspernatur nam culpa mollitia.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection