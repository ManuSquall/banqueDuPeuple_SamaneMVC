<?php
/* Smarty version 3.1.30, created on 2020-03-18 20:25:10
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/agence/listAgence.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e727596b10ab0_05264333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8d57e49093de43f19d2ba931292e7f9e349f764' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/agence/listAgence.html',
      1 => 1584559508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5e727596b10ab0_05264333 (Smarty_Internal_Template $_smarty_tpl) {
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
                           
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
User/accueil?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>
                           
                            <div class="page-header">
                               
                                   
                                <h2 class="pageheader-title " align="center">Liste des agences</h2>
                                

                            
                                
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
Agence/form_agence?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter une agence</a>
    <div class="card">
       
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                            <th>Numéro</th>
                            <th>Ville</th>
                            <th>Région</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>                    
                        
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeAgence']->value, 'agence');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agence']->value) {
?>
                        <tr>
                            <td> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getNumero();?>
 </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getVille();?>
  </td>
                            <td> <?php echo $_smarty_tpl->tpl_vars['agence']->value->getRegion();?>
  </td>
                            <td>
                                <a href="#"
                                    class="btn btn-sm btn-warning text-white ml-2"><i
                                    class="fa fa-edit"></i>Modifier</a>
                                <!-- <a href="User/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-sm btn-danger text-white ml-2"><i
                                        class="fa fa-trash"></i>Supprimer</a> -->
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
<?php $_smarty_tpl->_subTemplateRender("file:src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== --><?php }
}
