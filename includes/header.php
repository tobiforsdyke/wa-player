<?php require_once('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waPlayer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/js/commonActions.js"></script>
</head>
<body>
    <div id="page-container">

        <div id="masthead-container">
            <button class="nav-show-hide"><img src="assets/images/icons/menu.png"></button>
            <a href="index.php" class="logo-container"><img src="assets/images/icons/wa-player-logo.png" title="waPlayer" alt="waPlayer logo"></a>
            <div class="searchbar-container">
                <form action="search.php" method="GET">
                    <input type="text" class="searchbar" name="term" placeholder="Search">
                    <button class="search-button"><img src="assets/images/icons/search.png"></button>
                </form>
            </div>
            <div class="right-icons">
                <a href="upload.php">
                    <img src="assets/images/icons/upload.png" class="upload">
                </a>
                <a href="#">
                    <img src="assets/images/profile-pictures/default.png" class="profile">
                </a>
            </div>
        </div>

        <div id="sidenav-container" style="display:none;">
        
        </div>

        <div id="mainsection-container">
            <div id="maincontent-container">