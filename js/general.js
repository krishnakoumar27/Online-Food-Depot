 function checkTruckStatus(trucknum) {
			 $.ajax({
			        type: 'GET',
			        url:  "checkValidTruckForToken/" + trucknum,
			        dataType: 'json',
			        async: true,
			        success: function(result) {
			        	if(!result){
			        		$("#errorMsg").html('Truck '+trucknum+ ' is already inside godown.');
							$("errorMsg").draggable({disabled:false})
						    $("#errorMessageDialog" ).dialog({
								draggable: false,
								height: 120,
								width: 350,
								modal: true,
								resizable: false,
								dialogClass: 'no-close',
								title :'Invalid Truck'
							});
			        		$('#trucknum').val('');
			        	}
			        },
			        error: function(jqXHR, textStatus, errorThrown) {
			        	var genericEx = jQuery.parseJSON(jqXHR.responseText);
			        	$( "#button1id" ).prop( "disabled", true );
			        	$("#errorMsg").html(genericEx.errMsg);
						$("errorMsg").draggable({disabled:false})
					    $("#errorMessageDialog" ).dialog({
							draggable: false,
							height: 120,
							width: 350,
							modal: true,
							resizable: false,
							dialogClass: 'no-close',
							title : genericEx.errCode+' Failed'
						});
			        }
			   });
		 }