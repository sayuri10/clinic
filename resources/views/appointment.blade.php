@extends('layouts.app')

@section('content')
<!--content area start-->
<div id="content" class="pmd-content inner-page">

    <!--tab start-->
    <div class="container-fluid full-width-container">
    
        <!-- Title -->
        <h1 class="section-title" id="services">
            <span>กำหนดนัด</span>
        </h1><!-- End Title -->
            
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
          <li><a href="index.html">นัดหมาย</a></li>
          <li class="active">กำหนดนัด</li>
        </ol><!--breadcrum end-->
    
      

          <!-- table card -->
    <section class="row component-section">
    
      
      <div class="col-md-3">
        <div class="component-box">
          <!-- table card example -->
          <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
            {{ Carbon\Carbon::today()}}
            <table class="table table-bordered table-hover">
            <tr><td>09.00</td></tr>
            <tr><td>09.30</td></tr>
            <tr><td>10.00</td></tr>
            <tr><td>10.30</td></tr>
            <tr><td>11.00</td></tr>
            <tr><td>11.30</td></tr>
            <tr><td>12.00</td></tr>
            <tr><td>12.30</td></tr>
            <tr><td>13.00</td></tr>
            <tr><td>13.30</td></tr>
            <tr><td>14.00</td></tr>
            <tr><td>14.30</td></tr>
            <tr><td>15.00</td></tr>
            <tr><td>15.30</td></tr>
            <tr><td>16.00</td></tr>
            <tr><td>16.30</td></tr>
            <tr><td>17.00</td></tr>
            <tr><td>17.30</td></tr>
            <tr><td>18.00</td></tr>
            <tr><td>18.30</td></tr>
            <tr><td>19.00</td></tr>
            <tr><td>19.30</td></tr>
            </table>
            
          </div> <!-- table card example end -->
        
        </div>
      </div>
      
    </section>
    <!-- table card end -->

        


            
    </div><!-- tab end -->
    
</div><!-- content area end -->

@endsection
