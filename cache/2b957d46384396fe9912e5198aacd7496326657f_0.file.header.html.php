<?php
/* Smarty version 3.1.30, created on 2020-03-04 21:37:56
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6011a4e799b2_94068361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b957d46384396fe9912e5198aacd7496326657f' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/header.html',
      1 => 1583345825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6011a4e799b2_94068361 (Smarty_Internal_Template $_smarty_tpl) {
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <!-- squall -->
    <link rel="stylesheet" href="../src/public/css/squall.css">
    <title>Banque du peuple</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        <!-- ============================================================== -->
        <!-- header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../Admin/connect">Banque du peuple</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider" align="center">
                                
                            </li>

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    Bienvenue 
                                </li>

                            </ul>


                            <!-- ############################################## -->

                            <!-- ############################################## -->


                            <li class="nav-divider">
                                Services
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Utilisateurs : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/form_user">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="list_user">Modifier / Supprimer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/list_client">Lister clients</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/list_emp">Lister employes</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- #################
                            <li class="nav-divider">
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Clients : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Client/add_client">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Client/list_client">Modifier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Client/list_client">Supprimer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> -->


                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <!-- ################# -->

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-2"><i
                                        class="fab fa-fw fa-wpforms"></i>Comptes : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Compte/add_compte">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Compte/list_compte">Modifier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../Compte/list_compte">Supprimer</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <!-- ############################################## -->


                            <li class="nav-divider">
                                <a href="#"> Info</a>

                            </li>
                            <li class="nav-divider">
                                <a href="../Admin/disconnect"> Déconnecter</a>

                            </li>





                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">


<div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">



        <!-- ########################################################################### -->

       

<?php }
}
