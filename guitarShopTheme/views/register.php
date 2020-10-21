<?php require('views/guitarShopHeader.php'); ?>

    <!-- main container -->
<section class="bg-home bg-circle-gradiant d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8"> 
                        <div class="card login_page shadow rounded border-0">
                            <div class="card-body">
                                <h4 class="card-title text-center">Signup</h4>  

                                    <?php 
                                        if ($vm != null) {
                                            if ($vm->errorMsg != '') { ?>
                                                 <p> <?php echo $vm->errorMsg; ?></p>
                                            <?php }
                                    }?>

                                <form action="." method="post" class="login-form mt-4">

                                    <input type="hidden" name="ctlr" value="admin">
                                    <input type="hidden" name="action" value="register">
                                    <?php echo csrf_token_tag(); ?>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">                                               
                                                <label>First name <span class="text-danger">*</span></label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user fea icon-sm icons"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <input type="text" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group position-relative">                                                
                                                <label>Last name <span class="text-danger">*</span></label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check fea icon-sm icons"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                                <input type="text" name="lastName">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Your Email <span class="text-danger">*</span></label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm icons"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                <input type="text" name="email">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Phone # <span class="text-danger">*</span></label>
                                               
                                                <input type="text" name="phoneNumber" placeholder="###-###-####">
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Password <span class="text-danger">*</span></label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key fea icon-sm icons"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                                <input type="password" name="password">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group position-relative">
                                                <label>Confirm Password <span class="text-danger">*</span></label>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key fea icon-sm icons"><path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path></svg>
                                                <input type="password" name="confirmPassword">
                                            </div>
                                        </div>                                        
                                        <div class="col-md-12">
                                            <label>&nbsp;</label>
                                            <input type="submit" value="Submit">
                                        </div>
                                        <div class="col-lg-12 mt-4 text-center">
                                            
                                            <!--end icon-->
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Already have an account ?</small> <a href="?ctlr=admin&amp;action=login" class="text-dark font-weight-bold">Sign in</a></p>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
</section>


<?php require('views/guitarShopFooter.php'); ?>