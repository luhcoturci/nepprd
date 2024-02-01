<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- Theme Javascript -->
<script src="<?php echo base_url(); ?>assets/js/utility/utility.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>

<script src="<?php echo base_url(); ?>vendor/plugins/duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/plugins/moment/moment.min.js"></script><!--Nel added to remove console err-->
<script src="<?php echo base_url(); ?>vendor/plugins/datepicker/js/bootstrap-datetimepicker.min.js"></script><!--Nel added to remove console err-->
<script src="<?php echo base_url(); ?>vendor/plugins/summernote/summernote.min.js"></script>

<?php if (isset($js)) { queue_js($js); } ?>

<!-- End dynamic js loads -->

<script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";    
    // Init Theme Core    
    Core.init();
    //Demo.init();    
    $('.summernote').summernote({
        height: 255, //set editable area's height
        focus: false //set focus editable area after Initialize summernote
      });

      $('td:nth-child(8),th:nth-child(8)').hide();

      $(function(){
        $('.tabList').click(function(){
          var actualText  = $(this)
                                .clone()
                                .children()
                                .detach()
                                .end()
                            .text();
          if(actualText.trim() == "Delinquent"){
            $('td:nth-child(8),th:nth-child(8)').show();
          }else{
            $('td:nth-child(8),th:nth-child(8)').hide();
          }
        });
      });
  });


  $('.deletethis').click(function()
			{
	           //alert('helo'); return false;
	           return confirm('This will permanently delete the item: "' + $(this).attr('id') + '" Continue?');
			});
	
  $("#nenq").on("click", function() {
	  $('#autoresponse').show();
	  $('#categorize').hide();
	  $('#publishthis').hide();
	  $(this).addClass('btn-lg');
	  $("#yenq").removeClass("btn-lg");
	 });

  $("#yenq").on("click", function() {
	  $('#categorize').show();
	  $('#autoresponse').hide();
	  $(this).addClass('btn-lg');
	  $("#nenq").removeClass("btn-lg");
	 });
  $('#autofill').on("change",function() {
	  $('#autotextarea').code($('#autotext-1').html());
  });

  $('#category_ddown').on("change",function() {
	    $('#publishthis').show();
  });
 
//Dual List Plugin Init
  var demo1 = $('.demo1').bootstrapDualListbox({
    nonSelectedListLabel: 'Categories',
    selectedListLabel: 'Assigned',
    preserveSelectionOnMove: 'moved',
    moveOnSelect: true,
   // nonSelectedFilter: 'ion ([7-9]|[1][0-2])'
  });

  $('.eModals').on("click", function () {
	  
	  var eid = $(this).attr('id');
	  $('#enquiry_div').text($('#' + eid).text());
	  var eid_only = eid.substring(8);
	  
	  /* gives the hidden input the enquiry_id value */
	  $('#eid').val(eid_only);

	});

	$('#categorize_submit').on("click", function () {
		$('#categorize_form').submit();
	});
  
  $('#skin-toolbox .panel-heading').on('click', function() {
      $('#skin-toolbox').toggleClass('toolbox-open');
    });

  $('.datepicker').datetimepicker({
	  	pickTime: false
	    });
	  
  $('.timepicker').datetimepicker({
    	format: "HH:mm",
      pickDate: false
    });
	    
  $('.smithbtn').click(function() {
      $('.smithbtn').removeClass('btn-danger').addClass('btn-default');
      $(this).addClass('btn-danger');
    });
  
  $('.smithbtn-1').click(function() {
      $('.smithbtn-1').removeClass('btn-danger').addClass('btn-default');
      $(this).addClass('btn-danger');
    });
  
  $('.smithbtn-2').click(function() {
      $('.smithbtn-2').removeClass('btn-primary').addClass('btn-default');
      $(this).addClass('btn-primary');
    });
  
  $('.smithbtn-3').click(function() {
      $('.editbtn-3').removeClass('btn-success').addClass('btn-default').removeClass('active');
      $(this).addClass('btn-success');
    });
  
  $('.editbtn-3').click(function() {
      $('.smithbtn-3').removeClass('btn-success').addClass('btn-default').removeClass('active');
      $(this).addClass('btn-success');
      var idnum = $(this).attr('id').substr(3);
      $('#edittext_' + idnum).prop("disabled", false);
      $('#edittext_' + idnum).effect("highlight", {}, 1000);
    });
  
  $('.pmark').click(function() {
      $('.pmark').removeClass('btn-danger').addClass('btn-default');
      $(this).addClass('btn-danger');
      //$(this).magnificPopup({});
    });
  
  $('#save-text').click(function() {
      var txt   = $('#txtareatxt').val(); // get the content of the textarea
      var inc   = parseInt($('#counter').val()) + 1; // get the count as an int for labelling the added divs
      $('#counter').val(inc); // increment the counter in the DOM
      
      var grade = '<span class="label label-danger" style="margin-left: 5px; font-size: 1.3em;">' 
                       + '<input type="hidden" id="se_' + inc + '" name="se_' + inc + '" value="' 
                       + $('input[name=src-eval]:checked', '#text-form').val() + '">'
                       + $('input[name=src-eval]:checked', '#text-form').val() +'</span><span class="label label-danger" style="margin-left: 5px; font-size: 1.3em;">' 
                       + '<input type="hidden" id="ie_' + inc + '" name="ie_' + inc + '" value="'
                       + $('input[name=info-eval]:checked', '#text-form').val() + '">'
                       + $('input[name=info-eval]:checked', '#text-form').val() + '</span>';
      var txt   = '<div class="row"><div class="col-md-10"><textarea class="alert alert-default" id="ta_' + inc  + '" name="ta_' + inc 
                    + '" style="width: 100%">'
                    + txt 
                    + '</textarea></div><div class="col-md-1 label">' 
                    + grade
                    + '</div></div><hr class="short alt" />';

      $('#entries').append(txt);
      
      
  	$('#note').hide();
  	$('.smithbtn').removeClass('btn-danger').addClass('btn-default');
  	$('.smithbtn').removeClass('active');
  	$('.smithbtn-1').removeClass('btn-danger').addClass('btn-default');
  	$('.smithbtn-1').removeClass('active');

  	$('#text-input').hide();
  	$('#more-text-div').show();
  	$('#ta_' + inc).effect("highlight", {}, 2000);
  	
  });
  
  $('#more-text-btn').click(function() {
	  $('#text-input').show();
	  $('#more-text-div').hide();
	  });
	  
  $('.nexttext').click(function() {
      var curr_id      = parseInt($(this).attr('id').substring(5));
      var next_id      = curr_id + 1;
      var next_section = 'section_' + next_id;
      var hc_label     = 'hclabel_' + curr_id;
    
      $('#' + hc_label).html($('input[name=src-eval]:checked','#handling-code-form').val());
      $('#handcodes_' + curr_id).hide();

      var hiddenvals = '<input type="hidden" id="hc_' + curr_id + '" name="hc_' + curr_id + '" value="' 
                           + $('input[name=src-eval]:checked', '#handling-code-form').val() + '">';
      
      $('#handling-code-form').append(hiddenvals);
      $('#' + hc_label).removeClass('label-light').addClass('label-danger');
      
      if ($('#' + next_section).length === 0) {
      	$('#savebuttons').collapse();
      	$(this).hide();
      } else {
      	$(this).hide();
          $('#' + next_section).collapse();
          
          }
      
      
   });

  $("#send").click(function()
		    {     
	         var txt = $('#txtareatxt').val();
		     $.ajax({
		         type: "POST",
		         url: "<?php echo base_url(); ?>urn/add_text/", 
		         data: $('#text-form').serialize(),//{'textarea': txt},
		         dataType: 'json',  
		         cache:false,
		         success: function(json){                        
		             try{  
		            	 alert(json.data.txtareatxt);
		             }catch(e) {     
		                 alert('Exception while request..');
		             }
		             },
		             error: function(){                      
		                 alert('Error while request..');
		             }
		          });// you have missed this bracket
		 });
	 
	
  </script>
<script>
    $("#officer").on('click', function(){
        if($( "#officer" ).prop( "checked" )){
                        $("#under_the_supervisor").css({'display':'block'})
                    }
    });
    $("#supervisor").on('click', function(){
        if($( "#supervisor" ).prop( "checked" )){
                        $("#under_the_supervisor").css({'display':'none'})
                    }
    });
</script>
<!-- END: PAGE SCRIPTS -->

</body>

</html>