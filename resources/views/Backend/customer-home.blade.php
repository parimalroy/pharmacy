@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Customer List > <a href="{{route('customer.create')}}"
              class="btn btn-primary  pull-right ml-4">create customer</a></h5>

          <!-- Table with stripped rows -->
         
          <table class="table datatable">
            <thead>
              <tr>
                <th>Id</th>
                <th>
                  <b>N</b>ame
                </th>
                <th>Contact Number</th>
                <th>Address</th>
                <th> Doctor Name</th>
                <th>Doctor Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($customers as $customer )
              <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->contact_number}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->doctor_name}}</td>
                <td>{{$customer->doctor_address}}</td>
                <td class="text-center">
                  <form action="{{route('customer.delete')}}" method="post">
                    @csrf
                    <span ><a href="{{route('customer.edit',$customer->id)}}" class="bi bi-pencil-square text-primary "></a></span>
                    <input type="hidden" name="id" value="{{$customer->id}}">
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