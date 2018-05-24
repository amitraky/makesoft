
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
<div class="x-blue_dg_caption">Add Member </div><span style="color:#cd0000">*</span> Items marked with an asterisk are required</label>


<form  action="<?php echo base_url('User/add_user')?>"  method="post" id="addMember" onSubmit="return confirm('Are you sure want to submit information')">
 
  <table dir="ltr" align="center" id="adm__contentTable" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="100%">
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
		<select class="x-blue_dg_select" name="branch" id="branch" title="Select Branch " onChange="branch_address(this.value)">
		 <option value="0">---select Branch----</option>
		 <?php foreach($branch_rows as $row){?>
             <option value="1<?php echo $row->m50_id;?>"><?php echo $row->m50_name;?></option>
		 <?php } ?>
            
           
          </select></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Branach Location<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">
        <span id="searchBranch" style="display:none"> <img src="<?php echo base_url()?>assets/images/loading.gif" alt="loading data..."></span>
        <input class="x-blue_dg_textbox"  type="text" readonly title="Auto fill Branach Location" name="branch_location" id="branch_location" >
                </td>
      </tr>
      
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_01">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b> Enter Form No. <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Form No" name="form_no" id="form_no" ></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Member Type<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="form_type" id="form_type" title="Select Member Type">
           <option value="">---select Member Type----</option>
             <option value="G" >Genral</option>
            <option value="N">Nominal</option>
           
          </select></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>No. Of Share <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Total number Of Share" name="share" id="share" ></td>
           <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Share Amount <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Total share amount" name="share_amount" id="share_amount" ></td>
              </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
       
       <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Member Type <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<select class="x-blue_dg_select" name="type" id="type" title="Select Member Type">
		 <option value="0">---select Member Type----</option>
             <option value="1" >Admin</option>
             <option value="2">Branch</option>
             <option value="3" >Branch User</option>
             <option value="4">Employee</option>
             <option value="5">Advisor</option>
             <option value="10" >Customer</option>
             
          </select></td>

         <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>In Words <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">Zero</td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Date<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<input class="x-blue_dg_textbox"  type="text" title="Date of Join" name="create_date" id="create_date" ></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Account Status</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="account_status" id="account_status" title="Account Status">
		 <option value="">---select account status ----</option>
             
             <option value="0">Pending</option>
             <option value="1" >Active</option>
             <option value="2">Inactive</option>
             </option>
           
          </select></td>
      </tr>
      
      
        <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Agent  Information:</i></span><br></td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Adviser ID</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Adviser ID" name="adviser_id" id="adviser_id" ></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b>Adviser Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  readonly type="text" title="Auto fill Adviser Name" name="adviser_name" id="adviser_name"  ></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Basic Information:</i></span><br></td>
      </tr>
      
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Full Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Full Name" name="full_name" id="full_name" ></td>
        
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Username<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Username" name="username" id="username" ></td>
         </tr> 
         <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Password <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Password" name="password" id="password" ></td>
     
      
     
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Master Password <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Master Password " name="master_password" id="_password" ></td>
      
      </tr>
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Father Name <span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Father Name" name="father_name" id="father_name" ></td>
     
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Member DOB</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Member DOB" name="dob" id="dob"  maxlength="32"></td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Gender</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="gender" id="gender" title="Select Gender">
		 <option value="">---select Gender Type----</option>
             <option value="M" >Male</option>
             <option value="F">Female</option>
             
             </option>
           
          </select></td>
    
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>State</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter state" name="state" id="state"  ></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>City</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter city" name="city" id="city"  maxlength="32"></td>
      
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Pin Code</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Pin Code" name="pin_code" id="pin_code"  maxlength="32"></td>
      </tr>
	  
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Address1</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter address" name="address" id="address"  maxlength="32"></td>
          <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Address2</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="address2" id="address2"  maxlength="32"></td>
      </tr>
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Contact Information:</i></span><br></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Mobile No.</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Mobile Number" name="mobile" id="mobile"  maxlength="32"></td>
    
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Email ID</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Enter Email ID" name="email" id="email"  maxlength="32"></td>
      </tr>
	  
     
	  
	   
      
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Payment Information:</i></span><br></td>
      </tr>
     <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Payment Mode<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="pay_mode" id="pay_mode" title="Select Payment Mode">
		 <option value="">---select Branch----</option>
             <option value="C">Cash</option>
             <option value="B">Bank</option>
             <option value="O">Other</option>			 
          </select></td>
          
          <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Check No.</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="check_no" id="check_no"  maxlength="32"></td>
      </tr>
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        
    
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Check Date</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="check_date" id="check_date"  maxlength="32"></td>
         <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;">***************</td>
        <td class="x-blue_dg_td dg_left dg_nowrap">*************</td>
      </tr>
      
      
	
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="4"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Id Proof & Address Proof Information:</i></span><br></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>ID Proof<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="id_proof" id="id_proof" title="ID Proof">
		 <option value="0">---select Proof----</option>
             <option value="1" selected>Adhar card</option>
             <option value="2">Pan card</option>
             <option value="2">voter</option>			 
          </select></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>ID Proof Number<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title=" proof_number" name="id_proof_number" id="id_proof_number" ></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Address Proof<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="address_proof" id="address_proof" title="address proof">
		 <option value="0">---select Proof----</option>
             <option value="1" >Adhar card</option>
             <option value="2">Pan card</option>
             <option value="2">voter</option>			 
          </select></td>
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Address Proof Number<span style="color:#cd0000">*</span> </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="address_proof_number" id="address_proof_number" ></td>
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
 
  <table dir="ltr" align="center" id="adm__contentTable_bottom" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="100%">
    <tbody>
      <tr class="dg_tr" style="background-color:#ffffff;" id="adm_row_1">
        <th class="x-blue_dg_th dg_th_blr dg_left" style="background-color:#fcfaf6;border-right:#d2d0bb 0px solid;" align="center"><div style="float:right;"><input type="reset"><img src="<?php echo base_url()?>assets/images/spacer.gif" width="20px" height="1px" alt="spacer"><input type="submit" id="submit"></div></th>
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
<div id="message_box" style="margin-left:auto;margin-right:auto;width:100%" >
<?Php  get_msg()?>
</div>
<table dir="ltr" align="center" id="member_summary" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="80%">

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
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Member ID</b></td>
<td class="x-blue_dg_td dg_left"><?php echo $row->m50_mem_code; ?></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_01">
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Savaing Account ID</b></td>
<td class="x-blue_dg_td dg_left"><?php echo $row->m50_saving_ac; ?></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="cntr_row_01">
<td class="x-blue_dg_td dg_left dg_nowrap"><b>Adviser ID|Adviser Name</b></td>
<td class="x-blue_dg_td dg_left"><?php echo $row->set_advisor; ?></td>
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

<br><table dir="ltr" align="center" id="cntr__contentTable_bottom" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="80%">
<tbody><tr class="dg_tr" style="background-color:#ffffff;" id="cntr_row_1">
<th class="x-blue_dg_th dg_th_blr dg_left" style="background-color:#fcfaf6;border-right:#d2d0bb 0px solid;"><div style="float:right;"><a class="x-blue_dg_a" onclick="window.print() ;" title="Back" style="cursor:pointer">Print</a> | <a style="cursor:pointer" class="x-blue_dg_a" onclick="window.location.href=base_url('User/add_user') ;" title="Back">New Registration</a></div></th>
</tr>
</tbody></table>

<?php } ?>



 
 
 

<!-- END This code was generated by datagrid.class.php v8.1.8 (<?php echo base_url()?>/php-datagrid/index.php) END --> 
<br>


<script>
function branch_address(id)
{
	if(id !=0)
	{
		$.ajax({
		  type: "POST",
		  url: base_url('Ajax/branch_details'),
		  data: {'branch_id':id},
		  cache: false,
		   beforeSend: function() {
            // setting a timeout
            $('#searchBranch').show();
           },
		  success: function(data){
			 var res = JSON.parse(data);
			 if(res != false)
			 {
			  $('#branch_location').val(res.m51_address1)
			 }
		     else
			  {
			     $('#branch_location').val('')
			  }
		  },
		  complete: function() {
             $('#searchBranch').hide();
           },
		});
	}
}
</script>
</body>
