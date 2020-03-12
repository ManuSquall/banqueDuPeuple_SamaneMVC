<?php
/* Smarty version 3.1.30, created on 2020-03-04 19:13:58
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/user/listEmp.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5fefe6778346_64686198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8a881e887ca19e080d40e6ce4af5c48f7c3c66f' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/user/listEmp.html',
      1 => 1583345637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:{$url_base}src/view/header.html' => 1,
    'file:{$url_base}src/view/footer.html' => 1,
  ),
),false)) {
function content_5e5fefe6778346_64686198 (Smarty_Internal_Template $_smarty_tpl) {
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
                               
                                   
                                <h2 class="pageheader-title " align="center">Liste des employes</h2>
                                

                            
                                
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
User/form_user" class="btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter un utilisateur</a>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeEmp']->value, 'employe');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['employe']->value) {
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getNumero();?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getNom();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getPrenom();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getAdresse();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['employe']->value->getProfil()->getLibelle();?>
  </td>
                            <td>
                                <a href="#"
                                    class="btn btn-sm btn-info text-white ml-2"><i
                                    class="fa fa-info"></i></a>
                                
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
