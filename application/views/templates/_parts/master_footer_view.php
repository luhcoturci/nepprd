  <footer>        
    
    <div class="col-lg-12 text-center">
      <small>&copy; <?php echo date("Y"); ?> National Enquire Point, Timor Leste</small>
    </div>
</footer>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>vendor/jquery/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/jquery/jquery_ui/jquery-ui.min.js"></script>    
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/admin-tools/admin-forms/js/jquery.validate.min.js"></script>   

<script>

  function count(key = null){
      var txtVal = $('#textAreaEnq').val();
      var words = txtVal.trim().replace(/\s+/gi, ' ').split(' ').length;
      var chars = txtVal.length;
      if(chars===0){words=0;}
      if(words>100){
        if(key != 8){
          alert("<?php echo $this->lang->line('sorry');?>");
        }
        $("#counter").css("color", "red");
        $('#counter').html('<b>'+words+' <?php echo $this->lang->line('words');?>'+ chars +' <?php echo $this->lang->line('characters');?></b>');
      }else{
        $("#counter").css("color", "");
        $('#counter').html(words+' <?php echo $this->lang->line('words');?> '+ chars +' <?php echo $this->lang->line('characters');?>');
      }
  }
  
  count();

  $('#textAreaEnq').on('keyup propertychange paste', function(e){
      var key = e.keyCode;
      count(key);
  });

  (function ($) {
    $.fn.countTo = function (options) {
    	options = options || {};    		
    	return $(this).each(function () {
    		// set options for current element
    		var settings = $.extend({}, $.fn.countTo.defaults, {
    		from:            $(this).data('from'),
    		to:              $(this).data('to'),
    		speed:           $(this).data('speed'),
    		refreshInterval: $(this).data('refresh-interval'),
    		decimals:        $(this).data('decimals')
    	}, options);    			
    	// how many times to update the value, and how much to increment the value on each update
    	var loops = Math.ceil(settings.speed / settings.refreshInterval),
    			increment = (settings.to - settings.from) / loops;
    			
    			// references & variables that will change with each update
    			var self = this,
    				$self = $(this),
    				loopCount = 0,
    				value = settings.from,
    				data = $self.data('countTo') || {};
    			
    			$self.data('countTo', data);
    			
    			// if an existing interval can be found, clear it first
    			if (data.interval) {
    				clearInterval(data.interval);
    			}
    			data.interval = setInterval(updateTimer, settings.refreshInterval);
    			
    			// initialize the element with the starting value
    			render(value);
    			
    			function updateTimer() {
    				value += increment;
    				loopCount++;
    				
    				render(value);
    				
    				if (typeof(settings.onUpdate) == 'function') {
    					settings.onUpdate.call(self, value);
    				}
    				
    				if (loopCount >= loops) {
    					// remove the interval
    					$self.removeData('countTo');
    					clearInterval(data.interval);
    					value = settings.to;
    					
    					if (typeof(settings.onComplete) == 'function') {
    						settings.onComplete.call(self, value);
    					}
    				}
    			}
    			
    			function render(value) {
    				var formattedValue = settings.formatter.call(self, value, settings);
    				$self.html(formattedValue);
    			}
    		});
    	};
    	
    	$.fn.countTo.defaults = {
    		from: 0,               // the number the element should start at
    		to: 0,                 // the number the element should end at
    		speed: 1000,           // how long it should take to count between the target numbers
    		refreshInterval: 100,  // how often the element should be updated
    		decimals: 0,           // the number of decimal places to show
    		formatter: formatter,  // handler for formatting the value before rendering
    		onUpdate: null,        // callback method for every time the element is updated
    		onComplete: null       // callback method for when the element finishes updating
    	};
    	
    	function formatter(value, settings) {
    		return value.toFixed(settings.decimals);
    	}
    }(jQuery));

    jQuery(function ($) {
      // custom formatting example
      $('#count-number').data('countToOptions', {
    	formatter: function (value, options) {
    	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
    	}
      });
      
      // start all the timers
      $('.timer').each(count);  
      
      function count(options) {
    	var $this = $(this);
    	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    	$this.countTo(options);
      }
    });

    $(document).ready(function() {
  	  $('.summernote').summernote();
  	});
</script>

 <script>
//escape by Colin Snover
RegExp.escape = function(text) {
  return text.replace(/[-[\]{}()*+?.,\\^$|#\s]/g, "\\$&");
}
function highlight(term, base) {
  if (!term) return;
  base = base || document.body;
  var re = new RegExp("(" + RegExp.escape(term) + ")", "gi");
  var replacement = "<span class='highlight'>" + term + "</span>";
  $("*", base).contents().each( function(i, el) {
    if (el.nodeType === 3) {
      var data = el.data;
      if (data = data.replace(re, replacement)) {
        var wrapper = $("<span>").html(data);
        $(el).before(wrapper.contents()).remove();
      }
    }
  });
}

function dehighlight(term, base) {
  var text = document.createTextNode(term);
  $('span.highlight', base).each(function () {
    this.parentNode.replaceChild(text.cloneNode(false), this);
  });
}

highlight($('#search-term').val());
//dehighlight("the");

$('#send-renquiry-modal').click(function() {
  $('#re_enquiry_form').submit();
});



$('#send-enquiry-modal').click(function(e){e.preventDefault();

$('#enquiryModalForm').submit();
      $.ajax({
       
        beforeSend : function(xhr, opts){
            //$('#success-modal').modal('show');
        },
        success: function(){
	//$('#success-modal').modal('hide');     
        },
       
    });


});





$('#dismiss-success').click(function() {
	window.location.replace("/");
});
 
jQuery.validator.setDefaults({

  highlight: function (element, errorClass, validClass) {
      if (element.type === "radio") {
          this.findByName(element.name).addClass(errorClass).removeClass(validClass);
      } else {
          $(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
          //$(element).closest('.form-group').find('i.fa').remove();
          //$(element).closest('.form-group').append('<i class="fa fa-exclamation fa-lg form-control-feedback"></i>');
      }
  },
  unhighlight: function (element, errorClass, validClass) {
      if (element.type === "radio") {
          this.findByName(element.name).removeClass(errorClass).addClass(validClass);
      } else {
          $(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
          //$(element).closest('.form-group').find('i.fa').remove();
          //$(element).closest('.form-group').append('<i class="fa fa-check form-control-feedback"></i>');
          
      }
  }	    
});

$('#enquiryModalForm').validate();


	  
</script>
  <script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script></body>



</html>