# tienda-base-prestashop-1.7.6.1

Esta es la versión base de una tienda prestashop 1.7.6.1
el directorio donde se haga el clone debe ser "prestashop"

Hay que darle permisos 777 al directorio prestashop


chmod -R 777 prestashop 

Para que funcione el Backend hay que renombrar algunas carpetas
Ignoro el impacto de renombrar esto asi que....

en el directorio /home/nuevatienda/luigiz.com/tienda-warehouse/web/prestashop/modules

 **mv psaddonsconnect psaddonsconnect_**
  
 **mv dashgoals dashgoals_**
  
en el directorio /home/nuevatienda/luigiz.com/tienda-warehouse/web/prestashop/config

editar el archivo defines.inc.php
y cambiar el valor false por true


/* Debug only */
if (!defined('_PS_MODE_DEV_')) {
define('_PS_MODE_DEV_', **true**);
}
