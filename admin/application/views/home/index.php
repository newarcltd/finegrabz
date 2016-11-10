<?php
	$logged_username=$this->session->userdata('ci_name');

	$this->load->view('template/header');
?>


<div class="col-lg-12">
    <h1 class="page-header">Welcome - <?php echo $logged_username; ?></h1>
</div>
<!-- /.col-lg-12 -->

<?php
	$this->load->view('template/footer');
?>