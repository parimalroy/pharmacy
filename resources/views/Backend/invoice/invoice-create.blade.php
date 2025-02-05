@extends('Backend.layouts.app')


@section('content')
<section class="section">
  @include('message')
  <div class="card p-4">
    <div class="card-body">
      <form action="{{route('invoice.store')}}" method="post" class="row g-3">
        @csrf
        <div class="col-12">
            <label for="inputNanme4" class="form-label fw-bold">Customer Name</label>
            <select class="form-select form-select-lg mb-3" name="customer_id" aria-label=".form-select-lg example" >
              {{-- <option selected>Select Medicine Name</option> --}}
              @foreach ($customers as $customer)
              <option value="{{$customer->id}}">{{$customer->name}}</option>
              @endforeach
              
             
  
            </select>
            @error('customer_id')
            <div class="text text-danger">{{ $message }}</div>
            @enderror
          </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label fw-bold">Net Total</label>
          <input type="number" name="net_total" value="{{old('net_total')}}" class="form-control @error('net_total') is-invalid @enderror"" id="inputEmail4">
          @error('net_total')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label fw-bold">Invoice Date</label>
          <input type="date" name="invoice_date"  class="form-control @error('invoice_date') is-invalid @enderror"" id="inputEmail4">
          @error('invoice_date')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="col-12">
          <label for="inputPassword4" class="form-label fw-bold">Total Amount</label>
          <input type="number" name="total_amount" value="{{old('total_amount')}}" class="form-control @error('total_amount') is-invalid @enderror" id="inputPassword4">
          @error('total_amount')
          <div class="text text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12">
            <label for="inputEmail4" class="form-label fw-bold">Total Discount</label>
            <input type="number" name="total_discount"  class="form-control @error('total_discount') is-invalid @enderror" id="inputEmail4">
            @error('total_discount')
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