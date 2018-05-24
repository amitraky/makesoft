
<body dir="ltr" marginwidth="0" marginheight="0">
<table id="tblBreadcrumbs" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="section_title_left"></div></td>
      <td width="100%" align="left" class="breadcrumb"><div class="section_title">
          <div class="section_title_text"> <a href="#" title="Home"><img src="<?php echo base_url()?>assets/images/home.gif" style="width:12px; height:11px; margin-top:-3px;"></a> / <a href="#" title="Accounts Manager"></a> Member/ <a href="#" class="current" title="My Account">Add Member</a>&nbsp;</div>
        </div></td>
      <td><div class="section_title_right"></div></td>
    </tr>
  </tbody>
</table>
<br>

<?php if(empty($row)){?>
<div class="x-blue_dg_caption">Add Member</div>
<p></p>
<table border="0" class="tblToolBar" style="margin-left:auto;margin-right:auto;margin-bottom:7px;" width="90%" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td align="left"><label class="x-blue_dg_label"><span style="color:#cd0000">*</span> Items marked with an asterisk are required</label></td>
    </tr>
  </tbody>
</table>

<div id="jd2i1loading_image" class="dg_loading_image" style="display: none;">loading data... <img src="<?php echo base_url()?>assets/images/loading.gif" alt="loading data..."></div>
<form  action="<?php echo base_url('User/add_user')?>"  method="post" id="add_member">
 
  <table dir="ltr" align="center" id="adm__contentTable" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="90%">
    <tbody>
      <tr class="dg_tr" style="" id="adm_row_">
        <th class="x-blue_dg_th dg_th_tl dg_center dg_nowrap" style="width:20%;background-color:#fcfaf6;"><b>Field</b></th>
        <th class="x-blue_dg_th dg_th_tr dg_center dg_nowrap" style="width:30%;background-color:#fcfaf6;"><b>Field Value</b></th>
          <th class="x-blue_dg_th dg_th_tl dg_center dg_nowrap" style="width:20%;background-color:#fcfaf6;"><b>Field</b></th>
        <th class="x-blue_dg_th dg_th_tr dg_center dg_nowrap" style="width:30%;background-color:#fcfaf6;"><b>Field Value</b></th>
      </tr>
      
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Office Information:</i></span><br></td>
      </tr>
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Branch <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<select class="x-blue_dg_select" name="branch" id="branch" title="Branch">
		 <option value="ar">---select Branch----</option>
             <option value="1" selected>Head Office</option>
            <option value="2">Lucknow</option>
           
          </select></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Branach Location<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="branch_location" id="branch_location" value="branch_location"></td>
      </tr>
      
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_01">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b> Enter Form No. <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Form No" name="form_no" id="form_no" value="<?php echo rand(1000,9999);?>"></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Member Type<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="form_type" id="form_type" title="Member Type">
           <option value="ar">---select Member Type----</option>
             <option value="G" selected>Genral</option>
            <option value="N">Nominal</option>
           
          </select></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>No. Of Share <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="share" name="share" id="share" value="10"></td>
           <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Share Amount <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="share" name="share_amount" id="share_amount" value="0"></td>
              </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
       
       <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Member Type <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<select class="x-blue_dg_select" name="type" id="type" title="member_type">
		 <option value="ar">---select Member Type----</option>
             <option value="1" >Admin</option>
             <option value="2">Branch</option>
             <option value="3">Employee</option>
             <option value="4">Agent</option>
             <option value="5" selected>Customer</option>
          </select></td>

         <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>In Words <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">Zero</td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Date<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<input class="x-blue_dg_textbox"  type="text" title="share" name="create_date" id="create_date" value="<?php echo date('Y-m-d')?>"></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Account Status</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="account_status" id="account_status" title="member_type">
		 <option value="0">---select account status ----</option>
             
             <option value="0">Pending</option>
             <option value="1" selected>Active</option>
             <option value="2">Inactive</option>
             </option>
           
          </select></td>
      </tr>
      
      
        <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Agent  Information:</i></span><br></td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Adviser ID</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="adviser_id" id="adviser_id" value="123" maxlength="32"></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b>Adviser Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="First Name" name="adviser_name" id="adviser_name"  value="John"></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Basic Information:</i></span><br></td>
      </tr>
      
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Full Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Last Name" name="full_name" id="full_name" value="Full Name"></td>
        
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Username<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Username" name="username" id="username" value="Username"></td>
         </tr> 
         <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Password <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Last Name" name="password" id="password" value="password"></td>
     
      
     
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Master Password <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Last Name" name="master_password" id="_password" value="master_password"></td>
      
      </tr>
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Father Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="father_name" id="father_name" value="Father Name"></td>
     
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Member DOB</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="dob" id="dob" value="<?php echo date('Y-m-d');?>" maxlength="32"></td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Gender</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="gender" id="gender" title="member_type">
		 <option value="0">---select Gender Type----</option>
             <option value="M" >Male</option>
             <option value="F">Female</option>
             
             </option>
           
          </select></td>
    
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>State</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="state" id="state" value="UP" maxlength="32"></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>City</b></label></td>

        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="city" name="city" id="city" value="City" maxlength="32"></td>
      
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Pin Code</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="pin_code" id="pin_code" value="<?php echo date('Ymd');?>" maxlength="32"></td>
      </tr>
	  
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Address1</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="address" id="address" value="address" maxlength="32"></td>
          <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Address2</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="address2" id="address2" value="address2" maxlength="32"></td>
      </tr>
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Contact Information:</i></span><br></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Mobile No.</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="mobile" id="mobile" value="<?php echo time();?>" maxlength="32"></td>
    
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Email ID</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="email" id="email" value="email" maxlength="32"></td>
      </tr>
	  
     
	  
	   
      
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Payment Information:</i></span><br></td>
      </tr>
     <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Payment Mode<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="pay_mode" id="pay_mode" title="Payment Mode">
		 <option value="0">---select Branch----</option>
             <option value="C">Cash</option>
             <option value="B">Bank</option>
             <option value="O">Other</option>			 
          </select></td>
          
          <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Check No.</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="check_no" id="check_no" value="check_no" maxlength="32"></td>
      </tr>
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        
    
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Check Date</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="check_date" id="check_date" value="check_date" maxlength="32"></td>
         <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;">***************</td>
        <td class="x-blue_dg_td dg_left dg_nowrap">*************</td>
      </tr>
      
      
	
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Id Proof & Address Proof Information:</i></span><br></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>ID Proof<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="id_proof" id="id_proof" title="ID Proof">
		 <option value="ar">---select Proof----</option>
             <option value="1" selected>Adhar card</option>
             <option value="2">Pan card</option>
             <option value="2">voter</option>			 
          </select></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>ID Proof Number<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title=" proof_number" name="id_proof_number" id="id_proof_number" value="proof_number"></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Address Proof<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="address_proof" id="address_proof" title="address proof">
		 <option value="ar">---select Proof----</option>
             <option value="1" selected>Adhar card</option>
             <option value="2">Pan card</option>
             <option value="2">voter</option>			 
          </select></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Address Proof Number<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="address_proof_number" id="address_proof_number" value="address_proof_number"></td>
      </tr>
	  
	  
	  
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_07">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="styphoto"><b>Photo</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><table border="0">
            <tbody>
              <tr valign="middle">
                <td align="center">
                 <input type="file" value="1_9opf87pfb3.jpg" name="photo" id="photo" style="width:155px">
                <img src="<?php echo base_url()?>assets/images/1_9opf87pfb3.jpg" width="80px" height="80px" title="1_9opf87pfb3.jpg (45 x 45 - 2.85 Kb)" alt="1_9opf87pfb3.jpg"><br>
                  <a class="x-blue_dg_a2" href="javascript:void(0)" >[Remove]</a></td>
              </tr>
            </tbody>
          </table>
          </td>
           <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="styphoto"><b>Sign Photo</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><table border="0">
            <tbody>
              <tr valign="middle">
                <td align="center">
                 <input type="file" value="1_9opf87pfb3.jpg" name="photo" id="photo" style="width:155px">
                <img src="<?php echo base_url()?>assets/images/1_9opf87pfb3.jpg" width="80px" height="80px" title="1_9opf87pfb3.jpg (45 x 45 - 2.85 Kb)" alt="1_9opf87pfb3.jpg"><br>
                  <a class="x-blue_dg_a2" href="javascript:void(0)" >[Remove]</a></td>
              </tr>
            </tbody>
          </table>
          </td>
      </tr>
    

        <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Nominee Information:</i></span><br></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_01">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b>Full Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Form No" name="nominee_name" id="nominee_name" value="nominee_name"></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Relation<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Form No" name="nominee_relation" id="nominee_relation" value="nominee_relation"></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Nominee DOB <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="share" name="nominee_dob" id="nominee_dob" value="nominee_age"></td>
        
         <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>--- <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">--</td>
      </tr>
      
      

    </tbody>
  </table>
  <br>
 
  <table dir="ltr" align="center" id="adm__contentTable_bottom" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="90%">
    <tbody>
      <tr class="dg_tr" style="background-color:#ffffff;" id="adm_row_1">
        <th class="x-blue_dg_th dg_th_blr dg_left" style="background-color:#fcfaf6;border-right:#d2d0bb 0px solid;" align="center"><div style="float:right;"><input type="submit" value="Update"></div></th>
      </tr>
    </tbody>
  </table>
  <input type="hidden" name="act" value="1">
    
</form>

<?php }else{ ?>
<style>
@media print {
  #textfilters,#top_header ,#tblBreadcrumbs,#message_box * {
    visibility: hidden;
  }
  
 
}
</style>
<div class="x-blue_dg_caption">Registred Member summary</div><p></p>
<div id="message_box" style="margin-left:auto;margin-right:auto;width:60%" >
<?Php  get_msg()?>
</div>
<table dir="ltr" align="center" id="member_summary" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="60%">

<tbody>

<tr class="dg_tr" style="" id="cntr_row_">
<th class="x-blue_dg_th dg_th_tl dg_center dg_nowrap" style="width:32%;background-color:#fcfaf6;"><b>Field</b></th>
<th class="x-blue_dg_th dg_th_tr dg_center dg_nowrap" style="width:68%;background-color:#fcfaf6;"><b>Field Value</b></th>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_00">
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Member Type</b></td>
<td class="x-blue_dg_td dg_left">Customer</td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_01">
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Account ID</b></td>
<td class="x-blue_dg_td dg_left">#00000</td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_02">
<td class="x-blue_dg_td dg_left dg_nowrap"><b> Name</b></td>
<td class="x-blue_dg_td dg_left"><?php echo $row->m50_name?></td>
</tr>

<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_04">
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Mobile Number</b></td>
<td class="x-blue_dg_td dg_left"><?php echo $row->m50_mobile?></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_05">
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Registration Date</b></td>
<td class="x-blue_dg_td dg_left"><?php echo $row->m51_date?></td>
</tr>
</tbody></table>


<br><table dir="ltr" align="center" id="cntr__contentTable_bottom" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="60%">
<tbody><tr class="dg_tr" style="background-color:#ffffff;" id="cntr_row_1">
<th class="x-blue_dg_th dg_th_blr dg_left" style="background-color:#fcfaf6;border-right:#d2d0bb 0px solid;"><div style="float:right;"><a class="x-blue_dg_a" onclick="window.print() ;" title="Back">Print</a> | <a class="x-blue_dg_a" onclick="window.location.href=base_url('User/add_user') ;" title="Back">New Registration</a></div></th>
</tr>
</tbody></table>

<?php } ?>



 
 
 

<!-- END This code was generated by datagrid.class.php v8.1.8 (<?php echo base_url()?>/php-datagrid/index.php) END --> 
<br>
</body>
