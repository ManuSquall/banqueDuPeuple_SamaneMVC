<?php
/* Smarty version 3.1.30, created on 2020-03-04 18:56:25
  from "/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/user/addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e5febc9601e80_39715059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aa2359d589437d0f1f6f12d4c817bf8e2244179' => 
    array (
      0 => '/opt/lampp/htdocs/projects/banqueDuPeuple_samane/src/view/user/addUser.html',
      1 => 1583344570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:{$url_base}src/view/header.html' => 1,
    'file:{$url_base}src/view/footer.html' => 1,
  ),
),false)) {
function content_5e5febc9601e80_39715059 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php $_smarty_tpl->_subTemplateRender("file:{$url_base}src/view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>



<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <a href="accueil" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Ajouter un utilisateur</h2>




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
            <form action="create_client" method="post" class="needs-validation">
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

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="form-group">
                            <label for="input-select">Profil</label>
                            <select name="id_client" class="form-control" id="input-select" required>
                                <option value="">-Selectionner un profil-</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeProfil']->value, 'profil');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profil']->value) {
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['profil']->value->getId();?>
"> <?php echo $_smarty_tpl->tpl_vars['profil']->value->getLibelle();?>

                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </select>
                        </div>

                    </div>


                    <br>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" name="nom" id="nom" required>

                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="prenom">Prenom</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" required>

                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="mail">Email</label>
                        <input type="text" class="form-control" name="mail" id="mail" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login" id="login" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="mdp">Mot de passe</label>
                        <input type="password" class="form-control" name="mdp" id="mdp" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="tel">Telephone</label>
                        <input type="text" class="form-control" name="tel" id="tel" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

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
<?php $_smarty_tpl->_subTemplateRender("file:{$url_base}src/view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== --><?php }
}
