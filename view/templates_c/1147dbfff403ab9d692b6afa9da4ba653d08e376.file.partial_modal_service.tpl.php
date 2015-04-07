<?php /* Smarty version Smarty-3.1.21, created on 2015-04-07 12:03:38
         compiled from "view/templates/partial_modal_service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15081887745523ab7aa7cf72-39666189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1147dbfff403ab9d692b6afa9da4ba653d08e376' => 
    array (
      0 => 'view/templates/partial_modal_service.tpl',
      1 => 1428400974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15081887745523ab7aa7cf72-39666189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5523ab7aa88f74_55575740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5523ab7aa88f74_55575740')) {function content_5523ab7aa88f74_55575740($_smarty_tpl) {?><div class="modal fade bs-modal-sm" id="service-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                  <li class="active"><a href="#login" data-toggle="tab">Log In</a></li>
                  <li class=""><a href="#register" data-toggle="tab">Register</a></li>
                  <li class=""><a href="#forgot" data-toggle="tab">Forgot</a></li>
                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="login">
                        <form name="form-login" id="#form-login" method="post" action ="/">
                            <div class="form-group">
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="login-username">Username</label>
                                    <input type="text" name="login-username" id="login-username" class="form-control" placeholder="Username" />
                                    <span class="form-control-feedback glyphicon glyphicon-user"></span>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="login-psw">Password</label>
                                    <input type="password" name="login-psw" id="login-psw" class="form-control" placeholder="Password" />
                                    <span class="form-control-feedback glyphicon glyphicon-lock"></span>
                                </div>
                                <div class="form-group">
                                    <label class="" for="rememberme">
                                        <input type="checkbox" name="rememberme" id="rememberme" value="Remember me"> Remember me
                                    </label>
                                </div>
                                <div class="name-group">
                                    <input type="text" name="login-name" id="login-name" class="form-control" placeholder="E-mail" />
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button type="button" name="login-btn" id="login-btn" class="btn btn-success">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="register">
                        <form name="form-register" id="#form-register" method="post" action ="/">
                            <div class="form-group">
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="register-username">Username</label>
                                    <input type="text" name="register-username" id="register-username" class="form-control" placeholder="Username" />
                                    <span class="form-control-feedback glyphicon glyphicon-user"></span>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="register-psw">Password</label>
                                    <input type="password" name="register-psw" id="register-psw" class="form-control" placeholder="Password" />
                                    <span class="form-control-feedback glyphicon glyphicon-lock"></span>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="register-psw2">Re-enter password</label>
                                    <input type="password" name="register-psw2" id="register-psw2" class="form-control" placeholder="Password" />
                                    <span class="form-control-feedback glyphicon glyphicon-lock"></span>
                                </div>
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="register-email">E-mail</label>
                                    <input type="text" name="register-email" id="register-email" class="form-control" placeholder="E-mail" />
                                    <span class="form-control-feedback glyphicon glyphicon-envelope"></span>
                                </div>
                                <div class="name-group">
                                    <input type="text" name="register-name" id="register-name" class="form-control" placeholder="E-mail" />
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" name="register-btn" id="register-btn" class="btn btn-success">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="forgot">
                        <form name="form-forgot" id="#form-forgot" method="post" action ="/">
                            <div class="form-group">
                                <div class="form-group has-feedback has-feedback-left">
                                    <label class="control-label" for="forgot-email">E-mail</label>
                                    <input type="text" name="forgot-email" id="forgot-email" class="form-control" placeholder="E-mail" />
                                    <span class="form-control-feedback glyphicon glyphicon-envelope"></span>
                                </div>
                                <div class="name-group">
                                    <input type="text" name="forgot-name" id="forgot-name" class="form-control" placeholder="E-mail" />
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" name="forgot-btn" id="forgot-btn" class="btn btn-success">New password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-default btn-block" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /#service-modal --><?php }} ?>