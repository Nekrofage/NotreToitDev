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

$session = JFactory::getSession();
$arr = $session->get("array", "default");
global $hide_js, $Itemid, $mosConfig_live_site, $mosConfig_absolute_path, $database, $doc, $my;
global $limit, $total, $limitstart, $task, $paginations, $mainframe, $realestatemanager_configuration;
$doc->addStyleSheet($mosConfig_live_site . '/components/com_realestatemanager/includes/realestatemanager.css');
$user = Jfactory::getUser();
if (isset($_REQUEST['userId'])) {
    if ($option != 'com_realestatemanager' and $_REQUEST['userId'] == $user->id) PHP_realestatemanager::showTabs();
} else {
    if ($option != 'com_realestatemanager') PHP_realestatemanager::showTabs();
}
if (version_compare(JVERSION, "3.0.0", "lt")) JHTML::_('behavior.mootools');
else JHtml::_('behavior.framework', true);
?>
<script type="text/javascript">
    function rem_rent_request_submitbutton() {
        var form = document.userForm;
        if (form.user_name.value == "") {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME; ?>" );
        } else if (form.user_email.value == "" || !isValidEmail(form.user_email.value)) {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL; ?>" );
        } else if (form.user_mailing == "") {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_MAILING; ?>" );
        } else if (form.rent_until.value == "") {
            alert( "<?php echo _REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_UNTIL; ?>" );
        } else {
            form.submit();
        }
    }
      </script>
      <script>
    function isValidEmail(str) {
        return (str.indexOf("@") > 1);
    }

    function allreordering(){
        if(document.orderForm.order_direction.value=='asc')
            document.orderForm.order_direction.value='desc';
        else document.orderForm.order_direction.value='asc';

        document.orderForm.submit();
    }

</script>
    <?php positions_rem($params->get('singlecategory01')); ?>
<div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
    <?php
if (!$params->get('wrongitemid')) {
    echo $currentcat->header;
}
?>
</div>

<?php positions_rem($params->get('singleuser02')); ?>
<?php positions_rem($params->get('singlecategory02')); ?>
<?php if (($task != 'rent_request') &&
  ($realestatemanager_configuration['location_map'] == 1)) { ?>
    <div id="map_canvas" class="re_map_canvas re_map_canvas_01"></div>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?sensor=false" ></script>
 <script type="text/javascript">
        window.addEvent('domready', function() {
            initialize2();
        });


        function initialize2(){
            var map;
            var marker = new Array();
            var myOptions = {
                scrollwheel: false,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.LARGE
                },
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var imgCatalogPath = "<?php echo $mosConfig_live_site; ?>/components/com_realestatemanager/";
            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            var bounds = new google.maps.LatLngBounds ();
<?php
            $newArr = explode(",", _REALESTATE_MANAGER_HOUSE_MARKER);
            $j = 0;
            for ($i = 0;$i < count($rows);$i++) {
                if ($rows[$i]->hlatitude && $rows[$i]->hlongitude) {
                    $numPick = '';
                    if (isset($newArr[$rows[$i]->property_type])) {
                        $numPick = $newArr[$rows[$i]->property_type];
                    }
?>

                    var srcForPic = "<?php echo $numPick; ?>";
                    var image = '';
                    if(srcForPic.length){
                        var image = new google.maps.MarkerImage(imgCatalogPath + srcForPic,
                            new google.maps.Size(32, 32),
                            new google.maps.Point(0,0),
                            new google.maps.Point(16, 32));
                    }

                    marker.push(new google.maps.Marker({
                        icon: image,
                        position: new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,
                         <?php echo $rows[$i]->hlongitude; ?>),
                        map: map,
                        title: "<?php echo $database->Quote($rows[$i]->htitle); ?>"
                    }));
                    bounds.extend(new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,
                      <?php echo $rows[$i]->hlongitude; ?>));
                    // google.maps.event.addListener(marker[<?php echo $j; ?>], 'click', function() {
                    //     window.open("index.php?option=com_realestatemanager&task=view&id=<?php
                    //     echo $rows[$i]->id; ?>&catid=<?php echo $rows[$i]->idcat ?>&Itemid=<?php echo $Itemid; ?>");
                    // });

                    var infowindow  = new google.maps.InfoWindow({});
                    google.maps.event.addListener(marker[<?php echo $j; ?>], 'mouseover', function() {
                    <?php
                    if (strlen($rows[$i]->htitle) > 45)
                        $htitle = substr($rows[$i]->htitle, 0, 25) . '...';
                    else {
                        $htitle = $rows[$i]->htitle;
                    }
                    ?>

                    var title =  "<?php echo $htitle ?>";

                    <?php
                      //for local images
                      $imageURL = ($rows[$i]->image_link);

                      if ($imageURL == '') $imageURL = _REALESTATE_MANAGER_NO_PICTURE_BIG;
                          $file_name = PHP_realestatemanager::picture_thumbnail($imageURL,
                             $realestatemanager_configuration['fotogal']['width'],
                             $realestatemanager_configuration['fotogal']['high']);
                          $file = $mosConfig_live_site . '/components/com_realestatemanager/photos/' . $file_name;
                    ?>
                    var imgUrl =  "<?php echo $file; ?>";
                    var price =  "<?php echo $rows[$i]->price; ?>";
                    var priceunit =  "<?php echo $rows[$i]->priceunit; ?>";

                    var contentStr = '<div><img width = "100%" src = '
                     + imgUrl +
                     ' onclick=window.open("index.php?option=com_realestatemanager&task=view&id=<?php
                     echo $rows[$i]->id; ?>&catid=<?php echo $rows[$i]->idcat ?>&Itemid=<?php
                     echo $Itemid; ?>")></div><div id="marker_link"><a onclick=window.open('
                     + '"index.php?option=com_realestatemanager&task=view&id=<?php
                     echo $rows[$i]->id; ?>&catid=<?php echo $rows[$i]->idcat
                     ?>&Itemid=<?php echo $Itemid; ?>")>' + title
                     + '</a></div><div id="marker_price"><a onclick=window.open('
                     + '"index.php?option=com_realestatemanager&task=view&id=<?php
                     echo $rows[$i]->id; ?>&catid=<?php echo $rows[$i]->idcat
                     ?>&Itemid=<?php echo $Itemid; ?>") >' + price +' ' + priceunit + '</a></div>';

                       infowindow.setContent(contentStr);
                       infowindow.open(map,marker[<?php echo $j; ?>]);
                    });

                    // google.maps.event.addListener(marker[<?php echo $j; ?>], 'mouseout', function() {
                    //    infowindow.close(map,marker[<?php echo $j; ?>]);
                    // });


                    var myLatlng = new google.maps.LatLng(<?php echo $rows[$i]->hlatitude; ?>,<?php
                     echo $rows[$i]->hlongitude; ?>);
                    var myZoom = <?php echo $rows[$i]->map_zoom; ?>;
                    <?php
                    $j++;
                }
            }
?>
            if (<?php echo $j; ?>>1) map.fitBounds(bounds);
            else if (<?php echo $j; ?>==1) {map.setCenter(myLatlng);map.setZoom(myZoom)}
            else {map.setCenter(new google.maps.LatLng(0,0));map.setZoom(0);}
        }
    </script>


            <?php
}
?>
<?php
if (count($rows) > 0) {

    $sort_arr['order_field'] = $params->get('sort_arr_order_field');
    $sort_arr['order_direction'] = $params->get('sort_arr_order_direction');
?>
    <?php positions_rem($params->get('singleuser03')); ?>
            <?php positions_rem($params->get('singlecategory04')); ?>
    <?php $option_type = JArrayHelper::getValue($_REQUEST, 'option');
    if ($option_type != 'com_simplemembership') { ?>
<div id="ShowOrderBy">
        <form method="POST" action="<?php echo sefRelToAbs($_SERVER["REQUEST_URI"]); ?>" name="orderForm">
            <input type="hidden" id="order_direction" name="order_direction"
             value="<?php echo $sort_arr['order_direction']; ?>" >
            <a title="Click to sort by this column." onclick="javascript:allreordering();return false;" href="#">
                               <?php
        if ($sort_arr['order_direction'] == 'asc') {
            echo '<i class="fa fa-sort-alpha-asc"></i>';
        } else {
            echo '<i class="fa fa-sort-alpha-desc"></i>';
        }
?>                </a>
    <?php echo _REALESTATE_MANAGER_LABEL_ORDER_BY; ?> <select size="1" class="inputbox"
     onchange="javascript:document.orderForm.order_direction.value='asc';
      document.orderForm.submit();" id="order_field" name="order_field">
                <option  value="date" <?php if ($sort_arr['order_field'] == "date")
                 echo 'selected="selected"'; ?> >  <?php echo _REALESTATE_MANAGER_LABEL_DATE; ?> </option>
                <option value="price" <?php if ($sort_arr['order_field'] == "price")
                 echo 'selected="selected"'; ?> > <?php echo _REALESTATE_MANAGER_LABEL_PRICE; ?></option>
                <option value="htitle" <?php if ($sort_arr['order_field'] == "htitle")
                 echo 'selected="selected"'; ?> > <?php echo _REALESTATE_MANAGER_LABEL_TITLE; ?></option></select>
        </form>
    <div class="button_ppe table_29">
<span class="rem_house_files">
</span>
</div>
    <div style="clear: both;"></div>
</div>
    <?php
    }
}
?>
<div class="row-fluid">
<div class="<?php echo($params->get('search_option'))? 'span9' : 'span12'; ?>">
<?php
if (count($rows) > 0) {
    positions_rem($params->get('singleuser04'));
?>
        <?php positions_rem($params->get('singlecategory05')); ?>
    <div id="gallery_rem">
        <?php
    $total = count($rows);
    foreach($rows as $row) {
        $tmphouse = new mosRealEstateManager($database);
        $tmphouse->load($row->id);
        $tmphouse->setCatIds();
        $option = 'com_realestatemanager';
        $link = 'index.php?option=' . $option . '&amp;task=view&amp;id=' . $row->id
         . '&amp;catid=' . $tmphouse->catid[0] . '&amp;Itemid=' . $Itemid;
        $imageURL = $row->image_link;
?>
            <div class="okno_R" id="imageBlock">
                <div id="divamage" style = "width: <?php
                echo $realestatemanager_configuration['fotocategory']['width']; ?>px;
                 height: <?php echo $realestatemanager_configuration['fotocategory']['high']; ?>px;
                  position: relative; text-align:center;">
                    <a href="<?php echo sefRelToAbs($link); ?>" style="text-decoration: none">
                        <?php
        if ($imageURL == '') $imageURL = _REALESTATE_MANAGER_NO_PICTURE_BIG;
            $file_name = PHP_realestatemanager::picture_thumbnail($imageURL,
             $realestatemanager_configuration['fotocategory']['width'],
              $realestatemanager_configuration['fotocategory']['high']);
            $file = $mosConfig_live_site . '/components/com_realestatemanager/photos/' . $file_name;
            echo '<img alt="' . $row->htitle . '" title="' . $row->htitle . '" src="' .
                                 $file . '" border="0" class="little">';
?>
                    </a>
                </div>
                <div class="texthouse">
                    <div class="titlehouse">
                        <a href="<?php echo sefRelToAbs($link); ?>" >
                    <?php
        if (strlen($row->htitle) > 45) echo substr($row->htitle, 0, 25), '...';
        else {
            echo $row->htitle;
        }
?>
                        </a>
                    </div>
                            <div style="clear: both;"></div>
            <div class="rem_type_Allhouses">
                                                   <?php
        if (trim($row->house_size)) {
?>
                <div class="row_text">
                    <i class="fa fa-expand"></i>
                    <span class="col_text_2">
                      <?php echo $row->house_size; ?>
                      <?php echo _REALESTATE_MANAGER_LABEL_SIZE_SUFFIX; ?>
                    </span>
                </div>
                <?php
        }
?>
            <?php if (trim($row->rooms)) { ?>
                <div class="row_text">
                    <i class="fa fa-building-o"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_ROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $row->rooms; ?></span>
                </div>
            <?php
        }
        if (trim($row->year)) { ?>
                <div class="row_text">
                    <i class="fa fa-calendar"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BUILD_YEAR; ?>:</span>
                    <span class="col_text_2"><?php echo $row->year; ?></span>
                </div>
            <?php
        }
        if (trim($row->bedrooms)) { ?>
                <div class="row_text">
                    <i class="fa fa-inbox"></i>
                    <span class="col_text_1"><?php echo _REALESTATE_MANAGER_LABEL_BEDROOMS; ?>:</span>
                    <span class="col_text_2"><?php echo $row->bedrooms; ?></span>
                </div>
                        <?php
        }
?>
                        </div>
                    </div>
                    <div class="rem_house_viewlist">
                    <a href="<?php echo sefRelToAbs($link); ?>" style="display: block">
                        <?php
        if ($params->get('show_pricerequest')) {
?>
                        <div class="price">
                        <?php
            if ($realestatemanager_configuration['price_unit_show'] == '1') {
                if ($realestatemanager_configuration['sale_separator'])
                 echo formatMoney($row->price, true, $realestatemanager_configuration['price_format']), ' ', $row->priceunit;
                else echo $row->price, ' ', $row->priceunit;
            } else {
                if ($realestatemanager_configuration['sale_separator'])
                 echo $row->priceunit, ' ', formatMoney($row->price, true, $realestatemanager_configuration['price_format']);
                else echo $row->priceunit, ' ', $row->price;
            }
?>
                        </div>
                        <?php
        }
?>
                        <span><?php echo _REALESTATE_MANAGER_LABEL_VIEW_LISTING; ?></span>
                    </a>
    <div style="clear: both;"></div>
            </div>
        </div>
        <?php
    }
?>
    </div>
            <?php
}
?>


    <div id="pagenavig" class="page_navigation">
        <div class="row_02">
        <?php
$paginations = $arr;
if ($paginations && ($pageNav->total > $pageNav->limit)) {
    echo $pageNav->getPagesLinks();
}
?>
        </div>
    </div>
</div> <!-- end span9  -->
<?php   if($params->get('search_option') ){
            if($params->get('search_option_registrationlevel') ){
    ?>
<div class="span3">
<?php positions_rem($params->get('singleuser01')); ?>
    <div class="rem_house_contacts">
        <div id="rem_house_titlebox">
            <?php echo _REALESTATE_MANAGER_SHOW_SEARCH; ?>
        </div>
            <?php
PHP_realestatemanager::showSearchHouses($option, $catid, $option, $layout);
?>
    </div>
</div>
        <?php }
        }?>
</div> <!-- end row-fluid  -->
    <?php positions_rem($params->get('singlecategory09')); ?>
    <?php positions_rem($params->get('singlecategory11'));?>


<?php
if ($is_exist_sub_categories) {
    ?>
    <?php positions_rem($params->get('singlecategory07')); ?>
    <div class="componentheading<?php echo $params->get('pageclass_sfx'); ?>">
    <?php echo _REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES . " : " . $params->get('category_name'); ?>
    </div>
    <?php positions_rem($params->get('singlecategory08')); ?>
    <?php
    HTML_realestatemanager::listCategories($params, $categories, $catid, $tabclass, $currentcat);
}
?>

<div class="basictable table_20">
<?php mosHTML::BackButton($params, $hide_js); ?>
</div>

<style type="text/css">
    .okno_R{
        width: <?php echo $realestatemanager_configuration['fotocategory']['width']; ?>px;
    }
    .okno_R img{
        width: <?php echo $realestatemanager_configuration['fotocategory']['width']; ?>px;
        max-height: <?php echo $realestatemanager_configuration['fotocategory']['high']; ?>px;
    }
</style>
<div style="text-align: center;">
<!--
<a style="font-size: 10px;" href="http://ordasoft.com">Powered by OrdaSoft!</a>
-->
</div>
