<?php
defined('_JEXEC') or die;

use Joomla\CMS\Factory; // Ensure that you are importing the Joomla Factory class
class customHelper
{
    
    public static function getCustomContent($catid,$limit,$status)
    {
      $db = JFactory::getDbo();

      // Create a new query object
      $query = $db->getQuery(true);
     
      
      // Select fields from the content table
      $query->select($db->quoteName(array('a.id', 'a.title', 'a.introtext', 'a.created','a.images')))
            ->from($db->quoteName('#__content', 'a'))
            ->where('a.catid ='.(int) $catid . ' AND a.state = '.(int) $status)  // Published articles
            ->order('a.created DESC')
            ->setLimit($limit); // Order by the creation date (latest first)
      
      // Set the query to the database object
      $db->setQuery($query);
      
      
      // Get the results (array of articles)
      $articles = $db->loadObjectList();
      



		return $articles;
		
	}
}

?>
