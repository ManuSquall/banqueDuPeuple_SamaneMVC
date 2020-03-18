<?php
/* Smarty version 3.1.30, created on 2020-03-18 23:51:43
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e72a5ff6302f9_03155615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b957d46384396fe9912e5198aacd7496326657f' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/header.html',
      1 => 1584571901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e72a5ff6302f9_03155615 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/css/squall.css">
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
                <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/accueil?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Banque du peuple</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>

                <!-- ##########################################################"" -->

                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <h3>Bienvenue <?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
</h3>
                                <!-- <input class="form-control" type="text" placeholder="Search.."> -->
                            </div>

                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">Notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
src/public/template/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
 </h5>
                                    <span class="status"></span><span class="ml-2"><?php echo $_smarty_tpl->tpl_vars['user']->value->getProfil()->getLibelle();?>
</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Profil</a>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a> -->
                                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/deconnect"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
                <!-- ##########################################################"" -->

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
                            <!-- <li class="nav-divider" align="center">
                                
                            </li> -->

                            <!-- <ul class="nav flex-column">
                                <li class="nav-item">
                                    Bienvenue <?php echo $_smarty_tpl->tpl_vars['user']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->getNom();?>
 
                                </li>

                            </ul> -->


                            <!-- ############################################## -->

                            <!-- ############################################## -->


                            <li class="nav-divider">
                                Services
                            </li>
                            <!-- <li class="nav-item ">
                                <a class="nav-link active" href="Agence/list_user" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-university"></i>Agences : <span
                                        class="badge badge-success">6</span></a>

                            </li> -->
                            <li class="nav-divider">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/list_agence?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"> Agences</a>

                            </li>


                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-2"><i
                                        class="fa fa-fw fa-user-circle"></i>Utilisateurs : <span
                                        class="badge badge-success">6</span></a>
                                        <div id="submenu-2" class="collapse submenu" >
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/form_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Ajouter</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/list_user?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Modifier / Supprimer</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/list_client?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Lister clients</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/list_emp?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
">Lister employes</a>
                                                </li>
                                            </ul>
                                        </div>
                               
                            </li>

                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>

                            
                            <!-- ################# -->

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fab fa-fw fa-wpforms"></i>Comptes : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-3" class="collapse submenu" >
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
