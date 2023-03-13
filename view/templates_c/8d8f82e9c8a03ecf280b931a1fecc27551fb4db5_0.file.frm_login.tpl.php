<?php
/* Smarty version 4.3.0, created on 2023-03-13 00:28:32
  from '/Applications/XAMPP/xamppfiles/htdocs/semana7.1/view/templates/frm_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640e60204a7816_34982183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d8f82e9c8a03ecf280b931a1fecc27551fb4db5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/semana7.1/view/templates/frm_login.tpl',
      1 => 1678663702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e60204a7816_34982183 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
  <title></title>
</head>

<body>
  <h1>Login</h1>
  <form action="index.php" method="post">
    <input type="hidden" name="action" value="validar_login">
    <input type="hidden" name="action" value="registrar">
    <table>
      <tr>
        <td>Usuario</td>
        <td><input type="text" name='txt_usuario'></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" name='pwd_password'></td>
      </tr>
      <tr>
        <td colspan="1"><input type="submit" value='Registrarse'></td>
        <td colspan="2"><input type="submit" value='Entrar'></td>
      </tr>
    </table>
  </form>
</body>
</html><?php }
}
