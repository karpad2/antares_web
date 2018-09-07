<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\partials\_commons.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd686d4d2_12988891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aacb7d25d8045687decdbecb10a6be8b2965e9ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\partials\\_commons.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd686d4d2_12988891 (Smarty_Internal_Template $_smarty_tpl) {
?>// helpers class for fixing input width
.fixed-width-xs
	width: 48px!important
.fixed-width-sm
	width: 80px!important
.fixed-width-md
	width: 120px!important
.fixed-width-lg
	width: 160px!important
.fixed-width-xl
	width: 200px!important
.fixed-width-xxl
	width: 250px!important

//quick fix for inline hidden content on device width - waiting for bootstrap update https://github.com/twbs/bootstrap/issues/8869
.hidden-inline-xs
	@media (max-width: $screen-xs)
		display: none!important

.row-margin-bottom
	margin-bottom: 15px
.row-margin-top
	margin-top: 15px
.row-padding-top
	padding-top: 15px

.thumbnail,
.img-thumbnail
	background-color: white
	border-color: #ccc!important

.highlight
	background-color: #F7E69F

.text-orange
	color: $amber

.badge
	padding: 1px 5px
	font-weight: normal
	font-size: 1em
	line-height: inherit
	letter-spacing: 0.0625em
	background-color: $brand-primary
	&.badge-info
		background-color: $brand-info
	&.badge-success
		background-color: $brand-success
	&.badge-warning
		background-color: $brand-warning
	&.badge-danger
		background-color: $brand-danger
	&.badge-critical
		background-color: darken($brand-danger,15%)

.label
	font-size: 12px
	font-weight: 400
	&.label-inactive
		background-color: #999
//tabs
.nav-tabs
	border-bottom: none
	li .badge
		background-color: white
		border: solid 2px #eee
		color: #666
	li a
		font-size: 1.1em
		font-family: $headings-font-family
		text-transform: uppercase
		font-weight: 300
	li.active
		a, a:hover, a:focus
			background-color: white

.table tr.parent td
	background-color: #eee!important
	border-bottom: solid 1px #ccc!important

//alert boxs
@mixin alert-panel($icon,$color)
	position: relative
	border: none
	@include padding-left(50px)
	@include border-left(solid 3px lighten($color,9%))
	&:before
		position: absolute
		top: 6px
		display: block
		height: 25px
		width: 25px
		color: lighten($color,9%)
		@include left(7px)
		@extend .icon
		@extend .icon-3x
		@extend .#<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>


.alert.alert-warning
	@include alert-panel(icon-exclamation-circle, $brand-warning)

.alert.alert-danger
	@include alert-panel(icon-exclamation-triangle, $brand-danger)

.alert.alert-success
	@include alert-panel(icon-check-circle, $brand-success)

.alert.alert-info
	@include alert-panel(icon-question-circle, $brand-info)

.alert.alert-addons
	$alert-addons-border: lighten($brand-addons,10%)
	$alert-addons-text: $brand-addons
	@include alert-variant(#F3F3F2, $alert-addons-border, $alert-addons-text)
	@include alert-panel(icon-puzzle-piece, $brand-addons)

.alert.alert-onboarding
	$alert-addons-border: lighten($brand-info,10%)
	$alert-addons-text: $brand-info
	@include alert-variant(white, $alert-addons-border, $alert-addons-text)
	@include alert-panel(icon-rocket, white)
	&:before
		left: 25px
		top: 40px
		font-size: 98px
	border: solid 2px $brand-info
	box-shadow: inset 140px 0 0 $brand-info
	padding: 20px 20px 20px 160px
	.onboarding-step
		width: 100%
		height: 2em
		&.step-success
			background-color: $brand-info
		&.step-in-progress
			@include gradient-striped(lighten($brand-info,20%))
			@include animation(progress-bar-stripes 2s linear infinite)
			background-color: $brand-info
		&.step-todo
			background-color: #eee
		&.step-first
			@include border-radius(3em 0 0 3em)
		&.step-final
			@include border-radius(0 3em 3em 0)

	h4
		font-weight: 100
		font-size: 2.1em
		color: #383F50
		margin-bottom: .4em
	p
		font-size: 1.1em
		color: lighten(#383F50,30%)
		margin-bottom: 1em
	.onboarding-action-container
		padding-top: 3em

	hr
		border-color: lighten($brand-info,30%)
	.progress
		@include border-radius(3em)
		height: 2em
		box-shadow: none
	.progress-bar
		box-shadow: none

.alert.alert-message
	@include alert-panel(icon-comment, $brand-warning)
	border: solid 2px $brand-warning
	background-color: white

.alert h4
	font-size: 1.45em
	margin-bottom: 1em

.overflow-y
	max-height: 200px
	margin-bottom: 15px
	overflow-y: auto

.input[type='password']
	font-size: 2em!important

.pagination
	@include margin(17px, 0, 0, 0)

.list-detail
	dd:not(:last-child)
		margin-bottom: 10px

//colors
.attributes-color-container
	width: 40px
	height: 25px
	display: block
	border: solid 1px black

#mColorPickerInput
	color: #000000

//modals
.modal-content-overflow
	max-height: 400px
	overflow-y: scroll

.pointer
	cursor: pointer
<?php }
}
