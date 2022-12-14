
<script>
function for_section(value){
$('#student_class_section').html("<option value='' >Loading....</option>");
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_class_section.php?class_name="+value+"",
	  cache: false,
	  success: function(detail){
		 $("#student_class_section").html(detail);
		 for_list();
	  }
   });
}

function for_list(){
var class_name=document.getElementById('std_class').value;
var section_name=document.getElementById('student_class_section').value;
var from_date=document.getElementById('from_date').value;
var to_date=document.getElementById('to_date').value;
var std_installment=document.getElementById('std_installment').value;
var rbtn_value=$('input[name=list_type]:checked').val();
var order_by=document.getElementById('order_by').value;

if(rbtn_value=='Random'){
$("#div_installment").hide();
$("#div_from_date").show();
$("#div_to_date").show();
$("#search_detail").removeClass('col-md-12 col-md-offset-2').addClass('col-md-12 col-md-offset-1');
$("#pdf_detail").html('');

if(class_name!='' && section_name!='' && from_date!='' && to_date!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_fee_daily_report_random.php?class_name="+class_name+"&section_name="+section_name+"&from_date="+from_date+"&to_date="+to_date+"&order_by="+order_by+"",
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
}

}else if(rbtn_value=='Installmentwise'){
$("#div_from_date").hide();
$("#div_to_date").hide();
$("#div_installment").show();
$("#search_detail").removeClass('col-md-12 col-md-offset-1').addClass('col-md-12 col-md-offset-2');
$("#pdf_detail").html('');

if(class_name!='' && section_name!='' && std_installment!=''){
$("#pdf_detail").html(loader_div);
$.ajax({
	  type: "POST",
	  url: access_link+"fees_monthly/ajax_student_fee_daily_report_installmentwise.php?class_name="+class_name+"&section_name="+section_name+"&std_installment="+std_installment+"&order_by="+order_by+"",
	  cache: false,
	  success: function(detail){
		 $("#pdf_detail").html(detail);
	  }
   });
}

}
}
</script>
<script>
function for_print()
 {
 var divToPrint=document.getElementById("printTable");
 newWin= window.open("");
 newWin.document.write(divToPrint.outerHTML);
 newWin.print();
 newWin.close();
 }
</script>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Download Fee Daily Report
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="javascript:get_content('index_content')"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="javascript:get_content('fees_monthly/fees')"><i class="fa fa-money"></i> Fees</a></li>
        <li><a href="javascript:get_content('fees_monthly/reports')"><i class="fa fa-money"></i> Reports Panel</a></li>
        <li class="active"><i class="fa fa-user-plus"></i>Daily Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
	       <!-- general form elements disabled -->
          <div class="box box-primary my_border_top">
            <div class="box-header with-border ">
              <div class="col-md-4"><h3 class="box-title">Fee Daily Report download</h3></div>
              <div class="col-md-2"><center><input type="radio" name="list_type" value="Installmentwise" class="list_type" onclick="for_list();" checked /> <b>Monthly</b></center></div>
              <div class="col-md-2"><center><input type="radio" name="list_type" value="Random" class="list_type" onclick="for_list();" /> <b>Datewise</b></center></div>
              <div class="col-md-4">&nbsp;</div>
            </div>
            <!-- /.box-header -->
<!------------------------------------------------Start Registration form--------------------------------------------------->
            <div class="box-body">
			
			<div class="col-md-12 col-md-offset-1" id="search_detail">
								
				<div class="col-md-2">				
				<div class="form-group" >
				<label>Class</label>
				<select name="std_class" class="form-control new_student" id="std_class" onchange="for_section(this.value);" >
				<option value="All">All Class</option>
								<option value="NURSERY">NURSERY</option>
								<option value="LKG">LKG</option>
								<option value="UKG">UKG</option>
								<option value="1ST">1ST</option>
								<option value="2ND">2ND</option>
								<option value="3RD">3RD</option>
								<option value="4TH">4TH</option>
								<option value="5TH">5TH</option>
								<option value="6TH">6TH</option>
								<option value="7TH">7TH</option>
								<option value="8TH">8TH</option>
								<option value="9TH">9TH</option>
								<option value="10TH">10TH</option>
								<option value="11TH">11TH</option>
								<option value="12TH">12TH</option>
								</select>
				</div>
				</div>

				<div class="col-md-2">
				<div class="form-group">
				<label>Section</label>
				<select class="form-control" name="student_class_section" id="student_class_section" onchange="for_list();">
				<option value="All">All</option>
				</select>
				</div>
				</div>

				<div class="col-md-2" id="div_from_date">
				<div class="form-group">
				<label>From Date</label>
				<input type="date" name="from_date" id="from_date" value="2022-12-05" class="form-control" oninput="for_list();" />
				</div>
				</div>
				
				<div class="col-md-2" id="div_to_date">
				<div class="form-group">
				<label>To Date</label>
				<input type="date" name="to_date" id="to_date" value="2022-12-05" class="form-control" oninput="for_list();" />
				</div>
				</div>
				
				<div class="col-md-2" id="div_installment">				
				<div class="form-group" >
				<label>Month</label>
				<select name="std_installment" class="form-control" id="std_installment" onchange="for_list();" >
				<option value="">Select Month</option>
								<option value="04">April Month</option>
								<option value="05">May Month</option>
								<option value="06">June Month</option>
								<option value="07">July Month</option>
								<option value="08">August Month</option>
								<option value="09">September Month</option>
								<option value="10">October Month</option>
								<option value="11">November Month</option>
								<option value="12">December Month</option>
								<option value="01">January Month</option>
								<option value="02">February Month</option>
								<option value="03">March Month</option>
								</select>
				</div>
				</div>
				
				<div class="col-md-2">
				<div class="form-group">
				<label>Order By</label>
				<select class="form-control" name="order_by" id="order_by" onchange="for_list();">
				<option value="">Select</option>
				<option value=" ORDER BY student_name ASC">By Name</option>
				<option value=" ORDER BY blank_field_5 ASC">By Receipt No.</option>
				<option value=" ORDER BY fee_submission_date ASC">By Date</option>
				</select>
				</div>
				</div>
				
			</div>
			
			</br></br></br><hr>
					
			<div class="col-md-12" id="pdf_detail">
			
			</div>
			
	        </div>
<!---------------------------------------------End Registration form--------------------------------------------------------->
		  <!-- /.box-body -->
          </div>
    </div>
</section>

<script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>
<script>
for_list();
</script>
<script>
$(function () {
$('#example1').DataTable()
})
</script>