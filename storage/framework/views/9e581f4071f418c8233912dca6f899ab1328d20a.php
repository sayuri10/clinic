

<?php $__env->startSection('content'); ?>
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
              <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($element->id); ?></td>
                  <td><?php echo e($element->membername); ?></td>
                  <td><?php echo e($element->aa); ?></td>
                  <td><?php echo e($element->pp); ?></td>
                  <td><?php echo e($element->tel); ?></td>
                  <td><?php echo e($element->bd); ?></td>
                  <td><?php echo e(Carbon\Carbon::parse($element->bd)->age); ?></td>
                  <td><?php echo e($element->acc); ?></td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </tbody>
          </table>
            </div>
          </div> <!-- table card example end -->
        
        </div>
      </div> <!-- table card code and example end -->
    </section> <!-- table card end -->

        


            
    </div><!-- tab end -->
    
</div><!-- content area end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>