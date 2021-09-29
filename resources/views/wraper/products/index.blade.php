@extends('templates.main')

@section('content')

<div class="row">
  <div class="col-12">
    <h1 class="float-left">products</h1>
    <a class="btn btn-sm btn-success float-right" href="{{ route('wraper.products.create') }}" role="button">Create</a>
  </div>
</div>




<div class="card">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Name</th>
      <th scope="col">quantity</th>
      <th scope="col">cost</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach($products as $product)
      <tr>
      <th scope="row">{{ $product->id }}</th>
      <td>{{ $product->name}}</td>
      <td>{{ $product->quantity}}</td>
      <td>{{ $product->cost}}</td>
      <td>
        <a class="btn btn-sm btn-pirmary" href="{{ route('wraper.products.edit', $product->id) }}" role="button">edit</a>

        <button type="button" class="btn btn-sm btn-danger" onclick="event.preventDefault();
        document.getElementById('delete-product-form-{{ $product->id}}').submit()">
          delete
        </buton>
        <form id="delete-product-form-{{$product->id}}"action="{{ route('wraper.products.destroy', $product->id) }}" method="POST" style= "display:none">
          @csrf
          @method("DELETE")
        </form>
      </td>
</tr>
      @endforeach
  </tbody>
</table>
{{ $products->links() }}
</div>
@endsection