@extends('Backend.layouts.app')

@section('content')
<section class="section">
    @include('message')
    <div class="card p-4">
        <div class="card-body">
            <form action="{{route('medicine.update')}}" method="post" class="row g-3">
                @csrf
                <input type="hidden" name="id" value="{{$medicine->id}}">

                <div class="col-12">
                    <label for="inputNanme4" class="form-label fw-bold">Medicine Name</label>
                    <input type="text" name="medicine_name" value="{{$medicine->medicine_name}}"
                        class="form-control @error('medicine_name') is-invalid @enderror" id="inputNanme4">
                    @error('medicine_name')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label fw-bold">Packing</label>
                    <input type="text" name="packing" value="{{$medicine->packing}}"
                        class="form-control @error('packing') is-invalid @enderror"" id=" inputEmail4">
                    @error('packing')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="inputPassword4" class="form-label fw-bold">Generic Name</label>
                    <input type="text" name="generic_name" value="{{$medicine->generic_name}}"
                        class="form-control @error('generic_name') is-invalid @enderror"" id=" inputPassword4">
                    @error('generic_name')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label fw-bold">Supplier Name</label>
                    <input type="text" name="supplier_name" value="{{$medicine->supplier_name}}"
                        class="form-control @error('supplier_name') is-invalid @enderror"" id=" inputPassword4">
                    @error('supplier_name')
                    <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn btn-primary">Update</button>
                    <a href="{{route('medicine.home')}}" class="btn btn btn-danger btn-block">Cancle</a>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection