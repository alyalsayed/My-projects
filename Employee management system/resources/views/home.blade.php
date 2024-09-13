@extends('admin.layouts.master')

@section('title','Matrix Admin Lite Free Versions Template by WrapPixel')

@section('content')
<div class="row">
    <div class="col-12">
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">Basic Datatable</h5>
          <div class="table-responsive">
            <table
              id="zero_config"
              class="table table-striped table-bordered"
            >
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger Nixon</td>
                  <td>System Architect</td>
                  <td>Edinburgh</td>
                  <td>61</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                </tr>
                <tr>
                  <td>Garrett Winters</td>
                  <td>Accountant</td>
                  <td>Tokyo</td>
                  <td>63</td>
                  <td>2011/07/25</td>
                  <td>$170,750</td>
                </tr>

              </tbody>


            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
@endsection

@section('table-script')
 <!-- this page js -->
 <script src="{{asset('dashboard/assets')}}/js/datatables.min.js"></script>
 <script>
   /****************************************
    *       Basic Table                   *
    ****************************************/
   $("#zero_config").DataTable();
 </script>
 @endsection
