<?php
/* Smarty version 3.1.30, created on 2020-03-11 22:32:02
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/accueil/accueil.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e6958d2614bb0_18805715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5c58b3d85d45cbf120b3ce5c9392cefea116b36' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/accueil/accueil.html',
      1 => 1583962316,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5e6958d2614bb0_18805715 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

    <?php $_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->



 <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                            <div class="page-header">
                               
                                   
                                <h2 class="pageheader-title " align="center">Accueil </h2>
                                

                            
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->



    
            <!-- ########################################################### -->
            <div class="row main">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="../src/public/img/client.png" alt="Card image">
                        <div class="card-img-overlay">

                            <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/list_client" class="btn btn-primary">GESTION DES CLIENTS</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="../src/public/img/compte.jpg" alt="Card image">
                        <div class="card-img-overlay">

                            <a href="../Compte/list_compte" class="btn btn-primary">GESTION DES COMPTES</a>
                        </div>
                    </div>
                </div>


            </div>





    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->

    <?php }
}
