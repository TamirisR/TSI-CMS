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
    $wpdb->query ("CREATE TABLE { $wpdb->prefix}agenda (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) NOT NULL, whatsapp BIGINT UNSIGNED NOTE NULL)");
}