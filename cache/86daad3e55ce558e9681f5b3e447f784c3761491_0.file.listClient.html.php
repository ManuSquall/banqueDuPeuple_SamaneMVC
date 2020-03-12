<?php
/* Smarty version 3.1.30, created on 2020-03-04 19:14:04
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/user/listClient.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fefec3fa9b3_23087788',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86daad3e55ce558e9681f5b3e447f784c3761491' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/user/listClient.html',
      1 => 1583345585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:{$url_base}src/view/header.html' => 1,
    'file:{$url_base}src/view/footer.html' => 1,
  ),
),false)) {
function content_5e5fefec3fa9b3_23087788 (Smarty_Internal_Template $_smarty_tpl) {
?>





<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php $_smarty_tpl->_subTemplateRender("file:{$url_base}src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->




 <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                           
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/accueil" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>
                           
                            <div class="page-header">
                               
                                   
                                <h2 class="pageheader-title " align="center">Liste des clients</h2>
                                

                            
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->




<!-- ############################################################################################## -->


<!-- recent orders  -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/form_user" class="btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter un client</a>
    <div class="card">
       
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Profil</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>                    
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeClient']->value, 'client');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['client']->value->getNumero();?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['client']->value->getNom();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['client']->value->getPrenom();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['client']->value->getAdresse();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['client']->value->getProfil()->getLibelle();?>
  </td>
                            <td>
                                <a href="#"
                                    class="btn btn-sm btn-success text-white squall"><i
                                    class="fab fa-fw fa-wpforms"></i>Compte(s)</a>
                                
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end recent orders  -->



<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php $_smarty_tpl->_subTemplateRender("file:{$url_base}src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== --><?php }
}
