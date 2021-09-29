@csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="name" 
    value="{{ old('name')}} @isset($product) {{ $product-> name}} @endisset">
    @error('name')
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
  </div>
  <div class="mb-3">
    <label for="quantity" class="form-label">quantity</label>
    <input name="quantity"type="quantity" class="form-control @error('quantity') is-invalid @enderror" id="quantity" aria-describedby="quantity" 
    value="{{ old('quantity')}} @isset($product) {{ $product-> quantity}} @endisset ">
    @error('quantity')
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
  </div>

  <div class="mb-3">
    <label for="cost" class="form-label">Cost</label>
    <input name="cost" type="cost" class="form-control @error('cost') is-invalid @enderror" id="cost" 
    value="{{ old('cost')}} @isset($product) {{ $product-> cost}} @endisset">
    @error('cost')
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror

  <div class="mb-3">

  



  </div>

  <button type="submit" class="btn btn-primary">Submit</button>