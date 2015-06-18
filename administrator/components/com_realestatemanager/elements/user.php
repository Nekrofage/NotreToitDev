<?php
defined('_JEXEC') or die;
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
 * @version: 3.5 Pro
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * */
if (version_compare(JVERSION, "1.6.0", "lt")){
    class JElementUser extends JElement{
        function fetchElement($name, $value, &$node, $control_name){
            $db = JFactory::getDBO();
            $query = "SELECT u.name AS user
                      FROM #__users AS u, #__rem_houses AS h 
                      WHERE h.owneremail=u.email AND published = 1
                      GROUP BY u.name
                      ORDER BY u.name";
            $db->setQuery($query);
            $showownerhouses = $db->loadObjectList();
            return JHTML::_('select.genericlist', $showownerhouses, ''.$control_name.'['.$name.']', 'class="inputbox"', 'user', 'user', $value, $control_name.$name);
        }
    }
} else if (version_compare(JVERSION, "1.6.0", "ge") && version_compare(JVERSION, "3.5.100", "lt")){
    class JFormFieldUser extends JFormField{
        protected function getInput(){
            $db = JFactory::getDBO();
            $query = "SELECT u.name AS user, u.name AS title 
                      FROM #__users AS u, #__rem_houses AS h 
                      WHERE h.owneremail=u.email AND published = 1
                      GROUP BY u.name
                      ORDER BY u.name";
            $db->setQuery($query);
            $showownerhouses = $db->loadObjectList();
            return JHtml::_('select.genericlist', $showownerhouses, $this->name, 'class="inputbox"', 'user', 'user', $this->value, $this->name);
        }
    }
} else {echo "Sanity test. Error version check!"; exit;}
