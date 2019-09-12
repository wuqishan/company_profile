<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/courses/styles/bootstrap4/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/courses/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/courses/plugins/OwlCarousel2-2.2.1/owl.carousel.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/courses/plugins/OwlCarousel2-2.2.1/owl.theme.default.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/courses/plugins/OwlCarousel2-2.2.1/animate.css'); ?>">



</head>
<body>

<div class="super_container">

    <!-- Header -->

    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
                <div class="logo">
                    <img src="<?php echo base_url('public/courses/images/logo.png'); ?>" alt="">
                    <span>course</span>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav_container">
                <div class="main_nav">
                    <ul class="main_nav_list">
                        <li class="main_nav_item"><a href="<?=site_url('courses')?>">Home</a></li>
                        <li class="main_nav_item"><a href="<?=site_url('courses/course')?>">Courses</a></li>
                        <li class="main_nav_item"><a href="elements.html">elements</a></li>
                        <li class="main_nav_item"><a href="news.html">news</a></li>
                        <li class="main_nav_item"><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="<?php echo base_url('public/courses/images/phone-call.svg'); ?>" alt="">
            <span>+43 4566 7788 2457</span>
        </div>

        <!-- Hamburger -->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>

    </header>