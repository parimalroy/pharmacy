@extends('Backend.layouts.app')


@section('content')
<section class="section">
  @include('message')
  <div class="card p-4">
    <div class="card-body">
      <form action="{{route('customer.store')}}" method="post" class="row g-3">
        @csrf
        <div class="col-12">
          <label for="inputNanme4" class="form-label fw-bold">Customer Name</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="inputNanme4">
          @error('name')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label fw-bold">Contact Number</label>
          <input type="number" name="contact_number" value="{{old('contact_number')}}" class="form-control @error('contact_number') is-invalid @enderror"" id="inputEmail4">
          @error('contact_number')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Adderss</label>
          {{-- <input type="text" class="form-control" id="inputPassword4"> --}}
          <textarea name="address" id="" class="form-control @error('address') is-invalid @enderror"" cols="5" rows="5"></textarea>
          @error('address')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Doctor Name</label>
          <input type="text" name="doctor_name" value="{{old('doctor_name')}}" class="form-control @error('doctor_name') is-invalid @enderror"" id="inputPassword4">
          @error('doctor_name')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Doctor Adderss</label>
          {{-- <input type="text" class="form-control" id="inputPassword4"> --}}
          <textarea name="doctor_address" id="" cols="5" class="form-control @error('doctor_address') is-invalid @enderror"" rows="5"></textarea>
          @error('doctor_address')
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