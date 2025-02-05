@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="card p-4">
    <div class="card-body">
      <form action="{{route('medicinestoke.store')}}" method="post" class="row g-3">
        @csrf
        <div class="col-12">
          <label for="inputNanme4" class="form-label fw-bold">Medicine Name</label>
          <select class="form-select form-select-lg mb-3" name="medicine_id" aria-label=".form-select-lg example" >
            {{-- <option selected>Select Medicine Name</option> --}}
            @foreach ($medicines as $medicine )
            <option value="{{$medicine->id}}">{{$medicine->medicine_name}}</option>
            @endforeach

          </select>
          @error('medicine_name')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label fw-bold">Batch id</label>
          <input type="text" name="batch_id" value="" class="form-control @error('batch_id') is-invalid @enderror"" id="inputEmail4">
          @error('batch_id')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Expary Date</label>
          <input type="date" name="expiry_date" value="" class="form-control @error('expiry_date') is-invalid @enderror"" id="inputPassword4">
          @error('expiry_date')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Quantity</label>
          <input type="text" name="quantity" value="{{old('quantity')}}" class="form-control @error('quantity') is-invalid @enderror"" id="inputPassword4">
          @error('quantity')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">MRP</label>
          <input type="text" name="mrp" value="{{old('mrp')}}" class="form-control @error('mrp') is-invalid @enderror"" id="inputPassword4">
          @error('mrp')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Rate</label>
          <input type="text" name="Rate" value="{{old('Rate')}}" class="form-control @error('Rate') is-invalid @enderror"" id="inputPassword4">
          @error('Rate')
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