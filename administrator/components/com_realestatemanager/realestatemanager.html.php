<?php
defined('_JEXEC') or die('Restricted access');
/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
 * @version: 3.5 Pro
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * */


$GLOBALS['mainframe'] = $mainframe = $GLOBALS['app'] = $app = JFactory::getApplication();
$GLOBALS['templateDir'] = $templateDir = 'templates/' . $mainframe->getTemplate();;
$GLOBALS['mosConfig_live_site'] = $mosConfig_live_site = JURI::root();
$GLOBALS['doc'] = $doc = JFactory::getDocument();


$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
//$doc->addStyleSheet('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
//$doc->addScript('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');

$doc->addStyleSheet( $mosConfig_live_site . 
      '/components/com_realestatemanager/includes/jquery-ui.css');

?>
    <script type="text/javascript" src="<?php echo $mosConfig_live_site . 
      '/components/com_realestatemanager/lightbox/js/jQuerREL-1.2.6.js'; ?>">
    </script>
    <script type="text/javascript">jQuerREL=jQuerREL.noConflict();</script> 
    <script language="javascript" type="text/javascript">
      jQuerREL(document).ready(function() {                           
      jQuerREL('#toolbar-back .icon-back').removeClass('icon-back').
        addClass('fa fa-arrow-left').css('font-family','FontAwesome');
    });
      </script>    
<?php
$bid = mosGetParam($_POST, 'bid', array(0));
require_once ($mosConfig_absolute_path .
 "/administrator/components/com_realestatemanager/realestatemanager.class.others.php");

class HTML_Categories {

    static function show($rows, $myid, &$pageNav, &$lists, $type) {
        global $my, $mosConfig_live_site, $templateDir, $doc,$app;
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');
        $section = "com_realestatemanager";
        $section_name = "RealEstateManager";

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_CATEGORIES_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <table class="table list_01">
                <tr>
                    <th width="5%" align="center">#</th>
                    <th width="5%"><input type="checkbox" name="toggle" value=""
                     onClick="rem_checkAll(this<?php   ?>);" /></th>
                    <th align = "center" class="title"><?php echo _HEADER_CATEGORY; ?></th>
                    <th align = "center" width="10%"><?php echo _HEADER_NUMBER; ?></th>
                    <th align = "center" width="9%"><?php echo _HEADER_PUBLISHED; ?></th>
                    <?php
                    if ($section <> 'content') {
                        ?>
                        <th align = "center" width="10%" colspan="2"><?php echo _HEADER_REORDER; ?></th>
                        <?php
                    }
                    ?>
                    <th align = "center" width="10%"><?php echo _HEADER_ACCESS; ?></th>
                    <?php
                    if ($section == 'content') {
                        ?>
                        <th width="12%" align="left">Section</th>
                        <?php
                    }
                    ?>
                    <th align = "center" width="5%">ID</th>
                    <th align = "center" width="12%">
                        <?php echo _HEADER_CHECKED_OUT; ?>
                    </th>
                    <th align = "center"  width="5%" ><?php echo _REALESTATE_MANAGER_LABEL_LANGUAGE_NAME; ?></th>
                                        <?php
                    if (version_compare(JVERSION, "3.0.0", "ge")) {
                        ?>
                        <th>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                                <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </th>
                    <?php } ?>
                </tr>
                <?php
                $k = 0;
                $i = 0;
                $n = count($rows);
                foreach ($rows as $row) {
                    $img = $row->published ? 'icon-16-allow.png' : 'publish_r.png';
                    $task = $row->published ? 'unpublish' : 'publish';
                    $alt = $row->published ? 'Published' : 'Unpublished';
                    if (!$row->access) {
                        $color_access = 'style="color: green;"';
                        $task_access = 'accessregistered';
                    } else if ($row->access == 1) {
                        $color_access = 'style="color: red;"';
                        $task_access = 'accessspecial';
                    } else {
                        $color_access = 'style="color: black;"';
                        $task_access = 'accesspublic';
                    }
                    ?>
                    <tr class="<?php echo "row$k"; ?>">
                        <td width="20" align="center"><?php echo $pageNav->getRowOffset($i); ?></td>
                        <td width="20" align="center">
                            <?php echo mosHTML::idBox($i, $row->id,
                             ($row->checked_out_contact_category && $row->checked_out_contact_category != $my->id), 'bid'); ?>
                        </td>
                        <td width="35%">
                            <?php
                            if ($row->checked_out_contact_category && ($row->checked_out_contact_category != $my->id)) {
                                ?>
                                <?php echo $row->treename . ' ( ' . $row->title . ' )'; ?>
                                &nbsp;[ <i>Checked Out</i> ]
                                <?php
                            } else {
                                ?>
                                <a href="#edit" onClick="return listItemTask('cb<?php echo $i; ?>','edit')">
                                    <?php echo $row->treename . ' ( ' . $row->title . ' )'; ?>
                                </a>
                                <?php
                            }
                            ?>
                        </td>
                        <td align="center"><?php echo $row->cc; ?></td>
                        <td align="center">
                            <a href="javascript: void(0);"
                             onClick="return listItemTask('cb<?php echo $i; ?>','<?php echo $task; ?>')">
                                <?php
                                if (version_compare(JVERSION, "1.6.0", "lt")) {
                                    ?>
                                    <img src="<?php echo $mosConfig_live_site . "/administrator/images/"
                                     . $img; ?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $templateDir . "/images/admin/"
                                     . $img; ?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                }
                                ?>
                            </a>
                        </td>
                        <!-- old td  >
                        <?php echo $i . $pageNav->orderUpIcon($i); ?>
                        </td>
                        <td>
                        <?php echo $i . "::" . $n . $pageNav->orderDownIcon($i, $n); ?>
                        </td-->
                        <td align="center"><?php echo catOrderUpIcon($row->ordering - 1, $i); ?></td>
                        <td align="center"><?php echo catOrderDownIcon($row->ordering - 1,
                         $row->all_fields_in_list, $i); ?></td>
                        <td align="center">
            <!--<a href="javascript: void(0);" onClick="return listItemTask('cb<?php echo $i; ?>','<?php
             echo $task_access; ?>')" <?php echo $color_access; ?>>-->
                            <?php echo $row->groups; ?>
                            <!--</a>-->
                        </td>
                        <td align="center">
                            <?php echo $row->id; ?>
                        </td>
                        <td align="center">
                            <?php echo $row->checked_out_contact_category ? $row->editor : ""; ?>				
                        </td>
                        <td align="center">
                            <?php echo $row->language; ?>               
                        </td>
                        <td></td>
                        <?php
                        $k = 1 - $k;
                        ?>
                    </tr>
                    <?php
                    $k = 1 - $k;
                    $i++;
                }
                ?>
                <tr><td colspan = "11"><?php echo $pageNav->getListFooter(); ?></td></tr>
            </table>

            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="section" value="categories" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="chosen" value="" />
            <input type="hidden" name="act" value="" />
            <input type="hidden" name="boxchecked" value="0" />
            <input type="hidden" name="type" value="<?php echo $type; ?>" />
        </form>
        <?php
    }

    /**
     * Writes the edit form for new and existing categories
     * 
     * @param  $ The category object
     * @param string $ 
     * @param array $ 
     */
    static function edit(&$row, $section, &$lists, $redirect,$associate_cat_arr) {
        global $my, $mosConfig_live_site, $mainframe,$database,$doc,$app;

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        global $mosConfig_live_site, $option;
        if ($row->image == "") {
            $row->image = 'blank.png';
        }
        mosMakeHtmlSafe($row, ENT_QUOTES, 'description');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_CATEGORIES_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <script language="javascript" type="text/javascript">
            submitbutton = function(pressbutton, section) {
                var form = document.adminForm; 
                if (pressbutton == 'cancel') {
                    submitform( pressbutton );
                    return;
                }

                if ( form.name.value == "" ) {
                    alert('<?php echo _DML_CAT_MUST_SELECT_NAME; ?>');
                }else if ( form.title.value == "" ) {
                    alert('<?php echo _DML_CAT_MUST_SELECT_NAME; ?>');
                }  else {
        <?php getEditorContents('editor1', 'description'); ?>
                    submitform(pressbutton);
                }
            }
        </script>

        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <table class="adminform form_01">
                <tr>
                    <th  class="house_manager_caption" align="left">
                        <?php echo $row->id ? _HEADER_EDIT : _HEADER_ADD; ?> <?php
                         echo _CATEGORY; ?> <?php echo $row->name; ?>
                    </th>
                </tr>
            </table>


            <table class="adminform form_02" width="100%">
                 <tr>
                    <td width="185"><?php echo _CATEGORIES_HEADER_NAME; ?>:</td>
                    <td colspan="2">
                        <input class="text_area" type="text" name="name" value="<?php
                         echo $row->name; ?>" size="50" maxlength="255" title="<?php
                          echo _REALESTATE_MANAGER_TITLE_TO_TEXTAREA_2_FOR_ADDCATEGORY; ?>" />
                    </td>
                </tr>
                <tr>
                    <td width="185"><?php echo _CATEGORIES_HEADER_TITLE; ?>:</td>
                    <td colspan="2">
                        <input class="text_area" type="text" name="title" value="<?php
                         echo $row->title; ?>" size="50" maxlength="250" title="<?php
                          echo _REALESTATE_MANAGER_TITLE_TO_TEXTAREA_1_FOR_ADDCATEGORY; ?>" />
                    </td>
                </tr>
               
       
<?php 
/*********************************************************************************************/
         
    if(!empty($associate_cat_arr) && !empty($row->language) && $row->language != '' && $row->language != '*'){
?>
                <tr> 
                    <td width="15%"><?php echo _REALESTATE_MANAGER_LANG_ASSOCIATE_CATEGORIES;  ?>:</td>
                </tr>   
            
<?php
        $j =1;
        foreach ($associate_cat_arr as $lang=>$value) {
            $displ = '';
            if(!$value['list']){
                $displ = 'none';
            }
?>    
                <tr style="display: <?php echo $displ?>">
                    <td width="15%"><?php echo $lang; ?>:</td>
                    <td width="60%"><?php echo $value['list']; ?> 
                    <input class="inputbox" id="associate_category" type="text"
                     name="associate_category<?php echo $j;?>" size="20" readonly="readonly"
                      maxlength="20" style="width:25px; margin-bottom: 8px;"
                       value="<?php echo $value['assocId']; ?>" />
                    <input style="display: none" name="associate_category_lang<?php echo $j;?>"
                     value="<?php echo $lang ?>"/>  
                    </td>                          
                </tr>
<?php
        
        $j++;
        }
   }else{
?>
                <tr> 
                    <td width="15%"><?php echo _REALESTATE_MANAGER_LANG_ASSOCIATE_CATEGORIES; ?>:</td> 
                    <td width="60%"><?php echo 'this property only for category with language' ?> 
                </tr> 
<?php
   }

/*********************************************************************************************/
?>     
<script>
    window.onload = function(){
        
        var languageParentId = document.querySelectorAll('#language_associate_category');

        for(var i = 0; i < languageParentId.length; i++){
    
            var el = languageParentId[i];
            var idField = languageParentId[i].nextSibling.nextSibling;
            el.value = idField.value;
    
            var field = (function(x){
                el.onchange= function(){
                    var el = languageParentId[x];
                    var idField = languageParentId[x].nextSibling.nextSibling;
                    idField.value = el.value;     
                };  
            })(i);
        }
    };
</script>    
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_LABEL_LANGUAGE; ?>:</td>
                    <td colspan="2"><?php echo $lists['languages']; ?></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _HEADER_ACCESS; ?>:</td>
                    <td><?php echo $lists['category']['registrationlevel']; ?></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _CATEGORIES__PARENTITEM; ?>:</td>
                    <td><?php echo $lists['parent']; ?></td>
                </tr>
                <tr><?php $issetImage = substr_count($lists['image'], '<option'); ?>
                    <td width="185"><?php echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_IMAGE; ?>:</td>
                    <td><?php
                if ($issetImage == 1) {
                    echo $lists['image'] .
                     '<br><span style="font-size: 12px; position: absolute;">' . 
                     'To load images need to go Content->Media Manager.<br> '.
                     'There create a folder stories and load your pictures into it<span>';
                }
                else
                    echo $lists['image'];
                        ?>   
                    <?php echo $issetImage == 1 ? "</td></tr><tr><td>" : ' '; ?>
                <script language="javascript" type="text/javascript">
                    if (document.forms[0].image.options.value!=''){
                        jsimg='../images/stories/' + getSelectedValue( 'adminForm', 'image' );
                    } 
                    else 
                    {
                        jsimg='../images/M_images/blank.png';
                    }
                    document.write('<img src=' + jsimg + 
                      ' name="imagelib" width="80" height="80" border="2" alt="<?php echo _CATEGORIES__IMAGEPREVIEW; ?>" />');
                </script>
                </td>
                </tr>
                <tr>
                    <td width="185"><?php echo _CATEGORIES_HEADER_IMAGEPOS; ?>:</td>
                    <td><?php echo $lists['image_position']; ?></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _HEADER_PUBLISHED; ?>:</td>
                    <td><?php echo $lists['published']; ?></td>
                </tr>

            </table>

            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="section" value="categories" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
            <input type="hidden" name="redirect" value="<?php echo $redirect; ?>" />
        </form>
        <?php
    }

}

/**
 * realestatemanager Import Export Class
 * Handles the import and export of data from the realestatemanager.
 */
class HTML_realestatemanager {

    static function edit_review($option, $house_id, $review) {
        global $my, $mosConfig_live_site, $mainframe, $doc,$app;
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_SHOW_REVIEW_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
            <table cellpadding="4" cellspacing="5" border="0" width="100%" class="adminform form_03">
                <tr>
                    <td colspan="2"><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_TITLE; ?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="inputbox" type="text" name="title" size="80"
                         value="<?php echo $review[0]->title ?>" />
                    </td>
                </tr>
                <tr>
                    <td><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT; ?></td>
                    <td align="left" ><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_RATING; ?></td>
                </tr>
                <tr>
                    <td>
                        <?php
                        editorArea('editor1', $review[0]->comment, 'comment', '410', '200', '60', '10');
                        ?>
                    </td>
                    <td width="102" align='left'>
                        <?php
                        $k = 0;
                        while ($k < 11) {
                            ?>
                            <input type="radio" name="rating" value="<?php echo $k; ?>" 
                                   <?php if ($k == $review[0]->rating) echo 'checked="checked"'; ?> alt="Rating" />

                            <img src="../components/com_realestatemanager/images/rating-<?php echo $k; ?>.png" 
                                 alt="<?php echo ($k) / 2; ?>" border="0" /><br />
                                 <?php
                                 $k++;
                             }
                             ?>
                    </td>
                </tr>
            </table>

            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="update_review" />
            <input type="hidden" name="house_id" value="<?php echo $house_id; ?>" />
            <input type="hidden" name="review_id" value="<?php echo $review[0]->id; ?>" />
        </form>
        <?php
    }

//*************   begin for manage reviews   ********************
    static function edit_manage_review($option, & $review) {
        global $my, $mosConfig_live_site, $mainframe, $doc,$app;
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
           '/administrator/components/com_realestatemanager/admin_realestatemanager.css');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_SHOW_REVIEW_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
            <table cellpadding="4" cellspacing="5" border="0" width="100%" class="adminform form_04">
                <tr>
                    <td colspan="2"><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_TITLE; ?></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="inputbox" type="text" name="title" size="80"
                         value="<?php echo $review[0]->title ?>" />
                    </td>
                </tr>
                <tr>
                    <td><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT; ?></td>
                    <td align="left" ><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_RATING; ?></td>
                </tr>
                <tr>
                    <td style="vertical-align: top;">
                     <!--<textarea align= "top" name="comment" id="comment" cols="60" rows="10"
                      style="width:400;height:100;"/></textarea>-->
                        <?php
                        editorArea('editor1', $review[0]->comment, 'comment', '410', '200', '60', '10');
                        ?>
                    </td>
                    <td width="25%" align='left'>
                        <?php
                        $k = 0;
                        while ($k < 11) {
                            ?>
                            <input type="radio" name="rating" value="<?php echo $k; ?>" 
                                   <?php if ($k == $review[0]->rating) echo 'checked="checked"'; ?> alt="Rating" />
                            <img src="../components/com_realestatemanager/images/rating-<?php echo $k; ?>.png" 
                                 alt="<?php echo ($k) / 2; ?>" border="0" /><br />
                                 <?php
                                 $k++;
                             }
                             ?>
                    </td>
                </tr>

            </table>

            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="update_edit_manage_review" />
            <input type="hidden" name="review_id" value="<?php echo $review[0]->id; ?>" />
        </form>
        <?php
    }

//***************   end for manage reviews   ********************//

    static function showRequestRentHouses($option, $rent_requests, $h_associated, $title_assoc, & $pageNav) {
        global $my, $mosConfig_live_site, $mainframe,$doc,$app;

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_REQUEST_RENT . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm" >
            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_02">
                <tr>
                    <th align = "center" width="5%"><input type="checkbox" name="toggle"
                     value="" onClick="rem_checkAll(this);" /></th>
                    <th align = "center" width="5%">#</th>
                    <th align = "center" class="title" width="10%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                    <th align = "center" class="title" width="10%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_COMMENT; ?></th>
                    <?php
                    if (version_compare(JVERSION, "3.0.0", "ge")) {
                        ?>
                        <th>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                                <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </th>
                    <?php } ?>
                </tr>
                <?php
                for ($i = 0, $n = count($rent_requests); $i < $n; $i++) {
                    $row = $rent_requests[$i];
                    
                    $assoc_title = '';
                    if($title_assoc){
                        for ($t = 0, $z = count($title_assoc); $t < $z; $t++) {
                           if($title_assoc[$t]->htitle != $row->htitle) 
                           $assoc_title .= " ".$title_assoc[$t]->htitle; 
                        }
                    }
                    
                    ?>
                    <tr class="row<?php echo $i % 2; ?>">
                        <td width="20" align="center"><?php echo mosHTML::idBox($i, $row->id, 0, 'bid'); ?></td>
                        <td align = "center"><?php echo $row->id; ?></td>
                        <td align = "center"><?php echo $row->rent_from; ?></td>
                        <td align = "center"><?php echo $row->rent_until; ?></td>
                        <td align = "center"><?php echo $row->houseid; ?></td>
                        <td align = "center"><?php echo $row->htitle . " ( " . $assoc_title ." ) "; ?></td>
                        <td align = "center"><?php echo $row->user_name; ?></td>
                        <td align = "center">
                            <a href=mailto:"<?php echo $row->user_email; ?>">
                                <?php echo $row->user_email; ?>
                            </a>
                        </td>
                        <td align = "center"><?php echo $row->user_mailing; ?></td>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
                <tr><td colspan = "11"><?php //echo $pageNav->getListFooter(); 
                ?>
                </td></tr>
            </table>

            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="rent_requests" />
            <input type="hidden" name="boxchecked" value="0" />
        </form>

        <?php
    }

    static function showRequestBuyingHouses($option, $buy_requests, & $pageNav) {
        global $my, $mosConfig_live_site, $mainframe,$doc,$app;

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_SALE_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm" >

            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_03">
                <tr>
                    <th align = "center" width="5%">
                        <input type="checkbox" name="toggle" value="" onClick="rem_checkAll(this);" />
                    </th>
                    <th align = "center" width="5%">#</th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></th>
                    <th align = "center" class="title"  nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_COMMENT; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_BUYING_ADRES; ?></th>
                    <?php
                    if (version_compare(JVERSION, "3.0.0", "ge")) {
                        ?>
                        <th>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                                <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </th>
                    <?php } ?>
                </tr>
                <?php
                for ($i = 0, $n = count($buy_requests); $i < $n; $i++) {
                    $row = $buy_requests[$i];

                    ?>
                    <tr class="row<?php echo $i % 2; ?>">
                        <td width="20">
                                <?php
                                    echo mosHTML::idBox($i, $row->id, 0, 'bid');
                                    
                            ?>
                        </td>

                        <td align = "center"><?php echo $row->id; ?></td>
                        <td align = "center"><?php echo $row->fk_houseid; ?></td>
                        <td align = "center"><?php echo $row->hlocation; ?></td>
                        <td align = "center"><?php echo $row->customer_name; ?></td>
                        <td align = "center" widt="30%"><?php echo $row->customer_comment; ?></td>
                        <td align = "center">
                            <a href=mailto:"<?php echo $row->customer_email; ?>">
                                <?php echo $row->customer_email; ?>
                            </a>
                        </td>
                        <td align = "center"><?php echo $row->customer_phone; ?></td>
                        <td></td>
                    </tr>
                <?php } ?>
                   <tr><td colspan = "11"><?php echo $pageNav->getListFooter(); ?></td></tr>
            </table>
         
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="buying_requests" />
            <input type="hidden" name="boxchecked" value="0" />
        </form>
        <?php
    }

    static function showHouses($option, $rows_house, & $clist, &$language, & $rentlist,
           & $publist, & $ownerlist, & $search, & $pageNav) {
        global $my, $mosConfig_live_site, $mainframe, $session, $doc, $app;
        global $templateDir; // for J 1.6

        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');

        $script_content = ''; // for J 1.6
        $script_content .= "function before_print_check() \n";
        $script_content .= " { \n";
        $script_content .= "  var add = document.getElementsByName('bid[]'); \n";
        $script_content .= "  var count=0;    \n";
        $script_content .= "  for(var i=0;i<add.length;i++) \n";
        $script_content .= "  { \n";
        $script_content .= "      if(add[i].checked) \n";
        $script_content .= "        { \n";
        $script_content .= "         count++; \n";
        $script_content .= "         break; \n";
        $script_content .= "       } \n";
        $script_content .= "   } \n";
        $script_content .= "  if(count == 0) \n";
        $script_content .= "    {\n";
        $script_content .= "     alert('Please choose some houses'); \n";
        $script_content .= "     exit; \n";
        $script_content .= "    } \n";
        $script_content .= "  else \n";
        $script_content .= "   {\n";
        $script_content .= "    document.adminForm.target = '_blank' ; \n";
        $script_content .= "    document.adminForm.task.value='print_houses'; \n";
        $script_content .= "    document.adminForm.submit(); \n";
        $script_content .= "  }\n";
        $script_content .= "}\n";

        $doc->addScriptDeclaration($script_content);

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_SHOW . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm" >                    
            <table cellpadding="4" class="list_04">
                <tr>
                    <td><?php echo _REALESTATE_MANAGER_SHOW_SEARCH; ?></td>
                    <td>
                        <input type="text" name="search" value="<?php echo $search; ?>"
                         class="inputbox" onChange="document.adminForm.submit();" />
                    </td>
                    <td><?php echo $publist; ?></td>
                    <td><?php echo $rentlist; ?></td>
                    <td><?php echo $ownerlist; ?></td>
                    <td><?php echo $clist; ?></td>
                    <td><?php echo $language; ?></td>
                    <?php
                    if (version_compare(JVERSION, "3.0.0", "ge")) {
                        ?>
                        <td>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                                <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </td>
                    <?php } ?> 
                </tr>
            </table>

            <table cellpadding="4" class="table list_05">
                <tr>
                    <th width="20">
                        <input type="checkbox" name="toggle" value=""
                         onClick="rem_checkAll(this<?php //echo "";//echo count( $rows_house);   ?>);" />
                    </th>
                    <th width="30">ID</th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>                   
                    <th align = "center" class="title" width="27%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th align = "center" class="title" width="27%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?></th>
                    <th align = "center" class="title" width="16%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_OWNER; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_HITS; ?></th>		
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PUBLIC; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_APPROVED; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_CONTROL; ?></th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_LANGUAGE_NAME; ?></th>
                </tr>
                <?php 
                for ($i = 0, $n = count($rows_house); $i < $n; $i++) {
                    $row = $rows_house[$i];

                    ?>											
                    <tr class="row<?php echo $i % 2; ?>">

                        <td width="20" align="left">
                            <?php if ($row->checked_out && $row->checked_out != $my->id) {
                                ?>
                                &nbsp;
                                <?php
                            } else {
                                echo mosHTML::idBox($i, $row->id, ($row->checked_out 
                                  && $row->checked_out != $my->id), 'bid');
                            }
                            ?>
                        </td>
                        <td align = "center" ><?php echo $row->id; ?></td>
                        <td align = "center"><?php echo $row->houseid; ?></td>

                        <td align="left">
                            <?php
                            if ($row->checked_out && $row->checked_out != $my->id) {
                                echo $row->htitle . " [ <i>Checked Out</i> ]";
                            } else {
                                ?>
                                <a href="#edit" onClick="return listItemTask('cb<?php echo $i; ?>','edit')">
                                    <?php echo $row->htitle; ?>
                                </a>
                            <?php } ?>
                        </td>
                        <td align="left">
                            <?php
                            if ($row->checked_out && $row->checked_out != $my->id) {
                                echo $row->hlocation . " [ <i>Checked Out</i> ]";
                            } else {
                                ?>
                                <a href="#edit" onClick="return listItemTask('cb<?php echo $i; ?>','edit')">
                                    <?php echo $row->hlocation; ?>
                                </a>
                            <?php } ?>
                        </td>
                        <td align = "center"><?php echo $row->category; ?></td>
                        <td align = "center"><?php echo $row->editor; ?></td>
                        <td align = "center">
                            <?php
                            if ($row->listing_type == '1') {
                                if ($row->rent_from == null) {
                                    ?>
                                    <a href="javascript: void(0);"
                                     onClick="return listItemTask('cb<?php echo $i; ?>','rent')">
                                        <i class='fa fa-arrow-left'></i>
                                        <br />
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="javascript: void(0);"
                                     onClick="return listItemTask('cb<?php echo $i; ?>','rent_return')"> 
                                        <i class='fa fa-arrow-right'></i></a>
                                    <br />
                                    <?php ?>
                                    <?php
                                }
                            }
                            ?>
                        </td>
                        <td align = "center"><?php echo $row->hits; ?></td>
                        <?php
                        $task = $row->published ? 'unpublish' : 'publish';
                        $alt = $row->published ? 'Unpublish' : 'Publish';
                        $img = $row->published ? 'icon-16-allow.png' : 'publish_r.png';
                        $task1 = $row->approved ? 'unapprove' : 'approve';
                        $alt1 = $row->approved ? 'Unapproved' : 'Approved';
                        $img1 = $row->approved ? 'icon-16-allow.png' : 'publish_r.png';
                        ?>
                        <td width="5%" align="center">
                            <a href="javascript: void(0);"
                             onClick="return listItemTask('cb<?php echo $i; ?>','<?php echo $task; ?>')">
                                <?php
                                if (version_compare(JVERSION, "1.6.0", "lt")) {
                                    ?>
                                    <img src="<?php echo $mosConfig_live_site . "/administrator/images/" . $img; ?>"
                                     width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $templateDir . "/images/admin/" . $img; ?>"
                                     width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                }
                                ?>
                            </a>
                        </td>
                        <td width="5%" align="center">
                            <a href="javascript: void(0);"
                             onClick="return listItemTask('cb<?php echo $i; ?>','<?php echo $task1; ?>')">
                                <?php
                                if (version_compare(JVERSION, "1.6.0", "lt")) {
                                    ?>
                                    <img src="<?php echo $mosConfig_live_site . "/administrator/images/" . $img1; ?>"
                                     width="12" height="12" border="0" alt="<?php echo $alt1; ?>" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $templateDir . "/images/admin/" . $img1; ?>"
                                     width="12" height="12" border="0" alt="<?php echo $alt1; ?>" />
                                    <?php
                                }
                                ?>
                            </a>
                        </td>

                        <?php
                        if ($row->checked_out) {
                            ?>
                            <td align="center"><?php echo $row->editor1; ?></td>
                        <?php } else {
                            ?>
                            <td align="center">&nbsp;</td>
                        <?php } ?>
                            <td align = "center"><?php echo $row->language; ?></td>
                    </tr>
                    <?php
                }//end for
                ?>
                <tr><td colspan = "13"><?php echo $pageNav->getListFooter(); ?></td>
                </tr>
            </table>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="boxchecked" value= "0" />

        </form>
        <?php
    }

//**********   begin for manage reviews  *****************/
    static function showManageReviews($option, & $pageNav, & $reviews) {
        global $my, $mosConfig_live_site, $mainframe, $templateDir, $doc, $app;

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_SHOW_REVIEW_MANAGER . "</div>";
        $app = JFactory::getApplication();
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm" >
            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_06">
                <tr>
                    <th width="5%" align="center">
                        <input type="checkbox" name="toggle" value="" onClick="rem_checkAll(this);" />
                    </th>
                    <th align="center" width="5%">
                        <a href="#numer" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_numer');">#</a>
                    </th>

                    <th align="center" class="title" width="40%" nowrap="nowrap">
                        <a href="#house_location" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_house_location');"><?php
                          echo _REALESTATE_MANAGER_LABEL_TITLE_HOUSE; ?></a></th>

                    <th align="center" class="title" width="16%" nowrap="nowrap">
                        <a href="#title_catigory" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_title_catigory');"><?php
                          echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?></a></th>

                    <th align="center" class="title" width="10%" nowrap="nowrap">
                        <a href="#title_review" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_title_review');"><?php
                          echo _REALESTATE_MANAGER_LABEL_TITLE_REVIEW; ?></a></th>

                    <th align="center" class="title" width="7%" nowrap="nowrap">
                        <a href="#user_name" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_user_name');"><?php
                          echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></a></th>

                    <th align="center" class="title" width="8%" nowrap="nowrap">
                        <a href="#date" onClick="return listItemTask('cb<?php echo
                         "1"; ?>','sorting_manage_review_date');"><?php
                          echo _REALESTATE_MANAGER_REVIEW_DATE; ?></a></th>

                    <th align="center" class="title" width="7%" nowrap="nowrap">
                        <a href="#rating" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_rating');"><?php
                          echo _REALESTATE_MANAGER_LABEL_RATING; ?></a></th>

                    <th align="center" class="title" width="7%" nowrap="nowrap">
                        <a href="#published" onClick="return listItemTask('cb<?php
                         echo "1"; ?>','sorting_manage_review_published');"><?php
                          echo _REALESTATE_MANAGER_REVIEW_LABEL_PUBLISHED; ?></a></th>
                    <?php
                    if (version_compare(JVERSION, "3.0.0", "ge")) {
                        ?>
                        <th>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                                <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </th>
                    <?php } ?>
                </tr>
                <?php
                for ($i = 0; $i < count($reviews); $i++) {
                    $row = $reviews[$i];
                    ?>
                    <tr class="row<?php echo $i % 2; ?>">
                        <td width="20" align="center">
                            <input type="checkbox" id="cb<?php echo $i; ?>" name="bid[]"
                             value="<?php echo $row->review_id; ?>" onClick="Joomla.isChecked(this.checked);" />
                        </td>
                        <td align="center" width="30"><?php echo $reviews[$i]->review_id; ?></td>
                        <td align="center" width="25%"><?php echo $reviews[$i]->house_location; ?></td>
                        <td align="center" width="16%"><?php echo $reviews[$i]->title_catigory; ?></td>
                        <td align="center" width="25%">
                            <a href="#edit" onClick="return listItemTask('cb<?php echo $i; ?>','edit_manage_review');">
                                <?php
                                if (strlen($reviews[$i]->title_review) > 55) {
                                    for ($j = 0; $j < 55; $j++) {
                                        echo $reviews[$i]->title_review[$j];
                                    }
                                } else {
                                    echo $reviews[$i]->title_review;
                                }
                                ?>
                            </a>
                        </td>
                        <td align="center" width="7%"><?php echo $reviews[$i]->user_name; ?></td>
                        <td align="center" width="8%"><?php echo $reviews[$i]->date; ?></td>
                        <td align="center" width="7%">
                            <div><img src="../components/com_realestatemanager/images/rating-<?php
                             echo $reviews[$i]->rating; ?>.png" alt="<?php echo
                              ($reviews[$i]->rating) / 2; ?>" border="0" align="right"/>&nbsp;</div>
                        </td>
                        <td align="center" width="7%">
                            <?php
                            $task = $reviews[$i]->published ? 'unpublish_manage_review' : 'publish_manage_review';
                            $alt = $reviews[$i]->published ? 'Unpublish' : 'Publish';
                            $img = $reviews[$i]->published ? 'icon-16-allow.png' : 'publish_r.png';
                            ?>
                            <a href="javascript: void(0);" onClick="return listItemTask('cb<?php
                             echo $i; ?>','<?php echo $task; ?>')">
                                <?php
                                if (version_compare(JVERSION, "1.6.0", "lt")) {
                                    ?>
                                    <img src="<?php echo $mosConfig_live_site . "/administrator/images/"
                                     . $img; ?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $templateDir . "/images/admin/"
                                     . $img; ?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                }
                                ?>
                            </a>

                        </td>
                        <td></td>
                    </tr>
                    <?php
                }//end for(...)
                ?>
                <tr><td colspan = "11"><?php echo $pageNav->getListFooter(); ?></td></tr>
            </table>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="manage_review" />
            <input type="hidden" name="boxchecked" value="0" />
        </form>

        <?php
    }

//*****************   end for manage reviews   ****************************************/
//***************   begin add for button print in Manager Houses   ********************/
    static function showPrintHouses($rows) {
        global $my, $mosConfig_live_site, $mainframe, $doc;
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
        global $mosConfig_live_site;
        ?>
        <html>
            <head>
                <title>
                </title>
            </head>
            <body>
                <form name="Print" action="<?php
                 echo $mosConfig_live_site; ?>/administrator/index.php?option=com_realestatemanager&task=print_item"
                  method="post" target="_top">
                    <div align="left">
                        <?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FONT_SIZE; ?>:
                        <select name="font_size" title="Select size font!">
                            <option value="1">1
                            <option value="2">2
                            <option value="3">3
                            <option value="4">4
                            <option value="5">5
                            <option value="6">6
                            <option value="7">7
                            <option value="8" selected >8
                            <option value="9">9
                            <option value="10">10
                            <option value="11">11
                            <option value="12">12
                            <option value="13">13
                            <option value="14">14
                            <option value="15">15
                            <option value="16">16
                            <option value="17">17
                            <option value="18">18
                        </select>
                        <br /><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FORMAT; ?>:<br />
                        <input type="hidden" name="format_w_h" value="verticall" title="Checked format!" checked />

                        <select name="format" title="Select size font!">
                            <option value="A5">A5&nbsp;(148x210&nbsp;mm)
                            <option value="A4" selected >A4&nbsp;(210x297&nbsp;mm)
                            <option value="A3">A3&nbsp;(297x420&nbsp;mm)
                            <option value="Letter">Letter&nbsp;(8,5x11&nbsp;inch)
                            <option value="Legal">Legal&nbsp;(8,5x14&nbsp;inch)
                            <option value="Tabloid">Tabloid&nbsp;(11x17&nbsp;inch)
                            <option value="Executive">Executive&nbsp;(7,5x10&nbsp;inch)
                        </select>
                        <p>
                            <?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_SELECT; ?>
                            <br />
                            <input type="submit" value="Next" title="Next step for print!"/>
                        </p>
                    </div>

                    <table cellpadding="4" cellspacing="0" border="1px" style="width:180mm" class="table list_07">
                        <tr bgcolor="#d0d0d0">
                            <td width="5%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_id" value="1" title="Select for print!" checked />
                            </td>
                            <td width="5%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_houseid" value="1" title="Select for print!" checked />
                            </td>
                            <td width="20%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_title" value="1" title="Select for print!" checked />
                            </td>
                            <td width="10%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_category" value="1" title="Select for print!" checked />
                            </td>
                            <td width="10%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_rent_from" value="1" title="Select for print!" checked/>
                            </td>
                            <td width="10%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_rent_until" value="1" title="Select for print!" checked/>
                            </td>
                            <td width="10%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_user_name" value="1" title="Select for print!" checked />
                            </td>
                            <td width="10%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_user_email" value="1" title="Select for print!" checked/>
                            </td>
                            <td width="10%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_user_mailing" value="1" title="Select for print!" checked />
                            </td>
                            <td width="5%" nowrap="nowrap" align="center"><?php echo _REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT; ?>
                                <input type="checkbox" name="print_hits" value="1" title="Select for print!" checked />
                            </td>
                        </tr>
                        <tr bgcolor="#d0d0d0">
                            <th width="5%">#</th>
                            <th width="5%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                            <th width="20%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?></th>
                            <th width="10%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?></th>
                            <th width="10%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                            <th width="10%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                            <th width="10%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></th>
                            <th width="10%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL; ?></th>
                            <th width="10%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_ADRES; ?></th>
                            <th width="5%" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_HITS; ?></th>
                        </tr>

                        <?php for ($i = 0; $i < count($rows); $i++) { ?>
                            <tr bgcolor="#<?php
                if (($i % 2) != 1) {
                    echo "efefef";
                } else {
                    echo "ffffff";
                }
                            ?>" >
                                <td width="5%"><?php echo wordwrap($rows[$i]->id, 6, "<br />\n", 1); ?></td>
                                <td width="5%" nowrap="nowrap"><?php
                                 echo wordwrap($rows[$i]->houseid, 6, "<br />\n", 1); ?></td>
                                <td width="20%" nowrap="nowrap"><?php
                                 echo wordwrap($rows[$i]->hlocation, 20, "<br />\n", 1); ?></td>
                                <td width="10%" nowrap="nowrap"><?php
                                 echo wordwrap($rows[$i]->category, 10, "<br />\n", 1); ?></td>
                                <td width="10%" nowrap="nowrap">
                                    <?php
                                    if (isset($rows[$i]->rent_from)) {
                                        for ($j = 0; $j < 10; $j++) {
                                            echo $rows[$i]->rent_from[$j];
                                        }
                                    } else {
                                        echo "--";
                                    }
                                    ?>
                                </td>
                                <td width="10%" nowrap="nowrap">
                                    <?php
                                    if (isset($rows[$i]->rent_until)) {
                                        for ($j = 0; $j < 10; $j++) {
                                            echo $rows[$i]->rent_until[$j];
                                        }
                                    } else {
                                        echo "--";
                                    }
                                    ?>
                                </td>
                                <td width="10%" nowrap="nowrap">
                                    <?php
                                    if (isset($rows[$i]->user_name) && ($rows[$i]->user_name != "")) {
                                        echo wordwrap($rows[$i]->user_name, 10, "<br />\n", 1);
                                    } else {
                                        echo "--";
                                    }
                                    ?>
                                </td>
                                <td width="10%" nowrap="nowrap">
                                    <?php
                                    if (isset($rows[$i]->user_email) && ($rows[$i]->user_email != "")) {
                                        echo wordwrap($rows[$i]->user_email, 10, "<br />\n", 1);
                                    } else {
                                        echo "--";
                                    }
                                    ?>
                                </td>
                                <td width="10%" nowrap="nowrap">
                                    <?php
                                    if (isset($rows[$i]->user_mailing) && ($rows[$i]->user_mailing != "")) {
                                        echo wordwrap($rows[$i]->user_mailing, 10, "<br />\n", 1);
                                    } else {
                                        echo "--";
                                    }
                                    ?>
                                </td>
                                <td width="5%" nowrap="nowrap"><?php echo wordwrap($rows[$i]->hits, 6, "<br />\n", 1); ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </form>
            </body>
        </html>
        <?php
        @ session_start();
        $_SESSION['rows'] = $rows;
        exit();
    }

//end showPrintHouses($rows)
//*********************************************************************************/

    static function showPrintItem($rows) {
        global $my, $mosConfig_live_site, $mainframe, $doc;
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        ?>
        <html> 
            <head>  
                <title>
                </title>
                <style type="text/css">
                    .print_font_nik {
                        background-color: #ffffff;
                        font-size: <?php echo $_REQUEST['font_size']; ?>pt;
                        color: #000000;
                        font-family: Arial, Times, Helvetica, Zapf-Chancery, Western, Courier;
                    }
                </style>
                <script language="JavaScript" type="text/javascript">
                    function print_item_no_button() {
                        var el  = document.getElementById('print_button_off'); 
                        el.style.display = 'none';  
                        window.print();
                    }
                </script>
            </head>
            <body>
                <div align="left" id="print_button_off">
                    <p align="left">
                        <a href="#" onClick="javascript:print_item_no_button();" title="Print">
                            <img src="<?php echo $mosConfig_live_site;
                             ?>/administrator/components/com_realestatemanager/images/print.png"
                               alt="Print" name="Print" align="center" border="0" />
                        </a>
                    </p>
                </div>
                <?php
                $kol = 0;
                if (isset($_REQUEST['print_id']))
                    $kol++;
                if (isset($_REQUEST['print_houseid']))
                    $kol++;
                if (isset($_REQUEST['print_title']))
                    $kol++;
                if (isset($_REQUEST['print_category']))
                    $kol++;
                if (isset($_REQUEST['print_rent_from']))
                    $kol++;
                if (isset($_REQUEST['print_rent_until']))
                    $kol++;
                if (isset($_REQUEST['print_user_name']))
                    $kol++;
                if (isset($_REQUEST['print_user_email']))
                    $kol++;
                if (isset($_REQUEST['print_user_mailing']))
                    $kol++;
                if (isset($_REQUEST['print_hits']))
                    $kol++;

                if (($kol < 11) && (isset($_REQUEST['print_title']) == 0) && ($kol != 0))
                    $k = (int) (100 / $kol);
                if (($kol < 11) && (isset($_REQUEST['print_title'])) && ($kol != 0)) {
                    $k = (int) (100 / $kol);
                    if ($kol == 10) {
                        $k_tit = $k + 9;
                        $k -= 1;
                    }
                    if ($kol == 9) {
                        $k_tit = $k + 8;
                        $k -= 1;
                    }
                    if ($kol == 8) {
                        $k_tit = $k + 15;
                        $k -= 2;
                    }
                    if ($kol == 7) {
                        $k_tit = $k + 16;
                        $k -= 3;
                    }
                    if ($kol == 6) {
                        $k_tit = $k + 20;
                        $k -= 4;
                    }
                    if ($kol == 5) {
                        $k_tit = $k + 20;
                        $k -= 5;
                    }
                    if ($kol == 4) {
                        $k_tit = $k + 15;
                        $k -= 5;
                    }
                    if ($kol == 3) {
                        $k_tit = $k + 10;
                        $k -= 5;
                    }
                    if ($kol == 2) {
                        $k_tit = $k;
                    }
                }//end if

                if ($kol != 0) {
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'A5')) {
                        $width_tabl = 118;
                    }//138;}
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'A4')) {
                        $width_tabl = 180;
                    }//200;}
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'A3')) {
                        $width_tabl = 267;
                    }//287;}
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'Letter')) {
                        $width_tabl = 185;
                    }//205;}
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'Legal')) {
                        $width_tabl = 185;
                    }//205;}
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'Tabloid')) {
                        $width_tabl = 249;
                    }//269;}
                    if (($_REQUEST['format_w_h'] == 'verticall') && ($_REQUEST['format'] == 'Executive')) {
                        $width_tabl = 160;
                    }//180;}

                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'A5')) {
                        $width_tabl = 200;
                    }
                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'A4')) {
                        $width_tabl = 287;
                    }
                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'A3')) {
                        $width_tabl = 410;
                    }
                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'Letter')) {
                        $width_tabl = 269;
                    }
                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'Legal')) {
                        $width_tabl = 343;
                    }
                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'Tabloid')) {
                        $width_tabl = 421;
                    }
                    if (($_REQUEST['format_w_h'] == 'horizontall') && ($_REQUEST['format'] == 'Executive')) {
                        $width_tabl = 244;
                    }
                    ?>
                    <table cellpadding="4" cellspacing="0" border="1px" style="width:<?php
                     echo $width_tabl; ?>mm" class="print_font_nik">
                        <tr bgcolor="#d0d0d0">
                            <?php if (isset($_REQUEST['print_id'])) {
                                ?>
                                <th width="<?php
                if (isset($k)) {
                    echo $k . "%";
                } else {
                    echo "5%";
                }
                                ?>">#</th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_houseid'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "5%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_title'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k_tit)) {
                        echo $k_tit . "%";
                    } else if (($kol == 1) && (isset($_REQUEST['print_title']))) {
                        echo "100%";
                    } else {
                        echo "20%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_category'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_rent_from'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_rent_until'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_user_name'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_user_email'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_user_mailing'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_ADRES; ?></th>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_hits'])) {
                                    ?>
                                <th width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "5%";
                    }
                                    ?>" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_HITS; ?></th>
                                <?php } ?>
                        </tr>
                        <?php for ($i = 0; $i < count($rows); $i++) {
                            ?>
                            <tr bgcolor="#<?php
                if (($i % 2) != 1) {
                    echo "efefef";
                } else {
                    echo "ffffff";
                }
                            ?>" >
                                    <?php if (isset($_REQUEST['print_id'])) {
                                        ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "5%";
                    }
                                        ?>">
                                            <?php
                                            if (isset($k)) {
                                                $symbol = $k;
                                            } else {
                                                $symbol = 6;
                                            } echo wordwrap($rows[$i]->id, $symbol, "<br />\n", 1);
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_houseid'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "5%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($k)) {
                                                $symbol = $k;
                                            } else {
                                                $symbol = 6;
                                            } echo wordwrap($rows[$i]->houseid, $symbol, "<br />\n", 1);
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_title'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k_tit)) {
                        echo $k_tit . "%";
                    } else if (($kol == 1) && (isset($_REQUEST['print_title']))) {
                        echo "100%";
                    } else {
                        echo "20%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($k_tit)) {
                                                $symbol = $k_tit;
                                            } else if (($kol == 1) && (isset($_REQUEST['print_title']))) {
                                                $symbol = $k;
                                            } else {
                                                $symbol = 20;
                                            }
                                            echo wordwrap($rows[$i]->hlocation, $symbol, "<br />\n", 1);
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_category'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($k)) {
                                                $symbol = $k;
                                            } else {
                                                $symbol = 10;
                                            } echo wordwrap($rows[$i]->category, $symbol, "<br />\n", 1);
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_rent_from'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($rows[$i]->rent_from)) {
                                                for ($j = 0; $j < 10; $j++) {
                                                    echo $rows[$i]->rent_from[$j];
                                                }
                                            } else {
                                                echo "--";
                                            }
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_rent_until'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($rows[$i]->rent_until)) {
                                                for ($j = 0; $j < 10; $j++) {
                                                    echo $rows[$i]->rent_until[$j];
                                                }
                                            } else {
                                                echo "--";
                                            }
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_user_name'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($rows[$i]->user_name) && ($rows[$i]->user_name != "")) {
                                                if (isset($k)) {
                                                    $symbol = $k;
                                                } else {
                                                    $symbol = 10;
                                                }
                                                echo wordwrap($rows[$i]->user_name, $symbol, "<br />\n", 1);
                                            } else {
                                                echo "--";
                                            }
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_user_email'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($rows[$i]->user_email) && ($rows[$i]->user_email != "")) {
                                                if (isset($k)) {
                                                    $symbol = $k;
                                                } else {
                                                    $symbol = 10;
                                                }
                                                echo wordwrap($rows[$i]->user_email, $symbol, "<br />\n", 1);
                                            } else {
                                                echo "--";
                                            }
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_user_mailing'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "10%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($rows[$i]->user_mailing) && ($rows[$i]->user_mailing != "")) {
                                                if (isset($k)) {
                                                    $symbol = $k;
                                                } else {
                                                    $symbol = 10;
                                                }
                                                echo wordwrap($rows[$i]->user_mailing, $symbol, "<br />\n", 1);
                                            } else {
                                                echo "--";
                                            }
                                            ?>
                                    </td>
                                <?php } ?>
                                <?php if (isset($_REQUEST['print_hits'])) {
                                    ?>
                                    <td width="<?php
                    if (isset($k)) {
                        echo $k . "%";
                    } else {
                        echo "5%";
                    }
                                    ?>" nowrap="nowrap">
                                            <?php
                                            if (isset($k)) {
                                                $symbol = $k;
                                            } else {
                                                $symbol = 6;
                                            } echo wordwrap($rows[$i]->hits, $symbol, "<br />\n", 1);
                                            ?>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php }/* end for */ ?>

                    </table>
                    <?php
                }//end if($kol != 0)
                ?>

                </br>
                <!--<?php echo $mosConfig_live_site; ?>/administrator/index2.php?option=com_realestatemanager# -->
                <form name="back_print" action="javascript:history.back()" method="post" target="_top">
                    <input type="submit" value="Back" title="Select other items for printing" />
                </form>

            </body>
        </html>
        <?php
        exit();
    }

//end function showPrintItem()
//*************************************************************************************************
//********************   end add for button print in Manager Houses   *****************************
//*************************************************************************************************
/*
     * Writes the edit form for new and existing records
     *
     */
    static function editHouse(
        $option, 
        & $row,
        & $clist, 
        & $rating, 
        & $delete_edoc, 
        & $reviews,  
        & $listing_status_list, 
        & $property_type_list, 
        & $listing_type_list, 
        & $house_photo, 
        & $house_photos, 
        & $house_rent_sal, 
        & $house_feature, 
        & $currency, 
        & $languages, 
        & $extra_list,
         $currency_spacial_price,
          $associateArray) {

        global $realestatemanager_configuration;
        global $my, $mosConfig_live_site, $mainframe, $doc, $database, $app;
        
        if($realestatemanager_configuration['special_price']['show']){
            $switchTranslateDayNight = _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_DAY;       
        }else{
            $switchTranslateDayNight = _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_NIGHT;    
        }  
         
        $doc->addScript($mosConfig_live_site . 
          '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site . 
          '/administrator/components/com_realestatemanager/admin_realestatemanager.css');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
           _REALESTATE_MANAGER_SHOW . "</div>";
        $app->JComponentTitle = $html;
        $allowed_exts = explode(",", $realestatemanager_configuration['allowed_exts_img']);
        foreach ($allowed_exts as $key => $allowed_ext) {
            $allowed_exts[$key] = strtolower($allowed_ext);
        }
        $allowed_exts_file = explode(",", $realestatemanager_configuration['allowed_exts']);
        foreach ($allowed_exts_file as $key => $allowed_ext_file) {
            $allowed_exts_file[$key] = strtolower($allowed_ext_file);
        }
        ?>
        <script type="text/javascript" 
          src="<?php echo $mosConfig_live_site ?>/components/com_realestatemanager/includes/jquery-ui.js">
        </script>

        <script language="javascript" type="text/javascript">
            var availableExt = Array();
            var k=0;
            <?php foreach ($allowed_exts as $N_A){ ?>
                 availableExt[k]= '<?php echo $N_A; ?>';
                k++;
            <?php } ?>
            var availableExtFile = Array();
            var l=0;
            <?php foreach ($allowed_exts_file as $N_A_file){ ?>
                 availableExtFile[l]= '<?php echo $N_A_file; ?>';
                l++;
            <?php } ?>
            function findPosY(obj) {
                var curtop = 0;
                if (obj.offsetParent) {
                    while (1) {
                        curtop+=obj.offsetTop;
                        if (!obj.offsetParent) {
                            break;
                        }
                        obj=obj.offsetParent;
                    }
                } else if (obj.y) {
                    curtop+=obj.y;
                }
                return curtop-20;
            }
            function trim(string){
                return string.replace(/(^\s+)|(\s+$)/g, "");
            }
            function isValidNumber(str){
                myregexp = new RegExp("^[0-9]*$");
                mymatch = myregexp.exec(str);
                if(str == "")
                    return true;
                if(mymatch != null)
                    return true;
                return false;
            }
            function isValidPrice(str){
                myregexp = new RegExp("^[0-9]*\.{0,1}[0-9]*$");
                mymatch = myregexp.exec(str);
                if(str == "")
                    return true;
                if(mymatch != null)
                    return true;
                return false;
            }
            Joomla.submitbutton = function(pressbutton) {

                var form = document.adminForm;
               
                 if (pressbutton == 'save' || pressbutton == 'apply') {
                    var fileUrl = form.image_link.value,
                    parts, ext = ( parts = fileUrl.split("/").pop().split(".") ).length > 1 ? parts.pop() : "";
                     var fileUrl2 = form.edoc_file.value,
                    parts2, ext2 = ( parts2 = fileUrl2.split("/").pop().split(".") ).length > 1 ? parts2.pop() : "";
                    if (trim(form.houseid.value) == '') {
                        window.scrollTo(0,findPosY(document.getElementById('houseid')) - 100 );
                        document.getElementById('houseid').placeholder = "<?php
                         echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID_CHECK; ?>";
                        document.getElementById('houseid').style.borderColor = "#FF0000";
                        document.getElementById('houseid').style.color = "#FF0000";
                        return;
                    } else if (form.catid.value == 0) {
                        window.scrollTo(0,findPosY(document.getElementById('title_label')));
                        document.getElementById('alert_category').innerHTML = "<?php
                         echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY; ?>";
                        document.getElementById('alert_category').style.color = "#FF0000";
                        return;
                    } else if (form.htitle.value == ''){
                        window.scrollTo(0,findPosY(document.getElementById('title_label')));
                        document.getElementById('alert_title').placeholder = "<?php
                         echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_TITLE; ?>";
                        document.getElementById('alert_title').style.borderColor = "#FF0000";
                        document.getElementById('alert_title').style.color = "#FF0000";
                        return;
                    } else if (form.hlocation.value == ''){
                        window.scrollTo(0,findPosY(document.getElementById('hcountry')));
                        document.getElementById('hlocation').placeholder = "<?php
                         echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_ADDRESS; ?>";
                        document.getElementById('hlocation').style.borderColor = "#FF0000";
                        document.getElementById('hlocation').style.color = "#FF0000";
                        return;
                    } else if ( <?php echo(count($house_photo));?> < 2 && form.image_link.value == ''){
                        window.scrollTo(0,findPosY(document.getElementById('img_alert_scroll')));
                        document.getElementById('image_link_alert').innerHTML = "<?php
                         echo _REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD; ?>";
                        document.getElementById('image_link_alert').style.color = "#FF0000";
                        return;
                    } else if (form.image_link.value != '' && (jQuerREL.inArray(ext, availableExt) == -1)){
                      window.scrollTo(0,findPosY(document.getElementById('img_alert_scroll')));
                      document.getElementById('image_link_alert').innerHTML = "<?php
                       echo _REALESTATE_MANAGER_LABEL_PICTURE_FILE_NOT_ALLOWED; ?>";
                      document.getElementById('image_link_alert').style.color = "#FF0000";
                      return;
                   } else if (form.edoc_file.value != ''  &&  jQuerREL.inArray(ext2, availableExtFile) == -1){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('alert_edoc').innerHTML = "<?php echo "bad file ext"; ?>";
                        document.getElementById('alert_edoc').style.color = "#FF0000";
                        return;
                    } else if (form.price.value == '' || form.price.value == 0 || !isValidPrice(form.price.value)){
                        window.scrollTo(0,findPosY(document.getElementById('listing_alert_scroll')));
                        document.getElementById('price').placeholder = "<?php
                         echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_PRICE; ?>";
                        document.getElementById('price').style.borderColor = "red";
                        document.getElementById('price').style.color = "red";
                    return;
                    } else if (form.house_size.value == '' || !isValidNumber(form.house_size.value)){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('house_size').placeholder = "<?php
                         echo _REALESTATE_MANAGER_INFOTEXT_JS_BUILD_HOUSE_SIZE; ?>";
                        document.getElementById('house_size').style.borderColor = "#FF0000";
                        document.getElementById('house_size').style.color = "#FF0000";
                        return;
                    } else if (form.rooms.value == '' || !isValidNumber(form.rooms.value)){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('rooms').placeholder = "<?php
                         echo _REALESTATE_MANAGER_INFOTEXT_JS_ROOMS; ?>";
                        document.getElementById('rooms').style.borderColor = "#FF0000";
                        document.getElementById('rooms').style.color = "#FF0000";
                        return;
                    } else if (form.bedrooms.value == '' || !isValidNumber(form.bedrooms.value)){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('bedrooms').placeholder = "<?php
                         echo _REALESTATE_MANAGER_INFOTEXT_JS_BEDROOMS; ?>";
                        document.getElementById('bedrooms').style.borderColor = "#FF0000";
                        document.getElementById('bedrooms').style.color = "#FF0000";
                        return;
                    } else if (form.year.value == ''){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('alert_year').innerHTML = "<?php
                         echo _REALESTATE_MANAGER_INFOTEXT_JS_BUILD_YEAR; ?>";
                        document.getElementById('alert_year').style.color = "red";
                        return;
                    } else if (!isValidNumber(form.bathrooms.value)){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('bathrooms').style.color = "#FF0000";
                        return;
                    } else if (!isValidNumber(form.lot_size.value)){
                        window.scrollTo(0,findPosY(document.getElementById('hzipcode')));
                        document.getElementById('lot_size').style.color = "#FF0000";
                        return;
                    } else if (!isValidNumber(form.garages.value)){
                        window.scrollTo(0,findPosY(document.getElementById('rooms_alert')));
                        document.getElementById('garages').style.color = "#FF0000";
                        return;
                    } else if (!isValidNumber(form.featured_clicks.value)){
                        window.scrollTo(0,findPosY(document.getElementById('alert_advertisment')));
                        document.getElementById('featured_clicks').style.color = "#FF0000";
                        return;
                    } else if (!isValidNumber(form.featured_shows.value)){
                        window.scrollTo(0,findPosY(document.getElementById('alert_advertisment')));
                        document.getElementById('featured_shows').style.color = "#FF0000";
                        return;
                    } else {
                        submitform( pressbutton );
                    }
                } else {
                    submitform( pressbutton );
                }
            }
          
        </script>
        <script language="javascript" type="text/javascript">
          jQuerREL(document).ready(function () {
            jQuerREL('input,textarea').focus(function(){
              jQuerREL(this).data('placeholder',jQuerREL(this).attr('placeholder'))
              jQuerREL(this).attr('placeholder','')
              jQuerREL(this).css('color','#a3a3a3');
              jQuerREL(this).css('border-color','#ddd');
            });
            jQuerREL('input,textarea').blur(function(){
              jQuerREL(this).attr('placeholder',jQuerREL(this).data('placeholder'));
            });
          });
        </script>

        <form action="index.php" method="post" name="adminForm" 
          id="adminForm"  enctype="multipart/form-data" >

          <div class="rem_house_contacts" id="title_label">
            <div id="rem_house_titlebox">
                <?php echo _REALESTATE_MANAGER_LABEL_OVERVIEW; ?>
            </div>
            <div class="row_add_house" >
                <span><?php echo _REALESTATE_MANAGER_LABEL_TITLE; ?>:*</span>
                <div class="rem_house_input"><input id="alert_title" 
                class="inputbox" type="text" name="htitle" size="80" 
                value="<?php echo $row->htitle; ?>" />
                </div>            
            </div>
            <div class="row_add_house">
                <div id="alert_category"></div>
                <span><?php echo _REALESTATE_MANAGER_LABEL_CATEGORY; ?>:*</span>
                <div class="rem_house_input"><?php echo $clist; ?></div>
            </div>
           
            <div class="row_add_house">
                <span><?php echo _REALESTATE_MANAGER_LABEL_COMMENT; ?>:</span>
                <div class="rem_house_input">
                     <?php editorArea('editor1', $row->description, 'description', 200, 250, '20', '10'); ?>
                </div>
            </div>
            <div class="row_add_house">
                <span><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?>:*</span>
                <div class="rem_house_input">
                    <input class="inputbox" type="text" id="houseid" name="houseid"
                     size="20" maxlength="20" value="<?php echo $row->houseid; ?>" />
                    <input type="hidden" name="idtrue" id="idtrue" value="<?php echo $row->id_true; ?>"/>
                </div>
            </div>
          </div>
          <div class="rem_house_contacts" id="img_alert_scroll">
            <div id="rem_house_titlebox">
                <?php echo _REALESTATE_MANAGER_LABEL_PHOTOS; ?>
            </div>
            <div class="row_add_house">
              <div id="image_link_alert"></div>    
              <span><?php echo _REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD; ?>:*</span>
              <div class="rem_house_input">
                <input class="inputbox" type="file" name="image_link" 
                value="<?php echo $row->image_link; ?>" size="50" maxlength="250" />
              </div>
            </div>
            <div class="row_add_house">
          <?php 
              if ($house_photo != '') {
          ?>  
          <?php if(!$row->id_true){ ?>
                    <span><?php echo _REALESTATE_MANAGER_LABEL_SELECT_PHOTO_TO_REMOVE; ?>:</span>
          <?php }else{ ?>
                    <span>&nbsp</span>
          <?php } ?>
                      <div class="rem_house_input"> 
                      <?php if(!$row->id_true){ ?>
                          <img alt="photo" 
                            src="<?php echo $mosConfig_live_site . 
                              '/components/com_realestatemanager/photos/' .
                               $house_photo[1]; ?>"/>
                          <div style="text-align:center">
                            <input type="checkbox" name="del_main_photo" 
                              value="<?php echo $house_photo[0]; ?>" />
                          </div>
                       <?php } ?>
                      </div>
          <?php } else echo '<span>&nbsp</span>'; ?>
            </div> <!--class=row_add_house-->

            <div class="row_add_house">    
            <?php 
                count($house_photos);
                $user_group = userGID_REM($my->id);       
                $user_group_mas = explode(',', $user_group);
                $max_count_foto = 0;
                foreach ($user_group_mas as $value) {            
                    $count_foto_for_single_group =
                     $realestatemanager_configuration['user_manager_rem'][$value]['count_foto'];
                    if($count_foto_for_single_group>$max_count_foto){
                        $max_count_foto = $count_foto_for_single_group;
                    }            
                }
                $count_foto_for_single_group = $max_count_foto;
                ?>
                <span> <?php echo _REALESTATE_MANAGER_LABEL_OTHER_PICTURES_URL_UPLOAD; 
                  ?>:</span>
                <script language="javascript" type="text/javascript">
                    var photos=0;
                    function new_photos_rem(){
                        div= document.getElementById("items");
                        photos++;
                        var allowed_files = <?php echo $count_foto_for_single_group;?>;
                        if (<?php echo count($house_photos); ?> < allowed_files) {
                            newitem="<input type=\"file\" multiple='true' name=\"new_photo_file[]";
                            newitem+="\" value=\"\"size=\"45\"><br>";
                            newnode= document.createElement("span");
                            newnode.innerHTML=newitem;
                            div.appendChild(newnode);
                        }else{
                            newitem="<p> <?php echo _REALESTATE_MANAGER_MAX_PHOTOS_LIMIT; ?>: "+ 
                              <?php echo $count_foto_for_single_group;?> + " </p>"; 
                            newnode= document.createElement("span");
                            newnode.innerHTML=newitem;
                            div.appendChild(newnode);
                        }
                    }
                </script>

                <div ID="items" class="rem_house_input"> 
                    <script> new_photos_rem();</script> 
                </div>
            </div>
   
      <?php if (count($house_photos) != 0) {
      ?>
            <div class="row_add_house"> 
                <span><?php echo _REALESTATE_MANAGER_LABEL_SELECT_PHOTO_FROM_GALLERY; ?>:</span>
                <div class="rem_house_input">
                    <br>
                    <?php
                    for ($i = 0; $i < count($house_photos); $i++) {
                        ?>
                        <div class="del_photos rem_house_input" >
                          <img src="<?php echo $mosConfig_live_site .
                             "/components/com_realestatemanager/photos/" .
                              $house_photos[$i][1]; ?>" alt="no such file"/> &nbsp
                          <div style="text-align:center;">
                            <input type="checkbox" name="del_photos[]" 
                            value="<?php echo $house_photos[$i][0]; ?>" />
                          </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
      <?php } ?>

    </div>  
    
    <div id="listing_alert_scroll"></div> 
    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_LABEL_PRICING; ?>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_LISTING_TYPE; ?>:</span>
            <div class="rem_house_input"><?php echo $listing_type_list; ?></div>
        </div>
        <div class="row_add_house"> 
            <span><?php echo _REALESTATE_MANAGER_LABEL_LISTING_STATUS; ?>:</span>
            <div class="rem_house_input"><?php echo $listing_status_list; ?></div>
        </div>
        <div class="row_add_house"> 
            <span><?php echo _REALESTATE_MANAGER_LABEL_PRICE; ?>:*</span>
            <div class="rem_house_input">
                <input class="inputbox" type="text" id="price" name="price"
                 size="15" value="<?php echo $row->price; ?>" />&nbsp;
            </div>
            <div class="rem_house_input">
              <?php echo $currency;?>
            </div>
        </div>
        <div class="row_add_house">
          <div class="rem_specprice">
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading" id="rem_house_titlebox">
                  <a class="accordion-toggle" data-toggle="collapse" 
                    data-parent="#accordion2" href="#collapseTwo">
                    <?php echo _REALESTATE_MANAGER_RENT_ADD_SPECIAL_PRICE;  ?>
                  </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                <div class="specprice_col">
                    <div class="rem_house_input">
                        <?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM; ?>:<br />
                        <p><input type="text" id="price_from" name="price_from"></p>
                    </div>
                    <div class="rem_house_input">               
                          <?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL; 
                          ?>:<br />
                          <p><input type="text" id="price_to" name="price_to"></p>
                    </div>
                    <div id="sp_alert_scroll"></div> 
                    <p><?php echo _REALESTATE_MANAGER_LABEL_PRICE; ?><br/>
                    <input id="special_price" class="inputbox price" 
                      type="text" name="special_price" size="15" value="" />
                    </p>
                    <p><?php echo _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT;?>
                    <br /><textarea id="comment_price" rows="5" cols="25" 
                      name="comment_price"></textarea></p><br />
                    <p>
                    <input id="subPrice" class="inputbox" type="button" 
                      name="new_price" 
                      value="<?php echo _REALESTATE_MANAGER_RENT_ADD_SPECIAL_PRICE; ?>"/>
                    </p>
                </div>
                <div id ="message-here" style ='color: red; font-size: 18px;' ></div>
                <div id ='SpecialPriseBlock'>
                    <table class="adminlist_04">
                        <tr>
                            <th class="title" width ="20%"><?php 
                              echo $switchTranslateDayNight; ?></th>
                            <th class="title" width ="20%"><?php 
                              echo _REALESTATE_MANAGER_FROM; ?></th>
                            <th class="title" width ="20%"><?php 
                              echo _REALESTATE_MANAGER_TO; ?></th>
                            <th class="title" width ="25%"><?php 
                              echo _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT; ?></th>
                            <th class="title" width ="15%"><?php 
                              echo _REALESTATE_MANAGER_LABEL_CALENDAR_SELECT_DELETE; ?></th>
                        </tr>
              <?php
              for ($i = 0; $i < count($house_rent_sal); $i++) {
                $DateToFormat = str_replace("D",'d',
                  (str_replace("M",'m',(str_replace('%','',
                  $realestatemanager_configuration['date_format'])))));
                $date_from = new DateTime($house_rent_sal[$i]->price_from);
                $date_to = new DateTime($house_rent_sal[$i]->price_to);
              ?>
                        <tr>

              <?php
               
                if ($realestatemanager_configuration['sale_separator'] == '1') { ?>
                         <td align ='center'><?php 
                           echo formatMoney($house_rent_sal[$i]->special_price,
                             true, $realestatemanager_configuration['price_format']); ?>
                         </td>
              <?php   
                } else { ?>
                         <td align ='center'><?php 
                           echo $house_rent_sal[$i]->special_price; ?></td>
              <?php
                } ?>
             
                          <td align ='center'><?php echo date_format($date_from, "$DateToFormat"); ?></td>
                          <td align ='center'><?php echo date_format($date_to, "$DateToFormat"); ?></td>
                          <td align ='center'><?php echo $house_rent_sal[$i]->comment_price; ?></td>
                          <td align ='center'><input type="checkbox" name="del_rent_sal[]" 
                            value="<?php echo $house_rent_sal[$i]->id; ?>" /></td>                                      
                      </tr>
              <?php 
              } 
              ?>  
                    </table>
                   </div>                                                     
                 </div>
                </div>
               </div>
              </div>
            </div>
        </div>


      <script language="javascript" type="text/javascript">      
   
      jQuerREL(document).ready(function() {
        jQuerREL( "#price_from, #price_to" ).datepicker(
        {
            minDate: "+0",
            dateFormat: "<?php echo transforDateFromPhpToJquery();?>"
           
        });
      
        var form = document.adminForm;
        jQuerREL(" #subPrice ").bind(" click ", function( event ) { 
          var rent_from = jQuerREL("#price_from").val();
          var rent_to = jQuerREL("#price_to").val();
          var special_price = jQuerREL("#special_price").val();
          var comment_price = jQuerREL("#comment_price").val();
          var currency_spacial_price = "<?php echo $row->priceunit; ?>"; 
          var id = <?php echo (0 + $row->id);?> ;
          if(id && id > 0){
              if(isValidPrice(form.special_price.value)){
                  jQuerREL.ajax({
                      type: "POST",
                      url: "index.php?option=com_realestatemanager&task=ajax_rent_price&bid="+id+ 
                          "&rent_from="+rent_from+"&rent_until="+rent_to+
                          "&special_price="+special_price+"&comment_price="+comment_price+
                          "&currency_spacial_price="+currency_spacial_price,
                      data: { " #do " : " #1 " },
                      update: jQuerREL(" #SpecialPriseBlock "),
                      success: function( data ) {
                          jQuerREL("#SpecialPriseBlock").html(data);
                      }
                  });
              }else{
                      window.scrollTo(0,findPosY(document.getElementById('sp_alert_scroll')));
                      document.getElementById('special_price').placeholder = 
                        "<?php echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_PRICE; ?>";
                      document.getElementById('special_price').style.color = "red";
                      return;
                  }
          } else{
              alert("<?php echo _REALESTATE_MANAGER_TO_ADD_SPRICE_YOU_NEED; ?>");
          }
        });
      });  

      </script>

               
    </div>
    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_LABEL_AMENITIES; ?>
        </div>
        <div class="row_add_house">
                <?php
                for ($i = 0; $i < count($house_feature); $i++) {
                    if ($i != 0) {
                        if ($house_feature[$i]->categories !== $house_feature[$i - 1]->categories)
                            echo "<div class='house_categories'>" .
                             $house_feature[$i]->categories . "</div>";
                    } else
                        echo "<div class='house_categories'>" . 
                        $house_feature[$i]->categories . "</div>";
                    ?>         
                    <div class="checkbox_rel">
                        <input type="checkbox" <?php if ($house_feature[$i]->check) 
                          echo "checked"; ?> name="ffeature[]" 
                          value="<?php echo $house_feature[$i]->id; ?>" />
                        <?php echo $house_feature[$i]->name; ?>
                    </div>
                    <?php if ($house_feature[$i]->image_link != '') {
                        ?>       
                        <img alt="photo" src="<?php 
                          echo "$mosConfig_live_site/components/com_realestatemanager/featured_ico/" .
                           $house_feature[$i]->image_link; ?>" />      
                    <?php } ?>
                <?php } ?>
        </div>
    </div>

    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_TAB_LOCATION; ?>
        </div>
    <div class="rem_addlocation">
        <div class="row_add_house rem_house_input">
                <span><?php echo _REALESTATE_MANAGER_LABEL_COUNTRY; ?>:</span>
                <div class="rem_house_input"><input class="inputbox" 
                type="text" id="hcountry" name="hcountry" size="80" 
                value="<?php echo $row->hcountry; ?>" /></div>
        </div>
        <div class="row_add_house rem_house_input">
                <span><?php echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?>:*</span>
                <div class="rem_house_input"><input class="inputbox" 
                type="text" id="hlocation" name="hlocation" size="80" 
                value="<?php echo $row->hlocation; ?>" /></div>
        </div>
        <div class="row_add_house rem_house_input">
                <span><?php echo _REALESTATE_MANAGER_LABEL_REGION; ?>:</span>
                <div class="rem_house_input"><input class="inputbox" 
                type="text" id="hregion" name="hregion" size="80" 
                value="<?php echo $row->hregion; ?>" /></div>
        </div>
        <div class="row_add_house rem_house_input">
                <span><?php echo _REALESTATE_MANAGER_LABEL_CITY; ?>:</span>
                <div class="rem_house_input"><input class="inputbox" 
                type="text" id="hcity" name="hcity" size="80" 
                value="<?php echo $row->hcity; ?>" /></div>
        </div>
        <div class="row_add_house rem_house_input">
                <span><?php echo _REALESTATE_MANAGER_LABEL_ZIPCODE; ?>:</span>
                <div class="rem_house_input"><input class="inputbox" 
                type="text" id="hzipcode" name="hzipcode" size="80" 
                value="<?php echo $row->hzipcode; ?>" /></div>
        </div>
            <div class="row_add_house rem_house_input">
                <span style="visibility:hidden"><?php 
                echo _REALESTATE_MANAGER_LABEL_GEOCOOR; ?></span>
                <input type="button" value="<?php 
                  echo _REALESTATE_MANAGER_BUTTON_SHOW_ADDRESS; ?>" 
                  onclick="codeAddress()">
            </div>
        </div>
        <div class="rem_addlocation_map">
             <tr>
                    <td align="left"><input class="inputbox" type="text" 
                    id="hlatitude" style="display:none" name="hlatitude" 
                    size="20" value="<?php echo $row->hlatitude; ?>" readonly/></td>
                </tr>
                <tr>

                    <td align="left">
                        <input class="inputbox" type="text" id="hlongitude" 
                         style="display:none" name="hlongitude" size="20" 
                         value="<?php echo $row->hlongitude; ?>" readonly/>
                        <input type="hidden" id="map_zoom" name="map_zoom" 
                         value="<?php echo $row->map_zoom; ?>" />
                    </td>
                </tr>

            </table>
            <div id="map_canvas"></div>
            <!--Image google map-->
            <script src="http://maps.googleapis.com/maps/api/js?sensor=false" 
              type="text/javascript"></script>
            <script type="text/javascript">
                                            
                setTimeout(function() {
                    vm_initialize();
                },20);
                function vm_initialize(){
                    var map;
                    var lastmarker = null;
                    var marker = null;
                    var mapOptions;
                    var myOptions = {
                        zoom: <?php if ($row->map_zoom) echo $row->map_zoom;
                                    else echo 1; ?>,
                       center: new google.maps.LatLng(<?php if ($row->hlatitude) 
                         echo $row->hlatitude; else echo 0; ?>, 
                         <?php if ($row->hlongitude) echo $row->hlongitude; 
                         else echo 0; ?>),
                       scrollwheel: false,
                       zoomControlOptions: {
                           style: google.maps.ZoomControlStyle.LARGE
                       },
                       mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    geocoder = new google.maps.Geocoder();
                    var map = new google.maps.Map(document.getElementById("map_canvas"),
                       myOptions);
                    var bounds = new google.maps.LatLngBounds ();
                    <?php if ($row->hlatitude && $row->hlongitude) {
                        ?>
                                    //Set the marker coordinates
                                    var lastmarker = new google.maps.Marker({
                                        position: new google.maps.LatLng(<?php echo $row->hlatitude; ?>,
                                         <?php echo $row->hlongitude; ?>)
                                    });
                                    lastmarker.setMap(map);
                    <?php } ?>   
                    //If the zoom, then store it in the field map_zoom
                    google.maps.event.addListener(map,"zoom_changed", function(){
                        document.getElementById("map_zoom").value=map.getZoom();
                    });
                    google.maps.event.addListener(map,"click", function(e){
                        //Initialize marker
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(e.latLng.lat(),e.latLng.lng())
                        });
                        //Delete marker
                        if(lastmarker) lastmarker.setMap(null);;
                        //Add marker to the map
                        marker.setMap(map);
                        //Output marker information
                        document.getElementById("hlatitude").value=e.latLng.lat();
                        document.getElementById("hlongitude").value=e.latLng.lng();
                        //Memory marker to delete
                        lastmarker = marker;
                    });
                                                                      
                }

                function updateCoordinates(latlng)
                {
                    if(latlng) 
                    {
                        document.getElementById('hlatitude').value = latlng.lat();
                        document.getElementById('hlongitude').value = latlng.lng();
                        document.getElementById("map_zoom").value=map.getZoom();
                    }
                }

                function toggleBounce() {

                    if (marker.getAnimation() != null) {
                        marker.setAnimation(null);
                    } else {
                        marker.setAnimation(google.maps.Animation.BOUNCE);
                    }
                }

                function codeAddress() {
                    var marker;
                    myOptions = {
                        zoom:14,
                        scrollwheel: false,
                        zoomControlOptions: {
                            style: google.maps.ZoomControlStyle.LARGE
                        },
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
                    var address = document.getElementById('hlocation').value + " " 
                    + document.getElementById('hcountry').value+ " " + document.getElementById('hregion').value
                    + " " + document.getElementById('hcity').value+ " " + document.getElementById('hzipcode').value
                     + " " + document.getElementById('hlatitude').value + " " + document.getElementById('hlongitude').value;
                    geocoder.geocode( { 'address': address}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            map.setCenter(results[0].geometry.location);
                            updateCoordinates(results[0].geometry.location);
                            if (marker) marker.setMap(null);
                            marker = new google.maps.Marker({
                                map: map,
                                position: results[0].geometry.location,
                                draggable: true,
                                animation: google.maps.Animation.DROP
                            });
                            google.maps.event.addListener(marker, 'click', toggleBounce);
                            google.maps.event.addListener(marker, "dragend", function() {
                                updateCoordinates(marker.getPosition());
                            });

                        } else {
                            vm_initialize();
                            alert("Please check the accuracy of Address");
                        }
                    });
                }

            </script>
                <span>
                    <?php echo _REALESTATE_MANAGER_LABEL_CLICKMAP; ?>
                </span>
            <!--End google map.-->
        </div>
    </div>

    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _CATEGORIES__DETAILS; ?>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_PROPERTY_TYPE; ?>:</span>
            <div class="rem_house_input"><?php echo $property_type_list; ?></div>
        </div>
        <div class="row_add_house" id="rooms_alert">
            <span><?php echo _REALESTATE_MANAGER_LABEL_LOT_SIZE; ?>, <?php
             echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="text" id="lot_size"
             name="lot_size" size="30" value="<?php echo $row->lot_size; ?>" /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_HOUSE_SIZE; ?>, <?php
             echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX; ?>:*</span>
            <div class="rem_house_input"><input class="inputbox" type="text" id="house_size"
             name="house_size" size="30" value="<?php echo $row->house_size; ?>" /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_ROOMS; ?>:*</span>
            <div class="rem_house_input"><input class="inputbox" type="text" id="rooms"
             name="rooms" size="10" value="<?php echo $row->rooms; ?>" /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_BATHROOMS; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="text" id="bathrooms"
             name="bathrooms" size="10" value="<?php echo $row->bathrooms; ?>" /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_BEDROOMS; ?>:*</span>
            <div class="rem_house_input"><input class="inputbox" type="text" id="bedrooms"
             name="bedrooms" size="10" value="<?php echo $row->bedrooms; ?>" /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_GARAGES; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="text" id="garages"
             name="garages" size="30" value="<?php echo $row->garages; ?>" /></div>
        </div>
        <div class="row_add_house">
            <div id="alert_year"></div>
            <span><?php echo _REALESTATE_MANAGER_LABEL_BUILD_YEAR; ?>:*</span>
            <div class="rem_house_input">
                <select name="year" id="year" class="inputbox" size="1" >
                    <?php
                    print_r("<option value=''>");
                    print_r(_REALESTATE_MANAGER_OPTION_SELECT);
                    print_r("</option>");
                    $num = 1900;
                    for ($i = 0; $num <= date('Y'); $i++) {
                        print_r("<option value=\"");
                        print_r($num);
                        print_r("\"");
                        if ($num == $row->year) {
                            print(" selected= \"true\" ");
                        }
                        print_r(">");
                        print_r($num);
                        print_r("</option>");
                        $num++;
                    }
                    ?>
                </select>
            </div>
                            <?php
                $month = date("m", mktime(0, 0, 0, date('m'), 1, date('Y')));
                $year = date("Y", mktime(0, 0, 0, date('m'), 1, date('Y')));
                $placeholder = $realestatemanager_configuration['calendar']['placeholder'];
                ?>
        </div>
            <?php
    if ($realestatemanager_configuration['edocs']['allow']) {
        ?>  
        <div class="row_add_house">
            <div id="alert_edoc"></div>
            <span><?php echo _REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="file" id="edoc_file"
             name="edoc_file" value="" size="50" maxlength="250"
              onClick="document.adminForm.edok_link.value ='';"/></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_URL; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="text" name="edok_link"
             value="<?php echo $row->edok_link; ?>" size="50" maxlength="250"/></div>
        </div>
                <?php
                }
                if (strlen($row->edok_link) > 0 and !$row->id_true) {
                    ?>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_EDOCUMENT_DELETE; ?>:</span>
            <div class="rem_house_input"><?php echo $delete_edoc; ?></div>
        </div>
                            <?php
                }
                ?>
            <?php
            if ($realestatemanager_configuration['extra1'] == 0 
                && $realestatemanager_configuration['extra2'] == 0 
                && $realestatemanager_configuration['extra3'] == 0 
                && $realestatemanager_configuration['extra4'] == 0 
                && $realestatemanager_configuration['extra5'] == 0
                && $realestatemanager_configuration['extra6'] == 0 
                && $realestatemanager_configuration['extra7'] == 0 
                && $realestatemanager_configuration['extra8'] == 0 
                && $realestatemanager_configuration['extra9'] == 0 
                && $realestatemanager_configuration['extra10'] == 0) {
                
            } else {
                ?>
                
                    <?php if ($realestatemanager_configuration['extra1'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA1; ?>:</span>
                            <input class="inputbox" type="text" name="extra1" size="30" value="<?php echo $row->extra1; ?>" />
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra2'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA2; ?>:</span>
                            <input class="inputbox" type="text" name="extra2" size="30" value="<?php echo
                             $row->extra2; ?>" />
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra3'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA3; ?>:</span>
                            <input class="inputbox" type="text" name="extra3" size="30" value="<?php
                             echo $row->extra3; ?>" />
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra4'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA4; ?>:</span>
                            <input class="inputbox" type="text" name="extra4" size="30" value="<?php
                             echo $row->extra4; ?>" />
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra5'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA5; ?>:</span>
                            <input class="inputbox" type="text" name="extra5" size="30" value="<?php
                             echo $row->extra5; ?>" />
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra6'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA6; ?>:</span>
                            <span><?php echo $extra_list[0]; ?></span>
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra7'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA7; ?>:</span>
                            <span><?php echo $extra_list[1]; ?></span>
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra8'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA8; ?>:</span>
                            <span><?php echo $extra_list[2]; ?></span>
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra9'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA9; ?>:</span>
                            <span><?php echo $extra_list[3]; ?></span>
                        </div>
                        <?php
                    }
                    if ($realestatemanager_configuration['extra10'] == 1) {
                        ?>
                        <div class="row_add_house">
                            <span><?php echo _REALESTATE_MANAGER_LABEL_EXTRA10; ?>:</span>
                            <span><?php echo $extra_list[4]; ?></span>
                        </div>
                    <?php } ?>
    </div>
            <?php } ?>
    <div id="alert_advertisment"></div>
    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_HEADER_ADVERTISMENT; ?>
        </div>
            <div class="row_add_house">
                    <span><?php echo _REALESTATE_MANAGER_LABEL_FEATURED_CLICKS; ?>:</span>
                    <div class="rem_house_input"><input class="inputbox" type="text" id="featured_clicks"
                     name="featured_clicks" size="30" value="<?php echo $row->featured_clicks; ?>" /></div>
            </div>
            <div class="row_add_house">
                    <span><?php echo _REALESTATE_MANAGER_LABEL_FEATURED_SHOWS; ?>:</span>
                    <div class="rem_house_input"><input class="inputbox" type="text" id="featured_shows"
                     name="featured_shows" size="30" value="<?php echo $row->featured_shows; ?>" /></div>
            </div>
    </div>

    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_LABEL_AGENT_INFO; ?>
        </div> 
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_AGENT; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="text" name="agent" size="30"
             value="<?php echo $row->agent; ?>" /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_CONTACTS; ?>:</span>
            <div class="rem_house_input"><input class="inputbox" type="text" name="contacts" size="40"
             value="<?php echo $row->contacts; ?>"   /></div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_OWNER; ?>:</span>
            <div class="rem_house_input">
                    <?php if (trim($row->owneremail) != ""){ ?>
                    <?php echo $row->getOwnerUsername(); }?>
                    <?php if (trim($row->getOwnerUsername()) == ""){ ?>
                    <?php echo   $row->owneremail;} ?>
            </div>
        </div>
        <div class="row_add_house">
            <span><?php echo _REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL; ?>:*</span>
            <div class="rem_house_input">
             <?php if (trim($row->owneremail) != ""): ?>
                        <input type='text' name='owneremail' value="<?php echo $row->owneremail; ?>"/>
                    <?php else: ?>
                        <input type='text' name='owneremail' value="<?php echo $my->email; ?>"/>
                    <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_LABEL_LANGUAGE_NAME; ?>
        </div> 
            <div class="row_add_house">
                <span><?php echo _REALESTATE_MANAGER_LABEL_LANGUAGE; ?>:</span>
                <div class="rem_house_input"><?php echo $languages; ?></div>
            </div>
            <div class="row_add_house">
<?php
/****************************    language    ********************/
    
    if(!empty($associateArray) && !empty($row->language) && $row->language != '' && $row->language != '*'){
//        print_r($associateArray); exit;
?>
                <div><?php echo _REALESTATE_MANAGER_LANG_ASSOCIATE_HOUSES; ?>:</div>   
            
<?php
        $j =1;

        foreach ($associateArray as $lang=>$value) {
            $displ = '';
            if(!$value['list']){
                $displ = 'none';
            }
?>    
                <div style="display: <?php echo $displ?>">
                    <span><?php echo $lang; ?>:</span>
                    <span><?php echo $value['list']; ?> 
                    <input class="inputbox" id="associate_house" 
                      type="text" name="associate_house<?php echo $j;?>" 
                      size="20" readonly="readonly" maxlength="20" 
                      style="width:25px; margin-bottom: -4px;" 
                      value="<?php echo $value['assocId']; ?>" />
                    <input style="display: none" 
                      name="associate_house_lang<?php echo $j;?>" 
                      value="<?php echo $lang ?>"/>  
                    </span>                          
                </div>
<?php
        
        $j++;
        }
   }else{
?>
                    <span><?php echo _REALESTATE_MANAGER_LANG_ASSOCIATE_HOUSES; ?>:</span> 
                    <span><?php echo _REALESTATE_MANAGER_FOR_HOUSES_WITH_LANG;  ?> </span>

<?php
   }
/*********************************************************************************************/            
 ?>                        

            </div>

    </div>
                <?php
                if ($reviews > false) /* show, if review exist */ {
                    ?>
    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_LABEL_REVIEWS; ?>
        </div> 
            <div class="row_add_house">
                <table class="list_09">
                    <tr class="row0">
                        <th width="3%" valign="top" align="center"><div>#</div></th>
                        <th width="2%" valign="top" align="center"><div></div></th>
                        <th width="15%" valign="top" align="center"><?php
                         echo _REALESTATE_MANAGER_LABEL_REVIEW_TITLE; ?>:</th>
                        <th width="10%" valign="top" align="center"><?php echo
                         _REALESTATE_MANAGER_LABEL_RENT_USER; ?>:</th>
                        <th width="40%" valign="top" align="center"><?php echo
                         _REALESTATE_MANAGER_LABEL_REVIEW_COMMENT; ?>:</th>
                        <th width="15%" valign="top" align="center"><?php echo
                         _REALESTATE_MANAGER_REVIEW_DATE; ?>:</th>
                        <th width="15%" valign="top" align="center"><?php echo
                         _REALESTATE_MANAGER_LABEL_REVIEW_RATING; ?>:</th>
                    </tr>
                    <?php for ($i = 0, $nn = 1; $i < count($reviews); $i++, $nn++) /* if not one comment */ {
                        ?>
                        <tr class="row0">
                            <td valign="top" align="center"><div><?php echo $nn; ?></div></td>
                            <td valign="top" align="center"><div><?php echo "<input type='radio' id='cb" .
                             $i . "' name='bid[]' value='" . $row->id . "," . $reviews[$i]->id . "'
                              onClick='Joomla.isChecked(this.checked);' />"; ?></div></td>
                            <td valign="top" align="center"><div><?php
                             print_r($reviews[$i]->title); ?></div></td>
                            <td valign="top" align="center"><div><?php
                             print_r($reviews[$i]->user_name); ?></div></td>
                            <td valign="top" align="center"><div><?php
                             print_r(strip_tags($reviews[$i]->comment)); ?></div></td>
                            <td valign="top" align="center"><div><?php
                             print_r($reviews[$i]->date); ?></div></td>
                            <td valign="top" align="center"><div><img 
                              src="../components/com_realestatemanager/images/rating-<?php
                               echo $reviews[$i]->rating; ?>.png" alt="<?php
                                echo ($reviews[$i]->rating) / 2; ?>"
                                border="0" align="right"/>&nbsp;</div></td>
                        </tr>
                    <?php }/* end for(...) */ ?>
                </table>
            </div>
    </div>
    <?php }/* end if(...) */ ?>


            <!--____________________________________________________________________-->         


            <table cellpadding="4" cellspacing="1" border="0" width="100%" class="adminform form_15">


            <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
            <input type="hidden" name="owner_id" value="<?php echo $row->owner_id; ?>" />
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="boxchecked" value="0" />
            <input type="hidden" name="task" value="" />				
        </form>
        <script language="javascript" type="text/javascript"> 
            var task = "<?php echo $_REQUEST['task']; ?>";
            if(task === 'clon_rem'){
                if(sessionStorage.getItem('saver') !== 'null'){ 
                    sessionStorage.setItem('saver', 'null');
                    submitform( 'apply' );   
                }
                sessionStorage.setItem('saver', 'notnull');			
            }
          
        </script>
        <!--************************   end change review ***********************-->
        <?php
    }

    static function showImportExportHouses($params, $option) {
        global $my, $mosConfig_live_site, $mainframe, $doc, $app;
        
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_ADMIN_IMPEXP . "</div>";
        $app->JComponentTitle = $html;
        ?>

        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>


        <script language="javascript" type="text/javascript">
            function impch(){
                var a = document.getElementById('import_type').value;
                if(a == 4) document.getElementById('import_catid').disabled=true;
                else document.getElementById('import_catid').disabled=false;
            }
            function expch(){
                var a = document.getElementById('export_type').value;
                if(a == 4) document.getElementById('export_catid').disabled=true;
                else document.getElementById('export_catid').disabled=false;
            }
            function submitbutton(pressbutton) {
                var form = document.adminForm;
                if (pressbutton == 'import') {
                    if (form.import_type.value == '0') {
                        alert("<?PHP echo _REALESTATE_MANAGER_SHOW_IMPEXP_ERR1; ?>" );
                        return;
                    }
                    if (form.import_file.value == '' && form.import_type.value == '4') {
                        alert("<?PHP echo _REALESTATE_MANAGER_SHOW_IMPEXP_ERR3; ?>");
                        return;
                    }
                    if (form.import_catid.value == '' && form.import_type.value != '4' &&
                     form.import_type.value != '0') {
                        alert("<?PHP echo _REALESTATE_MANAGER_SHOW_IMPEXP_ERR2; ?>");
                        return;
                    }
                    if (form.import_catid.value != '' && form.import_file.value == '') {
                        alert("<?PHP echo _REALESTATE_MANAGER_SHOW_IMPEXP_ERR3; ?>");
                        return;
                    }
                    if ((form.import_type.value == '2') && (form.import_catid.value != '' &&
                     form.import_file.value != '')) {
                        submitform( pressbutton );
                    }
                    if ((form.import_type.value == '1') && (form.import_catid.value != '' &&
                     form.import_file.value != '')) {
                        submitform( pressbutton );
                    }
                    if (form.import_file.value != '' && form.import_type.value == '4') {
                        resultat_1 = confirm("<?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_CONF; ?>");
                        if (resultat_1) submitform( pressbutton );
                    }
                }
                if (pressbutton == 'export') {
                    if (form.export_type.value == '0') {
                        alert("<?PHP echo _REALESTATE_MANAGER_SHOW_IMPEXP_ERR4; ?>");
                        return;
                    }
                    if (form.export_type.value == '4') {
                        submitform( pressbutton );
                    }
                    if (form.export_type.value == '1') {
                        if (form.export_catid.value == '') {
                            alert("<?php echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY; ?>");
                            return;
                        }
                        submitform( pressbutton );
                    }
                    if (form.export_type.value == '2') {
                        if (form.export_catid.value == '') {
                            alert("<?php echo _REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY; ?>");
                            return;
                        }
                        submitform( pressbutton );
                    }
                }
            }//end function submitbutton(pressbutton)
        </script>

        <form action="index.php" method="post" name="adminForm"  id="adminForm"  enctype="multipart/form-data">
            <?php
            $tabs = new mosTabs(1);
            $tabs->startPane("impexPane");
            $tabs->startTab(_REALESTATE_MANAGER_ADMIN_IMP, "impexPane");
            ?>
            <table class="adminform form_38">
                <!--*   begin add Warning in 'Import' for 'CSV', 'XML', 'MySQL tables import'  -->
                <tr>
                    <td colspan="3"><?php echo _REALESTATE_MANAGER_SHOW_IMPORT_WARNING_MESSAG; ?>
                        <hr />
                    </td>
                </tr>
                <!--*****   end add Warning in 'Import' for 'CSV', 'XML', 'MySQL tables import'   -->

                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_TYP; ?>:</span></td> <!-- Typ importu -->
                   <td><?php echo $params['import']['type']; ?></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_CATEGORY; ?>:</span></td> <!-- Kategoria -->
                    <td><?php echo $params['import']['category']; ?></td>         
                </tr>      
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_FILE; ?>:</span></td>   <!-- Plik do importu -->      
                    <td><input class="inputbox" type="file" name="import_file" value="" size="50" maxlength="250" /></td>         
                </tr>
            </table>
            <?php
            $tabs->endTab();
            $tabs->startTab(_REALESTATE_MANAGER_ADMIN_EXP, "impexPane");
            ?>

            <table class="adminform form_16">
                <!--******************************************************************************************-->
                <!--*******   begin add Warning in 'Export' for 'CSV', 'XML', 'MySQL tables import'   ********-->
                <!--******************************************************************************************-->
                <tr>
                    <td colspan="3"><?php echo _REALESTATE_MANAGER_SHOW_EXPORT_WARNING_MESSAG; ?>
                        <hr />
                    </td>
                </tr>
                <!--******************************************************************************************-->
                <!--********   end add Warning in 'Export' for 'CSV', 'XML', 'MySQL tables import'   *********-->
                <!--******************************************************************************************-->
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_TYP; ?>:</span></td>
                    <td><?php echo $params['export']['type']; ?></td>
                </tr>               
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_CATEGORY; ?>:</span></td>
                    <td><?php echo $params['export']['category']; ?></td>         
                </tr>
            </table>

            <?php
            $tabs->endTab();
            $tabs->endPane();
            ?>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="" />
        </form>
        <?php
    }

    static function showRentHouses($option, $house1, $rows, & $userlist, $type) {

        global $my, $mosConfig_live_site, $mainframe, $doc, $css, $app;
        $doc->addStyleSheet($mosConfig_live_site . 
          '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site . 
          '/components/com_realestatemanager/includes/functions.js');
          
        ?>
        <script type="text/javascript" 
          src="<?php echo $mosConfig_live_site ?>/components/com_realestatemanager/includes/jquery-ui.js">
        </script>
        <?php

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_REQUEST_RENT . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="adminform form_17">
                <tr>
                    <td width="100%" class="house_manager_caption"  >
                        <?php
                        if ($type == "rent") {
                            echo _REALESTATE_MANAGER_SHOW_RENT_HOUSES;
                        } else
                        if ($type == "rent_return") {
                            echo _REALESTATE_MANAGER_SHOW_RENT_RETURN;
                        } if ($type == "edit_rent") {
                            echo _REALESTATE_MANAGER_SHOW_RENT_EDIT;
                        } else {

                            echo "&nbsp;";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        <?php
        if ($type == "rent" or $type == "edit_rent") { ?>
             <!--//////////////////calendar////////////////////////////-->
          <script language="javascript" type="text/javascript">   
<?php
          $house_id_fordate =  $house1->id;
          $date_NA = available_dates($house_id_fordate);    
?>

          jQuerREL(document).ready(function() {
              var unavailableDates = Array();
              var k=0;
              <?php if(!empty($date_NA)){?>
                  <?php foreach ($date_NA as $N_A){ ?>
                       unavailableDates[k]= '<?php echo $N_A; ?>';
                      k++;
                  <?php } ?>
              <?php } ?>

              function unavailable(date) {
                  dmy = date.getFullYear() + "-" + ('0'+(date.getMonth() + 1)).slice(-2) + 
                    "-" + ('0'+date.getDate()).slice(-2);
                  if (jQuerREL.inArray(dmy, unavailableDates) == -1) {
                      return [true, ""];
                  } else {
                      return [false, "", "Unavailable"];
                  }
              }

              jQuerREL( "#rent_from, #rent_until" ).datepicker(
              {

                minDate: "+0",
                dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
                beforeShowDay: unavailable,
              
              });
          });
          </script>
<!--///////////////////////////////////////////////////////////////////////////-->
          
                <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table_form_01">
                    <tr>
                        <td align="center" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TO . ':'; ?></td>
                        <td align="center" nowrap="nowrap"><?php echo $userlist; ?></td>
                        <td align="center" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER . ':'; ?></td>
                        <td><input type="text" name="user_name" class="inputbox" /></td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL . ':'; ?></td>
                        <td><input type="text" name="user_email" class="inputbox" /></td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap"><?php echo "Rent from:"; ?></td>
                        <td><p><input type="text" id="rent_from" name="rent_from"></p></td>
                        <td align="left" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TIME . ':'; ?></td>
                        <td><p><input type="text" id="rent_until" name="rent_until"></p></td>
                        </tr>
                </table>
                <?php
                
            } else {
                ?>
                &nbsp;
                <?php
            }
            
            
            $all = JFactory::getDBO();

            $query = "SELECT * FROM #__rem_rent ";
            $all->setQuery($query);
            $num = $all->loadObjectList();
            ?>
            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_10">
                <tr>
                    <th width="20" align="center">
        <?php if ($type != 'rent') {
            ?> <input type="checkbox" name="toggle" value="" onClick="rem_checkAll(this);" />
        <?php } ?> </th>
                    <th align = "center" width="30">#</th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="25%" nowrap="nowrap"><?php echo
                     _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php echo
                     _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php echo
                     _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php echo
                     _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php echo
                     _REALESTATE_MANAGER_LABEL_RENT_TO; ?></th>
                </tr>

                <?php
                if ($type == "rent")
                {
                    ?>
                        <td align="center">  <input class="inputbox"  type="checkbox"  name="checkHouse"
                         id="checkHouse" size="0" maxlength="0" value="on" /></td>
                 <?php     
                } else if ($type == "edit_rent"){ ?>
                  <input type="hidden"  name="checkHouse" id="checkHouse" value="on" /></td>
                 <?php }
                $assoc_title = '';
                for ($t = 0, $z = count($rows); $t < $z; $t++) {
                  if($rows[$t]->id != $house1->id) $assoc_title .= " ".$rows[$t]->htitle; 
                }

                print_r("
                  <td align=\"center\">". $house1->id ."</td>
                  <td align=\"center\">" . $house1->houseid . "</td>
                  <td align=\"center\">" . $house1->htitle . " ( " . $assoc_title ." ) " . "</td>
                  <td align=\"center\">" . " " . "</td>
                  <td align=\"center\">" . " " . "</td>
                  <td align=\"center\">" . " " . "</td>
                  <td align=\"center\">" . " " . "</td> </tr>");

                print_r("
                  <td align=\"center\">--</td>
                  <td align=\"center\">--</td>
                  <td align=\"center\">" . "------------" . "</td>
                  <td align=\"center\">" . "-----------------" . "</td>
                  <td align=\"center\">" . " -------------" . "</td>
                  <td align=\"center\">" . " ---------" . "</td>
                  <td align=\"center\">" . " ---------------------" . "</td>
                  <td align=\"center\">" . "------------------" . "</td> </tr>");
             for ($j = 0, $n = count($rows); $j < $n; $j++) {
                    $row = $rows[$j];

                   
            ?>
                    </td>
                    <input class="inputbox" type="hidden"  name="houseid" id="houseid" size="0" maxlength="0"
                     value="<?php echo $house1->houseid; ?>" />
                    <input class="inputbox"  type="hidden"  name="id" id="id" size="0" maxlength="0"
                     value="<?php echo $row->id; ?>" />
                    <input class="inputbox"  type="hidden"  name="id2" id="id2" size="0" maxlength="0"
                     value="<?php echo $row->id; ?>" />
                    <?php
                    
                    $house = $row->id;
                    //$title = $row->htitle;
                    $data = JFactory::getDBO();
                    $query = "SELECT * FROM #__rem_rent WHERE fk_houseid=" . $house . " ORDER BY rent_return ";

                    $data->setQuery($query);
                    $allrent = $data->loadObjectList();
              
                    $num = 1;
                    for ($i = 0, $n2 = count($allrent); $i < $n2; $i++) {
                        if (!isset($allrent[$i]->rent_return) && $type != "rent"){
                      
                                ?>
                                <td align="center"><input type="checkbox"  id="cb<?php echo $i; ?>" 
                                  name="bid[]" value="<?php echo $allrent[$i]->id; ?>"
                                      onClick="isChecked(this.checked);" /></td>
                                <?php
                            } else {
                                ?>
                                <td align="center"></td>
                                <?php
                            }

                        print_r("
                          <td align=\"center\">" . $num . "</td>
                          <td align=\"center\">" . $row->houseid . "</td>
                          <td align=\"center\">" . $row->htitle . "</td>
                          <td align=\"center\">" . $allrent[$i]->rent_from . "</td>
                          <td align=\"center\">" . $allrent[$i]->rent_until . "</td>	
                          <td align=\"center\">" . $allrent[$i]->rent_return . "</td>	
                          <td align=\"center\">" . $allrent[$i]->user_name . ":  "
                           . $allrent[$i]->user_email . "</td> </tr>");
                        $num++;
                    }
                    ?>
        <?php } ?>
            </table>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="boxchecked" value="1" />
            <input type="hidden" name="save" value="1" />
        </form>
        <?php 
    }


static function editRentHouses($option, $house1, $rows, $title_assoc,
   & $userlist, & $all_assosiate_rent, $type) {
        global $my, $mosConfig_live_site, $mainframe, $doc, $css,$app;
        $doc->addStyleSheet($mosConfig_live_site . 
          '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site . 
          '/components/com_realestatemanager/includes/functions.js');
          
        ?>
        <script type="text/javascript" 
          src="<?php echo $mosConfig_live_site ?>/components/com_realestatemanager/includes/jquery-ui.js">
        </script>
        <?php

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " . 
          _REALESTATE_MANAGER_ADMIN_REQUEST_RENT . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <table cellpadding="4" cellspacing="0" border="0" 
              width="100%" class="adminform form_17">
                <tr>
                    <td width="100%" class="house_manager_caption"  >
                        <?php
                        if ($type == "rent") {
                            echo _REALESTATE_MANAGER_SHOW_RENT_HOUSES;
                        } else
                        if ($type == "rent_return") {
                            echo _REALESTATE_MANAGER_SHOW_RENT_RETURN;
                        } if ($type == "edit_rent") {
                            echo _REALESTATE_MANAGER_SHOW_RENT_EDIT;
                        } else {

                            echo "&nbsp;";
                        }
                        ?>
                    </td>
                </tr>
            </table>
        <?php
        if ($type == "rent" or $type == "edit_rent") { ?>
             <!--//////////////////calendar////////////////////////////-->
          <script language="javascript" type="text/javascript">   

          jQuerREL(document).ready(function() {

              jQuerREL( "#rent_from, #rent_until" ).datepicker(
              {

                dateFormat: "<?php echo transforDateFromPhpToJquery();?>",
              
              });
          });
          </script>
<!--///////////////////////////////////////////////////////////////////////////-->
            
                <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table_form_01">
                    <tr>
                        <td align="center" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TO . ':'; ?></td>
                        <td align="center" nowrap="nowrap"><?php echo $userlist; ?></td>
                        <td align="center" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_USER . ':'; ?></td>
                        <td><input type="text" name="user_name" class="inputbox" /></td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_EMAIL . ':'; ?></td>
                        <td><input type="text" name="user_email" class="inputbox" /></td>
                    </tr>
                    <tr>
                        <td align="left" nowrap="nowrap"><?php echo "Rent from:"; ?></td>
                        <td><p><input type="text" id="rent_from" name="rent_from"></p></td>
                        <td align="left" nowrap="nowrap"><?php echo _REALESTATE_MANAGER_LABEL_RENT_TIME . ':'; ?></td>
                        <td><p><input type="text" id="rent_until" name="rent_until"></p></td>
                        </tr>
                </table>
                <?php
                
            } else {
                ?>
                &nbsp;
                <?php
            }
            $all = JFactory::getDBO();

            $query = "SELECT * FROM #__rem_rent ";
            $all->setQuery($query);
            $num = $all->loadObjectList();
            ?>
            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_10">
                <tr>
                    <th width="20" align="center">
                    </th>
                    <th align = "center" width="30">#</th>
                    <th align = "center" class="title" width="5%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
                    <th align = "center" class="title" width="25%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_FROM; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_UNTIL; ?></th>
                    <th align = "center" class="title" width="20%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_RETURN; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_RENT_TO; ?></th>
                </tr>

                <?php
                 if ($type == "edit_rent"){ ?>
                  <input type="hidden"  name="checkHouse" id="checkHouse" value="on" /></td>
                
                 <?php
                 } 
                $assoc_title = ''; 
                for ($t = 0, $z = count($title_assoc); $t < $z; $t++) {
                  if($title_assoc[$t]->htitle != $house1->htitle) $assoc_title .= " ".$title_assoc[$t]->htitle; 
                }
                
                 //show rent history what we may change
                    ?>
                        &nbsp;
                <input class="inputbox" type="hidden"  name="houseid" id="houseid" size="0"
                 maxlength="0" value="<?php echo $house1->houseid; ?>" />
                <input class="inputbox"  type="hidden"  name="id" id="id" size="0" maxlength="0"
                 value="<?php echo $house1->id; ?>" />
                <input class="inputbox"  type="hidden"  name="id2" id="id2" size="0" maxlength="0"
                 value="<?php echo $house1->id; ?>" />   
            <?php       
                 $num = 1;
                    for ($i = 0, $n2 = count($all_assosiate_rent[0]); $i < $n2; $i++) {
                        $assoc_rent_ids = ''; 
                        for ($j = 0, $n3 = count($all_assosiate_rent); $j < $n3; $j++) {
                            if($assoc_rent_ids != "" ) $assoc_rent_ids .= ",".$all_assosiate_rent[$j][$i]->id; 
                            else $assoc_rent_ids = $all_assosiate_rent[$j][$i]->id; 
                        }         
                        ?>
                            <td align="center"><input type="checkbox"  id="cb<?php echo $i; ?>" name="bid[]" 
                              value="<?php echo $assoc_rent_ids; ?>" onClick="isChecked(this.checked);" /></td>
                        <?php  
                        print_r("
                          <td align=\"center\">" . $num . "</td>
                          <td align=\"center\"> </td>
                          <td align=\"center\">" . $house1->htitle . " ( " . $assoc_title ." ) " . "</td>
                          <td align=\"center\">" . $all_assosiate_rent[0][$i]->rent_from . "</td>
                          <td align=\"center\">" . $all_assosiate_rent[0][$i]->rent_until . "</td>    
                          <td align=\"center\">" . $all_assosiate_rent[0][$i]->rent_return . "</td>   
                          <td align=\"center\">" . $all_assosiate_rent[0][$i]->user_name . ":  "
                           . $all_assosiate_rent[0][$i]->user_email . "</td> </tr>");
                        $num++;
                    }
                    
                         print_r("
                          <td align=\"center\">--</td>
                          <td align=\"center\">--</td>
                          <td align=\"center\">" . "------------" . "</td>
                          <td align=\"center\">" . "-----------------" . "</td>
                          <td align=\"center\">" . " -------------" . "</td>
                          <td align=\"center\">" . " ---------" . "</td>
                          <td align=\"center\">" . " ---------------------" . "</td>
                          <td align=\"center\">" . "------------------" . "</td> </tr>");
                  
                   //show rent history what we can't change
                  for ($j = 0, $n = count($rows); $j < $n; $j++) {
                    $row = $rows[$j];
                    if($row->rent_return == "" ) continue ;
                   
                    $num = 1;              
                    ?>
                        &nbsp;
                        
                    </td>
                    <input class="inputbox" type="hidden"  name="houseid" id="houseid" size="0"
                     maxlength="0" value="<?php echo $row->houseid; ?>" />
                    <input class="inputbox"  type="hidden"  name="id" id="id" size="0"
                     maxlength="0" value="<?php echo $row->id; ?>" />
                    <input class="inputbox"  type="hidden"  name="id2" id="id2" size="0"
                     maxlength="0" value="<?php echo $row->id; ?>" />
                            <td align="center">
                            </td>
                        <?php
                        print_r("
                      <td align=\"center\">" . $num . "</td>
                      <td align=\"center\">" . $row->houseid . "</td>
                      <td align=\"center\">" . $row->htitle . "</td>
                      <td align=\"center\">" . $row->rent_from . "</td>
                      <td align=\"center\">" . $row->rent_until . "</td>
                      <td align=\"center\">" . $row->rent_return . "</td>
                      <td align=\"center\">" . $row->user_name . ":  " . $row->user_email . "</td> </tr>");
                        $num++;
                    ?>
            <?php } ?>
            </table>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="boxchecked" value="1" />
            <input type="hidden" name="save" value="1" />
        </form>
        <?php 
    }
    
    

    static function showConfiguration($lists, $option, $txt) {
        global $my, $mosConfig_live_site, $mainframe, $act, $task, 
          $realestatemanager_configuration, $doc, $app;

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');
        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_ADMIN_CONFIG . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
        <script>
            window.onload=function()
            {
                if (document.getElementById('money_select').options[
                      document.getElementById('money_select').selectedIndex].value == 'other') { 
                    document.getElementById('patt').type="text";
                    document.getElementById('patt').removeAttribute('readonly');
                }
            }
            function set_pricetype(sel) {
                var value = sel.options[sel.selectedIndex].value;
                if (value=="space") {
                    document.getElementById('patt').value="&nbsp;";

                }
                else if (value!="other") {
                    document.getElementById('patt').value=value;
                    document.getElementById('patt').setAttribute('readonly', true); 
                    document.getElementById('patt').type="hidden";
                } else
                {
                    document.getElementById('patt').value="";
                    document.getElementById('patt').type="text";
                    document.getElementById('patt').removeAttribute('readonly');
                }
            }
        </script>
        
    <script language="javascript" type="text/javascript">      
        jQuerREL(document).ready(function() {
           if (jQuerREL("[rel=tooltip]").length) {
     jQuerREL("[rel=tooltip]").tooltip();
     }
        });
    </script>
    

        <form action="index.php" method="post" name="adminForm" id="adminForm"> 
            <?php
            if (version_compare(JVERSION, "3.0.0", "ge")) {
                $options = Array();
                echo JHtml::_('tabs.start', 'configurePane', $options);
                echo JHtml::_('tabs.panel', JText::_(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_1),
                 'panel_1_configurePane');
            } else {
                $tabs = new mosTabs(7);
                $tabs->startPane("configurePane");
                $tabs->startTab(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_1, "panel_1_configurePane");
            }
            ?>
            <div style="clear: both;"></div>
               <h2><?php echo _REALESTATE_MANAGER_HOUSE_IMAGE_HEADER_SETTINGS; ?></h2>
            <table class="adminform form_18" border="0">
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE; ?>:</span></td>
                    <td><?php echo ($lists['fotomain']['width']) .
                     "  " . ($lists['fotomain']['high']); ?></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE; ?>:</span></td>
                    <td><?php echo ($lists['fotogallery']['width']) . "  "
                     . ($lists['fotogallery']['high']); ?></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_THUMBNAIL_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_HOUSE_THUMBNAIL_SETTINGS; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['thumb_param']['show']; ?></td>
                </tr>
            </table>
            <table class="adminform form_19" border="0">
                <!--********   begin ownershow   **************-->
                <tr>
                    <td colspan="6"><hr /></td>
                </tr>
                <tr>
                    <td>
                        <h2><?php echo _REALESTATE_MANAGER_TABS_MANAGER_HEADER_SETTINGS; ?></h2>
                    </td>
                </tr>
                <tr>
                    <td width="25%">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo  _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['reviews_tab']['show']; ?></td>
                    <td><?php echo $lists['reviews_tab']['registrationlevel']; ?></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo  _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['location_tab']['show']; ?></td>
                    <td><?php echo $lists['location_tab']['registrationlevel']; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><hr /></td>
                </tr>
            </table>
            <h2><?php echo _REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_FEATURE_LIST_SETTINGS; ?></h2>
            <table class="adminform form_21">      
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo  _REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['manager_feature_category']; ?><br></td>
                </tr>
<!--                 <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_HOUSE_PAGE_LAYOUT; ?>:</td>
                    <td colspan="2"><?php echo $lists['view_house']; ?></td>
                </tr> -->
                <tr>
                    <td colspan="6"><hr /></td>
                </tr>
            </table>
            <h2><?php echo _REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EXTRA_FIELDS_MANAGER; ?></h2>
            <table class="adminform form_22">
                <tr>
                    <td width="220">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_BODY; ?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA1_SHOW; ?>:</span></td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra1']; ?><br></td>
                </tr>                
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA2_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra2']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA3_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra3']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA4_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra4']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA5_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra5']; ?><br></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_BODY; ?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA6_SHOW; ?>:</span></td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra6']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA7_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra7']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA8_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra8']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA9_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra9']; ?><br></td>
                </tr>
                <tr>
                    <td width="185"><?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA10_SHOW; ?>:</td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['extra10']; ?><br></td>
                </tr>

            </table>
            <?php
            if (version_compare(JVERSION, "3.0.0", "ge")) {
                echo JHtml::_('tabs.panel', JText::_(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_2),
                 'panel_2_configurePane');
            } else {
                $tabs->endTab();
                $tabs->startTab(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_2, "panel_2_configurePane");
            }
            ?>
             <h2><?php echo _REALESTATE_MANAGER_HOUSE_IMAGE_HEADER_SETTINGS; ?></h2>
            <table class="adminform form_18" border="0">
                <!--
                //*********************************************************/
                //              begin add FotoSize
                //*********************************************************/
                -->
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE; ?>:</span></td>
                    <td><?php echo ($lists['foto']['width']) . "  " . ($lists['foto']['high']); ?></td>
                </tr>
                 <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE; ?>:</span></td>
                    <td><?php echo ($lists['fotocategory']['width']) . "  "
                     . ($lists['fotocategory']['high']); ?></td>
                </tr>
               </table>
                <!--
                //************************************************************/
                //              end add FotoSize
                //***********************************************************/
                -->
            <h2><?php echo _REALESTATE_MANAGER_SETTINGS_HEADER_CATEGORY_OPTIONS; ?></h2>
            <table class="adminform form_23">
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                       title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['location_map']; ?><br></td>
                </tr>
                
                <!--//********************************************************/
                //              begin add PageItems
                //************************************************************/
                -->                
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS; ?>:</span></td>
                    <td><?php echo $lists['page']['items']; ?></td>
                </tr>
                <!--******* end add PageItems ************ -->
                                <!--********   begin add for show in category picture   **************-->
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip"
                       title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_HEAD; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['cat_pic']['show']; ?></td>
                </tr>
                <!--***************   end add for show in category picture  *************-->

                <!--********   begin add for show subcategory   **************-->

                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['subcategory']['show']; ?></td>
                </tr>
                <!--***************   end add for show subcategory *************-->
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['search_option']['show']; ?></td>
                    <td><?php echo $lists['search_option']['registrationlevel']; ?></td>
                </tr>
                </table>
            <?php
            if (version_compare(JVERSION, "3.0.0", "ge")) {
                echo JHtml::_('tabs.panel', JText::_(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_4), 'panel_4_configurePane');
            } else {
                $tabs->endTab();
                $tabs->startTab(_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_4, "panel_4_configurePane");
            }
            ?>
            <div style="clear: both;"></div>
            <table class="adminform form_28"> 
                <tr>
                  <td><h2><?php echo _REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EDOCUMENT_OPTIONS; ?></h2> </td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['edocs']['allow']; ?><br></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION; ?>:</span></td>
                    <td><?php echo $lists['edocs']['location']; ?></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION; ?>:</span></td>
                    <td><?php echo $lists['photos']['location']; ?></td>
                </tr>
                </table>
                <table class="adminform form_28">
                <tr>
                    <td width="26%">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['edocs']['show']; ?></td>
                    <td><?php echo $lists['edocs']['registrationlevel']; ?></td>
                </tr>
                <tr>
                    <td  colspan="6"><hr /></td>
                </tr>
                </table>
                <h2><?php echo _REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_PRICE_OPTIONS; ?></h2> 
                <table class="adminform form_28">
                <tr>
                    <td width="31%">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW; ?>:</span></td>
                    <td width="37%" class="yesno"><?php echo $lists['price']['show']; ?></td>
                    <td><?php echo $lists['price']['registrationlevel']; ?></td> 
                </tr>
                </table>
                <table class="adminform form_28">
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_PRICE_FORMAT_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_PRICE_FORMAT; ?>:</span></td>
                    <td><?php echo $lists['money_ditlimer'] ?></td>
                    <td><input id="patt" type="hidden" readonly="true" value="<?php 
                      echo $realestatemanager_configuration['price_format'] ?>" name="patern" size="2"></td>
                </tr>
                <tr>
                    <td width="210">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_HEAD;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['sale_separator']; ?><br></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['currency']; ?></td>
                </tr>
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_PRICE_UNIT_SHOW_INFO;?>'>
                    <?php echo _REALESTATE_PRICE_UNIT_SHOW; ?>:</span></td>
                    <td width="20"><?php echo $lists['price_unit_show'] ?></td>
                </tr>
                <tr>
                    <td width="745px" colspan="6"><hr /></td>
                </tr>
                </table>
                <h2><?php echo _REALESTATE_MANAGER_SETTINGS_HEADER_DATE_TIME_OPTIONS; ?></h2>
                <table class="adminform form_28">
                <tr rowspan="2">
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_DATE_FORMAT_INFO." ("._REALESTATE_MANAGER_DATE .")";?>'>
                    <?php echo _REALESTATE_MANAGER_DATE_TIME_FORMAT; ?>:</span></td>
                   <td width="185"><?php echo $lists['date_format'] ?> </td>
                </tr>
                <tr>
                    <td width="185"></td>
                    <td width="185"><?php echo $lists['datetime_format'] ?></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td width="745px" colspan="6"><hr /></td>
                </tr>
            </table>
            <h2><?php echo _REALESTATE_MANAGER_SETTINGS_COMMON_SETTINGS; ?></h2>
            <table class="adminform form_29">
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['rentstatus']['show']; ?></td>
                    <td><?php echo $lists['rentrequest']['registrationlevel']; ?></td>
                </tr>      
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                     title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['buystatus']['show']; ?></td>
                    <td><?php echo $lists['buyrequest']['registrationlevel']; ?></td>
                </tr> 
                <!-- __REVIEW__ -->
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top" data-toggle="tooltip" 
                      title='<?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['reviews']['show']; ?></td>
                    <td><?php echo $lists['reviews']['registrationlevel']; ?></td>         
                </tr>
                <!-- END__REVIEW__ --->
                <tr>
                    <td colspan="6"><hr /></td>
                </tr>
                <!--***************   end add update *************-->
                <!--********   begin add update  **************-->
            </table>
                <h2><?php echo _REALESTATE_MANAGER_SETTINGS_EXTENSIONS_SETTINGS; ?></h2>
                <table class="adminform form_29">
                <tr>
                    <td width="185">
                    <span class="tooltip_link" rel="tooltip" data-placement="top"
                     data-toggle="tooltip" title='<?php echo _REALESTATE_MANAGER_ALLOWED_EXT_DOC;?>'>
                    <?php echo _REALESTATE_MANAGER_LABEL_EDOCUMENT; ?>:</span></td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['allowed_exts']; ?></td>            
                </tr>
                <tr>
                    <td width="185">
                     <span class="tooltip_link" rel="tooltip" data-placement="top"
                      data-toggle="tooltip" title='<?php echo _REALESTATE_MANAGER_ALLOWED_EXT_IMAGES;?>'>
                    <?php echo _REALESTATE_MANAGER_IMAGES; ?>:</span></td>
                    <td width="20"></td>
                    <td class="yesno"><?php echo $lists['allowed_exts_img']; ?></td>            
                </tr>
                <tr>
                    <td colspan="6"><hr /></td>
                </tr>
                </table>
                <h2><?php echo _REALESTATE_MANAGER_SETTINGS_UPDATE_SETTINGS; ?></h2>
                <table class="adminform form_29">
                <!--********   begin add update  **************-->
                <tr>
                    <td width="220">
                    <span class="tooltip_link" rel="tooltip" data-placement="top"
                     data-toggle="tooltip" title='<?php echo _REALESTATE_MANAGER_ADMIN_UPDATE_TT_BODY;?>'>
                    <?php echo _REALESTATE_MANAGER_ADMIN_UPDATE; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['update']; ?></td>
                </tr>
                <tr>
                    <td colspan="6"><hr /></td>
                </tr>
            </table>
            <h2 id="special_price" ><?php echo _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_AND_RENT_TIME; ?></h2>
            <table class="adminform adminform_43">  
               <tr>
                    <td width="220">
                    <span class="tooltip_link" rel="tooltip" data-placement="top"
                     data-toggle="tooltip" title='<?php
                      echo _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO_HELP;?>'>
                    <?php echo _REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['special_price']['show']; ?></td>
                </tr>       
                                <!--***************   end add update *************-->
            </table>
            <?php
            if (version_compare(JVERSION, "3.0.0", "ge")) {
                echo JHtml::_('tabs.end');
            } else {
                $tabs->endTab();
                $tabs->endPane();
            }
            ?>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="config_save" />
        </form>
        <?php
    
        
    }

//------------------------------------------------------------------
    static function about() {

        global $mosConfig_live_site, $mainframe, $doc, $app;
        $tabs = new mosTabs(0);

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_ABOUT . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <?php
            $tabs->startPane("aboutPane");
            $tabs->startTab(_REALESTATE_MANAGER_ADMIN_ABOUT_ABOUT, "display-page");
            ?>
            <div style="clear: both;"></div>
            <table class="adminform form_31">
                <tr>
                    <td width="80%">
                        <h3><?PHP echo _REALESTATE_MANAGER__HTML_ABOUT; ?></h3>
        <?PHP echo _REALESTATE_MANAGER__HTML_ABOUT_INTRO; ?>
                    </td>
                    <td width="20%">
                        <img src="../components/com_realestatemanager/images/rem_logo.png"
                         align="right" alt="Real Estate Manager logo" />
                    </td>	         
                </tr>
            </table>
            <?php
            $tabs->endTab();
            //******************************   tab--2 about   **************************************
            $tabs->startTab(_REALESTATE_MANAGER_ADMIN_ABOUT_RELEASENOTE, "display-page");
            include_once("./components/com_realestatemanager/doc/releasenote.php");
            $tabs->endTab();
            //******************************   tab--3 about--changelog.txt   ***********************
            $tabs->startTab(_REALESTATE_MANAGER_ADMIN_ABOUT_CHANGELOG, "display-page");
            include_once("./components/com_realestatemanager/doc/changelog.html");
            $tabs->endTab();

            $tabs->endPane();
            ?>
        </form>
        <?php
    }

    static function showImportResult($table, $option) {
        global $my, $mosConfig_live_site, $mainframe, $doc, $app;
        
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_IMPEXP . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <table cellpadding='4' cellspacing='0' class="table form_32">
                <tr>
                    <th>#</th>
                    <th><?php echo _REALESTATE_MANAGER_LABEL_PROPERTYID; ?></th>
        <!--<td><?php echo _REALESTATE_MANAGER_LABEL_MLS; ?></td>-->
                    <th><?php echo _REALESTATE_MANAGER_LABEL_ADDRESS; ?></th>
                    <th><?php echo _REALESTATE_MANAGER_LABEL_TITLE; ?></th>
                    <th><?php echo _REALESTATE_MANAGER_LABEL_STATUS; ?></th>
                </tr>

        <?php 

        foreach ($table as $entry) {
            ?>
                    <tr>
                        <td><?php echo $entry[0] + 1; ?></td>
                        <td><?php echo $entry[1]; ?></td>
                        <td><?php echo $entry[2]; ?></td>
                        <td><?php echo $entry[3]; ?></td>
                  <!--       <td><?php echo $entry[4]; ?></td> -->
                        <td><?php echo $entry[5]; ?></td>
                    </tr>
            <?php
      }
        ?>
            </table>
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="cancel" />
        </form>	
        <?php
    }

    static function showExportResult($InformationArray, $option) {
        global $doc, $mosConfig_live_site,$app;
        
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_ADMIN_IMPEXP . "</div>";

        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
            <table border="0" class="adminheading" cellpadding="0" cellspacing="0" width="100%">
                <tr valign="middle">
                    <th class="config"><?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_RESULT; ?></th>
                    <td align="right"></td>
                </tr>
            </table>
            <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_DOWNLOAD; ?>  <br />
            <a href="<?php echo $InformationArray['urlBase'] . $InformationArray['out_file']; ?>"
             target="blank"><?php echo $InformationArray['urlBase'] . $InformationArray['out_file']; ?></a>
            <br />
        <?php echo _REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_REMEMBER; ?>  <br />  
            <input type="hidden" name="option" value="<?php echo $option; ?>" />
            <input type="hidden" name="task" value="cancel" />
        </form>	
        <?php
    }

    static function showLanguageManager($const_languages, $pageNav, $search) {
        global $my, $mosConfig_live_site, $mainframe, $templateDir, $doc, $app;
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>

        <form action="index.php" method="post" name="adminForm" id="adminForm">

            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_11">
                <tr>
                    <th></th>
                    <th><input type="text" placeholder="<?php
                     echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_CONST; ?>"
                      name="search_const" value="<?php echo $search['const']; ?>"
                       class="inputbox" onChange="document.adminForm.submit();" /></th>
                    <th><input type="text" placeholder="<?php
                     echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_VALUE_CONST; ?>"
                      name="search_const_value" value="<?php echo $search['const_value']; ?>"
                       class="inputbox" onChange="document.adminForm.submit();" /></th>
                    <th><?php echo $search['languages']; ?></th>
                    <th><?php echo $search['sys_type']; ?></th>
        <?php
        if (version_compare(JVERSION, "3.0.0", "ge")) {
            ?>
                        <th>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                        <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </th>
        <?php } ?>
                </tr>
                <tr>
                    <th width="5" align="center"></th>
                    <th align = "center" class="title" width="30%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_CONST; ?></th>
                    <th align = "center" class="title" width="30%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_VALUE_CONST; ?></th>
                    <th align = "center" class="title" width="10%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_LANGUAGE; ?></th>
                    <th align = "center" class="title" width="30%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SYS_TYPE; ?></th>
                </tr>
                <?php
                $i = 0;
                foreach ($const_languages as $const_language) {
                    ?>
                    <tr>
                        <td align="center"><?php echo mosHTML::idBox($i, $const_language->id, false, 'bid'); ?></td>
                        <td><a href="#edit" onClick="return listItemTask('cb<?php echo $i; ?>','edit')"><?php
                         echo $const_language->const; ?></a>
                        <td><a href="#edit" onClick="return listItemTask('cb<?php echo $i; ?>','edit')"><?php
                         echo $const_language->value_const; ?></a></td>
                        <td align="center"><?php echo $const_language->title; ?></td>
                        <td align="center"><?php echo $const_language->sys_type; ?></td>
                        <td></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>
                <tr><td colspan = "13"><?php echo $pageNav->getListFooter(); ?></td></tr>
            </table>
            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="section" value="language_manager" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" value="0" name="boxchecked">
        </form>
        <?php
    }

    static function editLanguageManager($row, $lists) {
        global $mosConfig_live_site, $doc, $app;
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>    
        <form action="index.php" method="post" name="adminForm"  id="adminForm" enctype="multipart/form-data">
            <table class="adminform form_33">
                <tr>
                    <th  class="house_manager_caption" align="left">
        <?php echo $row->id ? _HEADER_EDIT : _HEADER_ADD; ?> <?php
         echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_CONST; ?> 
                    </th>
                </tr>
            </table>
            <table width="100%">
                <tr>
                    <td valign="top">
                        <table class="adminform form_34" >
                            <tr>
                                <td><?php echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_CONST; ?>:</td>
                                <td colspan="2"><?php echo $lists['const']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_VALUE_CONST; ?>:</td>
                                <td colspan="2">
                                    <textarea class="text_area" name="value_const"
                                     rows="10" cols="100" name="text"><?php echo $row->value_const; ?></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo _REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SYS_TYPE; ?>:</td>
                                <td colspan="2"><?php echo $lists['sys_type']; ?></td>
                            </tr>
                            <tr>
                                <td><?php echo _REALESTATE_MANAGER_LABEL_LANGUAGE; ?>:</td>
                                <td colspan="2"><?php echo $lists['languages']; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <input type="hidden" name="const" value="<?php echo $lists['const']; ?>"/>
            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="section" value="language_manager" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
            <input type="hidden" name="sectionid" value="com_realestatemanager" />
        </form>    
        <?php
    }

    static function showFeaturedManager($features, $pageNav, $lists) {
        global $my, $mosConfig_live_site, $mainframe, $templateDir, 
          $realestatemanager_configuration, $doc, $app;

        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site .
         '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_FEATURED_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        ?>
        <form action="index.php" method="post" name="adminForm" id="adminForm">
            <?php
            // Features tabs
            if (version_compare(JVERSION, "3.0.0", "ge")) {
                $options = Array();
                echo JHtml::_('tabs.start', 'feature', $options);
                echo JHtml::_('tabs.panel', JText::_(_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_1), 'panel_1_feature');
            } else {
                $tabs = new mosTabs(0);
                $tabs->startPane("feature");
                $tabs->startTab('<a href="javascript:rem_initialize();">' .
                 _REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_1 . '</a>', "feature");
            }
            ?>      
            <table width="100%" class="adminform form_35">
                <tr> 
        <?php $lists['featuredmanager']['placeholder'] =
         '<input type="text" name="featuredmanager_placeholder" value="'
          . $realestatemanager_configuration['featuredmanager']['placeholder']
           . '" class="inputbox" size="50" maxlength="500" title=""/>'; ?>
                    <td width="185">
                        <span class="tooltip_link" rel="tooltip" data-placement="top"
                         data-toggle="tooltip" title='<?php
                          echo _REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_BODY;?>'>
                        <?php echo _REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES; ?>:</span></td>
                    <td class="yesno"><?php echo $lists['featuredmanager']['placeholder']; ?></td>
                </tr>
            </table>
            <?php
            if (version_compare(JVERSION, "3.0.0", "ge")) {
                echo JHtml::_('tabs.panel', JText::_(_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_2), 'panel_2_feature');
            } else {
                $tabs->endTab();
                $tabs->startTab('<a href="javascript:rem_initialize();">'
                 . _REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_2 . '</a>', "feature");
            }
            ?>   

            <table cellpadding="4" cellspacing="0" border="0" width="100%" class="table list_12">
                <tr>
                    <th width="5%" align="center"><input type="checkbox" name="toggle"
                     onClick="rem_checkAll(this);" /></th>
                    <th align = "center" class="title" width="45%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE; ?></th>
                    <th align = "center" class="title" width="35%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY; ?></th>
                    <th align = "center" class="title" width="15%" nowrap="nowrap"><?php
                     echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_PUBLISHED; ?></th>
        <?php
        if (version_compare(JVERSION, "3.0.0", "ge")) {
            ?>
                        <th>
                            <div class="btn-group pull-right hidden-phone">
                                <label for="limit" class="element-invisible"><?php
                                 echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>
                        <?php echo $pageNav->getLimitBox(); ?>
                            </div>
                        </th>
                <?php } ?>
                </tr>
                <?php
                $i = 0;
                foreach ($features as $feature) {
                    $task = $feature->published ? 'unpublish' : 'publish';
                    $alt = $feature->published ? 'Unpublish' : 'Publish';
                    $img = $feature->published ? 'icon-16-allow.png' : 'publish_r.png';
                    ?>
                    <tr>
                        <td align="center"><?php echo mosHTML::idBox($i, $feature->id, false, 'bid'); ?></td>
                        <td><?php echo $feature->name; ?></td>
                        <td><?php echo $feature->categories; ?></td>
                        <td align="center"><a href="javascript: void(0);"
                         onClick="return listItemTask('cb<?php echo $i; ?>','<?php echo $task; ?>')">
                                <?php
                                if (version_compare(JVERSION, "1.6.0", "lt")) {
                                    ?>
                                    <img src="<?php echo $mosConfig_live_site . "/administrator/images/"
                                     . $img; ?>" width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php echo $templateDir . "/images/admin/" . $img; ?>"
                                     width="12" height="12" border="0" alt="<?php echo $alt; ?>" />
                <?php
            }
            ?>
                            </a></td>
                            <td></td>
                    </tr>
                    <?php
                    $i++;
                }
                ?>

                <?php
                if (version_compare(JVERSION, "3.0.0", "ge")) {
                    echo JHtml::_('tabs.end');
                } else {
                    $tabs->endTab();
                    $tabs->endPane();
                }
                ?>
                <tr><td colspan = "13"><?php echo $pageNav->getListFooter(); ?></td></tr>
            </table>
            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="section" value="featured_manager" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" value="0" name="boxchecked">
        </form>
        <?php
    }

    static function editFeaturedManager($row, $lists) {
        global $mosConfig_live_site, $doc, $app;
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $doc->addScript($mosConfig_live_site . '/components/com_realestatemanager/includes/functions.js');

        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> "
         . _REALESTATE_MANAGER_ADMIN_FEATURED_MANAGER . "</div>";
        $app->JComponentTitle = $html;

        ?>

        <form action="index.php" method="post" name="adminForm"  id="adminForm" enctype="multipart/form-data">
            <table class="adminform form_36">
                <tr>
                    <th align="left">
        <?php echo $row->id ? _HEADER_EDIT : _HEADER_ADD; ?> <?php
         echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE; ?> 
                    </th>
                </tr>
            </table>
            <table class="adminform form_37" width="100%">
                </br>
                <tr>
                    <td><?php echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_NAME_ALIAS; ?>:</td>
                    <td colspan="2"><input class="text_area" type="text"
                     name="name" value="<?php echo $row->name; ?>" size="50" maxlength="250"
                      title="<?php echo _REALESTATE_MANAGER_TITLE_TO_TEXTAREA_FOR_ADDFEATURE; ?>" /></td>
                </tr>
                <tr>
                    <td><?php echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY_ALIAS; ?>:</td>
                    <td colspan="2"><?php echo $lists['categories']; ?></td>
                </tr>
                <tr>
                    <td><?php echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_PUBLISHED; ?>:</td>
                    <td colspan="2"><?php echo $lists['published']; ?></td>
                </tr>
                <tr>
                    <td colspan="2">
        <?php if ($row->image_link != '') {
            ?>
                            <?php echo _REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_REMOVE; ?>:
                            <input type="checkbox" name="del_main_photo" value="<?php echo $row->image_link; ?>" />        
                            <img alt="photo" src="<?php
                             echo "$mosConfig_live_site/components/com_realestatemanager/featured_ico/$row->image_link"; ?>"></img>      
        <?php } else echo "&nbsp"; ?>   
                    </td>
                </tr>
            </table>

            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="section" value="featured_manager" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
            <input type="hidden" name="sectionid" value="com_realestatemanager" />
        </form>    
        <?php
    }


   static function orders($orders, $search, & $pageNav) {
        global $my, $mosConfig_live_site, $mainframe, $session, $templateDir, $doc, $css, $app;
        $doc->addStyleSheet($mosConfig_live_site . '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " . _REALESTATE_MANAGER_SHOW_REVIEW_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        $countOrders = count($orders);
        $optionStatus[] = mosHTML :: makeOption('Pending', "Pending");
        $optionStatus[] = mosHTML :: makeOption('Completed', 'Completed');
        ?>
        <script type="text/javascript">
            function qqlistItemTask(a,b){
                var c=document.adminForm,d=c[a];
                if(d){
                    for(var f=0;;f++){
                        var e=c["cb"+f];
                        if(!e)break;
                        e.checked=!1
                    }
                    d.checked=!0;
                    c.boxchecked.value=1;
                    submitbutton(b)
                }
                return!1
            }
        </script>
        <form action="index.php" method="post" name="adminForm"  class="vehicles_main"  id="adminForm" >
        <table cellpadding="4" cellspacing="0" border="0" width="100%"
               class="list_13">
            <tr>
                <td><?php echo _REALESTATE_MANAGER_SHOW_SEARCH; ?></td>
                <td><input type="text" name="search" value="<?php echo $search; ?>"
                           class="inputbox" onChange="document.adminForm.submit();" /></td>

                <?php if (version_compare(JVERSION, '3.0.0', 'ge')) { ?>
                    <td>
                        <div class="btn-group pull-right hidden-phone">
                            <label for="limit" class="element-invisible"><?php
                             echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>

                          <?php echo $pageNav->getLimitBox(); ?>
                        </div>
                    </td>
                <?php
                } ?>
            </tr>
        </table>
            <table cellpadding="4" cellspacing="0" width="100%" class="table adminlist_05">
                <tr>
                    <th colspan="" name="toggle" width="5%"><input type="checkbox" name="toggle" value=""
                                                                        onClick="Joomla.checkAll(this);" /></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="index.php?option=com_realestatemanager&task=orders&orderby=id">
                            <?php
                            echo _REALESTATE_MANAGER_ORDERS_ID;?>
                        </a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="index.php?option=com_realestatemanager&task=orders&orderby=title">
                            <?php
                            echo _REALESTATE_MANAGER_ORDERS_TITLE;?>
                        </a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="index.php?option=com_realestatemanager&task=orders&orderby=email">
                            <?php
                            echo _REALESTATE_MANAGER_ORDERS_EMAIL;?>
                        </a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="index.php?option=com_realestatemanager&task=orders&orderby=order_date">
                            <?php
                            echo _REALESTATE_MANAGER_ORDERS_DATE;?>
                        </a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="index.php?option=com_realestatemanager&task=orders&orderby=status">
                            <?php
                            echo _REALESTATE_MANAGER_ORDERS_STATUS;?>
                        </a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo _REALESTATE_MANAGER_ORDERS_PRICE;?></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo _REALESTATE_MANAGER_ORDERS_PAID;?></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""></th>
                </tr>
                <?php for($i = 0; $i < $countOrders; $i++) { ?>
                    <tr>
                        <td align = "center"><?php echo mosHTML::idBox($i,$orders[$i]->id, false, 'cb');?></td>
                        <td><?php echo $orders[$i]->id;?></td>
                        <td><?php echo $orders[$i]->htitle;?></td>
                        <td><?php echo $orders[$i]->email;?></td>
                        <td><?php echo $orders[$i]->order_date;?></td>
                        <td>
                            <?php
                            $status = $orders[$i]->status;
                            $attr = 'class="inputbox input-medium" size="1"
                             onchange="return listItemTask(\'cb'.$i.'\',\'updateOrderStatus\')"';
                            echo mosHTML::selectList($optionStatus, 'order_status['.
                              $orders[$i]->id.']', $attr, 'value', 'text', $status);
                            ?>
                        </td>
                        <td><?php echo $orders[$i]->order_calculated_price;?></td>
                        <td><?php echo $orders[$i]->order_price." ".$orders[$i]->order_currency_code;?></td>
                        <td>
                            <a href="<?php echo 'index.php?option=com_realestatemanager'.
                                                '&task=orders&order_details=order_details&order_id='.$orders[$i]->id ?>">
                            <?php echo _REALESTATE_MANAGER_ORDERS_DETAILS; ?></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <?php echo $pageNav->getListFooter(); ?>
            <input type="hidden" name="option" value="com_realestatemanager" />
   <!--            <input type="hidden" name="section" value="group" /> -->
            <input type="hidden" name="task" value="orders" />
            <input type="hidden" name="sectionid" value="com_realestatemanager" />
<!--             <input type="hidden" name="redirect" value="<?php //echo $redirect; ?>" />
 -->            <input type="hidden" value="0" name="boxchecked" />
        </form><?php
    }

    static function orders_details($orders, $search, & $pageNav) {
        global $my, $mosConfig_live_site, $mainframe, $session, $templateDir,
         $doc, $css, $app;
        $doc->addStyleSheet($mosConfig_live_site .
         '/administrator/components/com_realestatemanager/admin_realestatemanager.css');
        $html = "<div class='house_manager_caption' ><i class='fa fa-arrow-up'></i> " .
         _REALESTATE_MANAGER_SHOW_REVIEW_MANAGER . "</div>";
        $app->JComponentTitle = $html;
        $countOrders = count($orders);
        $orderId = JRequest::getVar('order_id');
        $optionStatus[] = mosHTML :: makeOption('Pending', "Pending");
        $optionStatus[] = mosHTML :: makeOption('Completed', 'Completed');
        ?>
        <script type="text/javascript">
            function qqlistItemTask(a,b){
                var c=document.adminForm,d=c[a];
                if(d){
                    for(var f=0;;f++){
                        var e=c["cb"+f];
                        if(!e)break;
                        e.checked=!1
                    }
                    d.checked=!0;
                    c.boxchecked.value=1;
                    submitbutton(b)
                }
                return!1
            }
        </script>
        <form action="index.php" method="post" name="adminForm"  class="vehicles_main"  id="adminForm" >
        <table cellpadding="4" cellspacing="0" border="0" width="100%"
               class="list_13">
            <tr>
                <td><?php echo _REALESTATE_MANAGER_SHOW_SEARCH; ?></td>
                <td><input type="text" name="search" value="<?php echo $search; ?>"
                           class="inputbox" onChange="document.adminForm.submit();" /></td>

                <?php if (version_compare(JVERSION, '3.0.0', 'ge')) { ?>
                    <td>
                        <div class="btn-group pull-right hidden-phone">
                            <label for="limit" class="element-invisible"><?php
                             echo JText::_('JFIELD_PLG_SEARCH_SEARCHLIMIT_DESC'); ?></label>

                          <?php echo $pageNav->getLimitBox(); ?>
                        </div>
                    </td>
                <?php
                } ?>
            </tr>
        </table>
            <table cellpadding="4" cellspacing="0" width="100%" class="table adminlist_05">
                <tr>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="<?php echo 'index.php?option=com_realestatemanager&task=orders'.
                                    '&orderby=user&order_details=order_details&order_id='.$orderId?>"><?php echo "User";?></a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo "Username";?></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="<?php echo 'index.php?option=com_realestatemanager&task=orders'.
                                    '&orderby=email&order_details=order_details&order_id='.$orderId ?>"><?php
                                     echo _REALESTATE_MANAGER_ORDERS_EMAIL;?></a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="<?php echo 'index.php?option=com_realestatemanager&task=orders'.
                                    '&orderby=order_date&order_details=order_details&order_id='.
                                    $orderId ?>"><?php echo _REALESTATE_MANAGER_ORDERS_DATE;?></a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan="">
                        <a href="<?php echo 'index.php?option=com_realestatemanager&task=orders'.
                         '&orderby=status&order_details=order_details&order_id='.$orderId ?>"><?php
                          echo _REALESTATE_MANAGER_ORDERS_STATUS;?></a>
                    </th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo "Title";?></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo _REALESTATE_MANAGER_ORDERS_PRICE;?></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo _REALESTATE_MANAGER_ORDERS_PAID;?></th>
                    <th align = "center" nowrap="nowrap" class="title" colspan=""><?php echo _REALESTATE_MANAGER_ORDERS_DETAILS;?></th>
                </tr>
                <?php
                for($i = 0; $i < $countOrders; $i++) {
                    $payment_details = unserialize($orders[$i]->payment_details);
                    $details_text='';
                    if($orders[$i]->txn_type)
                        $details_text = _REALESTATE_MANAGER_ORDERS_DET_ACCEPT.$orders[$i]->txn_type;
                    if(!empty($payment_details)){
                        if(isset($payment_details['view']))
                            $details_text .= '<br>'._REALESTATE_MANAGER_ORDERS_DET_SYSTEM.$payment_details['view'];
                        if(isset($payment_details['payer_email']))
                            $details_text .= '<br>'._REALESTATE_MANAGER_ORDERS_DET_EMAIL.'<br>'.$payment_details['payer_email'];
                        if(isset($payment_details['pending_reason']))
                            $details_text .= '<br>'._REALESTATE_MANAGER_ORDERS_DET_REASON.'<br>'.$payment_details['pending_reason'];
                    }
                    ?>
                    <tr>
                        <td>
                            <?php if(!isset($orders[$i]->user) && $orders[$i]->user == '') {
                                echo _REALESTATE_MANAGER_LABEL_ANONYMOUS;
                            } else {
                                echo $orders[$i]->user;
                            }?>
                        </td>
                        <td><?php if(!isset($orders[$i]->username) && $orders[$i]->username == '' ) {
                                echo _REALESTATE_MANAGER_LABEL_ANONYMOUS;
                            } else {
                                echo $orders[$i]->username;
                            }?>
                        </td>
                        <td><?php echo $orders[$i]->email;?></td>
                        <td><?php echo $orders[$i]->order_date;?></td>
                        <td>
                            <?php
                            echo $orders[$i]->status;
                            ?>
                        </td>
                        <td><?php echo $orders[$i]->htitle;?></td>
                        <td><?php echo $orders[$i]->order_calculated_price;?></td>
                        <td><?php echo $orders[$i]->order_price." ".$orders[$i]->order_currency_code;?></td>
                        <td><?php echo $details_text?></td>
                    </tr>
                <?php } ?>
            </table>
            <?php echo $pageNav->getListFooter(); ?>
            <input type="hidden" name="option" value="com_realestatemanager" />
            <input type="hidden" name="task" value="orders" />
            <input type="hidden" name="order_details" value="order_details" />
            <input type="hidden" name="sectionid" value="com_realestatemanager" />
            <input type="hidden" value="0" name="boxchecked" />
        </form><?php
    }

}
?>
    <script language="javascript" type="text/javascript">
 jQuerREL(document).ready(function() {
    jQuerREL('#toolbar-back .icon-back').removeClass('icon-back').addClass('fa fa-arrow-left').css('font-family','FontAwesome');
    });
      </script>
