<?php

if($action_id!="") {
    $action_head= "Edit Menu";
} else {
    $action_head= "Add Menu";
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

    	<form class="form-horizontal" method="post" href="<?php echo $baseurl.'menu/'.$url_2.'/'.$action_id; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="menu_name" class="col-sm-2 control-label">Menu Name</label>
                <div class="col-sm-10">
                    <input type="text" name="menu_name" class="form-control" id="menu_name" value="<?php echo set_value('menu_name',$form_data['menu_name']); ?>">
                    <?php if(form_error('menu_name')) {
                        echo form_error('menu_name');
                    }if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    } ?>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label for="menu_price" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" name="menu_price" class="form-control" id="menu_price" value="<?php echo set_value('menu_price',$form_data['menu_price']); ?>">
                    <?php if(form_error('menu_price')) {
                        echo form_error('menu_price');
                    } if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    }?>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label for="menu_calories" class="col-sm-2 control-label">Calories</label>
                <div class="col-sm-10">
                    <input type="text" name="menu_calories" class="form-control" id="menu_calories" value="<?php echo set_value('menu_calories',$form_data['menu_calories']); ?>">
                    <?php if(form_error('menu_calories')) {
                        echo form_error('menu_calories');
                    }if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    }?> 
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label for="menu_description" class="col-sm-2 control-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="menu_description" class="form-control" id="menu_description"><?php echo set_value('menu_description',$form_data['menu_description']); ?></textarea>
                    <?php if(form_error('menu_description')) {
                        echo form_error('menu_description');
                    } if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    }?>
                </div>
            </div>
            <div class="clearfix"></div>

            <div class="form-group">
                <label for="menu_image" class="col-sm-2 control-label">Image</label>
                <div class="col-sm-10">
                    <input type="file" name="menu_image" class="form-control" id="menu_image">
                    <?php if(form_error('menu_image')) {
                        echo form_error('menu_image');
                    } if($page_error!="") { 
                        echo '<span class="warningerror">'.$page_error.'</span>';
                    }?>
                </div>
            </div>
            <div class="clearfix"></div>

            <?php if($form_data['menu_image']!="") { ?>
                <div class="col-sm-2">
                </div>
                <div class="col-sm-10">
                    <img src="<?php echo assert_path.'../asset/menu/'.$form_data['menu_image'];?>" class="img-thumbnail" style="max-height: 100px;">
                </div>
            <?php } ?>

            <div class="text-right">
                <a href="<?php echo $baseurl; ?>menu" class="btn btn-sm btn-default">Cancel</a>
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>

    </div>

</div>

<?php
	$this->load->view('template/footer');
?>