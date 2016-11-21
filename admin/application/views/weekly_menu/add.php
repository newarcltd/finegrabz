<?php
if($action_id=="") {
    $m_list=(set_value('menu_list[]',$form_data['menu_list']));
} else {
    $m_list=(set_value('menu_list[]',$form_data['menu_list']));
    if($this->input->post('date')) {
        if(is_array(set_value('menu_list[]'))) {
            $m_list=set_value('menu_list[]');
        }
        else {
            $m_list=array();
        }
    }
}

$this->load->view('template/header');
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $header_title; ?>
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">

        <div class="">
            <div class="col-sm-12">
                
                <form class="form-horizontal" method="post" href="<?php echo $baseurl.'weekly_menu/'.$url_2.'/'.$action_id; ?>">

                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <label class="input-group-addon btn" for="date">
                                   <span class="fa fa-calendar open-datetimepicker"></span>
                                </label>
                                <input <?php if($action_id!="") echo "readonly"; ?> type="text" name="date" class="form-control" id="date" value="<?php echo set_value('date',$form_data['date']); ?>" >
                            </div>
                            <p class="text-muted">Eg: yyyy-mm-dd</p>
                            <?php if(form_error('date')) {
                                echo form_error('date');
                            }?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group">
                        <label for="menu_list" class="col-sm-2 control-label">Select Menu</label>
                        <div class="col-sm-10">
                            <select name="menu_list[]" multiple="multiple" class="form-control" id="menu_list" >
                                <?php foreach($menu_list as $key => $value) { ?>
                                    <option <?php if(in_array($key, $m_list)) echo "selected=selected"; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php } ?>
                            </select>
                            <?php if(form_error('menu_list')) {
                                echo form_error('menu_list');
                            }?>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>

                    <div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10 menu_list_html">
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="form-group text-right">
                        <div class="col-sm-12">
                            <a href="<?php echo $baseurl; ?>weekly_menu" class="btn btn-md btn-default">Cancel</a>
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
  
            </div>

            <div class="clearfix"></div>  
            
        </div>
        <!-- /.table-responsive -->
    </div>
    
</div>

<script type="text/javascript">
var today = new Date();
var newdate = new Date();
newdate.setDate(today.getDate()+0);

var selected_menu='<?php echo json_encode($m_list); ?>';
var menu_list='<?php echo json_encode($full_menu_list); ?>';
var baseurl='<?php echo $baseurl; ?>';
var m=$('#menu_list');
console.log(selected_menu);

$(document).ready(function(){
    $('#date').datepicker({
        format: "yyyy-mm-dd",
        daysOfWeekDisabled: "0,6",
        autoclose: true,
        todayHighlight: true,
        startDate: newdate
    });

    m.multiselect({
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        maxHeight: 400,
        onChange: function(option, checked) {
            generate_menu_list($(option).val(),checked);
        }
    });

    try{
        var s=JSON.parse(selected_menu);
        for(i=0;i<s.length;i++){
            generate_menu_list(s[i],true);   
        }
    }
    catch(e){

    }

});

function generate_menu_list(val,checked){
    var menu=JSON.parse(menu_list);
    if(menu[val]==undefined){
        return false;
    }

    var cl_name="menu_item_cl_"+val;

    if(checked==true) {

        if($('.'+cl_name).length>=1){
            $('.'+cl_name).show();
            return false;
        }

        var html="";
        html +='<div class="col-sm-4 col-md-3 col_item '+cl_name+'">';
            html +='<div class="menu_list_item">';
                html +='<img src="'+baseurl+'../asset/menu/'+menu[val]['image']+'" class="img-responsive img-thumbnail">';
                html +='<div class="name">'+menu[val]['name']+'</div>';
                html +='<div><button type="button" onclick="remove_item('+val+')" class="btn btn-xs btn-block btn-danger">Remove</button></div>';
            html +='</div> ';
        html +='</div>';
        $('.menu_list_html').append(html);    
    }
    else {
        $('.'+cl_name).hide();
    }
    
    // m.multiselect('rebuild');
}

function remove_item(val){
    var cl_name="menu_item_cl_"+val;
    $('.'+cl_name).hide();
    $("#menu_list option[value='"+val+"']").removeAttr('selected').prop("selected", false);
    m.multiselect('rebuild');
}

</script>

<script type="text/javascript" src="<?php echo $assert_path; ?>asset/js/bootstrap-multiselect.js"></script>

<?php
	$this->load->view('template/footer');
?>