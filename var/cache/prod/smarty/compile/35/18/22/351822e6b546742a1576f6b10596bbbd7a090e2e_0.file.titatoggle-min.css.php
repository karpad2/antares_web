<?php
/* Smarty version 3.1.32, created on 2018-09-07 13:11:16
  from 'C:\xampp\htdocs\antares_web\admin\themes\default\css\vendor\titatoggle-min.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b925cd4a0e1f0_46587265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '351822e6b546742a1576f6b10596bbbd7a090e2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\antares_web\\admin\\themes\\default\\css\\vendor\\titatoggle-min.css',
      1 => 1532446064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b925cd4a0e1f0_46587265 (Smarty_Internal_Template $_smarty_tpl) {
?>/*******************************************************
Variables
*******************************************************/
/*******************************************************
Animation
*******************************************************/
@-webkit-keyframes popIn {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(1.2, 1);
    transform: scale(1.2, 1);
  }
  50% {
    -webkit-transform: scale(1.4, 1);
    transform: scale(1.4, 1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
@keyframes popIn {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(1.2, 1);
    transform: scale(1.2, 1);
  }
  50% {
    -webkit-transform: scale(1.4, 1);
    transform: scale(1.4, 1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
@-webkit-keyframes popOut {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(1.2, 1);
    transform: scale(1.2, 1);
  }
  50% {
    -webkit-transform: scale(1.4, 1);
    transform: scale(1.4, 1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
@keyframes popOut {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
  25% {
    -webkit-transform: scale(1.2, 1);
    transform: scale(1.2, 1);
  }
  50% {
    -webkit-transform: scale(1.4, 1);
    transform: scale(1.4, 1);
  }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
  }
}
@-webkit-keyframes splashIn {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  25% {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    opacity: 0.8;
  }
  50% {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    opacity: .9;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}
@keyframes splashIn {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  25% {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    opacity: 0.8;
  }
  50% {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
    opacity: .9;
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
}
@-webkit-keyframes splashOut {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0.8;
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: .9;
  }
  100% {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    opacity: 1;
  }
}
@keyframes splashOut {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 1;
  }
  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0.8;
  }
  50% {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: .9;
  }
  100% {
    -webkit-transform: scale(0.5);
    transform: scale(0.5);
    opacity: 1;
  }
}
/*******************************************************
Main Slider basics
*******************************************************/
.checkbox-toggle {
  position: relative;
}
.checkbox-toggle input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-toggle input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-toggle input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-toggle input + span > h4 {
  display: inline;
}
/*******************************************************
Main Slider
*******************************************************/
.checkbox-slider {
  position: relative;
}
.checkbox-slider input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider input + span > h4 {
  display: inline;
}
.checkbox-slider input + span {
  padding-left: 40px;
}
.checkbox-slider input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider input:checked + span:before {
  transition: background 0.2s ease-in;
}
/*******************************************************
Slider default
*******************************************************/
.checkbox-slider--default {
  position: relative;
}
.checkbox-slider--default input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--default input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--default input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--default input + span > h4 {
  display: inline;
}
.checkbox-slider--default input + span {
  padding-left: 40px;
}
.checkbox-slider--default input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--default input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--default input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--default input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--default input + span:after {
  background: #ffffff;
  border: solid transparent 1px;
  background-clip: content-box;
}
.checkbox-slider--default input:checked + span:after {
  background: #5cb85c;
  border: solid transparent 1px;
  background-clip: content-box;
}
/*******************************************************
Slider default rounded
*******************************************************/
.checkbox-slider--a-rounded {
  position: relative;
}
.checkbox-slider--a-rounded input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--a-rounded input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--a-rounded input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--a-rounded input + span > h4 {
  display: inline;
}
.checkbox-slider--a-rounded input + span {
  padding-left: 40px;
}
.checkbox-slider--a-rounded input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--a-rounded input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--a-rounded input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--a-rounded input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--a-rounded input + span:after {
  background: #ffffff;
  border: solid transparent 1px;
  background-clip: content-box;
}
.checkbox-slider--a-rounded input:checked + span:after {
  background: #5cb85c;
  border: solid transparent 1px;
  background-clip: content-box;
}
.checkbox-slider--a-rounded input + span:after,
.checkbox-slider--a-rounded input + span:before {
  border-radius: 4px;
}
.checkbox-slider--a-rounded input + span:after,
.checkbox-slider--a-rounded input:checked + span:after {
  border: solid transparent 2px;
  background-clip: content-box;
}
/*******************************************************
Slider default rounded Sizes
*******************************************************/
.checkbox-slider--a-rounded.checkbox-slider-sm input + span:before,
.checkbox-slider--a-rounded.checkbox-slider-sm input + span:after {
  border-radius: 3px;
}
.checkbox-slider--a-rounded.checkbox-slider-md input + span:before,
.checkbox-slider--a-rounded.checkbox-slider-md input + span:after {
  border-radius: 4px;
}
.checkbox-slider--a-rounded.checkbox-slider-lg input + span:before,
.checkbox-slider--a-rounded.checkbox-slider-lg input + span:after {
  border-radius: 6px;
}
/*******************************************************
Slider A
*******************************************************/
.checkbox-slider--a {
  position: relative;
}
.checkbox-slider--a input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--a input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--a input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--a input + span > h4 {
  display: inline;
}
.checkbox-slider--a input + span {
  padding-left: 40px;
}
.checkbox-slider--a input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--a input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--a input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--a input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--a input + span {
  padding-left: 60px;
}
.checkbox-slider--a input + span:before {
  content: "";
  width: 60px;
}
.checkbox-slider--a input + span:after {
  width: 40px;
  font-size: 10px;
  color: #000000;
  content: "Off";
  border: solid transparent 1px;
  background-clip: content-box;
}
.checkbox-slider--a input:checked + span:after {
  content: "On";
  color: #ffffff;
  background: #5cb85c;
  border: solid transparent 1px;
  background-clip: content-box;
}
/*******************************************************
Slider A SIZES
*******************************************************/
.checkbox-slider--a.checkbox-slider-sm input + span {
  padding-left: 30px;
}
.checkbox-slider--a.checkbox-slider-sm input + span:before {
  width: 30px;
}
.checkbox-slider--a.checkbox-slider-sm input + span:after {
  width: 20px;
  font-size: 5px;
}
.checkbox-slider--a.checkbox-slider-sm input:checked + span:after {
  margin-left: 10px;
}
.checkbox-slider--a.checkbox-slider-md input + span {
  padding-left: 90px;
}
.checkbox-slider--a.checkbox-slider-md input + span:before {
  width: 90px;
}
.checkbox-slider--a.checkbox-slider-md input + span:after {
  width: 60px;
  font-size: 15px;
}
.checkbox-slider--a.checkbox-slider-md input:checked + span:after {
  margin-left: 30px;
}
.checkbox-slider--a.checkbox-slider-lg input + span {
  padding-left: 120px;
}
.checkbox-slider--a.checkbox-slider-lg input + span:before {
  width: 120px;
}
.checkbox-slider--a.checkbox-slider-lg input + span:after {
  width: 80px;
  font-size: 20px;
}
.checkbox-slider--a.checkbox-slider-lg input:checked + span:after {
  margin-left: 40px;
}
/*******************************************************
Slider B
*******************************************************/
.checkbox-slider--b {
  position: relative;
}
.checkbox-slider--b input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--b input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--b input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--b input + span > h4 {
  display: inline;
}
.checkbox-slider--b input + span {
  padding-left: 40px;
}
.checkbox-slider--b input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--b input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--b input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--b input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--b input + span {
  padding-left: 40px;
}
.checkbox-slider--b input + span:before {
  border-radius: 20px;
  width: 40px;
}
.checkbox-slider--b input + span:after {
  background: #ffffff;
  content: "";
  width: 20px;
  border: solid transparent 2px;
  background-clip: padding-box;
  border-radius: 20px;
}
.checkbox-slider--b input:not(:checked) + span:after {
  -webkit-animation: popOut ease-in 0.3s normal;
  animation: popOut ease-in 0.3s normal;
}
.checkbox-slider--b input:checked + span:after {
  content: "";
  margin-left: 20px;
  border: solid transparent 2px;
  background-clip: padding-box;
  -webkit-animation: popIn ease-in 0.3s normal;
  animation: popIn ease-in 0.3s normal;
}
.checkbox-slider--b input:checked + span:before {
  background: #5cb85c;
}
/*******************************************************
Slider B Sizes
*******************************************************/
.checkbox-slider--b.checkbox-slider-md input + span:before {
  border-radius: 30px;
}
.checkbox-slider--b.checkbox-slider-md input + span:after {
  border-radius: 30px;
}
.checkbox-slider--b.checkbox-slider-lg input + span:before {
  border-radius: 40px;
}
.checkbox-slider--b.checkbox-slider-lg input + span:after {
  border-radius: 40px;
}
/*******************************************************
Slider B-flat
*******************************************************/
.checkbox-slider--b-flat {
  position: relative;
}
.checkbox-slider--b-flat input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--b-flat input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--b-flat input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--b-flat input + span > h4 {
  display: inline;
}
.checkbox-slider--b-flat input + span {
  padding-left: 40px;
}
.checkbox-slider--b-flat input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--b-flat input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--b-flat input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--b-flat input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--b-flat input + span {
  padding-left: 40px;
}
.checkbox-slider--b-flat input + span:before {
  border-radius: 20px;
  width: 40px;
}
.checkbox-slider--b-flat input + span:after {
  background: #ffffff;
  content: "";
  width: 20px;
  border: solid transparent 2px;
  background-clip: padding-box;
  border-radius: 20px;
}
.checkbox-slider--b-flat input:not(:checked) + span:after {
  -webkit-animation: popOut ease-in 0.3s normal;
  animation: popOut ease-in 0.3s normal;
}
.checkbox-slider--b-flat input:checked + span:after {
  content: "";
  margin-left: 20px;
  border: solid transparent 2px;
  background-clip: padding-box;
  -webkit-animation: popIn ease-in 0.3s normal;
  animation: popIn ease-in 0.3s normal;
}
.checkbox-slider--b-flat input:checked + span:before {
  background: #5cb85c;
}
.checkbox-slider--b-flat.checkbox-slider-md input + span:before {
  border-radius: 30px;
}
.checkbox-slider--b-flat.checkbox-slider-md input + span:after {
  border-radius: 30px;
}
.checkbox-slider--b-flat.checkbox-slider-lg input + span:before {
  border-radius: 40px;
}
.checkbox-slider--b-flat.checkbox-slider-lg input + span:after {
  border-radius: 40px;
}
.checkbox-slider--b-flat input + span:before {
  box-shadow: none;
}
/*******************************************************
Slider C
*******************************************************/
.checkbox-slider--c {
  position: relative;
}
.checkbox-slider--c input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--c input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--c input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--c input + span > h4 {
  display: inline;
}
.checkbox-slider--c input + span {
  padding-left: 40px;
}
.checkbox-slider--c input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--c input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--c input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--c input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--c input + span {
  padding-left: 40px;
}
.checkbox-slider--c input + span:before {
  height: 2px !important;
  top: 10px;
  box-shadow: none;
  width: 40px;
  background: #555555;
}
.checkbox-slider--c input + span:after {
  box-shadow: none;
  width: 20px;
  border: solid #555555 2px;
  border-radius: 20px;
}
.checkbox-slider--c input:checked + span:after {
  background: #5cb85c;
  margin-left: 20px;
  border: solid #5cb85c 2px;
  -webkit-animation: splashIn ease-in 0.3s normal;
  animation: splashIn ease-in 0.3s normal;
}
.checkbox-slider--c input:checked + span:before {
  background: #5cb85c;
}
/*******************************************************
Slider C Sizes
*******************************************************/
.checkbox-slider--c.checkbox-slider-sm input + span:before {
  top: 4px;
}
.checkbox-slider--c.checkbox-slider-md input + span:before {
  top: 14px;
}
.checkbox-slider--c.checkbox-slider-md input + span:after {
  width: 30px;
  border-radius: 30px;
}
.checkbox-slider--c.checkbox-slider-lg input + span:before {
  top: 19px;
}
.checkbox-slider--c.checkbox-slider-lg input + span:after {
  width: 40px;
  border-radius: 40px;
}
/*******************************************************
Slider C-weight
*******************************************************/
.checkbox-slider--c-weight {
  position: relative;
}
.checkbox-slider--c-weight input {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  width: 0%;
  height: 0%;
  margin: 0 0;
  cursor: pointer;
  zoom: 1;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  filter: alpha(opacity=0);
}
.checkbox-slider--c-weight input + span {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.checkbox-slider--c-weight input + span:before {
  position: absolute;
  left: 0px;
  display: inline-block;
}
.checkbox-slider--c-weight input + span > h4 {
  display: inline;
}
.checkbox-slider--c-weight input + span {
  padding-left: 40px;
}
.checkbox-slider--c-weight input + span:before {
  content: "";
  height: 20px;
  width: 40px;
  background: rgba(100, 100, 100, 0.2);
  box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.8);
  transition: background 0.2s ease-out;
}
.checkbox-slider--c-weight input + span:after {
  width: 20px;
  height: 20px;
  position: absolute;
  left: 0px;
  top: 0;
  display: block;
  background: #ffffff;
  transition: margin-left 0.1s ease-in-out;
  text-align: center;
  font-weight: bold;
  content: "";
}
.checkbox-slider--c-weight input:checked + span:after {
  margin-left: 20px;
  content: "";
}
.checkbox-slider--c-weight input:checked + span:before {
  transition: background 0.2s ease-in;
}
.checkbox-slider--c-weight input + span {
  padding-left: 40px;
}
.checkbox-slider--c-weight input + span:before {
  height: 2px !important;
  top: 10px;
  box-shadow: none;
  width: 40px;
  background: #555555;
}
.checkbox-slider--c-weight input + span:after {
  box-shadow: none;
  width: 20px;
  border: solid #555555 2px;
  border-radius: 20px;
}
.checkbox-slider--c-weight input:checked + span:after {
  background: #5cb85c;
  margin-left: 20px;
  border: solid #5cb85c 2px;
  -webkit-animation: splashIn ease-in 0.3s normal;
  animation: splashIn ease-in 0.3s normal;
}
.checkbox-slider--c-weight input:checked + span:before {
  background: #5cb85c;
}
.checkbox-slider--c-weight.checkbox-slider-sm input + span:before {
  top: 4px;
}
.checkbox-slider--c-weight.checkbox-slider-md input + span:before {
  top: 14px;
}
.checkbox-slider--c-weight.checkbox-slider-md input + span:after {
  width: 30px;
  border-radius: 30px;
}
.checkbox-slider--c-weight.checkbox-slider-lg input + span:before {
  top: 19px;
}
.checkbox-slider--c-weight.checkbox-slider-lg input + span:after {
  width: 40px;
  border-radius: 40px;
}
.checkbox-slider--c-weight input + span:before {
  height: 1px !important;
}
.checkbox-slider--c-weight input:checked + span:before {
  height: 2px !important;
}
.checkbox-slider--c-weight input:not(:checked) + span:after {
  -webkit-transform: scale(0.7);
  transform: scale(0.7);
  left: -6px;
}
/******************************************************
State Disabled
*******************************************************/
.checkbox-slider--default input:disabled + span:after {
  background: #777777;
}
.checkbox-slider--default input:disabled + span:before {
  box-shadow: 0 0 0 black;
}
.checkbox-slider--default input:disabled + span {
  color: #777777;
}
.checkbox-slider--a input:disabled + span:after {
  background: #777777;
  color: #ffffff;
}
.checkbox-slider--a input:disabled + span:before {
  box-shadow: 0 0 0 black;
}
.checkbox-slider--a input:disabled + span {
  color: #777777;
}
.checkbox-slider--b input:disabled + span:after {
  border: solid transparent 2px;
  border-radius: 40px;
}
.checkbox-slider--b input:disabled + span:before {
  box-shadow: 0 0 0 black;
}
.checkbox-slider--b input:disabled + span {
  color: #777777;
}
.checkbox-slider--c input:disabled:checked + span:after {
  background: #777777;
}
.checkbox-slider--c input:disabled + span:after {
  border-color: #777777;
}
.checkbox-slider--c input:disabled + span:before {
  background: #777777;
}
.checkbox-slider--c input:disabled + span {
  color: #777777;
}
/*******************************************************
Indicators
*******************************************************/
input:checked + .indicator-success {
  color: #5cb85c;
}
input:checked + .indicator-info {
  color: #5bc0de;
}
input:checked + .indicator-warning {
  color: #f0ad4e;
}
input:checked + .indicator-danger {
  color: #d9534f;
}
/*******************************************************
Sizes
*******************************************************/
.checkbox-slider-sm {
  line-height: 10px;
}
.checkbox-slider-sm input + span {
  padding-left: 20px;
}
.checkbox-slider-sm input + span:before {
  width: 20px;
}
.checkbox-slider-sm input + span:after,
.checkbox-slider-sm input + span:before {
  height: 10px;
  line-height: 10px;
}
.checkbox-slider-sm input + span:after {
  width: 10px;
  vertical-align: middle;
}
.checkbox-slider-sm input:checked + span:after {
  margin-left: 10px;
}
.checkbox-slider-md {
  line-height: 30px;
}
.checkbox-slider-md input + span {
  padding-left: 60px;
}
.checkbox-slider-md input + span:before {
  width: 60px;
}
.checkbox-slider-md input + span:after,
.checkbox-slider-md input + span:before {
  height: 30px;
  line-height: 30px;
}
.checkbox-slider-md input + span:after {
  width: 30px;
  vertical-align: middle;
}
.checkbox-slider-md input:checked + span:after {
  margin-left: 30px;
}
.checkbox-slider-lg {
  line-height: 40px;
}
.checkbox-slider-lg input + span {
  padding-left: 80px;
}
.checkbox-slider-lg input + span:before {
  width: 80px;
}
.checkbox-slider-lg input + span:after,
.checkbox-slider-lg input + span:before {
  height: 40px;
  line-height: 40px;
}
.checkbox-slider-lg input + span:after {
  width: 40px;
  vertical-align: middle;
}
.checkbox-slider-lg input:checked + span:after {
  margin-left: 40px;
}
/*******************************************************
Variations
*******************************************************/
.checkbox-slider-info.checkbox-slider--default input:checked + span:after,
.checkbox-slider-info.checkbox-slider--a input:checked + span:after,
.checkbox-slider-info.checkbox-slider--c input:checked + span:after,
.checkbox-slider-info.checkbox-slider--c-weight input:checked + span:after {
  background: #5bc0de;
  background-clip: content-box;
}
.checkbox-slider-info.checkbox-slider--c input:checked + span:after,
.checkbox-slider-info.checkbox-slider--c-weight input:checked + span:after {
  border-color: #5bc0de;
}
.checkbox-slider-info.checkbox-slider--b input:checked + span:before,
.checkbox-slider-info.checkbox-slider--b-flat input:checked + span:before,
.checkbox-slider-info.checkbox-slider--c input:checked + span:before,
.checkbox-slider-info.checkbox-slider--c-weight input:checked + span:before {
  background: #5bc0de;
}
.checkbox-slider-warning.checkbox-slider--default input:checked + span:after,
.checkbox-slider-warning.checkbox-slider--a input:checked + span:after,
.checkbox-slider-warning.checkbox-slider--c input:checked + span:after,
.checkbox-slider-warning.checkbox-slider--c-weight input:checked + span:after {
  background: #f0ad4e;
  background-clip: content-box;
}
.checkbox-slider-warning.checkbox-slider--c input:checked + span:after,
.checkbox-slider-warning.checkbox-slider--c-weight input:checked + span:after {
  border-color: #f0ad4e;
}
.checkbox-slider-warning.checkbox-slider--b input:checked + span:before,
.checkbox-slider-warning.checkbox-slider--b-flat input:checked + span:before,
.checkbox-slider-warning.checkbox-slider--c input:checked + span:before,
.checkbox-slider-warning.checkbox-slider--c-weight input:checked + span:before {
  background: #f0ad4e;
}
.checkbox-slider-danger.checkbox-slider--default input:checked + span:after,
.checkbox-slider-danger.checkbox-slider--a input:checked + span:after,
.checkbox-slider-danger.checkbox-slider--c input:checked + span:after,
.checkbox-slider-danger.checkbox-slider--c-weight input:checked + span:after {
  background: #d9534f;
  background-clip: content-box;
}
.checkbox-slider-danger.checkbox-slider--c input:checked + span:after,
.checkbox-slider-danger.checkbox-slider--c-weight input:checked + span:after {
  border-color: #d9534f;
}
.checkbox-slider-danger.checkbox-slider--b input:checked + span:before,
.checkbox-slider-danger.checkbox-slider--b-flat input:checked + span:before,
.checkbox-slider-danger.checkbox-slider--c input:checked + span:before,
.checkbox-slider-danger.checkbox-slider--c-weight input:checked + span:before {
  background: #d9534f;
}


/*Override*/
.titatoggle.pull-right{
  margin: 5px 0 !important;
}

.titatoggle label{
  padding-left: 0 !important;
}
.titatoggle.unchecked-red input:not(:checked) + span:before{
  background : #d9534f
}

<?php }
}
