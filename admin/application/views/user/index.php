<?php
	$this->load->view('template/header');
?>


<div class="col-lg-12">
    <h1 class="page-header">Manage User</h1>
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
        User List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

    	<div class="text-right mb10">
    		<a href="<?php echo $baseurl; ?>user/add" class="btn btn-sm btn-default">Add</a>
        </div>

        <div class="table-responsive">
            <div class="col-sm-12">
                <table class="table table-striped table-bordered table-hover dataTables-user">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  if(is_array($user_list) && count($user_list)!=0) { ?>

                            <?php 
                            $i=1;
                            foreach($user_list as $l) { ?>
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $l['user_name']; ?></td>
                                    <td><?php echo $l['user_email']; ?></td>
                                    <td><?php echo $l['user_phone']; ?></td>
                                    <td>
                                        <a class="btn btn-xs btn-default" href="<?php echo assert_path; ?>user/edit/<?php echo $l['user_id']; ?>">Edit</a>
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
    $('.dataTables-user').DataTable({
        responsive: true
    });
});
</script>


<?php
	$this->load->view('template/footer');
?>