<?php
	$this->load->view('template/header');
?>


<div class="col-lg-12">
    <h1 class="page-header">Profile</h1>
</div>

<div class="clearfix"></div>

<?php if($this->session->flashdata('success_msg')) {
    echo '<div class="alert alert-success">'.$this->session->flashdata('success_msg').'</div>';
}
if($this->session->flashdata('fail_msg')) {
    echo '<div class="alert alert-danger">'.$this->session->flashdata('fail_msg').'</div>';
} ?>

<div class="panel panel-default">
    <div class="panel-heading">
        Profile
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

        <div class="table-responsive">

            <div class="col-sm-12">
                
                <form method="post" class="form-horizontal">

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" value="<?php echo set_value('name',$form_data['name']); ?>">
                            <?php if(form_error('name')) {
                                echo form_error('name');
                            } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" id="username" value="<?php echo set_value('username',$form_data['username']); ?>">
                            <?php if(form_error('username')) {
                                echo form_error('username');
                            } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="email" value="<?php echo set_value('email',$form_data['email']); ?>">
                            <?php if(form_error('email')) {
                                echo form_error('email');
                            } ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-md btn-primary form_save_btn">Save</button>
                        <button type="button" class="btn btn-md btn-danger form_edit_btn">Edit</button>
                    </div>

                </form>
  
            </div>

            <div class="clearfix"></div>  
            
        </div>
        <!-- /.table-responsive -->

    </div>
    
</div>

<script type="text/javascript">
var save_action='<?php echo $save_action; ?>';

$(document).ready(function(){
    button_action(save_action);

    $('.form_edit_btn').click(function(){
        button_action(1);
    });
});

function button_action(val){
    if(val==1){
        $('.form_save_btn').show();
        $('.form_edit_btn').hide();
        $('input').attr('disabled',false);
    }
    else {
        $('.form_save_btn').hide();
        $('.form_edit_btn').show();
        $('input').attr('disabled',true);
    }
}
</script>

<?php
	$this->load->view('template/footer');
?>