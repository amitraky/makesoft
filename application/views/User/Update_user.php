<style>
select{
width:215px !important;
}
</style>
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
<script type="text/javascript">
<!--
function adm_verifyCancel(rid, param){if(confirm("Are you sure you want to cancel creating new record?")){ adm__doPostBack("cancel",rid,param); } else { false;}};
//-->
</script> 

<!-- DataGrid CSS definitions - START --> 

<!-- DataGrid CSS definitions - END -->

<div class="x-blue_dg_caption">Add Member</div>
<p></p>
<table border="0" class="tblToolBar" style="margin-left:auto;margin-right:auto;margin-bottom:7px;" width="70%" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td align="left"><label class="x-blue_dg_label"> Items marked with an asterisk are required</label></td>
    </tr>
  </tbody>
</table>
<script type="text/javascript">
<!--
function adm__doPostBack(mode,rid,param){
        var f_part = "";
        var f_part_a = f_part;
        var s_part = "";
        var p_part = "&amp;adm_page_size=25&amp;adm_p=1";
        var p_part_default = "&amp;adm_page_size=25&amp;adm_p=1";
        var h_part = "";
        var h_part_print = "";
        var param = (param == null) ? "" : param;
        var details_url = ("?adm_mode=details&amp;adm_rid=_RID_"+f_part+s_part+p_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, "&");
        var delete_url = ("?adm_mode=delete&amp;adm_rid=_RID_"+f_part_a+param).replace(/_RID_/g, rid).replace(/&amp;/g, "&");
        var edit_url = ("?adm_mode=edit&amp;adm_rid=_RID_"+f_part+s_part+p_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, "&");
        var add_url = ("?adm_mode=add&amp;adm_rid=_RID_"+f_part+s_part+p_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, "&");
 var back_url = ('?adm_mode=cancel&amp;adm_rid=_RID_'+f_part+s_part+p_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, '&');
        var cancel_url  = ('?adm_mode=cancel&amp;adm_rid=_RID_'+f_part+s_part+p_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, '&');
        var sorting_url = ('?adm_mode=view'+f_part_a+param).replace(/&amp;/g, '&');sorting_url = sorting_url.replace(/\+\&/g, '%2B&');
        var print_url   = ('?adm_mode=edit&amp;adm_rid=1'+f_part+s_part+p_part).replace(/_RID_/g, '').replace(/&amp;/g, '&');
        var export_url  = ('?adm_mode=edit&amp;adm_rid=1'+f_part+s_part+p_part+param).replace(/_RID_/g, '').replace(/&amp;/g, '&');
        var paging_url  = ('?adm_mode=view'+f_part_a+param).replace(/&amp;/g, '&');
        var page_resize_url = ('?adm_mode=view'+f_part_a+param).replace(/&amp;/g, '&');        
        var reset_url   = ('?adm_mode=view'+p_part_default+param).replace(/&amp;/g, '&');
        var move_url    = ('?adm_mode=move&amp;adm_rid=_RID_'+s_part+p_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, '&');
        var toggle_url  = ('?adm_mode=update&amp;adm_rid=_RID_'+f_part+param).replace(/_RID_/g, rid).replace(/&amp;/g, '&');
        var postback_method = 'post';
        
        if(mode == 'details')    { _dgDoSimpleRequest('adm_', details_url, h_part, 'post'); }
        else if(mode == 'delete'){ _dgDoSimpleRequest('adm_', delete_url, h_part, 'post'); }
        else if(mode == 'edit')  { _dgDoSimpleRequest('adm_', edit_url, h_part, postback_method); }
        else if(mode == 'add')   { _dgDoSimpleRequest('adm_', add_url, h_part, postback_method); }
        else if(mode == 'back')  { _dgDoSimpleRequest('adm_', cancel_url, h_part, postback_method); }
        else if(mode == 'cancel'){ _dgDoSimpleRequest('adm_', cancel_url, h_part, postback_method); }
        else if(mode == 'sort')  { _dgDoSimpleRequest('adm_', sorting_url, h_part, 'post'); } 
        else if(mode == 'paging'){ _dgDoSimpleRequest('adm_', paging_url, h_part, 'post'); }
        else if(mode == 'page_resize'){ _dgDoSimpleRequest('adm_', page_resize_url, h_part, 'post'); }
        else if(mode == 'reset') { _dgDoSimpleRequest('adm_', reset_url, h_part, postback_method); }
        else if(mode == 'print') { adm_myRef=window.open(print_url+'&adm_print=true'+h_part_print,'PrintableView','left=20,top=20,width=840,height=630,toolbar=0,menubar=0,resizable=0,location=0,scrollbars=1');adm_myRef.focus(); }
        else if(mode == 'export'){ adm_myRef=window.open(export_url+'&adm_export=true'+h_part_print,'ExportTo','left=100,top=100,width=240,height=138,toolbar=0,menubar=0,resizable=0,location=0,scrollbars=0');adm_myRef.focus(); }
        else if(mode == 'toggle_status') { _dgDoSimpleRequest('adm_', toggle_url, h_part, 'post'); }
        else if(mode == 'move')  { _dgDoSimpleRequest('adm_', move_url, h_part, postback_method); }
        else{  } }
//-->
</script>
<div id="jd2i1loading_image" class="dg_loading_image" style="display: none;">loading data... <img src="<?php echo base_url()?>assets/images/loading.gif" alt="loading data..."></div>
<form  action="<?php echo base_url('Admin/add_user')?>"  method="post" id="add_member">
 
  <table dir="ltr" align="center" id="adm__contentTable" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="70%">
    <tbody>
      <tr class="dg_tr" style="" id="adm_row_">
        <th class="x-blue_dg_th dg_th_tl dg_center dg_nowrap" style="width:32%;background-color:#fcfaf6;"><b>Field</b></th>
        <th class="x-blue_dg_th dg_th_tr dg_center dg_nowrap" style="width:68%;background-color:#fcfaf6;"><b>Field Value</b></th>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Office Information:</i></span><br></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b> Form No. </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">5200</td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Member Type </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">Genral</td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>No. Of Share  </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">4</td>
      </tr>
        <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Agent  Information:</i></span><br></td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Agent ID</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">Agen ID</td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_01">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b>Agent Name  </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap">Agent Name</td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Basic Information:</i></span><br></td>
      </tr>
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Member Type  </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<select class="x-blue_dg_select" name="member_type" id="member_type" title="member_type">
		 <option value="ar">---select Member Type----</option>
             <option value="1">Admin</option>
             <option value="2">Branch</option>
             <option value="3">Employee</option>
             <option value="4">Agent</option>
             <option value="5" selected>Customer</option>
           
          </select></td>
      </tr>
      
      
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Full Name  </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Last Name" name="full_name" id="full_name" value="Full Name"></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Father Name  </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="father_name" id="father_name" value="Father Name"></td>
      </tr>
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>DOB</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="dob" id="dob" value="<?php echo date('Y-m-d');?>" maxlength="32"></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>State</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="state" id="state" value="UP" maxlength="32"></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>City</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="city" name="city" id="city" value="City" maxlength="32"></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Pin Code</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="pin_code" id="pin_code" value="<?php echo date('Y-m-d');?>" maxlength="32"></td>
      </tr>
	  
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Address</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="address" id="address" value="address" maxlength="32"></td>
      </tr>
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Contact Information:</i></span><br></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Mobile No.</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Phone" name="mobile" id="mobile" value="<?php echo date('Y-m-d');?>" maxlength="32"></td>
      </tr>
	  
	  <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Email ID</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="address" name="email" id="email" value="email" maxlength="32"></td>
      </tr>
	  
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Branch Information:</i></span><br></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Branch  </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"> 
		<select class="x-blue_dg_select" name="branch" id="branch" title="Branch">
		 <option value="ar">---select Branch----</option>
             <option value="1">Genral</option>
            <option value="2">Nominal</option>
           
          </select></td>
      </tr>	  
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Branach Location </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="branch_location" id="branch_location" value="branch_location"></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Payment Information:</i></span><br></td>
      </tr>
     <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Payment Mode </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="pay_mode" id="pay_mode" title="Payment Mode">
		 <option value="ar">---select Branch----</option>
             <option value="1">Cash</option>
             <option value="2">Check</option>
             <option value="2">Bank</option>			 
          </select></td>
      </tr>
	  
	
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
        <td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Id Proof & Address Proof Information:</i></span><br></td>
      </tr>
	  
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>ID Proof </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="id_proof" id="id_proof" title="ID Proof">
		 <option value="ar">---select Proof----</option>
             <option value="1">Adhar card</option>
             <option value="2">Pan card</option>
             <option value="2">voter</option>			 
          </select></td>
      </tr>
	    <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>ID Proof Number </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title=" proof_number" name="id_proof_number" id="id_proof_number" value="proof_number"></td>
      </tr>
	   <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Address Proof </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="address_proof" id="address_proof" title="address proof">
		 <option value="ar">---select Proof----</option>
             <option value="1">Adhar card</option>
             <option value="2">Pan card</option>
             <option value="2">voter</option>			 
          </select></td>
      </tr>
	  
	    <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Address Proof Number </b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox"  type="text" title="Email" name="address_proof_number" id="address_proof_number" value="address_proof_number"></td>
      </tr>
	  
	  
	  
      <tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_07">
        <td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="styphoto"><b>Photo</b></label></td>
        <td class="x-blue_dg_td dg_left dg_nowrap"><table border="0">
            <tbody>
              <tr valign="middle">
                <td align="center">
                 <input type="file" value="1_9opf87pfb3.jpg" name="photo" id="photo">
                <img src="<?php echo base_url()?>assets/images/1_9opf87pfb3.jpg" width="120px" height="90px" title="1_9opf87pfb3.jpg (45 x 45 - 2.85 Kb)" alt="1_9opf87pfb3.jpg"><br>
                  <a class="x-blue_dg_a2" href="javascript:void(0)" onclick="_dgFormAction(&#39;remove&#39;,&#39;photo&#39;,&#39;adm_&#39;,&#39;<?php echo base_url()?>/php-adminpanel/examples/sample3/system/admin_edit_account.php&#39;,&#39;&#39;,&#39;post&#39;,&#39;edit&#39;);return false;">[Remove]</a></td>
              </tr>
            </tbody>
          </table>
          </td>
      </tr>
    

    </tbody>
  </table>
  <br>
  <script type="text/javascript">
<!--
function adm_updateWysiwygFields(){  result_value = _dgUpdateWysiwygFieldsIE('adm_', false);}
function adm_sendEditFields(){ _dgJsSendEditFields('adm_', 'Netscape', 'true', 'by_one') }
//-->
</script>
  <table dir="ltr" align="center" id="adm__contentTable_bottom" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="70%">
    <tbody>
      <tr class="dg_tr" style="background-color:#ffffff;" id="adm_row_1">
        <th class="x-blue_dg_th dg_th_blr dg_left" style="background-color:#fcfaf6;border-right:#d2d0bb 0px solid;"><div style="float:right;"><a class="x-blue_dg_a" href="javascript:adm__doPostBack(&quot;cancel&quot;,&quot;1&quot;);" title="Cancel">Cancel</a><img src="<?php echo base_url()?>assets/images/spacer.gif" width="20px" height="1px" alt="spacer"><a class="x-blue_dg_a" href="javascript:adm_sendEditFields();" onClick="add_member.submit();" title="Update record">Submit</a></div></th>
      </tr>
    </tbody>
  </table>
  <input type="hidden" name="act" value="1">
    
</form>
<script type="text/javascript">
<!--
document.getElementById("jd2i1loading_image").style.display="none";
//-->
</script> 
<script type="text/javascript">
<!--
_dgSetFocus(document.adm_frmEditRow.ryyfirst_name);
//-->
</script> 
<script type="text/javascript">
<!--
function adm__doAjaxRequest(query_string, h_part){
                var http_url = '<?php echo base_url()?>/php-adminpanel/examples/sample3/system/admin_edit_account.php';
                dg_doAjaxRequest(query_string+h_part, 'adm_', http_url, false, '', '300');
            }
function adm__doOpenFloatingCalendar(textbox_id, if_format, show_time){
                Calendar.setup({firstDay : 0, inputField : textbox_id, ifFormat : if_format, showsTime : show_time, button : "img_"+textbox_id}); }

//-->
</script> 

<!-- END This code was generated by datagrid.class.php v8.1.8 (<?php echo base_url()?>/php-datagrid/index.php) END --> 
<br>
</body>
