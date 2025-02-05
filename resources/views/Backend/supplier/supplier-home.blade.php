@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Supplier List > <a href="{{route('supplier.create')}}"
              class="btn btn-primary  pull-right ml-4">create Supplier</a></h5>

          <!-- Table with stripped rows -->
         
          <table class="table datatable">
            <thead>
                     
                         
                                 
              <tr>
                
                <th>
                  Name
                </th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
               
              </tr>
            </thead>
            <tbody>
              
                @foreach ($suppliers as $supplier)    
              
              <tr>
                <td>{{$supplier->name}}</td>
                <td>{{$supplier->email}}</td>
                <td>{{$supplier->contact_number}}</td>
                <td>{{$supplier->supplier_address}}</td>
             
                <td class="text-center">
                  <form action="" method="post">
                    @csrf
                    <span ><a href="" class="bi bi-pencil-square text-primary "></a></span>
                    <input type="hidden" name="id" value="">
                  <span><button class="bi bi-trash text-danger border-0"></button></span>
                </form>
                </td>
              </tr>
              
              @endforeach   
            </tbody>
          </table>
         
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>
@endsection