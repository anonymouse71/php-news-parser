<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-04 21:29:59
         compiled from "application/views/sites_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174683387654b3a4a37d4959-88112626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2834a55e0fa97673d85e2fd4845cacce29989eb8' => 
    array (
      0 => 'application/views/sites_view.tpl',
      1 => 1423081711,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174683387654b3a4a37d4959-88112626',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54b3a4a3800515_04370138',
  'variables' => 
  array (
    'data' => 0,
    'line' => 0,
    'subfolder' => 0,
    'cms_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b3a4a3800515_04370138')) {function content_54b3a4a3800515_04370138($_smarty_tpl) {?><h1>Список сайтов</h1>

<br/>


<div id="no-more-tables">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Сайт</th>
                <th>CMS</th>
                <th>RSS</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
            <tr>
                <td data-title="ID"><?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
</td>
                <td data-title="Сайт">
                    <?php echo $_smarty_tpl->tpl_vars['line']->value['url'];?>

                    <a target="_blank" class="glyphicon glyphicon-arrow-down" href="http://<?php echo $_smarty_tpl->tpl_vars['line']->value['url'];?>
 "></a>
                </td>
                <td data-title="CMS"><?php echo strtoupper($_smarty_tpl->tpl_vars['line']->value['type']);?>
</td>
                <td data-title="RSS">0</td>
                <td>
                    <div class="btn-group btn-group-md">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
                            Меню
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="javascript:void(1);" onclick="editSite(<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
, this);">Изменить</a></li>
                            <li><a href="javascript:void(1);" onclick="delSite(<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
);">Удалить</a></li>
                            <li class="divider"></li>
                            <li><a class="check_connection" href="javascript:void(1);"  onclick="checkSite(<?php echo $_smarty_tpl->tpl_vars['line']->value['id'];?>
, this);">Проверить соединение</a></li>
                        </ul>
                    </div>
                    <span class="site-info invisible">
                        <img src="/<?php echo $_smarty_tpl->tpl_vars['subfolder']->value;?>
images/fbloader.gif" alt="loading"/>
                    </span>

                    
                    <span class="site-info2 invisible">
                        <img src="/<?php echo $_smarty_tpl->tpl_vars['subfolder']->value;?>
images/fbloader.gif" alt="loading"/>
                    </span>

                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</div>

<br/>

<div class="add-form hidden">
    <form name="add_site" id="add_site">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="form-group">
                    <label for="InputURL">Адрес сайта:</label>
                    <input type="hidden" name="id" id="InputID" value="" />
                    <input type="text" name="url" class="form-control" id="InputURL" placeholder="Введите адрес сайта">
                </div>
                <div class="form-group">
                    <label for="InputType">Тип сайта:</label>
                    <select multiple name="type" class="form-control" id="InputType">
                        <?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value) {
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
                        <option value="<?php echo strtolower($_smarty_tpl->tpl_vars['line']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['line']->value;?>
</option>
                        <?php } ?>
                    </select>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="form-group">
                    <label for="InputDBHost">Имя хоста бд:</label>
                    <input type="text" name="dbhost" class="form-control" id="InputDBHost" placeholder="Введите адрес хоста бд" value="localhost">
                </div>
                <div class="form-group">
                    <label for="InputDBName">Имя базы данных:</label>
                    <input type="text" name="dbname" class="form-control" id="InputDBName" placeholder="Введите имя базы данных">
                </div>

            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">

                <div class="form-group">
                    <label for="InputDBUser">Имя пользователя бд:</label>
                    <input type="text" name="dbuser" class="form-control" id="InputDBUser" placeholder="Введите имя пользователя">
                </div>
                <div class="form-group">
                    <label for="InputDBPass">Пароль пользователя бд:</label>
                    <input type="text" name="dbpass" class="form-control" id="InputDBPass" placeholder="Введите пароль пользователя">
                </div>
                <div class="form-group">
                    <label for="InputDBCharset">Кодировка базы данных:</label>
                    <input type="text" name="dbcharset" class="form-control" id="InputDBCharset" placeholder="Введите кодировку базы данных" value="utf8">
                </div>

            </div>
        </div>

    </form>
</div>

<button type="button" class="btn btn-danger" id="btn-add-site">Добавить сайт</button>
<button type="button" class="btn btn-danger hidden" id="btn-edit-site">Изменить сайт</button>
<button type="button" class="btn btn-primary hidden" id="btn-cancel-site">Отмена</button>
<span class="add-site-status"></span><?php }} ?>
