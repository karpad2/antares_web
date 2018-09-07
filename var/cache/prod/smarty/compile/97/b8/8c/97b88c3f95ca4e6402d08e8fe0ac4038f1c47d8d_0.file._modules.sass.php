<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\controllers\_modules.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd61148b7_11762843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97b88c3f95ca4e6402d08e8fe0ac4038f1c47d8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\controllers\\_modules.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd61148b7_11762843 (Smarty_Internal_Template $_smarty_tpl) {
?>#module-list
	h3
		position: relative
		top: 0
		margin: 0
		padding: 0
		background-color: transparent
		color: $main-color
		@include left(0)
	select.active
		border: solid 1px $brand-primary
		background: lighten($brand-primary,40%)
		option
			background: white!important

.hook_panel
	margin-bottom: 10px!important
	border: solid #E6E6E6 1px
	@include box-shadow(rgba(black,0.10) 0 -2px 0 inset)
	@include border-radius(3px)
	@include padding(10px, 10px, 5px, 10px)
.module_name
	font-size: 1.2em
.module_description
	@extend .text-muted
.hook_panel_header
	@include margin(0, -10px, 0, -10px)
	@include padding(0, 10px, 10px, 10px)
	.hook_name
		font-size: 1.4em
		color: $brand-primary
		background-color: white
		padding: 0 4px
		@include border-radius(3px)
	.hook_title
		@extend .text-muted
	.hook_description
		@extend .text-muted
		@include padding(3px, 0, 0, 3px)

.modules_list_container_tab
	img
		max-width: 66px
.module_list
	.module_list_item
		display: table
		width: 100%
		padding: 5px 0
		margin-bottom: -1px
		border: solid 1px #9ED0EC
		&.highlight
			background-color: #F7E69F
.module_list
	.draggable
		cursor: pointer
.module_col_select
	display: table-cell
	width: 22px
	min-height: 35px
	vertical-align: middle
	text-align: center
	@include border-right(1px solid #ddd)
.module_col_position
	display: table-cell
	width: 70px
	vertical-align: middle
	@include text-align(right)
	.positions
		border: solid 1px #ccc
		background-color: #eee
		padding: 0 5px
		font-size: 1.4em
		color: #aaa
		cursor: move
		text-shadow: white 1px 1px
		@include border-radius(3px)
		@include box-shadow(rgba(0,0,0,0.2) 0 1px 3px inset)
.module_col_icon
	display: table-cell
	width: 75px
	text-align: center
	vertical-align: middle
.module_col_infos
	display: table-cell
	height: 50px
	vertical-align: middle
.module_col_actions
	display: table-cell
	width: 160px
	padding: 0 10px
	vertical-align: middle
	@include text-align(right)
	.btn-group
		@include text-align(left)
li.sortable-placeholder
	border: 1px dashed #CCC
	background-color: #eee
	margin: 4px
	@include border-radius(5px)
td.module_active
	background-color: lighten($brand-success,10%)!important
td.module_inactive
	background-color: lighten($gray,50%)!important
.module-badge-popular, .module-badge-partner, .module-badge-bought
	@extend .badge
	font-size: 12px
.module-badge-popular
	background-color: $brand-addons
.module-badge-partner
	background-color: $brand-primary
.module-badge-bought
	background-color: $greenPrestashop

.categoriesTitle
	.list-group
		#filternameForm
			@include padding-right(15px)
		.list-group-item
			position: relative
			overflow: hidden
			white-space: nowrap
			text-overflow: ellipsis
			@include padding-right(35px)
			.badge
				position: absolute
				@include right(5px)

.quickview-badge
	margin-top: 30px
.quickview-price
	color: #666
	font-size: 1.8em
	@include float(right)

//stars
.rating
	unicode-bidi: bidi-override
	direction: rtl
	font-size: 20px
	span.star
		font-family: $icon-font-family
		display: inline-block
		&:before
			content: "\f006"
			@include padding-right(3px)
			color: #bbb
		&.active:before,
		&.active~span.star:before
			content: "\f005"
			color: #F5AB35

#modules_list_container_tab_modal
	.img-thumbnail
		max-width: 60px
		max-height: 60px

.modules-addons-info
	text-align: center
	h4
		margin-bottom: 0px !important

.modules-addons-buttons
	text-align: center
	a
		margin-right: 10px
		text-transform: uppercase
<?php }
}
