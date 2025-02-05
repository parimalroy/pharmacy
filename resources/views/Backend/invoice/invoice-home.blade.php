@extends('Backend.layouts.app')

@section('content')
<section class="section">
  @include('message')
  <div class="row">
    <div class="col-lg-12">

      <div class="card">

        <div class="card-body">
          <h5 class="card-title">Medicine Invoices List > <a href="{{route('invoice.create')}}"
              class="btn btn-primary  pull-right ml-4">create medicine stoke</a></h5>

          <!-- Table with stripped rows -->
         
          <table class="table datatable">
            <thead>
                                     
              <tr>
                
                <th>
                  Customer Name
                </th>
                <th>Net Total</th>
                <th>Invoice Date</th>
                <th>Total Amount</th>
                <th>Total Discount</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               
                   
              @foreach ($invoices as $invoice )               
             
              <tr>
                <td>{{$invoice->customer->name}}</td>
                <td>{{$invoice->net_total}}</td>
                <td>{{$invoice->invoice_date}}</td>
                <td>{{$invoice->total_amount}}</td>
                <td>{{$invoice->total_discount}}</td>
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