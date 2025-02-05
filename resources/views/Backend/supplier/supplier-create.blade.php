@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="card p-4">
    <div class="card-body">
      <form action="{{route('supplier.store')}}" method="post" class="row g-3">
        @csrf
        <div class="col-12">
            <label for="inputEmail4" class="form-label fw-bold">Name</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="inputEmail4">
            @error('name')
            <div class="text text-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label fw-bold">Email</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="inputEmail4">
          @error('email')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Contact Number</label>
          <input type="number" name="contact_number" value="{{old('number')}}" class="form-control @error('contact_number') is-invalid @enderror"" id="inputPassword4">
          @error('contact_number')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
            <label for="inputPassword4" class="form-label fw-bold">Supplier Adderss</label>
            {{-- <input type="text" class="form-control" id="inputPassword4"> --}}
            <textarea name="supplier_address" id="" cols="5" class="form-control @error('supplier_address') is-invalid @enderror"" rows="5"></textarea>
            @error('supplier_address')
            <div class="text text-danger">{{ $message }}</div>
            @enderror
          </div>
   

        <div class="text-center">
          <button type="submit" class="btn btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection