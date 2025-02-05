@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Medicine Stoke List > <a href="{{route('medicinestoke.create')}}"
              class="btn btn-primary  pull-right ml-4">create medicine stoke</a></h5>

          <!-- Table with stripped rows -->
         
          <table class="table datatable">
            <thead>
                                     
              <tr>
                
                <th>
                  Medicine Name
                </th>
                <th>Batch No</th>
                <th>Expary Date</th>
                <th>Quantity</th>
                <th>MRP</th>
                <th>Rate</th>
                <th>Actio</th>
              </tr>
            </thead>
            <tbody>
               @foreach ($medicinesStokes as $medicinesStoke )
                   
              
              <tr>
                <td>{{$medicinesStoke->mediciine->medicine_name}}</td>
                <td>{{$medicinesStoke->batch_id}}</td>
                <td>{{$medicinesStoke->expiry_date}}</td>
                <td>{{$medicinesStoke->quantity}}</td>
                <td>{{$medicinesStoke->mrp}}</td>
                <td>{{$medicinesStoke->Rate}}</td>
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