<?php
/* Smarty version 3.1.30, created on 2020-03-18 20:32:05
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/agence/addAgence.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e7277356752d9_19244702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3efa7c3fa39c1c9bb8b41f308cf9d608989bada4' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/agence/addAgence.html',
      1 => 1584559922,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/header.html' => 1,
    'file:src/view/footer.html' => 1,
  ),
),false)) {
function content_5e7277356752d9_19244702 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php $_smarty_tpl->_subTemplateRender("file:src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Agence/list_agence?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Ajouter une agence</h2>




        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->




<!-- ############################################################################################## -->







<div class="splash-container">
    <div class="card ">
        <div class="card-body">
            <form action="create_agence?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" method="post" class="needs-validation">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustomUsername">Numéro</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">#</span>
                            </div>
                            <input type="text" class="form-control" value="AA-###" name="numero"
                                aria-describedby="inputGroupPrepend" readonly>
                        </div>
                    </div>


                   


                   


                    <br>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="nom">Ville</label>
                        <input type="text" class="form-control" name="ville" id="ville" required>

                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="prenom">Région</label>
                        <input type="text" class="form-control" name="region" id="region" required>

                    </div>
                    <br>
                   
                </div>
                <br>
                <br>



                <button name="save" class="btn btn-primary" type="submit">Ajouter</button>
            </form>
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
<!-- ============================================================== --><?php }
}
