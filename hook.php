<?php

if (!defined('GLPI_ROOT')) {
    die('Direct access not allowed');
}

/**
 * Instalación del plugin
 */
function plugin_globalsearch_install()
{
    // No creamos tablas/config por ahora
    return true;
}

/**
 * Desinstalación del plugin
 */
function plugin_globalsearch_uninstall()
{
    // Limpiar recursos si en el futuro se crean (tablas, configs, etc.)
    return true;
}
