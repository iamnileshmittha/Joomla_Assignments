<?php
// No direct access
defined('_JEXEC') or die;
use Joomla\CSM\Factory;
use Joomla\CSM\Uri;

// Include the helper file
require_once 'customHelper.php';
$catid = $params->get('catid');
$status = $params->get('status');
$limit = $params->get('limit');

//       echo $catid; die("ggg");
// Get the custom content
$customContent = customHelper::getCustomContent($catid,$limit,$status);
 
if(!empty($customContent)){
?>
    <div class="article-grid">
    <?php foreach ($customContent as $article) : ?>
        <div class="article-item">
            <h2>
                <a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=' . $article->id); ?>">
                    <?php echo $article->title; ?>
                </a>
            </h2>
            <p><?php echo $article->created ?></p>
            <p><?php echo JHtml::_('string.truncate', $article->introtext, 200); ?></p>
        </div>
    <?php endforeach; ?>
</div>

<?php
    }

    ?>


<?php

// Include the layout to display articles
require JModuleHelper::getLayoutPath('mod_custommodule');

// Assign the content to the template
//require JModuleHelper::getLayoutPath('mod_custommodule');
?>
