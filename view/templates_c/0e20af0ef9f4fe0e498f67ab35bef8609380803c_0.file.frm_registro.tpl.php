<?php
/* Smarty version 4.3.0, created on 2023-03-13 02:06:33
  from '/Applications/XAMPP/xamppfiles/htdocs/semana7.1/view/templates/frm_registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_640e7719192fd4_68582452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e20af0ef9f4fe0e498f67ab35bef8609380803c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/semana7.1/view/templates/frm_registro.tpl',
      1 => 1678669453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e7719192fd4_68582452 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Registro</h1>
<form action="index.php" method="post">
    <input type="hidden" name="action" value="resgistrar_usu">
    <table>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="txt_nombre"></td>
        </tr>
        <tr>
            <td>Apellido1:</td>
            <td><input type="text" name="txt_apellido1"></td>
        </tr>
        <tr>
            <td>Apellido2:</td>
            <td><input type="text" name="txt_apellido2"></td>
        </tr>
        <tr>
            <td>Usuario:</td>
            <td><input type="text" name="txt_usuario"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="pwd_password"></td>
        </tr>
        <tr>
            <td>Correo:</td>
            <td><input type="text" name="txt_correo"></td>
        </tr>
        <tr>
            <td>Perfil:</td>
            <td><input type="text" name="txt_perfil"></td>
        </tr>
        <tr>
            <td>Estado:</td>
            <td><input type="text" name="txt_estado"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Registrarse"></td>
        </tr>
    </table>
</form><?php }
}
