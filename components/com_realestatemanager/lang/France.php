<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );

/**
 *
 * @package  RealEstateManager
 * @copyright 2012 Andrey Kvasnevskiy-OrdaSoft(akbet@mail.ru); Rob de Cleen(rob@decleen.com)
 * Homepage: http://www.ordasoft.com
 * @version: 3.0 Pro
 *
 * */

$LangLocal = array('lang_code'=>'fr-FR', 'title'=>'France');

$constLang = array();
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBMAIN', 'value_const'=>'Community Builder/My Houses plugin settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT', 'value_const'=>'Show edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY', 'value_const'=>'Show buy requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY', 'value_const'=>'Show user rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TO', 'value_const'=>'Show my houses to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TO', 'value_const'=>'Show edit houses to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TO', 'value_const'=>'Show rent requests to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TO', 'value_const'=>'Show buy requests to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TO', 'value_const'=>'Show user rent history to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_TT', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_TT', 'value_const'=>'Show edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_TT', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_TT', 'value_const'=>'Show buy requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_TT', 'value_const'=>'Show user rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_RL', 'value_const'=>'Show button `show my houses` on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHOUSES_ML_BODY', 'value_const'=>'Select user group for which will be show this button');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_RL', 'value_const'=>'Show button `edit my houses` on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBEDIT_ML', 'value_const'=>'Show edit houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_RL', 'value_const'=>'Show button `rent requests` on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBRENT_ML', 'value_const'=>'Show rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_RL', 'value_const'=>'Show button `buy requsts` on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBBUY_ML', 'value_const'=>'Show buy requsts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_RL', 'value_const'=>'Show button `my rent history` on CB plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CBHISTORY_ML', 'value_const'=>'Show my rent history');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE', 'value_const'=>'Real Estate Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC', 'value_const'=>'Notre catalogue de biens immobiliers avec des biens à vendre et à louer.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC1', 'value_const'=>'Rechercher un bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SEARCH_DESC2', 'value_const'=>'Rechercher un bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE', 'value_const'=>'no-img_eng.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NOT_AUTHORIZED', 'value_const'=>'vous n`etes pas autorisé à effectuer cette action!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OK', 'value_const'=>'OK');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_STATUS', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP', 'value_const'=>'RealEstateManager : Import/Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPEXP_ADD', 'value_const'=>'Vous devez d`abord ajouter une catégorie pour cette section.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PLEASE_SEL', 'value_const'=>'Please select');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_CSV', 'value_const'=>'CSV File');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FORMAT_XML', 'value_const'=>'XML File');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR1', 'value_const'=>'Vous devez sélectionner un type à importer!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR2', 'value_const'=>'Vous devez sélectionner une Catégorie à importer!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR3', 'value_const'=>'Vous devez sélectionner un fichier à importer!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_ERR4', 'value_const'=>'Vous devez sélectionner un type à exporter!' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Import type' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP', 'value_const'=>'Sélectionnez un format de fichiert');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_TYP_TT_HEAD', 'value_const'=>'Sélectionnez un format de fichier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_CATEGORY', 'value_const'=>'Catégorie' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT', 'value_const'=>'Catégorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_CAT_TT_HEAD', 'value_const'=>'Sélectionnez une catégorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'Fichier à importer' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE', 'value_const'=>'Fichier à importer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_IMPORT_FILE_TT_HEAD', 'value_const'=>'Sélectionnez le fichier à importer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_FORMAT', 'value_const'=>'At the moment the following CSV format is supported:<br />PropertyID | Description | Link | Listing type |  Location | Pri ?e | Title | ...' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'type d`exportation' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP', 'value_const'=>'Sélectionnez le format de fichier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_TYP_TT_HEAD', 'value_const'=>'Sélectionnez le format de fichier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_LABEL_EXPORT_CATEGORY', 'value_const'=>'Categorie' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_IMPEXP_LABEL_EXPORT_CAT_TT_HEAD', 'value_const'=>'Sélectionner une Catégorie');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT', 'value_const'=>'Résultat de l`exportation' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_DOWNLOAD', 'value_const'=>'Vous pouvez télécharger l`exportation demandés en cliquant l`URL suivante (clic droit pour enregistrer):' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_RESULT_REMEMBER', 'value_const'=>'SVP notez que les fichiers seront toujours sauvegardés sur le serveur et vous devez le supprimer vous-même.' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CATEGORIES_MANAGER', 'value_const'=>'RealEstateManager : Categories');
$constLang[] = array('const'=>'_HEADER_CATEGORY', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_HEADER_NUMBER', 'value_const'=>'Bien immobilier');
$constLang[] = array('const'=>'_HEADER_PUBLISHED', 'value_const'=>'Publier');
$constLang[] = array('const'=>'_HEADER_REORDER', 'value_const'=>'Enregistrer');
$constLang[] = array('const'=>'_HEADER_ACCESS', 'value_const'=>'Accès');
$constLang[] = array('const'=>'_HEADER_CHECKED_OUT', 'value_const'=>'Checked Out By');
$constLang[] = array('const'=>'_HEADER_ADD', 'value_const'=>'Ajouter');
$constLang[] = array('const'=>'_HEADER_EDIT', 'value_const'=>'Editer');
$constLang[] = array('const'=>'_CATEGORY', 'value_const'=>'Categorie');
$constLang[] = array('const'=>'_DML_CAT_MUST_SELECT_NAME', 'value_const'=>'Le nom de la catégorie ne doit pas être vide');
$constLang[] = array('const'=>'_CATEGORIES_NAME', 'value_const'=>'Categories');
$constLang[] = array('const'=>'_A_SELECT_IMAGE', 'value_const'=>'- Sélectionner l`image -');
$constLang[] = array('const'=>'_A_SELECT_TOP', 'value_const'=>'Top');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_TITLE', 'value_const'=>'Categories Alias');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_NAME', 'value_const'=>'Categories Titre');
$constLang[] = array('const'=>'_CATEGORIES__IMAGEPREVIEW', 'value_const'=>'Aucun aperçu disponible');
$constLang[] = array('const'=>'_CATEGORIES__DETAILS', 'value_const'=>'Détails');
$constLang[] = array('const'=>'_CATEGORIES_HEADER_IMAGEPOS', 'value_const'=>'Image Position');
$constLang[] = array('const'=>'_CATEGORIES__PARENTITEM', 'value_const'=>'Parent Item');
$constLang[] = array('const'=>'_DELETED', 'value_const'=>'Supprimé'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_HOUSES', 'value_const'=>'RealEstateManager - Louer un bien immobilier' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_RETURN', 'value_const'=>'RealEstateManager - Retour d`un bien de location' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMP', 'value_const'=>'Importer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_EXP', 'value_const'=>'Exporter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_CATEGORIES', 'value_const'=>'- Toutes les catégories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_CATEGORIES', 'value_const'=>'Sélectionner les catégories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_RENT', 'value_const'=>'Choisir un bien à louer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_RENT', 'value_const'=>'- Tous les biens immobiliers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_RENT', 'value_const'=>'Louer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_RENT', 'value_const'=>'Pas Loué');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_USERS', 'value_const'=>'- All Users');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_TO_PUBLIC', 'value_const'=>'Sélectionnez Publication');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_ALL_PUBLIC', 'value_const'=>'- Tous les biens immobiliers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_NOT_PUBLIC', 'value_const'=>'Non publié');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PUBLIC', 'value_const'=>'Publié');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH', 'value_const'=>'Rechercher un bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_KEYWORD', 'value_const'=>'Recherche par mots-clés');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_BUTTON', 'value_const'=>'Recherche');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW', 'value_const'=>'RealEstateManager : Biens immobiliers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH', 'value_const'=>'Recherche:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_KOM', 'value_const'=>'Vous devez d`abord créer une catégorie pour cette section.'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTYID', 'value_const'=>'Propri t  ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RESULT', 'value_const'=>'Résultats');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COMMENT', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CATEGORY', 'value_const'=>'Categories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSES', 'value_const'=>'# Bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COVER', 'value_const'=>'Vue');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_COUNTRY', 'value_const'=>'Pays');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REGION', 'value_const'=>'Région');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CITY', 'value_const'=>'La ville');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ZIPCODE', 'value_const'=>'Zipcode');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDRESS', 'value_const'=>'Adresse');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_NO_LOCATION_AVAILIBLE', 'value_const'=>'No location available');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE', 'value_const'=>'Titre');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUILD_YEAR', 'value_const'=>'Année de construction');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PROPERTY_TYPE', 'value_const'=>'Régime de propriété');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RATING', 'value_const'=>'Note');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL', 'value_const'=>'Image URL');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE', 'value_const'=>'Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_URL', 'value_const'=>'[ Buy from ] link');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TO', 'value_const'=>'Location à');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM', 'value_const'=>'Location à partir de');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_UNTIL', 'value_const'=>'Loué à partir de - jusqu`à');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL', 'value_const'=>'Location à partir de - jusqu`à');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_FROM_UNTIL_NOT_KNOWN', 'value_const'=>'Inconnu');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_USER', 'value_const'=>'Utilisateur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_EMAIL', 'value_const'=>'email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_ADRES', 'value_const'=>'Adresse d`envoi postal');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_ADRES', 'value_const'=>'Numéro de téléphone');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_TIME', 'value_const'=>'Loué jusqu`à: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HITS', 'value_const'=>'Hits');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LINE', 'value_const'=>'Commander de nouveau');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT', 'value_const'=>'Loué');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLIC', 'value_const'=>'Publié');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTROL', 'value_const'=>'Checked out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_DATE', 'value_const'=>'Revoir la date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD', 'value_const'=>'Télécharger la photo principale');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OTHER_PICTURES_URL_UPLOAD', 'value_const'=>'Cliquez pour télécharger de nouvelles photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_DESC', 'value_const'=>'Si vous téléchargez une image, l`URL de l`image en cours sera supprimé et remis à la photo téléchargée.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_URL_UPLOAD_ERROR', 'value_const'=>'Erreur de chargement d`image! S`il vous plaît noter que les formats d`image seulement (jpg, png, gif) sont pris en charge');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICE', 'value_const'=>'Prix');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_INFORMATIONS', 'value_const'=>'Location information');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_ACTUAL', 'value_const'=>'Document actuel');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD', 'value_const'=>'Charger un document');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DOWNLOAD', 'value_const'=>'Télécharger un document');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_DELETE', 'value_const'=>'Supprimer un document');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT', 'value_const'=>'edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_ERROR', 'value_const'=>'Erreur de chargement du document!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_CB', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REQUIRED', 'value_const'=>'Exigé');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADDREVIEW', 'value_const'=>'Ajouter un avis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEWS', 'value_const'=>'Commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SAVE', 'value_const'=>' Sauvegarder ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU', 'value_const'=>' R servez-le! ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT_REQU_SAVE', 'value_const'=>' Soumettre une demande de location ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW', 'value_const'=>'Réviser');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_TITLE', 'value_const'=>'Titre');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_RATING', 'value_const'=>'Note');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_COMMENT', 'value_const'=>'Commentaire');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ANONYMOUS', 'value_const'=>'Anonyme');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_CLICKS', 'value_const'=>'Featured clicks');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_SHOWS', 'value_const'=>'Featured shows');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_TITLE', 'value_const'=>'SVP entrer un titre pour votre avis!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_COMMENT', 'value_const'=>'SVP entrer un texte pour votre avis!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_REVIEW_RATING', 'value_const'=>'SVP entrer une évaluation pour votre avis!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_NAME', 'value_const'=>'SVP entrez un nom pour votre demande de location!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_EMAIL', 'value_const'=>'SVP entrer une adresse e-mail pour votre demande de location!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_MAILING', 'value_const'=>'SVP entrez un Adresse postal valide pour votre demande de location!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_UNTIL', 'value_const'=>'SVP entrer une date de retour pour votre demande de location!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_ALERT', 'value_const'=>'Check out must be more Check in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_RENT_REQ_DATE', 'value_const'=>'Wrong date!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_NOT_USED', 'value_const'=>'Non spécifié');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PTBR', 'value_const'=>'Brazilian Portuguese'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DK', 'value_const'=>'Danish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_DUT', 'value_const'=>'Dutch');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ENG', 'value_const'=>'English');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FAR', 'value_const'=>'Farsi');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_FRE', 'value_const'=>'French');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_GER', 'value_const'=>'German');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ITA', 'value_const'=>'Italian');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_PR', 'value_const'=>'Portuguese');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_ROM', 'value_const'=>'Romanian');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_RUS', 'value_const'=>'Russian');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SPA', 'value_const'=>'Spanish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANGUAGE_SWE', 'value_const'=>'Swedish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO', 'value_const'=>'NON');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YES', 'value_const'=>'OUI');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IS_EDITED', 'value_const'=>'Le titre du bien immobilier est en cours d`édition par un autre administrateur');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_DEL', 'value_const'=>'Erreur de suppression du bien!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FRONTEND', 'value_const'=>'Paramètres Frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BACKEND', 'value_const'=>'Paramètres Backend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT', 'value_const'=>'BienID auto-increment'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_HEAD', 'value_const'=>'BienID auto increment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSEID_AUTO_INCREMENT_TT_BODY', 'value_const'=>'OUI si vous souhaitez utiliser BienID auto-incrément. Non si vous souhaitez utiliser manuellement entrée des biensID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD', 'value_const'=>'edocument support');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_HEAD', 'value_const'=>'edocument support');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_TT_BODY', 'value_const'=>'Oui si vous voulez activer le support eDocument pour l`interface administrateur.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION', 'value_const'=>'Emplacement des edocuments');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'Emplacement des edocuments');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'L`emplacement des eDocuments téléchargés sur le serveur. Le chemin est relatif au répertoire principal de Joomla et doivent commencer et se terminer par a /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW', 'value_const'=>'Afficher le lien de téléchargement des eDocuments');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_HEAD', 'value_const'=>'Afficher eDocuments téléchargement dans le frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_SHOW_TT_BODY', 'value_const'=>'Oui si vous voulez afficher un lien de téléchargement eDocument dans le frontend.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW', 'value_const'=>'Montrer le bouton <br />[ Afficher les commentaires ] ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_HEAD', 'value_const'=>'Afficher les commentaires dans le frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_SHOW_TT_BODY', 'value_const'=>'OUI si vous souhaitez activer les commentaires des utilisateurs pour les biens immobiliers sur votre site web.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL', 'value_const'=>'Permettre les évaluations');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Permettre les évaluations');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEWS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Permettre les évaluations dans le frontend. Cette fonction sera activée que si --Afficher les commentaires-- sont également réglés sur OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW', 'value_const'=>'Afficher l`état de la location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_HEAD', 'value_const'=>'Afficher l`état de la location dans le frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTSTATUS_SHOW_TT_BODY', 'value_const'=>'OUI si vous voulez afficher l`état actuel de location de bien immobilier dans le frontend.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW', 'value_const'=>'Show houses status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_HOUSESTATUS_SHOW_TT_BODY', 'value_const'=>'Set Yes to show houses status on the page of all houses and single categories on frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Permettre les demandes de Location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Permettre les demandes de Location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENTREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Permettre les demandes de Location dans le frontend. Cette fonction sera activée que si --Afficher l`état de la location-- est également réglés sur OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW', 'value_const'=>'Afficher Prix');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_HEAD', 'value_const'=>'Afficher Prix');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_SHOW_TT_BODY', 'value_const'=>'Afficher les Prix du bien immobilier dans le frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ITEM_IN_PAGE', 'value_const'=>'Biens Immobiliers par page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_BODY', 'value_const'=>'Régler le nombre de biens immibiliers affichés par page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_SHOW_TT_HEAD', 'value_const'=>'Pagination.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE', 'value_const'=>'Taille des photos des biens immobiliers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_HEAD', 'value_const'=>'Taille des photos des biens immobiliers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTO_SIZE_TT_BODY', 'value_const'=>'Régler la taille de photos - width/height en px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS', 'value_const'=>'Page produits');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_HEAD', 'value_const'=>'Page produits');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PAGE_ITEMS_TT_BODY', 'value_const'=>'Entrée La quantité de biens immobiliers afficher sur chaque page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL', 'value_const'=>'Commentaire email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_HEAD', 'value_const'=>'Commentaire email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_TT_BODY', 'value_const'=>'Où envoyer des messages de notification pour les nouveaux commentaires ajoutés. Vous pouvez entrer plusieurs adresses e-mail séparées par une virgule.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL', 'value_const'=>'Email de demande de location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_HEAD', 'value_const'=>'Email de demande de location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_TT_BODY', 'value_const'=>'Où envoyer des messages de notification pour les nouvelles demande de location ajoutés. Vous pouvez entrer plusieurs adresses e-mail séparées par une virgule.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REQUEST_RENT', 'value_const'=>'RealEstateManager : Demande de location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT', 'value_const'=>'RealEstateManager : au sujet de');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ABOUT', 'value_const'=>'au sujet de');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_RELEASENOTE', 'value_const'=>'Note de publication');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_CHANGELOG', 'value_const'=>'Changelog');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT', 'value_const'=>'Bienvenue dans RealEstateManager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER__HTML_ABOUT_INTRO', 'value_const'=>'Merci d`utiliser notre composant!<br /><br />
RealEstateManager vous permet de gérer un large catalogues de biens immobiliers. Il est disponible avec une catégorie et sous-catégorie d`aide(l`assistance) et vous pouvez ajouter un BienID Pour votre référence interne. La gestion de la location est incorporée, avec une possibilité de demande de location pour les utilisateurs de votre site Web. RealEstateManager offre aussi la possibilité d`avis de bien immobilier par des utilisateurs, avec la gestione des avis dans le backend. Edocument l`assistance) est incorporé. Les informations de biens et des photos de biens peuvent être entrés manuellement. <br/ ><br />
NOTES: <br/ >
- Pour le téléchargement de photos sur votre serveur pour un bon foctionnement, vous devez compiler PHP5 avec with CURL support<br />
- pour un bon foctionnement CSV exporte, vous devez compiler PHP5 avec PHP5 with XSL support<br/ >
- pour un bon foctionnement CAPTCHA, vous devez compiler PHP5 avec GD support<br />
<br />
Sur le site web<a href="http://www.ordasoft.com">www.ordasoft.com</a> Vous trouverez des notices pour RealEstateManager, des Langues supplémentaire fichie des Forums d`assistance et télécharger aussi des modules supplémentaires et plugins.<br />
<br />
Nous sommes disponibles pour le Développement Personnalisé si vous voulez de nouvelle fonction supplémentaire pour RealEstateManager. Envoyer s`il vous plaît par courrier électronique vos demande exactes à <a href="mailto:sales@ordasoft.com">sales@ordasoft.com</a> Et nous vous contacterons en vous citant. Quand vous commandez une version payante payée, vous recevrez la prochaine version PRO vos fonctions personnalisées supplémentaire.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT1', 'value_const'=>'Les champs ci-dessous doivent seulement être remplis manuellement Lorsque vous avez défini ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_TEXT_WSINFO_TEXT2', 'value_const'=>'. Autrement ils seront ignorés.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID_CHECK', 'value_const'=>'Insérez s`il vous plaît un BienID pour ce bien immobilier!');    
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_HOUSEID', 'value_const'=>'Un bien immobilier avec ce bienID existe déjà!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_CATEGORY', 'value_const'=>'Vous devez choisir une Catégorie pour le bien immobilier!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_TITLE', 'value_const'=>'Demande de location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DESC_RENT', 'value_const'=>'La liste montre les biens immobiliers choisis pour la location.<br />Si elle est vide, vérifiez s`il vous plaît votre sélection de nouveau.');  
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_NAME', 'value_const'=>'Votre nom complet');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL', 'value_const'=>'email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_MAILING', 'value_const'=>'Description');     
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_UNTIL', 'value_const'=>'Check-out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_FROM', 'value_const'=>'Enregistrement');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_THANKS', 'value_const'=>'Votre demande de location a été stockée dans notre base de données. Nous vérifierons votre demande et vous informerons dès que possible.<br />Merci pour pour l`utilisation de notre service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING_REQUEST_THANKS', 'value_const'=>'Votre demande de d`achat a été stockée dans notre base de données. Nous vérifierons votre demande et vous informerons dès que possible.<br />Merci pour pour l`utilisation de notre service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_OBJECT', 'value_const'=>'RealEstateManager: Demande de location acceptée');     
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT1', 'value_const'=>'Le bien immobilier');  
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_REQUEST_EMAIL_TEXT2', 'value_const'=>'Votre demande est disponible à la location.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_SAVE', 'value_const'=>'Savegarder'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RENT', 'value_const'=>'Location de biens immobiliers');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_RETURN', 'value_const'=>'Retour d`un bien immobilier de location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_ACCEPT', 'value_const'=>'Accepter la demande');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DECLINE', 'value_const'=>'Refuser la demande');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_IMPORT', 'value_const'=>'Importer un bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EXPORT', 'value_const'=>'Exporter un bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_DELETE_REVIEW', 'value_const'=>'Supprimez l`avis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_REVIEW', 'value_const'=>'Editer l`avis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_GENERAL_INFO', 'value_const'=>'Informations générales:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_VERSION', 'value_const'=>'Version:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_RELEASE_DATE', 'value_const'=>'Date de sortie:'); 
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECTLINK', 'value_const'=>'Lien du projet:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_PROJECT_HOST', 'value_const'=>'Hébergement du projet:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_LICENSE', 'value_const'=>'License:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_WARRANTY', 'value_const'=>'Ce programme est distribué dans l`espoir qu`il sera utile, mais sans aucune garantie. Voir la LICENSE.TXT inclus pour plus de détails.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_DEVELOP', 'value_const'=>'Développé par:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DOC_HOMEPAGE', 'value_const'=>'Homepage');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDOCUMENT_UPLOAD_URL', 'value_const'=>'Lien de téléchargement du document');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL', 'value_const'=>'Permettre le téléchargement du document');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Permettez le téléchargement d`edocuments dans le frontend. Cette fonction sera seulement activée si --Montrez le lien de Téléchargement d`edocuments -- Est aussi reglé sur OUI');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EDOCUMENTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow edocuments download');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL', 'value_const'=>'Permette le prix:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Permette le prix dans le frontend. Cette fonction sera seulement activée si -- Montrez le prix -- Est aussi reglé sur OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRICE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Permette le prix');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_REVIEW_MANAGER', 'value_const'=>'RealEstateManager : Avis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_HOUSE', 'value_const'=>'Adresse du bien immobilier');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW', 'value_const'=>'Revoir le titre');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REVIEW_KEYGUEST', 'value_const'=>'Tapez les caractères que vous voyez dans l`image ci-dessus dans la boîte ci-dessous.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT', 'value_const'=>'Imprimer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_SELECT', 'value_const'=>'Choisissez s`il vous plaît les colonnes pour l`impression et cliquez ensuite [ Suite ]!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FONT_SIZE', 'value_const'=>'Taille de la police');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_PRINT_FORMAT', 'value_const'=>'Format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW', 'value_const'=>'Montrez la licence de téléchargement d`edocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_BODY', 'value_const'=>'Montrez la licence de téléchargement d`edocument accepter/refuser avant d`accepter le téléchargement a partir du frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_ALLOW_TT_HEAD', 'value_const'=>'Montrez la licence de téléchargement d`edocument');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_TITLE', 'value_const'=>'Contrat de licence');
$constLang[] = array('const'=>'_LICENSE_AGREEMENT_ACCEPT', 'value_const'=>'Accepter?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW', 'value_const'=>'Montrer le bouton [ Acheter maintenant ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_HEAD', 'value_const'=>'Montrer le bouton [ Acheter maintenant ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_SHOW_TT_BODY', 'value_const'=>'Montrer le bouton [ Acheter maintenant ] À côté du bien immobilier dans le frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL', 'value_const'=>'Permettre le bouton [ Acheter maintenant ]:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Montrer le bouton [ Acheter maintenant ] Dans le frontend pour les catégories choisies. Cette fonction sera activée seulement si --Montrer le bouton [ Acheter maintenant ]-- Est aussi reglé sur OUI! Vous pouvez choisir des catégories multiples.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYNOW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Permettre le bouton [ Acheter maintenant ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_BU', 'value_const'=>'Exportation complète des données');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ENTIRE_RECOVER', 'value_const'=>'Importation complète des données');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPEXP_CONF', 'value_const'=>'Cette opération enlèvera TOUTES les données RealEstateManager existantes avant l`importation. Vous voulez continuer?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_IMPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;IMPORT:</strong>
<ul>
	<li>À l`heure actuelle le format de CSV suivant est supporté:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;Description&nbsp;|&nbsp;&nbsp;|&nbsp;Listing type&nbsp;|&nbsp;Price&nbsp;|&nbsp;Price type&nbsp;|&nbsp;Title&nbsp;|&nbsp;Address&nbsp;|&nbsp;...&nbsp;|</li>
	<li>Les champs sont séparés par une Barre verticale (<strong>&nbsp;|&nbsp;</strong>)</li>
	<li>Vous pouvez importer une liste entière avec juste BienID en laissant les autres champs vides, par exemple:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;Price&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;Title&nbsp;|&nbsp;<i>empty</i>&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>AVERTISSEMENT:</strong>&nbsp;N`utilisez pas l`importation de CVS s`il y des avis déjà présent de Bien immobilier, dans ce cas utiliser l`importation de données complète!</li>
</ul>
<strong>XML&nbsp;IMPORT:</strong>
<ul>
	<li>import data in XML format</li>
	<li><strong>AVERTISSEMENT:</strong>&nbsp;ne pas utiliser d`importation XML s`il y a des avis de biens immobilier, dans ce cas utiliser l`importation de données complète!</li>
	<li><strong>AVERTISSEMENT:</strong>&nbsp;associations entre les maisons ne seront pas enregistr es!</li>
        <li><strong>AVERTISSEMENT:</strong>&nbsp;vous devez t l charger les images une par, pas de photos seront sauv s!</li>
</ul>
<strong>FULL&nbsp;DATA&nbsp;IMPORT:</strong>
<ul>
	<li>Cette importation importera toutes les données RealEstateManager et rétablira tous les champs et détails</li>
	<li>Cette option écrasera TOUTES les entrées existantes, soyer prudent en l`utilisant!</li>
  <li>Pour restaurer toutes les photos de Biens immobiliers,  s`il vous plaît restaurer avant tous les fichiers sauvegardés du dossier: --components/com_realestatemanager/photos--!</li>
  <li>Pour restaurer tous les eDocuments Biens immobiliers, restaurer avant s`il vous plaît tous les fichiers sauvegardés du dossier que vous avez définies dans la mise en backend --Location of edocuments--!</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_EXPORT_WARNING_MESSAG', 'value_const'=>'
<strong>CSV&nbsp;EXPORT:</strong>
<ul>
	<li>L`exportation CSV contient tous les champs pour les modifier dans un éditeur de texte ou tableur</li>
	<li>S`il vous plaît noter que pour importation ultérieure, seul le format CSV suivant est pris en charge:&nbsp;&nbsp;PropertyID&nbsp;|&nbsp;Description&nbsp;|&nbsp;Link&nbsp;|&nbsp;Listing type&nbsp;|&nbsp;Price&nbsp;|&nbsp;Price type&nbsp;|&nbsp;Title&nbsp;|&nbsp;Address&nbsp;|&nbsp;...&nbsp;|</li>
	<li><strong>AVERTISSEMENT:</strong> si vous souhaitez importer plus tard des commentaires ou avis sur les Biens immobiliers, utiliser les données complètes à l`esportation!</li>
</ul>
<strong>XML&nbsp;EXPORT:</strong>
<ul>
	<li>Export data in XML</li>
  <li><strong>AVERTISSEMENT:</strong> si vous souhaitez importer plus tard, y compris les commentaires de biens immobiliers, utiliser les données complètes à l`exportation!</li>
  <li><strong>AVERTISSEMENT:</strong>&nbsp;associations entre les maisons ne seront pas enregistr es!</li>
        <li><strong>AVERTISSEMENT:</strong>&nbsp;vous devez t l charger les images une par, pas de photos seront sauv s!</li>
	</ul>
<strong>FULL&nbsp;DATA&nbsp;EXPORT:</strong>
<ul>
	<li>Cette exportation exportera toutes les données RealEstateManager et sauvegadera tous les champs et entrées</li>
	<li>Vous pouvez plus tard utiliser ces fichiers pour rétablir vos données RealEstateManager complètement</li>
	<li>Cette importation ultérieure écrasera TOUTES les entrées existantes, soyer prudente en l`utilisant!</li>
  <li>Pour rétablir toutes les photos de véhicule, rétablissez s`il vous plaît tous les fichiers du dossier: --components/com_realestatemanager/photos--!</li>
  <li>Pour rétablir tout les eDocuments biens immobiliers, rétablissez s`il vous plaît tous les fichiers du dossier dont vous avez paramétré [Paramètres Backend] -- [Location of edocuments]</li>
</ul>
');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND', 'value_const'=>'Envoyez Notification d`avis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_HEAD', 'value_const'=>'Envoyez Notification d`avis');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_SEND_TT_BODY', 'value_const'=>'Fixer les paramètre sur OUI si vous voulez être notifiés par le courrier électronique quand un utilisateur ajoute un avis de bien immobilier. Utilisez le panneau à droite pour déterminer qui enverra ces notifications. Vous pouvez mettre les adresses électroniques de réception dans [ Configuration Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Les groupes d`utilisateur dont les notifications d`avis seront envoyées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Les groupes d`utilisateur dont les notifications d`avis seront envoyées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_REVIEW_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choisissez quel groupes d`utilisateur enverront des avis. Cette fonction sera activée seulement si - Envoyer Avis - est aussi reglé sur OUI');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND', 'value_const'=>'Envoyer une demande de Location Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_HEAD', 'value_const'=>'Envoyer une demande de Location Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_SEND_TT_BODY', 'value_const'=>'Fixer les paramètres si vous voulez être notifiés par le courrier électronique quand un utilisateur soumet une Demande de Location. Utilisez le panneau à droite pour déterminer qui enverra ces notifications. Vous pouvez mettre les adresses électroniques de réception dans [ Configuration Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Les groupes d``utilisateur dont les notifications de demande location seront envoyées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Les groupes d``utilisateur dont les notifications de demande location seront envoyées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choisissez quel groupes d`utilisateur enverront les notifications de demande location. Cette fonction sera activée seulement si --Envoyez Notification de Suggestion-- Est aussi reglé sur OUI');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_REVIEW_COMMENT', 'value_const'=>'Review comment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_HEAD', 'value_const'=>'Images de Catégorie Personnalisées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PICTURE_IN_CATEGORY_TT_BODY', 'value_const'=>'Si parametrer sur OUI vous pouvez assigner une image personnalisée à chaque catégorie au lieu de l`icône de dossier standard. Vous pouvez alors ajuster les images de catégorie dans [ RealEstateManager ] - [ Manage&nbsp;Categories ] - [ Edit ] - [ Select&nbsp;image ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_RETURN_HOUSES', 'value_const'=>'Vous ne pouvez pas retourner une location qui na pas été en location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RENT_HOUSES', 'value_const'=>'Faites s`il vous plaît une sélection dans la liste Louer des Biens');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_RETURN_HOUSES', 'value_const'=>'Faites s`il vous plaît une sélection dans la liste Rendre le Bien');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ACCEPT_REQUEST', 'value_const'=>'Faites s`il vous plaît une sélection de la liste Accepter la Demandet');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_DECLINE_REQUEST', 'value_const'=>'Faites s`il vous plaît une sélection de la liste Refuser la Demande');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_IMPORT', 'value_const'=>'Vous devez choisir un type a importer!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_EXPORT', 'value_const'=>'Vous devez choisir un type pour exporter!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_LISTING_TYPE', 'value_const'=>'Vous devez sélectionner un type d`annonce pour ce Bien!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_ADDRESS', 'value_const'=>'S`il vous plaît insérez une adresse pour ce Bien!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_PRICE', 'value_const'=>'S`il vous plaît insérez un prix pour ce Bien!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_INFOTEXT_JS_EDIT_TITLE', 'value_const'=>'S`il vous plaît insérez un titre pour ce Bien!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_ROOMS', 'value_const'=>'S`il vous plaît, entrez un numéro valide de nombre de pi ces !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BATHROOMS', 'value_const'=>'S`il vous plaît, entrez un numéro valide de Salles de bains!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BEDROOMS', 'value_const'=>'S`il vous plaît, entrez un numéro valide de chambres à coucher!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_YEAR', 'value_const'=>'S`il vous plaît entrer une année valide de construction pour ce Bien!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_AREA', 'value_const'=>'S`il vous plaît entrer un espace valide pour cette maison!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_LOT_SIZE', 'value_const'=>'S`il vous plaît entrez une surface valide pour cette maison!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUILD_HOUSE_SIZE', 'value_const'=>'S`il vous plaît entrez une surface valide surface de la maison!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_NAME', 'value_const'=>'S`il vous plaît, entrez un nom pour votre demande d`achat!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_EMAIL', 'value_const'=>'S`il vous plaît entrer une adresse e-mail pour votre demande d`achat!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_BUY_REQ_PHONE', 'value_const'=>'S`il vous plaît entrer un numéro de téléphone valide pour votre demande d`achat!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_TYPE', 'value_const'=>'Type d`annonce');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LISTING_STATUS', 'value_const'=>'Annonce en cours');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ROOMS', 'value_const'=>'Nombre de pi ces');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BATHROOMS', 'value_const'=>'Salle de Bain');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BEDROOMS', 'value_const'=>'Chambre à coucher');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT', 'value_const'=>'Agent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACT_AGENT', 'value_const'=>'Agent de contact');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AGENT_INFO', 'value_const'=>"Agent d'information");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PHOTOS', 'value_const'=>'Photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PRICING', 'value_const'=>' tablissement des prix');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OVERVIEW', 'value_const'=>"Vue d'ensemble");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AMENITIES', 'value_const'=>' quipements');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BOOK_NOW', 'value_const'=>'R server');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXPIRATION_DATE', 'value_const'=>'Date D`expiration');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LOT_SIZE', 'value_const'=>'Surface terrain');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_HOUSE_SIZE', 'value_const'=>'Surface de la maison');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GARAGES', 'value_const'=>'Garages');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPROVED', 'value_const'=>'Approved');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REQUEST_PHONE', 'value_const'=>'Votre numéro de téléphone');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_REQUIREMENT_FIELDS', 'value_const'=>'Champs obligatoires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_RECOMMENDED_FIELDS', 'value_const'=>'Champs recommandé');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADDRESS_FIELDS', 'value_const'=>'Champs adresse');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_OPTIONAL_FIELDS', 'value_const'=>'Champs Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTO_MANAGE', 'value_const'=>'Gestion photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_PHOTOGALERY', 'value_const'=>'Gallerie photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_ADVERTISMENT', 'value_const'=>'Advertisment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUYING', 'value_const'=>'Informations du client ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER', 'value_const'=>'RealEstateManager : Gestionnaire de vente');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_SEND_MESSAGE', 'value_const'=>' Envoyer un message ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND', 'value_const'=>'Envoyez une  Notification de Demande d`Achat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_HEAD', 'value_const'=>'Envoyez une  Notification de Demande d`Achat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_SEND_TT_BODY', 'value_const'=>'Fixer les paramètre sur OUI si vous voulez être notifiés par le courrier électronique quand un utilisateur ajoute une demande d`achat . Utilisez le panneau à droite pour déterminer qui enverra ces notifications. Vous pouvez mettre les adresses électroniques de réception dans [ Configuration Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'Les groupes d`utilisateur dont les demande d`achat seront envoyées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Les groupes d`utilisateur dont les demande d`achat seront envoyées');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choisissez quel groupes d`utilisateur enverront une notifications de demande d`achat. Cette fonction sera activée seulement si - Envoyer demande de notification d`achat- est aussi reglé sur OUI');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL', 'value_const'=>'Email de Demande d`achat');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG', 'value_const'=>'RealEstateManager : Paramètres');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REMOVE_MAIN_PHOTO', 'value_const'=>'Supprimer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NEW_PHOTO', 'value_const'=>'Photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_RENT_OUT', 'value_const'=>'Bien à louer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_RENT', 'value_const'=>'Pour louer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ACCESSED_FOR_SALE', 'value_const'=>'  vendre');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_RENT_RETURN', 'value_const'=>'Retour location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB', 'value_const'=>'Afficher l`emplacement');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_HEAD', 'value_const'=>'Afficher l`Emplacement');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_TT_BODY', 'value_const'=>'Paramétrer sur Oui si vous souhaitez afficher l`Emplacement');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB', 'value_const'=>'Voir les commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_HEAD', 'value_const'=>'Voir les commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEW_TAB_TT_BODY', 'value_const'=>'Paramétrer sur Oui si vous souhaitez afficher les Commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_ADD_HOUSE', 'value_const'=>' Ajouter un bien immobilier ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_PUBLISH', 'value_const'=>'Publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_UNPUBLISH', 'value_const'=>'Unpublish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_DELETE', 'value_const'=>'Delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RETURN_HOUSE_FROM_RENT', 'value_const'=>'Return house from rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_RENT', 'value_const'=>'Rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW', 'value_const'=>'Montrer le boutton [ Ajouter un bien immobilier ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_HEAD', 'value_const'=>'Montrer le boutton [ Ajouter un bien immobilier ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_SHOW_TT_BODY', 'value_const'=>'Montrer le boutton [ Ajouter un bien immobilier ] dans la liste Biens immobiliers dans le frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL', 'value_const'=>'Permettre le boutton[ Ajouter un bien immobilier ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Permettre le boutton [ Ajouter un bien immobilier ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Permettre le boutton [ Ajouter un bien immobilier ] dans le frontend. Cette fonction ne sera activée que si --Show button [ Ajouter un bien immobilier]-- est également mis à OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CONTACTS', 'value_const'=>'Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS', 'value_const'=>'Montrer les Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_HEAD', 'value_const'=>'Montrer les  Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_TT_BODY', 'value_const'=>'Show Contacts on  `All information` tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION', 'value_const'=>'Localisation des photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_BODY', 'value_const'=>'L`emplacement des photos téléchargées sur le serveur. Le chemin est relatif au répertoire principal Joomla et doit commencer et se terminer par un /');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PHOTOS_DOWNLOAD_LOCATION_TT_HEAD', 'value_const'=>'Situation Photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL', 'value_const'=>'Voir les commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Voir les commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_REVIEWS_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Voir les commentaires dans le frontend. Cette fonction ne sera activée que si --Voir les commentaires-- est également mis à OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL', 'value_const'=>'Afficher l`Emplacement');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Afficher l`Emplacement');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_TAB_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Voir l`Emplacement dans le frontend. Cette fonction ne sera activée que si  --Afficher l`Emplacementb-- est également mis à OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL', 'value_const'=>'Montrer les Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Montrer les Contacts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CONTACTS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Voir les contacts dans le frontend. Cette fonction ne sera activée que si --Montrer les Contacts-- est également mis à OUI!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNAVAILABLE_FOR_RENT', 'value_const'=>'Non disponible à la location');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_REAL_ESTATE_THANKS', 'value_const'=>'Votre Bien Immobilier a été stockée dans notre base de données.<br />Merci pour pour l`utilisation de notre service.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_FROM', 'value_const'=>'Disponible à la location de');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT_UNTIL', 'value_const'=>'Disponible à la location jusqu`à');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SEARCH_NOTHING_FOUND', 'value_const'=>'Rien trouvé.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_DESCRIPTION', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_LOCATION', 'value_const'=>'Localisation');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_ALL', 'value_const'=>'Tous les renseignements');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TAB_REVIEWS', 'value_const'=>'Commentaires');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_SELECT', 'value_const'=>'---sélectionner---');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_RENT', 'value_const'=>'maison à louer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_FOR_SALE', 'value_const'=>'maison à vendre');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_LISTING_STATUS', 'value_const'=>'Active,offre,Contrat,Fermé,Retirée');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_OPTION_PROPERTY_TYPE', 'value_const'=>'Apartement,Commercial,Coproppriété,Poulailler,Ferme,Terres,Manufacture,Centre familial,Ranch,Pleine propriété,Maison de ville,Maison de campagne');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER', 'value_const'=>'Buy request answer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_HEAD', 'value_const'=>'Buy request answer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_ANSWER_TT_BODY', 'value_const'=>'Send email to user about buy request solution');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM', 'value_const'=>'Form for answer to buy request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_BODY', 'value_const'=>'Form for answer to buy request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_TT_HEAD', 'value_const'=>'Form for answer to buy request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_HOUSEID', 'value_const'=>'propertyid');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_OWNER', 'value_const'=>'owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_EXACTLY', 'value_const'=>'exactly');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_RENT_ANSWER_SUBJECT', 'value_const'=>'Answer for your request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM', 'value_const'=>'Form for answer to rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_BODY', 'value_const'=>'Form for answer to rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_TT_HEAD', 'value_const'=>'Form for answer to rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_FORM_DESCTIPTION', 'value_const'=>'You can use: <br/>{title} - title of rent house
          <br/>{answer} - declined or accepded<br/>{username} - the name of the user who requested a house<br/>
          {owneremail} - the email of the owner house<br/>{ownername} - the name of the owner house<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER', 'value_const'=>'Rent request answer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_HEAD', 'value_const'=>'Rent request answer');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_TT_BODY', 'value_const'=>'Send email to user about rent request solution');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_ACCEPTED', 'value_const'=>'Accepted');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_ANSWER_DECLINED', 'value_const'=>'Declined');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOOLBAR_ADMIN_EDIT_RENT', 'value_const'=>'Edit rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL', 'value_const'=>'Allow owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users, whom allow show owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW', 'value_const'=>'Show owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_HEAD', 'value_const'=>'Show owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNERSLIST_SHOW_TT_BODY', 'value_const'=>'If choose "yes" then show owners list in frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_HEAD', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_OWNER_SHOW_TT_BODY', 'value_const'=>'Show house owner or not');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL', 'value_const'=>'Allow RSS for');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Select users for whom allow RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW', 'value_const'=>'Show RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_BODY', 'value_const'=>'Show RSS or not');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_RSS_SHOW_TT_HEAD', 'value_const'=>'Show RSS');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST', 'value_const'=>'list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_GALLERY', 'value_const'=>'gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_LIST_GALLERY', 'value_const'=>'User-selectable');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE', 'value_const'=>'View type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_HEAD', 'value_const'=>'View type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_VIEW_TYPE_TT_BODY', 'value_const'=>'Select view type for houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REGISTRATIONLEVEL', 'value_const'=>'Allow publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_BODY', 'value_const'=>'Publish houses added from frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD', 'value_const'=>'Publish added houseses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_ON_ADD_TT_HEAD', 'value_const'=>'Publish added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users whom allow approve houses from frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL', 'value_const'=>'Allow approve');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_APPROVE_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow approve');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_BODY', 'value_const'=>'Approve houses added from frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD', 'value_const'=>'Approve added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_APPROVE_ON_ADD_TT_HEAD', 'value_const'=>'Approve added houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button [ print PDF ] in the frontend. This function will be activated only if --Show button [ print PDF ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button [ print View ] in the frontend. This function will be activated only if --Show button [ print View ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL', 'value_const'=>'Allow button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow button [ send Link ] in the frontend. This function will be activated only if --Show button [ send Mail ]-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW', 'value_const'=>'Show button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button<br />[ send Link ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MAILTO_BUTTON_SHOW_TT_BODY', 'value_const'=>'Shows button [ send Link ] in the House list in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW', 'value_const'=>'Show button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button<br />[ print View ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PRINT_BUTTON_SHOW_TT_BODY', 'value_const'=>'Shows button [ print View ] in the House list in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW', 'value_const'=>'Show button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_HEAD', 'value_const'=>'Show button<br />[ print PDF ]');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PDF_BUTTON_SHOW_TT_BODY', 'value_const'=>'Shows button [ print PDF ] in the House list in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_USER_HOUSES', 'value_const'=>'User houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DESCRIPTION', 'value_const'=>'Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNER', 'value_const'=>'Owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HAVENOT_HOUSES_RSS', 'value_const'=>'There have not houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HAVENOT_HOUSES', 'value_const'=>'You have not houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DELETE_HOUSES', 'value_const'=>'Are you sure?');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_NOT_SELECTED', 'value_const'=>'Please select houses first!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NUMBER_HOUSES', 'value_const'=>'Houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_OWNERS', 'value_const'=>'Owners');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_ACCESS_PAGE', 'value_const'=>'Sorry, you have not access to this page');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_OWNERSLIST', 'value_const'=>'Owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_OWNERSLIST', 'value_const'=>'Owners list');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SHOW_MY_HOUSES', 'value_const'=>'Show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_MY_HOUSES', 'value_const'=>'My houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PUBLISH', 'value_const'=>'Publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_UNPUBLISH', 'value_const'=>'Unpublish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE', 'value_const'=>'Delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ID', 'value_const'=>'Id');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EDIT', 'value_const'=>'Edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FULL_XML', 'value_const'=>'Full XML');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_RENT_EDIT', 'value_const'=>'RealestateManager - Edit house rent details' );
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND', 'value_const'=>'Send Add House Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_HEAD', 'value_const'=>'Send Add House Notification');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_SEND_TT_BODY', 'value_const'=>'Set to YES if you want to be notified through email when a user adds a House. Use the panel on the right to set who will send these notifications. You can set the receiving email addresses in [ Configuration Backend ].');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL', 'value_const'=>'User groups from which Add House notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'User groups from which Add House notifications will be sent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose which user groups will send Add House notifications. This function will be activated only if --Send Add House Notification-- is also set to YES');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW', 'value_const'=>'Show Buy status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_HEAD', 'value_const'=>'Show Buy status in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYSTATUS_SHOW_TT_BODY', 'value_const'=>'YES if you want to show the current Buy status of houses in the frontend.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL', 'value_const'=>'Allow Buy Requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Allow Buy Request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUYREQUEST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow Buy Requests in the frontend. This function will be activated only if --Show Buy Status-- is also set to YES!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE', 'value_const'=>'House main photos size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_BODY', 'value_const'=>'Set main photos size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOMAIN_SIZE_TT_HEAD', 'value_const'=>'House main photos size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE', 'value_const'=>'House gallery photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_HEAD', 'value_const'=>'House gallery photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOGALLERY_SIZE_TT_BODY', 'value_const'=>'Set gallery photo size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE', 'value_const'=>'House upload photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_HEAD', 'value_const'=>'House upload photo size');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_FOTOUPLOAD_SIZE_TT_BODY', 'value_const'=>'Set upload photo size - width/height in px');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_THUMBNAIL_SETTINGS', 'value_const'=>'Crop image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_THUMBNAIL_TT_BODY', 'value_const'=>'Set Yes to crop images and No to scale images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL', 'value_const'=>'Add House email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_HEAD', 'value_const'=>'Add House email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADDHOUSE_EMAIL_TT_BODY', 'value_const'=>'Where to send notification messages for new House added. You can enter multiple email addresses separated by a comma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY', 'value_const'=>'Rent before end notify');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_HEAD', 'value_const'=>'Rent before end notify');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_TT_BODY', 'value_const'=>'Send email to admin before Rent end.<br /> For that you need create GRON job and connect to Cron check so URL:<br /> `http://{yours site}/index.php?option=com_realestatemanager&Itemid={Yours ItemID}&task=rent_before_end_notify`   with span - every day.<br /> Cron Jobs may look like:<br /> `wget -q -O - http://localhost/~andrew/joomla_15/index.php?option=com_realestatemanager&Iteid=56&task=rent_before_end_notify /dev/null` ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_HEAD', 'value_const'=>'Rent end days');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DAYS_TT_BODY', 'value_const'=>'How much days before rent end send notify email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL', 'value_const'=>'Rent end email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_HEAD', 'value_const'=>'Rent end email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_EMAIL_TT_BODY', 'value_const'=>'Set emails for send notify email to user about Rent end. You may set set emails separated them with help coma.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP', 'value_const'=>'Show location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_HEAD', 'value_const'=>'Location map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_LOCATION_MAP_TT_BODY', 'value_const'=>'If choose "yes" then show location map ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE', 'value_const'=>'Update');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE_TT_HEAD', 'value_const'=>'Update');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_UPDATE_TT_BODY', 'value_const'=>'If choose "yes" then do not remove database');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_CATEGORIES', 'value_const'=>'Check categories of houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_RENT_REQUEST', 'value_const'=>'Rent request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HOUSE_NOT_PUBLISHED', 'value_const'=>'You can`t view this page because it not published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ERROR_HOUSE_NOT_APPROVED', 'value_const'=>'You can`t view this page because it not approved by administrator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_EDIT_HOUSE', 'value_const'=>'Edit House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TITLE_ADD_HOUSE', 'value_const'=>'Add House');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_WARNING_NO_LOGIN', 'value_const'=>'You have not logined! If you want edit house in future, then login!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CLICKMAP', 'value_const'=>'Click on the map to choose the house location:');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_PICTURE_BIG', 'value_const'=>'no-img_eng_big.gif');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_BUTTON_EDIT_HOUSE', 'value_const'=>'Edit house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_FORM_DESCTIPTION', 'value_const'=>'You can use: <br/>{title} - title of buy house
          <br/>{answer} - declined or accepded<br/>{username} - the name of the user who requested a house<br/>
          {owneremail} - the email of the owner house<br/>{ownername} - the name of the owner house<br/>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ADVANCED_SEARCH', 'value_const'=>'Advanced<br />search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FROM', 'value_const'=>'from');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_TO', 'value_const'=>'to');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ALL', 'value_const'=>'all');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_AVAILABLE_FOR_RENT', 'value_const'=>'Available for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_SEARCH_UNTIL', 'value_const'=>'until');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEK', 'value_const'=>'Week');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_WEEKEND', 'value_const'=>'Weekend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MIDWEEK', 'value_const'=>'Midweek');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_YEAR', 'value_const'=>'Year');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_MONTH', 'value_const'=>'Month');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_CALENDAR', 'value_const'=>'Calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_ADD_PRICE', 'value_const'=>'Add price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_SELECT_DELETE', 'value_const'=>'Select price which are necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_CALENDAR_NEW_PRICE', 'value_const'=>'New price rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_CALENDAR_ADD_NEW_PRICE', 'value_const'=>'Add new price rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Choose users, whom allow show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW_TT_HEAD', 'value_const'=>'Show Calendar tab');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDARLIST_SHOW_TT_BODY', 'value_const'=>'If choose "yes" then show calendar tab in frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW', 'value_const'=>'Show owner');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW_TT_HEAD', 'value_const'=>'Show calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CONFIG_CALENDAR_SHOW_TT_BODY', 'value_const'=>'Show house calendar or not');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER', 'value_const'=>'Default price label for calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER_TT_BODY', 'value_const'=>'Default price labels for calendar (weekend, week, midweek)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PLACEHOLDER_TT_HEAD', 'value_const'=>'Default price label for calendar');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER', 'value_const'=>'RealEstateManager : Language Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MANAGER_LANG_TAG', 'value_const'=>'Lang tag');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_CONST', 'value_const'=>'Constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_VALUE_CONST', 'value_const'=>'Value constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_CONST', 'value_const'=>'Search by constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SEARCH_VALUE_CONST', 'value_const'=>'Search by value constant');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LANGUAGE_MANAGER_SYS_TYPE', 'value_const'=>'Sys type');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE', 'value_const'=>'Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_FEATURED_MANAGER', 'value_const'=>'RealEstateManager : Features Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE', 'value_const'=>'Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY', 'value_const'=>'Category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_NAME_ALIAS', 'value_const'=>'Name Alias');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_CATEGORY_ALIAS', 'value_const'=>'Category Alias');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_FEATURE_MANAGER', 'value_const'=>'Features manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_IMAGE', 'value_const'=>'Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_REMOVE', 'value_const'=>'Select photo if it is necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FEATURED_MANAGER_RECOMMENDED_IMAGE', 'value_const'=>'Recommended image size 25 x 25 pixels');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES', 'value_const'=>'Categories for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_BODY', 'value_const'=>'Category must be entered, separated by commas');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_TT_HEAD', 'value_const'=>'Categories for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE', 'value_const'=>'Show Feature Icon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE_TT_BODY', 'value_const'=>'Show Feature Icon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_IMAGE_TT_HEAD', 'value_const'=>'If choose "yes" then show Icon for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW', 'value_const'=>'Show title of Category Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_BODY', 'value_const'=>'Show title of Category Features');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_MANAGER_FEATURE_CATEGORIES_SHOW_TT_HEAD', 'value_const'=>'If choose "yes" then show title categories for Manager Feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY', 'value_const'=>'Currency');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_BODY', 'value_const'=>'If you want to use other currencies, enter the values as: USD = 1; EUR = 3.15; or USD=; EUR=; Available for paypal currencies: AUD, CAD, CZK, DKK, EUR, HKD, HUF, JPY, NOK, NZD, PLN, SGD, SEK, CHF, USD ,RUB.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CURRENCY_TT_HEAD', 'value_const'=>'Currency with coefficients');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW', 'value_const'=>'Show price sepaprator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_BODY', 'value_const'=>'Show price sepaprator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SALE_SEPARATOR_SHOW_TT_HEAD', 'value_const'=>'Show price sepaprator');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_GEOCOOR', 'value_const'=>'Get geographic coordinates');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA1_SHOW', 'value_const'=>'Show Custom Text Field 1');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA2_SHOW', 'value_const'=>'Show Custom Text Field 2');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA3_SHOW', 'value_const'=>'Show Custom Text Field 3');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA4_SHOW', 'value_const'=>'Show Custom Text Field 4');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA5_SHOW', 'value_const'=>'Show Custom Text Field 5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA6_SHOW', 'value_const'=>'Show Custom Dropdown Field 6');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA7_SHOW', 'value_const'=>'Show Custom Dropdown Field 7');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA8_SHOW', 'value_const'=>'Show Custom Dropdown Field 8');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA9_SHOW', 'value_const'=>'Show Custom Dropdown Field 9');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA10_SHOW', 'value_const'=>'Show Custom Dropdown Field 10');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA', 'value_const'=>'Custom Fields Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA1', 'value_const'=>'Custom Text 1');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA2', 'value_const'=>'Custom Text 2');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA3', 'value_const'=>'Custom Text 3');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA4', 'value_const'=>'Custom Text 4');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA5', 'value_const'=>'Custom Text 5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA6', 'value_const'=>'Custom Dropdown Field 6');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA7', 'value_const'=>'Custom Dropdown Field 7');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA8', 'value_const'=>'Custom Dropdown Field 8');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA9', 'value_const'=>'Custom Dropdown Field 9');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_EXTRA10', 'value_const'=>'Custom Dropdown Field 10');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA6_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA7_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA8_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA9_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EXTRA10_SELECTLIST', 'value_const'=>'Extra1,Extra2,Extra3,Extra4,Extra5');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS', 'value_const'=>'Allowed Exts eDocument');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXTS_IMG', 'value_const'=>'Allowed Exts Image');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_PAGE_LAYOUT', 'value_const'=>'House Page Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALL_HOUSES_LAYOUT', 'value_const'=>'All Houses Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT', 'value_const'=>'Price Format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT_TT_BODY', 'value_const'=>'Choose format of price (point, comma or space) or enter your delimiter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_TIME_FORMAT', 'value_const'=>'Date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_FORMAT', 'value_const'=>'Date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE_FORMAT_INFO', 'value_const'=>'Reorder date formats to set your date display format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TIME_FORMAT', 'value_const'=>'Time format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_DATE', 'value_const'=>'%Y - Year; %m - month;  %d - day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TIME', 'value_const'=>'%H - hours; %i - minutes; %s - seconds');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW', 'value_const'=>'Price unit show');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_AFTER', 'value_const'=>'After');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_BEFORE', 'value_const'=>'Before');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PRICE_FORMAT_INFO', 'value_const'=>'Select price ditlimer os set youre.');
$constLang[] = array('const'=>'_REALESTATE_PRICE_UNIT_SHOW_INFO', 'value_const'=>'Show price unit before or affter price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CUSTOM_OWNER_EMAIL', 'value_const'=>'Custom owneremail');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_SHOW_ADDRESS', 'value_const'=>'Show adderess on map');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUTTON_ADD_NEW_PHOTO', 'value_const'=>'Add new photo');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_ORDER_BY', 'value_const'=>'Order By');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_TO_REMOVE', 'value_const'=>'Select photo if it is necessary to remove');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_PHOTO_FROM_GALLERY', 'value_const'=>'Select photos which are necessary to remove from photo gallery');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_FOR_ADDFEATURE', 'value_const'=>'A short name to appear in FeatureMenus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_1_FOR_ADDCATEGORY', 'value_const'=>'A short name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TITLE_TO_TEXTAREA_2_FOR_ADDCATEGORY', 'value_const'=>'A full name to appear in menus');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_GENERAL_INFO', 'value_const'=>'General Info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_ADDITIONAL_INFO', 'value_const'=>'Additional Info');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_PHOTOS_AND_DOCUMENTS', 'value_const'=>'Photos and Documents');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_TAB_OWNER_CONTACTS', 'value_const'=>'Owner Contakts');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_1', 'value_const'=>'Categories for Feature Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_FEATURE_TAB_2', 'value_const'=>'Feature List');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_1', 'value_const'=>'House Page Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_2', 'value_const'=>'Category Page Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_3', 'value_const'=>'Email and Notification Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_4', 'value_const'=>'Administrator Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS_TAB_5', 'value_const'=>'Plugins Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_IMAGE_HEADER_SETTINGS', 'value_const'=>'House Image Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TABS_MANAGER_HEADER_SETTINGS', 'value_const'=>'Tabs Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HEADER_LABEL_SELLER_CONTACT_SETTINGS', 'value_const'=>'Seller Contact Settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_FEATURE_LIST_SETTINGS', 'value_const'=>'Feature list settings');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EXTRA_FIELDS_MANAGER', 'value_const'=>'Extra Fields manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EDOCUMENT_OPTIONS', 'value_const'=>'eDocument Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_COMMON_SETTINGS', 'value_const'=>'Button Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_RENT_REQUEST_OPTIONS', 'value_const'=>'Rent Request Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_BUY_REQUEST_OPTIONS', 'value_const'=>'Buy Request Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_ADD_HOUSE', 'value_const'=>'{title}
      [PropertyID]: {id}<br>
      A new house was added by {username}<br>
      on {date} to category {category}.<br>
      Please log on and approve or deny this item.<br>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_REVIEW', 'value_const'=>'User {username} has added a Review to house:<br>{house_title}<br>
      Title Comment: {title}<br>
      Label Rating: [{rating}]<br>
      Review Comment:<br> {comment}<br>
      Please log on and edit this review where necessary.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_REQUEST', 'value_const'=>"User {username} has submitted a Rent Request for:<br>
      PropertyID: {hid_value}<br>
      {house_title}<br>
      Please log on and approve or deny this Rent Request");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_REQUEST_ANSWER', 'value_const'=>"Answer for your request:<br>
      Dear {username}!<br>
      Your rent request for<br>
      {title} {owneremail} {ownername}<br>
      Answer: {answer}");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST', 'value_const'=>"
      User {username}  has submitted a Buying Request for:<br>
      PropertyID: {hid_value}<br>
      {house_title}<br>
      Please log on and approve or deny this Buying Request");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_BUYING_REQUEST_ANSWER', 'value_const'=>"Dear {username}!<br>
      Your buy request for<br>
      {title} {owneremail} {ownername}<br>
      Answer: {answer}<br>");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_EMAIL_NOTIFICATION_RENT_BEFORE_END', 'value_const'=>
      "Rent User: {username}({user_email})<br>
      House: {house_title}<br>
      House ID: {ID}<br>
      PropertyID: {PropertyID}<br>");
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br>{house_title} - title of added house
          <br>{username} - the name of the user who added a house
          <br>{hid_value} - identification number of the house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION_TT_BODY', 'value_const'=>'Past particular tags in "Send Buy Request Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_DESCRIPTION_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br/>{house_title} - title of added house
          <br>{username} - the name of the user who added a house <br>{user_email} - email of the user who rents the house
          <br>{vid} - identification number of the house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION_TT_BODY', 'value_const'=>'Past particular tags in "Rent before end notify",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_BEFORE_END_NOTIFY_DESCRIPTION_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_DESCRIPTION', 'value_const'=>'You can use this tags in your letter:<br>{house_title} - title of added house
          <br>{username} - the name of the user who added a house
          <br>{hid_value} - identification number of the house<br>');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_TT_BODY', 'value_const'=>'Past particular tags in "Send Rent Request Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_REQUEST_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_DESCRIPTION', 'value_const'=>'You can use this tags in your letter: <br>{title} - title of added house
          {id} - identification number of the house
          <br>{username} - the name of the user who added a house
          <br>{date} - date when house was added<br>{category} - category which the house was added in');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_TT_BODY', 'value_const'=>'Past particular tags in "Send Add House Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_HOUSE_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_DESCRIPTION', 'value_const'=>'You can use this tags in your letter: <br>{username} - name of the user,what added a review
          <br>{house_title} - title of review house
          <br>{title} - title of the comment, {rating} - rating of the comment,
          <br>{comment} - body of the comment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_TT_BODY', 'value_const'=>'Past particular tags in "Send Review Notification",and you recive necessary data in your letter');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_ADD_REVIEW_TT_HEAD', 'value_const'=>'Tags Description');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_SHOW_MY_HOUSES', 'value_const'=>'show my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_EDIT_MY_HOUSES', 'value_const'=>'edit my houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_RENT_REQUESTS', 'value_const'=>'rent requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SHOW_TABS_BUYING_REQUESTS', 'value_const'=>'buying requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALL_CATEGORIES_LAYOUT_TT_HEAD', 'value_const'=>'All Categories Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SINGLE_CATEGORY_LAYOUT_TT_HEAD', 'value_const'=>'Single Category Layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SEARCH_LAYOUT_TT_HEAD', 'value_const'=>'Search layout');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_BODY', 'value_const'=>'Select which extra text fields, you want to display');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_TEXT_TT_HEAD', 'value_const'=>'Text field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_BODY', 'value_const'=>'Select which extra dropdown fields, you want to display');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_EXTRA_DROPDOWN_TT_HEAD', 'value_const'=>'Dropdown field');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_REVIEW_LABEL_PUBLISHED', 'value_const'=>'Published');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD', 'value_const'=>'Approve review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD_TT_BODY', 'value_const'=>'Chose YES if you want to publish added review automatically');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_ON_ADD_TT_HEAD', 'value_const'=>'Publish review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL', 'value_const'=>'Allow publish');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL_TT_BODY', 'value_const'=>'Allow publish to usergroup');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_PUBLISH_REVIEW_REGISTRATIONLEVEL_TT_HEAD', 'value_const'=>'Chose the usergroup who can publish added review automatically');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_LICENSE_TEXT', 'value_const'=>'License text');                                
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_REQUESTS', 'value_const'=>'Rent Requests');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SALE_MANAGER_MENU', 'value_const'=>'Sale Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMPORT_EXPORT', 'value_const'=>'Import/Export');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_MENU', 'value_const'=>'Language Manager');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_SETTINGS', 'value_const'=>'Réglages');

$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_GROUP', 'value_const'=>'Group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_COUNT_OF_ITEMS', 'value_const'=>'Count of houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_COUNT_OF_ITEMS_HELP', 'value_const'=>'How many houses users can publish from a specific group.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY', 'value_const'=>'Show buy for booking');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALLOW_PAYPAL_BUY', 'value_const'=>'Allow PayPal buy');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_RENT', 'value_const'=>'Show PayPal rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALLOW_PAYPAL_RENT', 'value_const'=>'Allow PayPal rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_YOUR_PAY_PAL_EMAIL', 'value_const'=>'Your PayPal email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SUCCESSFUL_RETURN', 'value_const'=>'Successful return url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_SUCCESSFUL_RETURN', 'value_const'=>'After successful payment returns the buyer on your page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_IMAGE_URL_PAYPAL', 'value_const'=>'Image url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_IMAGE_URL_PAYPAL', 'value_const'=>'Add image to PayPal page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CANCEL_RETURN_URL', 'value_const'=>'Cancel return url');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_AFTER_CANCEL_RETURN_URL', 'value_const'=>'If buyer press cancel in payment page, returns the buyer on your page.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REAL_OF_TEST', 'value_const'=>'Real(yes) or a test(no) PayPal account');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_REAL_OF_TEST_LABLE', 'value_const'=>'If real go to www.paypal.com else go to www.sandbox.paypal.com');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_PAYPAL_LABLE', 'value_const'=>'PayPal Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NUMBER_OF_PHOTOS', 'value_const'=>'Number of photos');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NUMBER_OF_PHOTOS_HELP', 'value_const'=>'How many photos in gallery users can publish from a specific group.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TOTAL_PRICE', 'value_const'=>'Total price: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_NOW_BY_PAYPAL', 'value_const'=>'Go now to PayPal');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_INSTALL_PAYPAL', 'value_const'=>'Payment plugin is not installed');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE', 'value_const'=>'Special price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_DAY', 'value_const'=>'Special price per day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_PER_NIGHT', 'value_const'=>'Special price per night');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_ADD_SPECIAL_PRICE', 'value_const'=>'Add new special price and save');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FROM', 'value_const'=>'From');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TO', 'value_const'=>'To');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_PRICE_PER_DAY', 'value_const'=>'Price per day');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_CALCULATE', 'value_const'=>'Сalculate');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_AND_RENT_TIME', 'value_const'=>'Special price and rent time');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO', 'value_const'=>'Special price per day("yes") or per night("no")');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_SPECIAL_PRICE_YES_NO_HELP', 'value_const'=>'if per day calculation all day(example of 2014-02-10 from 2014-02-16 is 7 days) if per night calculation all night (example of 2014-02-10 from 2014-02-16 is 6 nights)');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_PER_NIGHT', 'value_const'=>'Nights');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_IMAGES', 'value_const'=>'Images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXT_DOC', 'value_const'=>'Type the allowed extensions of eDocuments ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ALLOWED_EXT_IMAGES', 'value_const'=>'Type the allowed extensions of Images');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_TAB_LABEL_PRICE', 'value_const'=>'Pay');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_LANGUAGE_NAME', 'value_const'=>'Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SELECT_LANGUAGE', 'value_const'=>'Select Language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_LABEL_CLON', 'value_const'=>'Clone');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ABOUT_ORDERS', 'value_const'=>'Orders');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSE_MARKER', 'value_const'=>'/images/marker-1.png,/images/marker-2.png,/images/marker-3.png,/images/marker-4.png,/images/marker-5.png,/images/marker-6.png,/images/marker-7.png,/images/marker-8.png,/images/marker-9.png,/images/marker-10.png,/images/marker-11.png,/images/marker-12.png,/images/marker-13.png');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CANCEL_URL_TEXT', 'value_const'=>'Message for unsuccessfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SUCCESSES_URL_TEXT', 'value_const'=>'Message for successfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_CANCEL_URL_TEXT_TT_BODY', 'value_const'=>'Insert the Message on page with notification about unsuccessfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SUCCESSES_URL_TEXT_TT_BODY', 'value_const'=>'Insert the Message on page with notification about successfull payment');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_EMAIL_NOTIFICATION_OPTIONS', 'value_const'=>'Email Notification Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_REVIEW_NOTIFICATION_OPTIONS', 'value_const'=>'Review Notification Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_LABEL_PRICE_OPTIONS', 'value_const'=>'Price Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_DATE_TIME_OPTIONS', 'value_const'=>'Date Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_GROUP_SETTINGS', 'value_const'=>'Groups Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_EXTENSIONS_SETTINGS', 'value_const'=>'Extension Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_UPDATE_SETTINGS', 'value_const'=>'Update Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_SETTINGS_HEADER_CATEGORY_OPTIONS', 'value_const'=>'Category Options');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_VIEW_LISTING', 'value_const'=>'Voir les annonces');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE', 'value_const'=>'Taille de la photo pour aper u maisons');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_CATEGORY_PHOTO_SIZE_TT_BODY', 'value_const'=>'R gler la taille de la photo pour une vue tous les maisons et les cat gories simples');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_BUY_EMAIL_TT_BODY', 'value_const'=>'Email address for notifications about sending messages.');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SELECT_ONE_ITEM', 'value_const'=>'Please select one item');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_ALERT_RETURNED', 'value_const'=>'House already returned');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_RENT_ASSOCIATED', 'value_const'=>'Error in rent, for associated');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ALERT_NOT_IN_RENT', 'value_const'=>'You cannot return houses that were not lent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_FOR_RENT_ASOC', 'value_const'=>'This house has assitiated house not for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_FOR_RENT', 'value_const'=>'This house is not for rent');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_BAD_DATE_ALERT', 'value_const'=>'Bad date format');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_NOT_CORRECT_CURRENCY', 'value_const'=>'Please select the correct currency value');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CLON_ALERT', 'value_const'=>'You can clon only one house');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_REVIEW_ALERT', 'value_const'=>'Please select one review for edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_CTEGORY_ALERT', 'value_const'=>'Select a category to delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_ITEM_ALERT', 'value_const'=>'You must select only one item for edit');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_ONE_AMENITY_ALERT', 'value_const'=>'Select an amenity to delete');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_HOUSE_NOT_IN_RENT', 'value_const'=>'You edit houses that were not lent out');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_SUCCESSFULL_PAYMENT', 'value_const'=>'You do success payment!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_UNSUCCESSFULL_PAYMENT', 'value_const'=>'You do unsuccess payment!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MESSAGE_INSTALL_PLUGIN', 'value_const'=>'Please install plugin of payment to enable payment feature');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PLUGIN', 'value_const'=>'Plugin');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_RENT_URL', 'value_const'=>'Send email to admin before Booking end.<br /> For that you need create CRON job and connect to Cron check so URL:<br /> http://{yours site}/index.php?option=com_realestatemanager&Itemid={Yours ItemID}&task=rent_before_end_notify  with span - every day.<br /> Cron Jobs may look like:<br/> "wget -q -O - http://localhost/index.php?option=com_realestatemanager&Iteid=56&task=rent_before_end_notify /dev/null');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA', 'value_const'=>'Show captcha option');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH', 'value_const'=>'Show search');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_CAPTCHA_TT_BODY', 'value_const'=>'Display captcha option in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SHOW_SEARCH_TT_BODY', 'value_const'=>'Display search block in the frontend');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SIZE_SUFFIX', 'value_const'=>'Sqrt');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW', 'value_const'=>'Show subcategory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_HEAD', 'value_const'=>'Show subcategory');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_CONFIG_SUBCATEGORY_SHOW_TT_BODY', 'value_const'=>'If set to YES, you will see subcategory for every category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_SALE', 'value_const'=>'Show buy for sale');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_SALE_TT_BODY', 'value_const'=>'Show buy form after sale request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ADMIN_SHOW_PAYPAL_BUY_TT_BODY', 'value_const'=>'Show buy form after book request');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_PICTURE_FILE_NOT_ALLOWED', 'value_const'=>'File ext. not allowed to upload!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANG_ASSOCIATE_HOUSES', 'value_const'=>'Language associate houses');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LANG_ASSOCIATE_CATEGORIES', 'value_const'=>'Language associate categories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FOR_HOUSES_WITH_LANG', 'value_const'=>'This property only for houses with language');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YOU_HAVE', 'value_const'=>'You have');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MAXIMUM_COUNT_HOUSE_FOR_YOUR', 'value_const'=>'maximum count house for your group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_TO_ADD_SPRICE_YOU_NEED', 'value_const'=>'To add special prices, you must first save property !');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MAX_PHOTOS_LIMIT', 'value_const'=>'You have max photos. Limit for this users group');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NO_NUMERIC_PROPERTYID_WARNING', 'value_const'=>'You have no numeric PropertyId. Please change all PropertyID to numeric or set to <No> option');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_INFOTEXT_JS_INVALID_NUMBER', 'value_const'=>'Please enter a valid Number!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_FILE_MIME_TYPE_NOT_MATCH', 'value_const'=>'File mime type not match file ext');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_YOU_CAN_PUBLISH_ONLY', 'value_const'=>'You can publish only');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PLEASE_LOGIN', 'value_const'=>'Please login');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_HOUSE_ADDED', 'value_const'=>'New house added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_BUYING_REQUEST_ADDED', 'value_const'=>'New buying request added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_REVIEW_ADDED', 'value_const'=>'New house review added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_NEW_RENT_REQUEST_ADDED', 'value_const'=>'New rent request added');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_RENT_EXPIRE_NOTICE', 'value_const'=>'Rent expire notice');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_HOUSES_EXPIRE_NOTICE', 'value_const'=>'So houses rent expire soon');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_FETCHED_SUBCATEGORIES', 'value_const'=>'Subcategories');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_APPLY', 'value_const'=>'Apply');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_SAVE_CATEGORY', 'value_const'=>'Save category');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_LABEL_DELETE_ORDER', 'value_const'=>'Delete Order');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_MUST_RETURN_HOUSES_FROM_RENT', 'value_const'=>'You must return all houses from rent first!');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_ID', 'value_const'=>'Order ID');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_TITLE', 'value_const'=>'House title');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_EMAIL', 'value_const'=>'Email');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DATE', 'value_const'=>'Date');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_STATUS', 'value_const'=>'Status');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_PRICE', 'value_const'=>'Price');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_PAID', 'value_const'=>'Paid');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DETAILS', 'value_const'=>'Details');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_USER', 'value_const'=>'User');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_USER_NAME', 'value_const'=>'Username');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_ACCEPT', 'value_const'=>'Accept type/info: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_SYSTEM', 'value_const'=>'Payment system: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_EMAIL', 'value_const'=>'Payer email: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_ORDERS_DET_REASON', 'value_const'=>'Pending reason: ');
$constLang[] = array('const'=>'_REALESTATE_MANAGER_PAYPAL_ERROR', 'value_const'=>'In your request encountered an error, please contact the administrator!');
