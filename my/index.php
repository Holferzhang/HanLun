<?php

require_once('../config.php');
//登录验证
require_login();
//set URL  用于返回当前页
$PAGE->set_url("$CFG->wwwroot/my/index.php");
//set context
$context = context_system::instance();

$PAGE->set_context($context);
//公共header
echo $OUTPUT->header();
// css 可以抽成一个文件
echo '<style></style>';

$output = $OUTPUT->box_start('left_comb');
$div = '<div class="search_title">
			<img src="./image/title.png" class=" left_block left_block_A">
        		<div class="left_block left_block_B left_block_title">课程搜寻</div>
        		<div class="left_block left_block_C left_block_title">--</div>
        		<div class="left_block left_block_D left_block_title"> < </div>
        	</div>';


$output .= html_writer::tag('div', $div,array('class' => 'lef_tbox'));
//search
$form = '
    <form>
        <select name="course" class="search_select">
            <option value="1">二次方程求解</option>
            <option value="2">高等数学</option>
        </select>
        <br>
        <input type="submit" value="搜寻" class="form_submit">
    </form>';
$output .= html_writer::tag('div', $form,array('class' => 'search_form'));

$div = '<div class="search_title">
			<img src="./image/info.png" class=" left_block left_info_A">
        		<div class="left_block left_info_B left_block_title">课程简介</div>
        		<div class="left_block left_info_C left_block_title">--</div>
        		<div class="left_block left_info_D left_block_title"> < </div>
        	</div>
        	<h3 class="info_h3">二次方程的求解</h3>
        	<p class="info_p">一元二次方程必须同时满足三个条件：
①是整式方程，即等号两边都是整式，方程中如果有分母；且未知数在分母上，那么这个方程就是分式方程，不是一元二次方程，方程中如果有根号，且未知数在根号内，那么这个方程也不是一元二次方程（是无理方程）。
②只含有一个未知数；
③未知数项的最高次数是2。</p>
		<div>
             <span class="span_left">课程完成进度</span>
             <span class="span_right">60%</span>
        </div>
        <div class="last_info">
             <span class="span_left">已学习时间</span>
             <span class="span_right">1小时30分</span>
        </div>
        ';


$output .= html_writer::tag('div', $div,array('class' => 'lef_tbox lef_tbox_info'));

$output .= $OUTPUT->box_end();
echo $output;


//========================================


$output = $OUTPUT->box_start('right_box');
$img = '<img width="100%" class="right_box_bg" src="./image/demo.png">';
$output .= html_writer::tag('div', $img,array('class' => ''));
$img = '<img  src="./image/15.png" class="info_icon up_icon">';
$output .= html_writer::tag('div', $img);
$div = '
        <div  class="icon_div" style="float: left">
            <img src="./image/13.png" class="info_icon"> 
            <img src="./image/10.png" class="info_icon"> 
            <img src="./image/14.png" class="info_icon"> 
        </div>
        <div  class="icon_div"style="float: right">
            <img src="./image/20.png" class="info_icon info_icon_add"> 
        </div>
        ';
$output .= html_writer::tag('div', $div);
$output .= $OUTPUT->box_end();

echo $output;



echo $OUTPUT->footer();



