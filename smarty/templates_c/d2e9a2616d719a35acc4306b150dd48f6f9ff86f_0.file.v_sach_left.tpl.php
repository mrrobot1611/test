<?php
/* Smarty version 3.1.32-dev-11, created on 2017-08-30 06:53:54
  from "C:\wamp64\www\Book_Store_Project_30.07.2017\views\sach_nxb\v_sach_left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-11',
  'unifunc' => 'content_59a66102a94264_92206324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2e9a2616d719a35acc4306b150dd48f6f9ff86f' => 
    array (
      0 => 'C:\\wamp64\\www\\Book_Store_Project_30.07.2017\\views\\sach_nxb\\v_sach_left.tpl',
      1 => 1500705749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a66102a94264_92206324 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-md-4 w3ls_dresses_grid_left">
	<div class="w3ls_dresses_grid_left_grid">
		<h3>NHÀ XUẤT BẢN KHÁC</h3>
		<div class="w3ls_dresses_grid_left_grid_sub">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title asd">
					<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Danh Mục
					</a>
					</h4>
<!--				</div>-->
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body panel_text">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nxb_khacs']->value, 'khac');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khac']->value) {
?> 
						<li><a href="sach_theo_nxb.php?id=<?php echo $_smarty_tpl->tpl_vars['khac']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['khac']->value->ten_nha_xuat_ban;?>
</a></li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</ul>
					</div>
				</div>
				</div>
				
			</div>
		</div>
	</div>

	</div>
	
</div><?php }
}
