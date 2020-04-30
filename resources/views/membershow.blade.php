@extends('layouts.app')

@section('content')
<!--content area start-->
<div id="content" class="pmd-content inner-page">

    <!--tab start-->
    <div class="container-fluid full-width-container">
    
        <!-- Title -->
        <h1 class="section-title" id="services">
            <span>ลงทะเบียนประวัติ</span>
        </h1><!-- End Title -->
            
        <!--breadcrum start-->
        <ol class="breadcrumb text-left">
          <li><a href="index.html">ทะเบียน</a></li>
          <li class="active">ลงบันทึกประวัติ</li>
        </ol><!--breadcrum end-->
    
      

          <!-- table card -->
    <section class="row component-section">
    
      
      <!-- table card code and example -->
      <div class="col-md-9">
        <div class="component-box">
          <!-- table card example -->
          <div  class="pmd-card pmd-z-depth pmd-card-custom-view">
            <div class="table-responsive">
            <table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>id</th>
                <th>ชื่อ - สกุล</th>
                <th>อำเภอ</th>
                <th>จังหวัด</th>
                <th>โทร.</th>
                <th>วันเกิด</th>
                <th>อายุ</th>
                <th>อาชีพ</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($members as $element)
                <tr>
                  <td>{{$element->id}}</td>
                  <td>{{$element->membername}}</td>
                  <td>{{$element->aa}}</td>
                  <td>{{$element->pp}}</td>
                  <td>{{$element->tel}}</td>
                  <td>{{$element->bd}}</td>
                  <td>{{ Carbon\Carbon::parse($element->bd)->age}}</td>
                  <td>{{$element->acc}}</td>
                </tr>
              @endforeach
              
            </tbody>
          </table>
            </div>
          </div> <!-- table card example end -->
        
        </div>
      </div> <!-- table card code and example end -->
    </section> <!-- table card end -->

        


            
    </div><!-- tab end -->
    
</div><!-- content area end -->

@endsection
