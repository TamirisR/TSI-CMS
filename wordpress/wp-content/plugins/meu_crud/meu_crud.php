<?php
/*
* Plugin Name: Exemplo de CRUD na tela de configuração 
* Plugin URI: https://sp.senac.br
* Description: Este é um plug-in que mostra como trabalhar com o menu do admin do WP
* Version: 0.0.1
* Author: Tamiris
* Author URI: https://sp.senac.br
* License: CC BY
*/

if ( !defined( 'WPINC')) exit;

register_activation_hook( __FILE__, 'criar_tabela');

function criar_tabela() {

    global $wpdb;
    $wpdb->query (" CREATE TABLE {$wpdb->prefix}agenda ( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) NOT NULL, whatsapp BIGINT UNSIGNED NOTE NULL)");
}

register_deactivation_hook(__FILE__, 'apagar_tabela');

function apagar_tabela() {
    global $wpdb;
    $wpdb->query (" DROP TABLE {$wpdb-> prefix}agenda");
}


add_action( 'admin_menu' , 'crud_do_meu_plugin');
function crud_do_meu_plugin(){
    
    add_menu_page( 'configurações do Meu Plug-in',
    'Meu CRUD',
    'administrator',
    'meu-plugin-config',
    'abre_configuracoes',
'dashicons-database');
}
function abre_configuracoes() {
    global $wpdb;   
    if ( isset($_GET['apagar'])){
        $id = preg_replace('/\D/', '', $GET['apagar']);
    $wpdb->query("DELETE FROM {$wpdb->prefix} agenda WHERE id= $id");

    if ( isset($_POST['submit'])){
        if ( $_POST['submit'] =='Gravar'){
            $wpdb->query(
            $wpdb->prepare(" INSERT INTO {$wpdb->prefix}agenda ( nome, whatsapp) VALUES ( %s, %d)", $_POST['nome'], $_POST['whatsapp']));
            
        }
    }

$contatos = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}agenda");
    require 'lista_tpl.php';