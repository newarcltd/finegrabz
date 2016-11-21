<?php
	$this->load->view('template/header');
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $header_title; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

        <div class="table-responsive">

            <div class="col-sm-12">
                
                <form method="post" class="form-horizontal">

                    <div class="form-group">
                        <label for="old_password" class="col-sm-2 control-label">Old Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="old_password" class="form-control" id="old_password" value="<?php echo set_value('old_password'); ?>" >
                            <?php if(form_error('old_password')) {
                                echo form_error('old_password');
                            } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label for="new_password" class="col-sm-2 control-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="new_password" class="form-control" id="new_password" value="<?php echo set_value('new_password'); ?>">
                            <?php if(form_error('new_password')) {
                                echo form_error('new_password');
                            } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="confirm_password" class="form-control" id="confirm_password" value="<?php echo set_value('confirm_password'); ?>">
                            <?php if(form_error('confirm_password')) {
                                echo form_error('confirm_password');
                            } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-md btn-primary">Save</button>
                    </div>

                </form>
  
            </div>

            <div class="clearfix"></div>  
            
        </div>
        <!-- /.table-responsive -->

    </div>
    
</div>


<?php
	$this->load->view('template/footer');
?>