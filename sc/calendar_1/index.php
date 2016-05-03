<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
	<title></title>
	<meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="../css/index.css">
     <link rel="stylesheet" type="text/css" href="../css/editor.css">
</head>
<body>


<div class="f_box f_editor_setting" id="f_editor_setting" style="display:block;">
        <div class="f_header" id="f_header_setting">
            <span class="f_header_text">设置</span>
             <span class="f_header_btn f_header_back" id="f_header_back">返回</span>  
             <span class="f_header_btn f_header_next" id="calendar_1">下一步</span>
             <!--这里注意一点  就是 不同类型的calendar 对应的id不一样-->
        </div>

 <div class="f_setting_tools">
                <div class="f_setting_boxs">
                    <div class="f_setting_times">开始时间：</div>
                    <div class="f_times_selects">
                        <span class="f_time_select_box f_time_select_y" id="f_time_select_y">
                            <span class="f_select_text year_text">2016年</span>
                            <span class="f_select_icon"><span class="f_icon"></span></span>
                            <select class="f_time_select_options year">
                               <!--
                                <option class="f_select_option" value="2015">2015年</option>
                                <option class="f_select_option" value="2016">2016年</option>
                               
                                <option class="f_select_option" value="2017">2017年</option>
                                <option class="f_select_option f_select_last" value="2018">2018年</option>
                                -->
                                <option class="f_select_option" value="2016">2016年</option>
                                <option class="f_select_option" value="2017">2017年</option>
                            </select>
                        </span>
                        
                        <span class="f_time_select_box f_time_select_m" id="f_time_select_m">
                            <span class="f_select_text mounth_text">1月</span>
                            <span class="f_select_icon"><span class="f_icon"></span></span>
                            <select class="f_time_select_options mounth">
                                <option class="f_select_option" value="1">1月</option>
                                <option class="f_select_option" value="2">2月</option>
                                <option class="f_select_option" value="3">3月</option>
                                <option class="f_select_option" value="4">4月</option>
                                <option class="f_select_option" value="5">5月</option>
                                <option class="f_select_option" value="6">6月</option>
                                <option class="f_select_option" value="7">7月</option>
                                <option class="f_select_option" value="8">8月</option>
                                <option class="f_select_option" value="9">9月</option>
                                <option class="f_select_option" value="10">10月</option>
                                <option class="f_select_option" value="11">11月</option>
                                <option class="f_select_option" value="12">12月</option>
                            </select>
                        </span>
                    </div>
                    <div class="f_setting_lines"></div>
   <div class="f_setting_style">日历样式：</div>
                    <div class="f_setting_cal" id="f_setting_cal">
                        <span class="f_setting_style_g f_style_g " cal-style="1">
                            <img src="../images/calendar_1/cal-style1.png">
                            <span><img src="../images/calendar_1/sure.png"></span>
                        </span>
                        <span class="f_setting_style_g f_style_a cur"  cal-style="2">
                            <img src="../images/calendar_1/cal-style2.png">
                            <span><img src="../images/calendar_1/sure.png"></span>
                        </span>
                    </div>
                    
                </div>
            </div>
        </div>



<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/index.js"></script>

</body>
</html>