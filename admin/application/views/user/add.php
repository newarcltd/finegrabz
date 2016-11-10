<?php

if($action_id!="") {
    $action_head= "Edit User";
} else {
    $action_head= "Add User";
}

$url_2=$this->uri->segment(2);

$this->load->view('template/header');

?>


 <div class="col-lg-12">
    <h1 class="page-header"><?php echo $action_head; ?></h1>
</div>


<div class="clearfix"></div>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $action_head; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

    	<form class="form-horizontal" method="post" href="<?php echo $baseurl.'user/'.$url_2.'/'.$action_id; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" name="user_name" class="form-control" id="user_name" value="<?php echo set_value('user_name',$form_data['user_name']); ?>">
                    <?php if(form_error('user_name')) {
                        echo form_error('user_name');
                    }if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    } ?>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label for="user_email" class="col-sm-2 control-label">Email Id</label>
                <div class="col-sm-10">
                    <input type="text" name="user_email" class="form-control" id="user_email" value="<?php echo set_value('user_email',$form_data['user_email']); ?>">
                    <?php if(form_error('user_email')) {
                        echo form_error('user_email');
                    } if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    }?>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label for="user_phone" class="col-sm-2 control-label">Phone No</label>
                <div class="col-sm-10">
                    <input type="text" name="user_phone" class="form-control" id="user_phone" value="<?php echo set_value('user_phone',$form_data['user_phone']); ?>">
                    <?php if(form_error('user_phone')) {
                        echo form_error('user_phone');
                    }if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    }?> 
                </div>
            </div>
          
            <div class="clearfix"></div>

           

            <div class="text-right">
                <a href="<?php echo $baseurl; ?>user" class="btn btn-sm btn-default">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>

    </div>

</div>

<?php
	$this->load->view('template/footer');
?>