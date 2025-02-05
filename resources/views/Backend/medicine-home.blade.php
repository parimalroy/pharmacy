@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Medicine List > <a href="{{route('medicine.create')}}"
              class="btn btn-primary  pull-right ml-4">create medicine</a></h5>

          <!-- Table with stripped rows -->
         
          <table class="table datatable">
            <thead>
                                     
              <tr>
                
                <th>
                  Medicine Name
                </th>
                <th>Packing</th>
                <th>Generic Name</th>
                <th>Supplier Name</th>
                <th>Created at</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($medicines as $medicine )   
              <tr>
                <td>{{$medicine->medicine_name}}</td>
                <td>{{$medicine->packing}}</td>
                <td>{{$medicine->generic_name}}</td>
                <td>{{$medicine->supplier_name}}</td>
                <td>{{$medicine->created_at}}</td>
                <td class="text-center">
                  <form action="{{route('medicine.trash')}}" method="post">
                    @csrf
                    <span ><a href="{{route('medicine.edit',$medicine->id)}}" class="bi bi-pencil-square text-primary "></a></span>
                    <input type="hidden" name="id" value="{{$medicine->id}}">
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