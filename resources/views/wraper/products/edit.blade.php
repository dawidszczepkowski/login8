@extends('templates.main')

@section('content')
<h1>edit product</h1>
<div class="card">
<form method="POST" action="{{route('wraper.products.update', $product->id)}}">
    @method('PATCH')
    @include('wraper.products.partials.form')
</form>
</div>
@endsection