<?php
/*
* Plugin Name: Meu Plug-in com menu
* Plugin URI: https://sp.senac.br
* Description: Este é um plug-in que mostra como trabalhar com o menu do admin do WP
* Version: 0.0.1
* Author: Tamiris
* Author URI: https://sp.senac.br
* License: CC BY
*/

add_action( 'admin_menu' , 'menu_do_meu_plugin');
function menu_do_meu_plugin(){
    /*
    add_menu_page( 'configurações do Meu Plug-in',
    'Meu Plug-in',
    'administrator',
    'meu-plugin-config',
    'abre_configuracoes',
'dashicons-admin-generic');
*/
    add_submenu_page( 'options-general.php',
    'Configurações do Meu Plugin',
    'Meu Plug-in',
    'administrator',
    'meu-plugin-config',
    'abre_configuracoes' );
}
function abre_configuracoes(){
    require 'plugin_com_menu_tpl.php';
}
