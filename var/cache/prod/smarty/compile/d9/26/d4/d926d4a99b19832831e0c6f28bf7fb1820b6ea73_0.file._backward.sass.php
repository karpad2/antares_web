<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\partials\_backward.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd67f3fb6_08281010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd926d4a99b19832831e0c6f28bf7fb1820b6ea73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\partials\\_backward.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd67f3fb6_08281010 (Smarty_Internal_Template $_smarty_tpl) {
?>.page-sidebar:not(.page-sidebar-closed) .nobootstrap
	margin-left: 200px

.nobootstrap
	background-color: white
	min-width: 1200px
	padding: 110px 30px 100px 30px
	form p
		margin: .5em 0 0
		padding: 0 0 .5em
	fieldset
		background-color: #EBEDF4
		border: 1px solid #CCCED7
		color: #585A69
		margin: 0 0 10px 0
		padding: 1em
		img
			padding: 0 4px 0 0
			vertical-align: bottom
	legend
		background: #EBEDF4
		border: 1px solid #CCCED7
		font-weight: 700
		margin: 0
		padding: .2em .5em
		text-align: left
		a
			color: #585984
			text-decoration: none
	label
		color: #585a69
		text-shadow: 0 1px 0 #fff
		float: left
		width: 250px
		padding: .2em .5em 0 0
		text-align: right
		font-weight: bold
		&.t
			float: none
			clear: none
			padding: 0 5px 0
			margin: 0px
			font-weight: normal
			font-size: 12px
			text-shadow: none
	a
		color: #415260
	.pull-right, .pull-left
		float: none
	.clear
		clear: both

	.margin-form
		padding: 0 0 1em 260px
		color: #7F7F7F
		font-size: .85em
	.button
		cursor: pointer
		background: -moz-linear-gradient(center top , #F9F9F9, #E3E3E3) repeat scroll 0 0 transparent
		background: -webkit-gradient(linear, center top ,center bottom, from(#F9F9F9), to(#E3E3E3)) repeat scroll 0 0 transparent
		border-color: #CCCCCC #BBBBBB #A0A0A0
		border-left: 1px solid #BBBBBB
		border-radius: 3px 3px 3px 3px
		border-right: 1px solid #BBBBBB
		border-style: solid
		border-width: 1px
		color: #000000
		margin: 5px 0
		outline: medium none
		padding: 3px 8px
		text-align: center
		vertical-align: middle
		white-space: nowrap
		text-shadow: 0 1px 0 #fff
		text-decoration: none
		&:hover
			border-color: #AAA #999 #888
	input
		vertical-align: middle
	select
		border: 1px solid #ccc
		font-size: 12px
	input, textarea, option
		color: #000
		font-size: 12px
		margin: 0
		padding: 0
	input[type="text"], input[type="password"], input[type="file"], textarea
		border: 1px solid #ccc
		background-color: #fff
		padding: 2px 4px
		box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset
	.table_grid
		width: 100%
	.table
		background-color: #fff
		border: 1px solid #ccc
		padding: 0
		border-radius: 3px
		th a
			text-decoration: underline
			&:hover
				text-decoration: none
		tr 
			th
				background-color: #F1F1F1
				color: #333
				font-size: 13px
				padding: 4px 6px
				text-align: left
				&.right
					text-align: center
			td
				border-bottom: 1px solid #ccc
				color: #333
				font-size: 12px
				padding: 4px 4px 4px 6px
			&.row_hover.filter:hover td
				background: #F1F9FF
			td.row_hover:hover table tr td
				background: none
			&.action_details td
				background: #FAFAFA
			&.alt_row.action_details td
				background: #E8E8E8
			td.empty
				background: #FFF!important
				border-bottom: none
			td.first
				border-left: 1px solid #DEDEDE
			td.last
				border-right: 1px solid #DEDEDE
			&.small td
				height: 15px
			&.last td
				border-bottom: none
			.filter
				background-color: #f1f9ff

// Helper 1.6
.nobootstrap
	.form-group
		clear: both
		margin-bottom: 1em
		float: left
		width: 100%
		> div
			float: left
	.panel:not(.bootstrap)
		background-color: #EBEDF4
		border: 1px solid #CCCED7
		color: #585A69
		margin: 0 0 10px 0
		padding: 1em
		float: left
		width: 100%
		box-sizing: border-box
		img
			padding: 0 4px 0 0
			vertical-align: bottom
		h3
			position: relative
			top: -25px
			display: inline-block
			background: #EBEDF4
			border: 1px solid #CCCED7
			font-weight: 700
			margin: 0
			padding: .2em .5em
			text-align: left
			a
				color: #585984
				text-decoration: none
			i
				font-family: 'FontAwesome'
		.help-block
			float: left
			clear: both
		.switch
			float: left
			clear: both
			line-height: 1.3em
			label
				padding: 0 10px 0 5px
				float: left
				width: auto
			input[type=checkbox], input[type=radio]
				float: left
		.radio
			label
				clear: both
				width: auto
				margin-right: 4px
		button
			cursor: pointer
			background: -moz-linear-gradient(center top , #F9F9F9, #E3E3E3) repeat scroll 0 0 transparent
			background: -webkit-gradient(linear, center top ,center bottom, from(#F9F9F9), to(#E3E3E3)) repeat scroll 0 0 transparent
			border-color: #CCCCCC #BBBBBB #A0A0A0
			border-left: 1px solid #BBBBBB
			border-radius: 3px 3px 3px 3px
			border-right: 1px solid #BBBBBB
			border-style: solid
			border-width: 1px
			color: #000000
			margin: 5px 0
			outline: medium none
			padding: 3px 8px
			text-align: center
			vertical-align: middle
			white-space: nowrap
			text-shadow: 0 1px 0 #fff
			text-decoration: none
			&:hover
				border-color: #AAA #999 #888

		.tree-panel-heading-controls
			font-size: 13px
			background-color: #DDE0E9
			margin: -8px -8px 20px
			padding: 5px
			border-bottom: solid 1px #DFDFDF
			a
				display: inline-block
				padding: 0 8px
				border-right: solid 1px #888
		.tree
			padding: 0 0 0 20px
			list-style: none
			input
				vertical-align: baseline
				margin-right: 4px
				line-height: normal
			i
				font-size: $icon-size-base
			.tree-item-name, .tree-folder-name
				padding: 2px 5px
				@include border-radius(4px)
				label
					font-size: 13px
					float: none
					text-shadow: none
					font-weight: 400
				&:hover
					background-color: #eee
					cursor: pointer
			.tree-selected
				background-color: #CCCED7
				&:hover
					background-color: darken(#CCCED7,15%)
				i.tree-dot
					background-color: #eee
			.tree-folder, .tree-item
				margin: 3px 0
			i.tree-dot
				display: inline-block
				position: relative
				width: 6px
				height: 6px
				margin: 0 4px
				background-color: #ccc
				@include border-radius(6px)
			.tree-item-disable, .tree-folder-name-disable
				color: #ccc
				&:hover
					color: #ccc
					background-color: none


<?php }
}
