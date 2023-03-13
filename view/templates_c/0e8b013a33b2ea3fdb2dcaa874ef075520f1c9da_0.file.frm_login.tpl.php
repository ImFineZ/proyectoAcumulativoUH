<?php
/* Smarty version 4.3.0, created on 2023-02-21 04:13:45
  from '/Applications/XAMPP/xamppfiles/htdocs/semana6/view/templates/frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f436e9510240_56024471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8b013a33b2ea3fdb2dcaa874ef075520f1c9da' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/semana6/view/templates/frm_login.tpl',
      1 => 1676949155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f436e9510240_56024471 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
    <title></title>
  </head>
  <body>
    <h1>Login</h1>
    <form action="index.php" method="post">
      <input type="hidden" name ="action" value ="validar_login">
      <table>
        <tr>
          <td>Usuario</td>
          <td><input type="text" name='txtUsuario'></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name='pwd_password'></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value='Entrar'></td>
        </tr>
      </table>
    </form>
  </body>
</html>
<?php }
}
