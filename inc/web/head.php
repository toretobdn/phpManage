<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html lang="es" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
       <link href="<?=$pathCSS?>style.css" rel="stylesheet" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.11.1/validate.min.js"></script>    
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

    </head>
    <body>
        <nav class="navbar navbar-default" style="    margin-bottom: 0px;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <p style="color: #e1ffff">Android</p>
                    </a>
                 <ul class="nav pull-right text-right">
                  <!-- END TODO DROPDOWN -->
                  <!-- BEGIN USER LOGIN DROPDOWN -->
                  <li class="dropdown user ">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                     <span class="username">Cristian</span>
                     <i class="icon-angle-down"></i>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a href="/perfil/"><i class="icon-user"></i>Mi perfil</a></li>
                        <li><a href="/logout/"><i class="icon-key"></i> Log Out</a></li>
                     </ul>
                  </li>
                  <!-- END USER LOGIN DROPDOWN -->
               </ul>   
                </div>
            </div>
        </nav>
        <?
        require_once './inc/lib/mod/menus/admin.mnlf.mod.php';
        ?>
       
        