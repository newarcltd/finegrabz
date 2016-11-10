<?php
	$this->load->view('template/header');
?>


<div class="col-lg-12">
    <h1 class="page-header">Manage Menu</h1>
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
        Menu List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

    	<div class="text-right mb10">
    		<a href="<?php echo $baseurl; ?>menu/add" class="btn btn-sm btn-default">Add</a>
        </div>

        <div class="table-responsive">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover dataTables-menu">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Menu Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Calories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  if(is_array($menu_list) && count($menu_list)!=0) { ?>

                            <?php 
                            $i=1;
                            foreach($menu_list as $l) { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $l['menu_name']; ?></td>
                                    <td><?php echo $l['menu_price']; ?></td>
                                    <td>
                                        <img src="<?php echo assert_path.'../asset/menu/'.$l['image']; ?>" class="img-thumbnail mh100">
                                    </td>
                                    <td><?php echo $l['description']; ?></td>
                                    <td><?php echo $l['calories']; ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-default" href="<?php echo assert_path; ?>menu/edit/<?php echo $l['menu_id']; ?>">Edit</a>
                                    </td>
                                </tr>
                            <?php 
                            $i++;
                            } ?>

                        <?php }  else { ?>
                            <tr>
                                <td colspan="5" class="text-center">No list Available</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
  
            </div>

            <div class="clearfix"></div>  
            
        </div>
        <!-- /.table-responsive -->
    </div>
    
</div>


<script>
$(document).ready(function() {
    $('.dataTables-menu').DataTable({
        responsive: true
    });
});
</script>


<?php
	$this->load->view('template/footer');
?>