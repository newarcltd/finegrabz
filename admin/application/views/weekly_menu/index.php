<?php
$c_date=date('Y-m-d');

function getWeek($week, $year) {
  $dto = new DateTime();
  $result['start'] = $dto->setISODate($year, $week, 1)->format('M d'); 
  $result['end'] = $dto->setISODate($year, $week, 7)->format('M d');
  return $result['start'].' - '.$result['end'];
}

$this->load->view('template/header');
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $header_title; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

    	<div class="text-right mb10">
    		<a href="<?php echo $baseurl; ?>weekly_menu/add" class="btn btn-md btn-primary">Add</a>
        </div>

        <form method="post" action="">
            <div class="panel panel-default">                    
                <div class="panel-body form-horizontal">

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="date" class="col-sm-4 control-label">Year</label>
                            <div class="col-sm-8">
                                <select name="year" id="year" class="form-control" onchange="year_change_action()">
                                    <option value="">Select</option>
                                    <?php foreach($filter_option as $key =>  $value) { ?>
                                        <option <?php if(set_value('year',$form_data['year'])==$key) echo "selected"; ?> value="<?php echo $key; ?>"><?php echo $key; ?></option>
                                    <?php } ?>
                                </select>
                                <?php if(form_error('year')) {
                                    echo form_error('year');
                                } ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="date" class="col-sm-4 control-label">Date Range</label>
                            <div class="col-sm-8">
                                <select name="date_range" id="date_range" class="form-control">
                                    <option value="">Select</option>                                        <?php foreach($filter_option as $key =>  $value) {  ?>
                                        <optgroup label="<?php echo $key; ?>" id="dategroup_<?php echo $key; ?>" >
                                        <?php foreach($value as $v) { 
                                                $k=$key.'_'.$v; ?>
                                            <option <?php if(set_value('date_range')==$k) echo "selected"; ?> value="<?php echo $k; ?>"><?php echo getWeek($v,$key); ?></option>
                                        <?php } ?>
                                        </optgroup>
                                    <?php } ?>
                                </select>
                                <?php if(form_error('date_range')) {
                                    echo form_error('date_range');
                                } ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-md btn-primary">Filter</button>
                    </div>

                </div>
            </div>
        </form>

        <div class="">

            <div class="col-sm-12  bg_menu">
                
                <?php if(count($menu_list['day_list'])>=1) { ?>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <?php 
                        $active=0;
                        asort($menu_list['day_list']);
                        foreach($menu_list['day_list'] as $day) {
                            $class="";
                            if($active==0) {
                                $active=1;
                                $class='class="active"';
                            }
                            ?>
                            <li <?php  echo $class; ?> >
                                <a href="#<?php echo $day; ?>" data-toggle="tab"><?php echo date('M d',strtotime($day)); ?></a>
                            </li>
                        <?php } ?>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <?php 
                        $active=0;
                        foreach($menu_list['day_list'] as $key => $day) { 
                            $class="";
                            if($active==0) {
                                $active=1;
                                $class='active';
                            }
                            $item=$menu_list['menu_list'][$day];
                            ?>

                            <div class="tab-pane fade in <?php echo $class; ?>" id="<?php echo $day; ?>">

                                <?php if(count($item)>=1) { ?>
                                    
                                    <div class="row m_show">

                                        <div class="text-right col-sm-12 mt10">
                                            <a class="btn btn-md btn-default" onclick="return delete_action()" href="<?php echo $baseurl; ?>weekly_menu/delete/<?php echo $key; ?>">Delete</a>
                                            <a href="<?php echo $baseurl; ?>weekly_menu/edit/<?php echo $key; ?>" class="btn btn-md btn-danger">Edit</a>
                                        </div>
                                        <div class="clearfix"></div>

                                        <?php foreach($item as $l) { ?>

                                            <div class="col-sm-4 col-md-3 mt10 m_item">     
                                                <div class="panel panel-default">                    
                                                    <div class="panel-body">
                                                        <img src="<?php echo $baseurl.'../asset/menu/'.$l['image']; ?>" class="img-responsive">
                                                        <div class="name" title="<?php echo $l['name']; ?>">
                                                            <b><?php echo $l['name']; ?></b>
                                                        </div>
                                                        <div class="text-left">
                                                            <b>Price : </b> $<?php echo $l['price']; ?>
                                                        </div>
                                                        <div class="description text-left">
                                                            <p>
                                                                <b>Description :</b>
                                                                <?php echo $l['description'] ?>
                                                            </p>
                                                        </div>
                                                        <button type="button" class="btn btn-xs btn-info btn-block">View</button>
                                                    </div>                                                    
                                                </div>
                                            </div>


                                        <?php } ?>
                                    </div>

                                <?php } else { ?>

                                    <div class="alert alert-danger">
                                        <p>No Menu Assigned For This Day.</p>
                                    </div>

                                <?php } ?>

                            </div>

                        <?php } ?>

                    </div>
                <?php } else { ?>

                    <div class="alert alert-danger">
                        <p>No Menu Assigned For This Week.</p>
                    </div>

                <?php } ?>
  
            </div>

            <div class="clearfix"></div>  
            
        </div>
        <!-- /.table-responsive -->
    </div>
    
</div>

<script>
$(document).ready(function(){
    year_change_action('<?php echo set_value('date_range'); ?>');
});

function year_change_action(value=""){
    var year=$('#year').val();
    $('#date_range optgroup').css('display','none');
    $('#date_range #dategroup_'+year).css('display','block');
    $('#date_range').val(value);
}

function delete_action(){
    var r=confirm("Are You Sure want to Delete.");
    if(r==true){
        return true;
    }
    else {
        return false;
    }
}
</script>

<?php
	$this->load->view('template/footer');
?>