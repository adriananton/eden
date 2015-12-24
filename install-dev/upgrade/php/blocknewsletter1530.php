<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

function blocknewsletter1530()
{
    include_once(_PS_INSTALL_PATH_.'upgrade/php/generic_add_missing_column.php');
    
    $column_to_add = array(
        'id_shop' => 'INTEGER UNSIGNED NOT NULL DEFAULT \'1\' after `id`',
        'id_shop_group' => 'INTEGER UNSIGNED NOT NULL DEFAULT \'1\' after `id_shop`',
        'active' => 'TINYINT(1) NOT NULL DEFAULT \'0\' after http_referer');

    return generic_add_missing_column('newsletter', $column_to_add);
}
