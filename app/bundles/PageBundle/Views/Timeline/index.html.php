<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$item = $event['extra']['page'];

?>
<span class="icon fa fa-file-text-o"></span>
<a href="<?php echo $view['router']->generate('mautic_page_action',
    array("objectAction" => "view", "objectId" => $item->getId())); ?>"
   data-toggle="ajax">
    <?php echo $item->getTitle(); ?> (<?php echo $item->getAlias(); ?>)
</a>
