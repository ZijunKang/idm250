<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<!-- 404 Page
==========================================-->
<div class="layout page_404_layout" style="">
    <div class="page_404_block">
        <div class="block1 block_item">
            <img src="<?php echo get_field('404_img','option');?>" alt="">
        </div>
       
        <div class="block2 block_item">
            <div class="row1"><?php echo get_field('title1','option');?></div>
            <div class="row2"><?php echo get_field('title2','option');?></div>
        </div>

    </div>
    <a href="<?php echo home_url(); ?>">
        <button class="cat_btn page_404_btn">
            Back to the Home Page
        </button>
    </a>
</div>