<body dir="ltr" marginwidth="0" marginheight="0">
<table id="tblBreadcrumbs" width="100%" border="0" cellspacing="0" cellpadding="0">
    <tbody><tr>
        <td><div class="section_title_left"></div></td>
        <td width="100%" align="left" class="breadcrumb">
            <div class="section_title"><div class="section_title_text">
                <a href="#" title="Home"><img src="<?php echo base_url()?>assets/images/home.gif" style="width:12px; height:11px; margin-top:-3px;"></a> / <a href="<?php echo base_url()?>/php-adminpanel/examples/sample3/system/menu_options_manager.php?mgid=5" title="Accounts Manager">Accounts Manager</a> / <a href="<?php echo base_url()?>/php-adminpanel/examples/sample3/system/admin_edit_account.php" class="current" title="My Account">My Account</a>&nbsp;</div></div>
        </td>  
        <td><div class="section_title_right"></div></td>
    </tr>
    </tbody></table><br>




<script type="text/javascript">
<!--
function adm_verifyCancel(rid, param){if(confirm("Are you sure you want to cancel creating new record?")){ adm__doPostBack("cancel",rid,param); } else { false;}};
//-->
</script>

<!-- DataGrid CSS definitions - START -->



<!-- DataGrid CSS definitions - END -->

<div class="x-blue_dg_caption">Edit Account</div><p></p>
<table border="0" class="tblToolBar" style="margin-left:auto;margin-right:auto;margin-bottom:7px;" width="70%" cellspacing="1" cellpadding="1"><tbody><tr><td align="left"><label class="x-blue_dg_label"><span style="color:#cd0000">*</span> Items marked with an asterisk are required</label></td></tr></tbody></table>
<form name="adm_frmMain" id="adm_frmMain" action="<?php echo base_url()?>" style="margin:0px;padding:0px" method="post"></form>
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
<form style="margin:10px auto;padding:0px;" name="adm_frmEditRow" id="adm_frmEditRow" method="post" action="<?php echo base_url()?>/php-adminpanel/examples/sample3/system/admin_edit_account.php">
<input type="hidden" name="adm__operation_randomize_code" value="f6bf1si97s2pjmi5w82o">
<input type="hidden" name="adm_mode" id="adm_mode" value="update">
<input type="hidden" name="adm_rid" id="adm_rid" value="1">
<input type="hidden" name="adm_page_size" id="adm_page_size" value="25">
<input type="hidden" name="adm_p" id="adm_p" value="1">
<table dir="ltr" align="center" id="adm__contentTable" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="70%">
<tbody><tr class="dg_tr" style="" id="adm_row_">
<th class="x-blue_dg_th dg_th_tl dg_center dg_nowrap" style="width:32%;background-color:#fcfaf6;"><b>Field</b></th>
<th class="x-blue_dg_th dg_th_tr dg_center dg_nowrap" style="width:68%;background-color:#fcfaf6;"><b>Field Value</b></th>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_00">
<td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Personal Information:</i></span><br></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_01">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryyfirst_name"><b>First Name <span style="color:#cd0000">*</span> </b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox" style="width:210px;" type="text" title="First Name" name="ryyfirst_name" id="ryyfirst_name" value="John"></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_02">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="ryylast_name"><b>Last Name <span style="color:#cd0000">*</span> </b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox" style="width:210px;" type="text" title="Last Name" name="ryylast_name" id="ryylast_name" value="Smith"></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_03">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="reyemail"><b>Email <span style="color:#cd0000">*</span> </b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox" style="width:210px;" type="text" title="Email" name="reyemail" id="reyemail" value="main.admin@mydomain.com"></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_04">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="syyphone"><b>Phone</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><input class="x-blue_dg_textbox" style="width:210px;" type="text" title="Phone" name="syyphone" id="syyphone" value="123-123-123" maxlength="32"></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_05">
<td class="x-blue_dg_td" colspan="2"><span style="font-size:13px;font-weight:bold;color:#336699"><i>Account &amp; Login Info:</i></span><br></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_06">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="stystatus"><b>Status</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><label class="x-blue_dg_label" style="width:210px;">main admin</label></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_07">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="styphoto"><b>Photo</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><table border="0"><tbody><tr valign="middle"><td align="center"><img src="<?php echo base_url()?>assets/images/1_9opf87pfb3.jpg" width="120px" height="90px" title="1_9opf87pfb3.jpg (45 x 45 - 2.85 Kb)" alt="1_9opf87pfb3.jpg"><br><a class="x-blue_dg_a2" href="javascript:void(0)" onclick="_dgFormAction(&#39;remove&#39;,&#39;photo&#39;,&#39;adm_&#39;,&#39;<?php echo base_url()?>/php-adminpanel/examples/sample3/system/admin_edit_account.php&#39;,&#39;&#39;,&#39;post&#39;,&#39;edit&#39;);return false;">[Remove]</a></td></tr></tbody></table><input type="hidden" value="1_9opf87pfb3.jpg" name="styphoto" id="styphoto"></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_08">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="styusername"><b>Username</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><label class="x-blue_dg_label">main_admin</label></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_09">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="rpypassword"><b>Password <span style="color:#cd0000">*</span> </b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><input type="text" class="x-blue_dg_textbox" style="width:210px;" title="Password" name="rpypassword" id="rpypassword" value="test"> <a href="javascript:void(0);" class="x-blue_dg_a2" onclick="document.getElementById(&#39;rpypassword&#39;).value=_dgGeneratePassword(8);">[Generate]</a></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_010">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="stypreferred_language"><b>Language</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><select class="x-blue_dg_select" name="stypreferred_language" id="stypreferred_language" title="Language"><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="ca">Catala</option><option value="ch">Chinese</option><option value="cz">Czech</option><option value="de">German</option><option selected="selected" style="font-weight:bold;" value="en">English</option><option value="es">Espanol</option><option value="fi">Finnish</option><option value="fr">Francais</option><option value="gk">Greek</option><option value="he">Hebrew</option><option value="hu">Hungarian</option><option value="hr">Bosnian/Croatian</option><option value="it">Italiano</option><option value="ja_utf8">Japanese</option><option value="ko">Korean</option><option value="nl">Netherlands</option><option value="pl">Polish</option><option value="pb">Brazilian Portuguese</option><option value="ro_utf8">Romanian</option><option value="ru_utf8">Russian</option><option value="sv">Swedish</option><option value="sr">Serbian</option><option value="th">Thai</option><option value="tr">Turkish</option></select></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_011">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="stylast_login"><b>Last Login</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><label class="x-blue_dg_label">Aug 27, 2017 8:39 AM</label></td>
</tr>
<tr class="dg_tr" style="background-color:#F7F9FB;" id="adm_row_012">
<td class="x-blue_dg_td dg_left dg_nowrap" style="padding-top:5px;vertical-align:top;"><label for="stylogins_count"><b>Logins Count</b></label></td>
<td class="x-blue_dg_td dg_left dg_nowrap"><label class="x-blue_dg_label">36438</label></td>
</tr>
</tbody></table>
<br><script type="text/javascript">
<!--
function adm_updateWysiwygFields(){  result_value = _dgUpdateWysiwygFieldsIE('adm_', false);}
function adm_sendEditFields(){ _dgJsSendEditFields('adm_', 'Netscape', 'true', 'by_one') }
//-->
</script>
<table dir="ltr" align="center" id="adm__contentTable_bottom" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="70%">
<tbody><tr class="dg_tr" style="background-color:#ffffff;" id="adm_row_1">
<th class="x-blue_dg_th dg_th_blr dg_left" style="background-color:#fcfaf6;border-right:#d2d0bb 0px solid;"><div style="float:right;"><a class="x-blue_dg_a" href="javascript:adm__doPostBack(&quot;cancel&quot;,&quot;1&quot;);" title="Cancel">Cancel</a><img src="<?php echo base_url()?>assets/images/spacer.gif" width="20px" height="1px" alt="spacer"><a class="x-blue_dg_a" href="javascript:adm_sendEditFields();" title="Update record">Update</a></div></th>
</tr>
</tbody></table>
</form><script type="text/javascript">
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