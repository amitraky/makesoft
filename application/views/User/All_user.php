<body dir="ltr" marginwidth="0" marginheight="0">
<table id="tblBreadcrumbs" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><div class="section_title_left"></div></td>
      <td width="100%" align="left" class="breadcrumb"><div class="section_title">
          <div class="section_title_text"> <a href="#" title="Home"><img src="<?php echo base_url()?>assets/images/home.gif" style="width:12px; height:11px; margin-top:-3px;"></a> / <a href="#" title="Accounts Manager">Members</a> / <a href="#" class="current" title="Users">All Members</a>&nbsp;</div>
        </div></td>
      <td><div class="section_title_right"></div></td>
    </tr>
  </tbody>
</table>
<br>

<!-- DataGrid CSS definitions - START --> 

<!--[if IE]><link rel="stylesheet" type="text/css" href="../../modules/datagrid/styles/x-blue/style_IE.css" /><![endif]--> 
<!-- DataGrid CSS definitions - END -->
<div class="x-blue_dg_caption">All Members </div>

<table border="0" class="tblToolBar" align="center" style="margin-left:auto;margin-right:auto;margin-bottom:5px;" width="100%" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td align="left"><a href="#" class="x-blue_dg_a">[Manage User Groups]</a></td>
      <td class="dg_exi_td dg_nowrap"><a id="usr_a_hide" style="cursor:pointer;" onclick="return _dgHideUnHideFiltering(&#39;hide&#39;, &#39;usr_&#39;);"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/search_hide.gif" alt="Hide Search" title="Hide Search"></a><a id="usr_a_unhide" style="cursor:pointer;display:none;" onclick="return _dgHideUnHideFiltering(&#39;unhide&#39;, &#39;usr_&#39;);"><img aclass="dg_opacity" src="<?php echo base_url()?>assets/images/search_unhide.gif" alt="Unhide Search" title="Unhide Search"></a></td>
      <td class="dg_exi_td"><a style="cursor:pointer;" onclick="javascript:_dgBlockedInDemo();" class="x-blue_dg_a"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/csv.gif" alt="Export to Excel" title="Export to Excel (csv)"></a></td>
      <td class="dg_exi_td"><a style="cursor:pointer;" onclick="javascript:_dgBlockedInDemo();" class="x-blue_dg_a"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/xls.gif" alt="Export to Excel" title="Export to Excel (xls)"></a></td>
      <td class="dg_exi_td"><a style="cursor:pointer;" onclick="javascript:_dgBlockedInDemo();" class="x-blue_dg_a"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/pdf.gif" alt="Export to PDF" title="Export to PDF"></a></td>
      <td class="dg_exi_td"><a style="cursor:pointer;" onclick="javascript:_dgBlockedInDemo();" class="x-blue_dg_a"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/xml.gif" alt="Export to XML" title="Export to XML"></a></td>
      <td class="dg_exi_td"><a style="cursor:pointer;" onclick="javascript:_dgBlockedInDemo();" class="x-blue_dg_a"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/doc.gif" alt="Export to Word" title="Export to Word"></a></td>
      <td class="dg_exi_td"><a style="cursor:pointer" onclick="window.location.href=self.location;" class="x-blue_dg_a"><img class="dg_opacity" src="<?php echo base_url()?>assets/images/refresh.gif" alt="Refresh Page" title="Refresh Page"></a></td>
    </tr>
  </tbody>
</table>
<table id="usr_searchset" style="margin-bottom:7px;margin-left:auto;margin-right:auto; " width="100%">
  <tbody>
    <tr>
      <td style="text-align:center;"><fieldset class="x-blue_dg_fieldset" dir="ltr" style="margin-left:auto;margin-right:auto;width:100%;">
          <legend class="x-blue_dg_legend">Search</legend>
          <form name="frmFilteringusr_" id="frmFilteringusr_" action="#" method="get" style="margin:10px;">
            
            <table dir="ltr" class="x-blue_dg_filter_table" border="0" id="filterTblusr_" style="margin-left:auto;margin-right:auto;" width="80%" cellspacing="1" cellpadding="1">
              <tbody>
                <tr valign="middle">
                  <td align="left">Member Code</td>
                  <td align="left" ><input type="text" name="" id="" placeholder="Enter Member Code" class="x-blue_dg_textbox"></td>
                  <td align="left">Member Name</td>
                  <td align="left"><input type="text" name="" id="" placeholder="Enter Member Name" class="x-blue_dg_textbox"></td>
                  
                </tr>
                <tr valign="middle">
                  <td  align="left">From Date</td>
                   <td align="left"><input placeholder="yyyy-mm-dd" type="text" class="x-blue_dg_textbox"  value="" name="" id="" maxlength="10">
                    <img id="" src="<?php echo base_url()?>assets/images/cal.gif" alt="Set date" title="Set date" align="top" style="cursor:pointer;margin:3px;margin-left:6px;margin-right:6px;border:0px;"></td>
                
                  <td align="left">To Date</td>
                   <td align="left"><input placeholder="yyyy-mm-dd" type="text" class="x-blue_dg_textbox"  value="" name="" id="" maxlength="10">
                    <img id="" src="<?php echo base_url()?>assets/images/cal.gif" alt="Set date" title="Set date" align="top" style="cursor:pointer;margin:3px;margin-left:6px;margin-right:6px;border:0px;"></td>
                
                  
                </tr>
                <tr valign="middle">
                  <td  align="left">Branch</td>
                  <td align="left"><select class="x-blue_dg_select" style="" name="" id="">
                      <option value="">-- Branch --</option>
                      <option value="2">Branch1</option>
                      <option value="Zimb3abwe">Branch2</option>
                      <option value="Zimbabwe">Branch3</option>
                    </select></td>
                  <td align="left">User Type</td>
                  <td align="left"><select class="x-blue_dg_select" style="" name="" id="">
                      <option value="">-- any --</option>
                      <option value="1">Admin</option>
                      <option value="2">Branch</option>
                      <option value="3">Employee</option>
                      <option value="4">Agent</option>
                      <option value="5" selected>Customer</option>
                    </select></td>
                </tr>
               
              
                <tr>
                  <td colspan="25" align="center">Search type:
                    <input type="text" name="" id="" placeholder="Search Member with keyword" class="x-blue_dg_textbox">
                    <input class="x-blue_dg_button" style="margin-left:5px;margin-right:5px;" type="submit" name="usr__ff_onSUBMIT_FILTER" id="usr__ff_onSUBMIT_FILTER" value="Search"></td>
                </tr>
               
              </tbody>
            </table>
          </form>
        </fieldset></td>
    </tr>
  </tbody>
</table>
<div id="m3talloading_image" class="dg_loading_image" style="display: none;">loading data... <img src="<?php echo base_url()?>assets/images/loading.gif" alt="loading data..."></div>

<table dir="ltr" align="center" id="usr__contentTable" class="x-blue_dg_table" style="margin-left:auto;margin-right:auto;" width="100%">
  <thead>
    <tr class="dg_tr" style="" id="usr_row_">
      <th class="x-blue_dg_th dg_center dg_nowrap">Sr.</th>
     
      <th class="x-blue_dg_th dg_center dg_left dg_nowrap" ><b>Member ID</b></th>
      <th class="x-blue_dg_th  dg_center dg_left dg_nowrap" ><b>Name</b></th>
      <th class="x-blue_dg_th dg_center  dg_center dg_nowrap" ><b>Mobile</b></th>
      <th class="x-blue_dg_th dg_center dg_nowrap" ><b>Join</b></th>
      <th class="x-blue_dg_th dg_center dg_nowrap" ><b>Adviser</b> </th>
      <th class="x-blue_dg_th dg_center dg_nowrap" ><b>Cirtificate</b> </th>
      <th class="x-blue_dg_th dg_center dg_nowrap" ><b>Plan</b></th>
      <th class="x-blue_dg_th_normal dg_center dg_nowrap" >Status</th>
      <th class="x-blue_dg_th_normal dg_center dg_nowrap" >Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $i=1;foreach($rows as $row){?>
    <tr class="dg_tr" style="background: rgb(247, 249, 251);" id="usr_row_0" >
      <td class="x-blue_dg_td dg_left dg_nowrap"><?php echo $i++?></td>
      <td class="x-blue_dg_td dg_left dg_nowrap"><?php echo $row->m50_mem_code?></td>
      <td class="x-blue_dg_td dg_left dg_nowrap"><?php echo $row->m50_username?></td>
      <td class="x-blue_dg_td dg_left dg_nowrap"><?php echo $row->m50_name?></td>
      <td class="x-blue_dg_td dg_center dg_nowrap"><?php echo $row->m50_mobile?></td>
       <td class="x-blue_dg_td dg_center dg_nowrap"><?php echo $row->m50_email?></td>

     
      <td class="x-blue_dg_td dg_center dg_nowrap">99</td>
      <td class="x-blue_dg_td dg_center dg_nowrap"><a class="x-blue_dg_a" href="<?php echo base_url()?>User/details_user" title="View details">View</a></td>
      <td class="x-blue_dg_td dg_center dg_nowrap"><?php echo status($row->m50_status)?></td>
      <td class="x-blue_dg_td dg_center dg_nowrap" style="width:6%;"><a class="x-blue_dg_a" href="<?php echo base_url()?>User/details_user" title="View details">Details</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<table dir="ltr" align="center" border="0" style="margin-left:auto;margin-right:auto;" width="100%">
  <tbody>
    <tr>
      <td align="left"><table border="0">
          <tbody>
            <tr>
             <td align="center" class="dg_nowrap"> Results: 1 - 1 of 1 </td>
             <td align="right" class="dg_nowrap"><table class="x-blue_dg_paging_table" border="0" style="padding:0px;margin:0px;border:0px;" dir="ltr">
            <tbody>
              <tr>
                <td> Pages: <a class="x-blue_dg_p_a_empty">|&lt;&lt;</a> <a class="x-blue_dg_p_a_empty">&lt;&lt;</a></td>
                <td><a class="x-blue_dg_p_a dg_underline" style="text-decoration:underline;" title="current" href="javascript:void(&#39;page=1&#39;);" onclick="javascript:usr__doPostBack(&#39;paging&#39;,&#39;&#39;,&#39;&amp;usr_page_size=25&amp;usr_p=1&#39;)"><b>1</b></a></td>
                <td><a class="x-blue_dg_p_a_empty">&gt;&gt;</a> <a class="x-blue_dg_p_a_empty">&gt;&gt;|</a></td>
              </tr>
            </tbody>
          </table></td>
            </tr>
          </tbody>
        </table></td>
		 <td align="right"><form name="frmPagingusr_Lower" id="frmPagingusr_Lower" action="<?php echo base_url()?>/php-adminpanel/examples/sample3/system/modules/mod_users.php" style="margin:0px auto;padding:0px;">
  <table class="x-blue_dg_paging_table" dir="ltr" style="height:7px;width:95%;margin-left:auto;margin-right:auto;" align="center" border="0">
    <tbody>
      <tr>
        
        <td align="right" class="dg_nowrap"> Page size:
          <select class="x-blue_dg_select" name="page_sizeLower" id="page_sizeLower" title="" onchange="usr__doPostBack(&#39;page_resize&#39;,&#39;&#39;,&#39;&amp;usr_page_size=&#39;+document.frmPagingusr_Lower.page_sizeLower.value)">
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option selected="selected" style="font-weight:bold;" value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
            <option value="250">250</option>
            <option value="500">500</option>
            <option value="1000">1000</option>
          </select></td>
      </tr>
    </tbody>
  </table>
</form></td>
		
    </tr>
  </tbody>
</table>


<!-- END This code was generated by datagrid.class.php v8.1.8 (<?php echo base_url()?>/php-datagrid/index.php) END --> 
<br>
<br>
</body>
