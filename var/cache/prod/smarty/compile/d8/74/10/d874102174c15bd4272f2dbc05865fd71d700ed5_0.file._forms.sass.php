<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\partials\_forms.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd697fc64_84763954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd874102174c15bd4272f2dbc05865fd71d700ed5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\partials\\_forms.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd697fc64_84763954 (Smarty_Internal_Template $_smarty_tpl) {
?>//form
label.control-label
	font-size: 13px
	font-weight: normal
	color: #666

label.control-label span.label-tooltip
	text-decoration: none
	font-size: 13px
	color: #3586AE
	background-color: lighten(#D8EDF7,5%)
	border: none
	border-bottom: solid 1px #D8EDF7
	padding: 0 5px
	@include border-radius(3px)

label.required:before
	content: '*'
	color: red
	font-size: 14px
	position: relative
	line-height: 12px

.tooltip
	font-size: 12px
	font-family: $font-family-sans-serif
	white-space: normal

select.input-tiny,
input[type="text"].input-tiny,
input[type="password"].input-tiny
	width: 80px
	@include float(left)

textarea
	resize: none

textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus
	background-color: #FEFBE2
	@include box-shadow(none)

//buttons
.btn
	.caret
		border-top-color: $gray-dark!important
	&:hover
		.caret
			border-top-color: white!important
	&.btn-default
		i
			color: $gray
		&:hover
			color: white
			background-color: $brand-primary
			border-color: darken($brand-primary,10%)
			@include box-shadow(none)
			i
				color: white
	&.btn-primary
		i
			color: white
		background-color: $brand-primary
		color: white
		text-transform: uppercase
		&:hover
			background-color: darken($brand-primary,10%)
			@include box-shadow(none)
	&.btn-default[disabled]
		border-color: $gray-light
		color: $gray-light
		background-color: lighten($gray-light,35%)

.dropdown-menu
	@include text-align(left)
	> li a
		padding: 5px 10px
		&:hover
			i
				color: white

.btn-group-action
	line-height: 0
	.btn
		font-family: $font-family-sans-serif
	.btn-group
		white-space: nowrap
		> a, button
			text-decoration: none
			display: inline-block
			float: none
		> a:first-child
			@include margin-right(-3px)
		i
			font-size: 14px
//form file upload
.dummyfile
	position: relative
	.hide-file-upload
		position: absolute
		top: 0
		left: 0
		width: 100%
		height: 100%
		@include opacity(0)

//typeahead
.tt-query
	@include border-right-radius(3px!important)
.tt-dropdown-menu
	background-color: white
	border: solid 1px #ccc
	font-size: 0.9em
	text-transform: none
.tt-suggestions
	padding: 0 6px
	@include box-shadow(rgba(black,0.25) 0 1px 4px)
.tt-suggestion p
	border-bottom: solid 1px #ccc
	margin: 0!important
	padding: 0!important
.tt-suggestion:last-child p
	border-bottom: none

//tag
.tagify-container
	background-color: white
	padding: 0px 3px
	min-height: 30px
	overflow: auto
	border: solid 1px #ccc
	@include border-radius(3px)
	@include box-shadow(rgba(0, 0, 0, 0.075) 0 1px 1px inset)
	span
		@include float(left)
	> span
		display: inline-block
		padding: 2px 5px
		margin: 3px
		border-radius: 2px
		border: 1px solid $brand-primary
		background-color: lighten($brand-primary,15%)
		color: white
		> a
			color: $brand-primary
			text-decoration: none
			font-weight: bold
			@include padding-left(5px)
	> input
		margin-top: 2px
		border: 0 none
		width: 140px
		height: auto
		@include box-shadow(none)
	> input:focus
		outline: 0
		@include box-shadow(none)

.form-group
	@media (max-width: $screen-lg)
		input[type="text"],input[type="search"],input[type="password"], textarea, select
			margin: 4px 0
		.input-group
			margin: 4px 0
		.input-group
			input[type="text"],input[type="search"],input[type="password"], textarea, select
				margin: 0

input[type="text"],input[type="search"],input[type="password"],input[type="email"],input[type="tel"]
	font-family: $url-font-content-name, Helvetica, Arial, $icon-font-family, sans-serif !important
<?php }
}
