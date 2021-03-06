<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:18
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\sass\partials\_multistore.sass' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd6adc1a3_99628586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d5b48b380e81a7cf675c4b31d908ed8335e9a4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\sass\\partials\\_multistore.sass',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd6adc1a3_99628586 (Smarty_Internal_Template $_smarty_tpl) {
?>.breadcrumb-multishop
  width: auto
  position: relative
  &:after
    content: "\f0d7"
    position: absolute
    top: 0
    bottom: 0
    font-size: 14px
    line-height: 22px
    padding: 0 7px
    font-family: FontAwesome
    background-color: darken($secondary-color,15%)
    color: white
    pointer-events: none
    @include right(0)
    @include border-radius(0 4px 4px 0)

  select
    display: inline-block
    height: 22px
    line-height: 20px
    border: 1px solid darken($secondary-color,15%)
    margin: 0
    outline: none //remove focus ring from Webkit
    color: #666
    background: white
    position: relative
    -webkit-appearance: none //remove the strong OSX influence from Webkit
    @include padding(0, 5px, 0, 8px)
    @include border-radius(4px)
    &:focus
      box-shadow: 0 0 0 1px darken($secondary-color,15%)

#header_shop
  .dropdown-menu
    margin: 0
    padding: 0
    border-radius: 0
    min-width: 17.75rem !important
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1)
    border: 1px solid #bbcdd2
    top: 40px
    right: -100px !important
    padding-left: 0
    font-size: 13px
    &:before, &:after
      bottom: 100%
      right: 95px
      border: solid transparent
      content: " "
      height: 0
      width: 0
      position: absolute
      pointer-events: none
    &:after
      border-color: transparent
      border-bottom-color: white
      border-width: 7px
      margin-right: 1px
    &:before
      border-color: transparent
      border-bottom-color: #bbcdd2
      border-width: 8px
      margin-left: -8px
    li:first-child a
      color: $brand-info !important
      font-size: 0.875rem !important
      font-weight: bold
    li:not(:first-child)
      line-height: 32px
      a:not(.link-shop)
        display: inline-block
        width: inherit
        padding-top: .3125rem
        padding-bottom: .3125rem
    a
      color: #4e6167
    .group
      a
        padding-left: 0.625rem
    .shop
      display: flex
      a
        padding-left: 1.5625rem
        font-weight: 600
      a.link-shop
        text-decoration: none
        float: right
        margin-left: auto
        padding-left: inherit
        padding-right: 10px
        padding-top: 3px
        i.material-icons
          cursor: pointer
          color: #6c868e
          border: 1px solid #bbcdd2
          border-radius: 1px
          padding: 2px 10px
          font-size: 14px
    li
      &.active, &:hover
        a
          color: #4e6167 !important
        i.material-icons
          color: $brand-info !important
          border: solid 1px $brand-info !important

  .selected-item
    color: #00aff0
    cursor: pointer
        
@media screen and (-webkit-min-device-pixel-ratio:0)
  .custom-select select
    @include padding-right(30px)


.no-pointer-events .custom-select:after
  content: none

.multishop-well
  @extend .row
  padding: 20px 20px 10px
  margin-bottom: 15px
  background-color: #FAF8F0
  border: none
  @include border-left(3px solid #FBECCB)
<?php }
}
