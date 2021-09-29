@extends('templates.main')

@section('content')
<h1>create new product</h1>
<div class="card">
<form method="POST" action="{{route('wraper.products.store')}}">
    
    @include('wraper.products.partials.form',['create' =>true])
</form>
</div>
@endsection