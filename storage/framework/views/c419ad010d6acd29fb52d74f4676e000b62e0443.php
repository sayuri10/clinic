

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
    
        <div class="section section-custom billinfo" id="s"> 
            <!--section-title -->
            <h2>กรุณากรอกประวัติ</h2><!--section-title end -->
            <!-- section content start-->
            <?php if(session('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session('message')); ?> <i class="material-icons media-left pmd-sm">done_outline</i> 
            </div>
            <?php endif; ?>
            <form id="validationForm" action="/memberstore" method="post">
                 <?php echo e(csrf_field()); ?>

            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-body">
                    <div class="group-fields clearfix row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    ชื่อ*
                                </label>
                                <input type="text" name="membername" id="membername" class="form-control" autocomplete="no" required="required" title="กรุณาเติมชื่อสกุล">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    อำเภอ*
                                </label>
                                <input name="aa" type="text" id="aa" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    จังหวัด*
                                </label>
                                <input name="pp" type="text" id="pp" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    รหัสไปรษณีย์*
                                </label>
                                <input name="post" type="text" id="post" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 โทร.*
                               </label>
                               <input name="tel" type="text" id="tel" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 Email*
                               </label>
                               <input name="email" type="text" id="email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                              <label class="control-label">ที่อยู่</label>
                              <textarea name="addr" required class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 วันเกิด
                               </label>
                               <input name="b1" maxlength="2" type="text" id="b1" class="form-control bc" autocomplete="no">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 เดือน
                               </label>
                               <input name="b2" maxlength="2" type="text" id="b2" class="form-control bc" autocomplete="no">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 ปี
                               </label>
                               <input name="b3" maxlength="4" type="text" id="b3" class="form-control bc" autocomplete="no">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 
                               </label>
                               <input name="bd" type="text" id="bd" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 น้ำหนัก Kg
                               </label>
                               <input name="weight" type="number" step=".1" id="weight" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 ส่วนสูง Cm
                               </label>
                               <input name="height" type="number" step=".1" id="height" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group pmd-textfield pmd-textfield-floating-label">
                               <label for="regular1" class="control-label">
                                 อาชีพ
                               </label>
                               <input name="acc" type="text" id="acc" class="form-control" autocomplete="no">
                            </div>
                        </div>
                        
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="checkbox pmd-default-theme">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="">
                                    <span>Save Details</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>      
                <div class="pmd-card-actions">
                    
                    
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </div> <!-- section content end -->  

            
            </form>
        </div>
        


            
    </div><!-- tab end -->
    
</div><!-- content area end -->
<script type="text/javascript">

    $('#subform').click(function(event) {
        $('#validationForm').submit();
    });

    $('.bc').keyup(function(event) {
      console.log($('#b1').val().length);

      if ($('#b1').val().length==2) {
        $('#b2').focus();
        if ($('#b2').val().length==2) {
          $('#b3').focus();
        }

      }
      

      $b3 = parseInt($('#b3').val())-543;
      $('#bd').val($b3+'-' + $('#b2').val()+'-' + $('#b1').val());
    });



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>