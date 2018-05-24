// JavaScript Document
	var $ = jQuery;
		$().ready(function() {

		// validate signup form on keyup and submit
		$("#loginform").validate({
			rules: {
				username: {
					required: true,
					minlength: 4
				},
				password: {
					required: true,
					minlength: 1
				}
			},
			messages: {
				username: {
					required: "Please enter a Login Id",
					minlength: "Your login id must consist of at least 4 characters"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 1 characters long"
				}
			}
		});
		
		
		
		$("#voucherPayment").validate({
			rules: {
				pay_date: {
					required: true,
					minlength: 4
				},
				pay_amount: {
					required: true,
					minlength: 1
				},
				description: {
					required: true,
					minlength: 1
				}
				
				
			},
			messages: {
				pay_date: {
					required: "Please enter a Login Id",
					minlength: "Your login id must consist of at least 4 characters"
				},
				pay_amount: {
					required: "Please provide a password",
					minlength: "Your password must be at least 1 characters long"
				},
				description: {
					required: "Please provide a password",
					minlength: "Your password must be at least 1 characters long"
				}
			}
		});
		
		
		  $("#addMember").validate({
			rules: {
				
				/* office Information :*/
				branch: {
					required: true,
					min: 1
					
				},
				branch_location: {
					required: true,
					minlength: 1
					
				},
				form_no: {
					required: true,
					minlength: 1
				},
				form_type: {
					required: true,
					minlength: 1
				},
				share: {
					required: true,
					minlength: 1
				},
				share_amount: {
					required: true,
					minlength: 1
				},
				type: {
					required: true,
					min: 1
				},
				create_date: {
					required: true,
					minlength: 1
				},
				account_status: {
					required: true,
					minlength: 1
				},
				/* Agent Information :*/
				adviser_id: {
					required: true,
					minlength: 1
				},
				adviser_name: {
					required: true,
					minlength: 1
				},
				/* Basic Information: :*/
				full_name: {
					required: true,
					minlength: 1
				},
				username: {
					required: true,
					minlength: 1
				},
				password: {
					required: true,
					minlength: 1
				},
				master_password: {
					required: true,
					minlength: 1
				},
				father_name: {
					required: true,
					minlength: 1
				},
				dob: {
					required: true,
					minlength: 1
				},
				gender: {
					required: true,
					minlength: 1
				},
				state: {
					required: true,
					minlength: 1
				},
				city: {
					required: true,
					minlength: 1
				},
				pin_code: {
					required: true,
					minlength: 1
				},
				address: {
					required: true,
					minlength: 1
				},
				/*  Contact Information:*/
				mobile: {
					required: true,
					minlength: 1
				},
				email: {
					required: true,
					minlength: 1
				},
				/*  Payment Information::*/
				pay_mode: {
					required: true,
					minlength: 1
				}
				
				
				
				
				
				
				
				
			},
			messages: {
				create_date: {
					required: "Please select create date"
				},
				
			}
		});
		
		//var form = $( "#addMember" );
		
		
        //form.validate();

		
		
		
$( "#submit" ).click(function() {
  alert( "Please fill all required fields " + form.valid() );
});
	


	// validate make advisor 
	
	
	
	$("#makeAdvisor").validate({
			rules: {
				m_code: {
					required: true					
				}
				
			},
			messages: {
				
			}
		});




	
	});
	
	
	
	
	function ajax_call(inUrl,param1=null,param2=null,param3=null,putID)
{
	if(id !=0)
	{
		$.ajax({
		  type: "POST",
		  url: base_url(inUrl),
		  data: {'param1':param1,'param2':param2,'param3':param3},
		  cache: false,
		   beforeSend: function() {
            // setting a timeout
            $('#searchBranch').show();
           },
		  success: function(data){
			 var res = JSON.parse(data);
			 if(res != false)
			 {
			  $('#'+putID).val(res.getValue)
			 }
		     else
			  {
			     $('#'+putID).val('')
			  }
		  },
		  complete: function() {
             $('#searchBranch').hide();
           },
		});
	}
}

	
	
	