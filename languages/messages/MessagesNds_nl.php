<?php
/** Low Saxon (Netherlands) (Nedersaksies)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Erwin
 * @author Erwin85
 * @author Geitost
 * @author HanV
 * @author Jens Frank
 * @author Kaganer
 * @author Purodha
 * @author Servien
 * @author Sjoerddebruin
 * @author Slomox
 * @author Urhixidur
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @author לערי ריינהארט
 */

$fallback = 'nl';

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Spesiaal',
	NS_TALK             => 'Overleg',
	NS_USER             => 'Gebruker',
	NS_USER_TALK        => 'Overleg_gebruker',
	NS_PROJECT_TALK     => 'Overleg_$1',
	NS_FILE             => 'Bestaand',
	NS_FILE_TALK        => 'Overleg_bestaand',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Overleg_MediaWiki',
	NS_TEMPLATE         => 'Mal',
	NS_TEMPLATE_TALK    => 'Overleg_mal',
	NS_HELP             => 'Hulpe',
	NS_HELP_TALK        => 'Overleg_hulpe',
	NS_CATEGORY         => 'Kategorie',
	NS_CATEGORY_TALK    => 'Overleg_kategorie',
);

$namespaceAliases = array(
	'Speciaol'           => NS_SPECIAL,
	'Speciaal'           => NS_SPECIAL,
	'Sjabloon'           => NS_TEMPLATE,
	'Overleg_sjabloon'   => NS_TEMPLATE_TALK,
	'Ofbeelding'         => NS_FILE,
	'Overleg_ofbeelding' => NS_FILE_TALK,
	'Categorie'          => NS_CATEGORY,
	'Overleg_categorie'  => NS_CATEGORY_TALK,
	'Kattegerie'         => NS_CATEGORY,
	'Overleg_kattegerie' => NS_HELP_TALK,
);

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'M j, Y',
	'mdy both' => 'H:i, M j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'H:i, j M Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'H:i, Y M j',
);

$bookstoreList = array(
	'Koninklijke Bibliotheek' => 'http://opc4.kb.nl/DB=1/SET=5/TTL=1/CMD?ACT=SRCH&IKT=1007&SRT=RLV&TRM=$1'
);

#!!# Translation <b>HLEERSTE:</b> is used more than once for <a href="#mw-sp-magic-lcfirst">lcfirst</a> and <a href="#mw-sp-magic-ucfirst">ucfirst</a>.
$magicWords = array(
	'redirect'                  => array( '0', '#DEURVERWIEZING', '#DUURVERWIEZING', '#DOORVERWIJZING', '#REDIRECT' ),
	'notoc'                     => array( '0', '__GIENONDERWARPEN__', '__GEENINHOUD__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__GIENGALLERIEJE__', '__GIENGALDERIEJE__', '__GEEN_GALERIJ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__FORSEERONDERWARPEN_', '__INHOUD_DWINGEN__', '__FORCEERINHOUD__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__ONDERWARPEN__', '__INHOUD__', '__TOC__' ),
	'noeditsection'             => array( '0', '__GIENBEWARKSEKSIE__', '__NIETBEWERKBARESECTIE__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'DISSEMAOND', 'DISSEMAOND2', 'HUIDIGEMAAND', 'HUIDIGEMAAND2', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'DISSEMAOND1', 'HUIDIGEMAAND1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'DISSEMAONDNAAM', 'HUIDIGEMAANDNAAM', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'DISSEMAONDGEN', 'HUIDIGEMAANDGEN', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'DISSEMAONDAOFK', 'HUIDIGEMAANDAFK', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'DISSEDAG', 'HUIDIGEDAG', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'DISSEDAG2', 'HUIDIGEDAG2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'DISSEDAGNAAM', 'HUIDIGEDAGNAAM', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'DITJAOR', 'HUIDIGJAAR', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'DISSETIED', 'HUIDIGETIJD', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'DITURE', 'HUIDIGUUR', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'LOKALEMAOND', 'PLAATSELIJKEMAAND', 'LOKALEMAAND', 'LOKALEMAAND2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'LOKALEMAOND1', 'LOKALEMAAND1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'LOKALEMAONDNAAM', 'PLAATSELIJKEMAANDNAAM', 'LOKALEMAANDNAAM', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'LOKALEMAONDNAAMGEN', 'PLAATSELIJKEMAANDNAAMGEN', 'LOKALEMAANDNAAMGEN', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'LOKALEMAONDAOFK', 'PLAATSELIJKEMAANDAFK', 'LOKALEMAANDAFK', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'LOKALEDAG', 'PLAATSELIJKEDAG', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'LOKALEDAG2', 'PLAATSELIJKEDAG2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'LOKALEDAGNAAM', 'PLAATSELIJKEDAGNAAM', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'LOKAALJAOR', 'PLAATSELIJKJAAR', 'LOKAALJAAR', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'LOKALETIED', 'PLAATSELIJKETIJD', 'LOKALETIJD', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'LOKAALURE', 'PLAATSELIJKUUR', 'LOKAALUUR', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'ANTALZIEJEN', 'AANTALPAGINAS', 'AANTALPAGINA\'S', 'AANTALPAGINA’S', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'ANTALARTIKELS', 'AANTALARTIKELEN', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'ANTALBESTANDEN', 'AANTALBESTANDEN', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'ANTALGEBRUKERS', 'AANTALGEBRUIKERS', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'ANTALAKTIEVEGEBRUKERS', 'AANTALACTIEVEGEBRUIKERS', 'ACTIEVEGEBRUIKERS', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'ANTALBEWARKINGEN', 'AANTALBEWERKINGEN', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'ANTALKERENBEKEKEN', 'AANTALKERENBEKEKEN', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'ZIEDNAAM', 'PAGINANAAM', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'ZIEDNAAME', 'PAGINANAAME', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'NAAMRUUMTE', 'NAAMRUIMTE', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'NAAMRUUMTEE', 'NAAMRUIMTEE', 'NAMESPACEE' ),
	'namespacenumber'           => array( '1', 'NAAMRUUMTENUMMER', 'NAAMRUIMTENUMMER', 'NAMESPACENUMBER' ),
	'talkspace'                 => array( '1', 'OVERLEGRUUMTE', 'OVERLEGRUIMTE', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'OVERLEGRUUMTEE', 'OVERLEGRUIMTEE', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ONDERWARPRUUMTE', 'ARTIKELRUUMTE', 'ONDERWERPRUIMTE', 'ARTIKELRUIMTE', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ONDERWARPRUUMTEE', 'ARTIKELRUUMTEE', 'ONDERWERPRUIMTEE', 'ARTIKELRUIMTEE', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'HELEZIEDNAAM', 'VOLLEDIGEPAGINANAAM', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'HELEZIEDNAAME', 'VOLLEDIGEPAGINANAAME', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'DEELZIEDNAAM', 'DEELPAGINANAAM', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'DEELZIEDNAAME', 'DEELPAGINANAAME', 'SUBPAGENAMEE' ),
	'rootpagename'              => array( '1', 'ROOTZIEDNAAM', 'ROOTPAGINANAAM', 'ROOTPAGENAME' ),
	'rootpagenamee'             => array( '1', 'ROOTZIEDNAAME', 'ROOTPAGINANAAME', 'ROOTPAGENAMEE' ),
	'basepagename'              => array( '1', 'BAOSISPAGINANAAM', 'BASISPAGINANAAM', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'BAOSISPAGINANAAME', 'BASISPAGINANAAME', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'OVERLEGPAGINANAAM', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'OVERLEGPAGINANAAME', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'ONDERWARPZIEDNAAM', 'ARTIKELZIEDNAAM', 'ONDERWERPPAGINANAAM', 'ARTIKELPAGINANAAM', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'ONDERWARZIEDNAAME', 'ARTIKELZIEDNAAME', 'ONDERWERPPAGINANAAME', 'ARTIKELPAGINANAAME', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'BERICHT:', 'MSG:' ),
	'subst'                     => array( '0', 'VERVANG:', 'VERV:', 'SUBST:' ),
	'msgnw'                     => array( '0', 'BERICHTNW', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'duum', 'doem', 'miniatuur', 'mini', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniatuur=$1', 'duumnegel=$1', 'doemnaegel=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'rechts', 'right' ),
	'img_left'                  => array( '1', 'links', 'left' ),
	'img_none'                  => array( '1', 'gien', 'geen', 'none' ),
	'img_center'                => array( '1', 'esentreerd', 'gecentreerd', 'center', 'centre' ),
	'img_framed'                => array( '1', 'umraand', 'omkaderd', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'kaoderloos', 'kaderloos', 'frameless' ),
	'img_page'                  => array( '1', 'zied=$1', 'zied_$1', 'pagina=$1', 'pagina $1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'rechtop', 'rechtop=$1', 'rechtop$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'raand', 'rand', 'border' ),
	'img_baseline'              => array( '1', 'grondliende', 'grondlijn', 'baseline' ),
	'img_top'                   => array( '1', 'boven', 'top' ),
	'img_text_top'              => array( '1', 'tekste-boven', 'tekst-boven', 'text-top' ),
	'img_middle'                => array( '1', 'midden', 'middle' ),
	'img_bottom'                => array( '1', 'benejen', 'beneden', 'bottom' ),
	'img_text_bottom'           => array( '1', 'tekste-benejen', 'tekst-beneden', 'text-bottom' ),
	'img_link'                  => array( '1', 'verwiezing=$1', 'koppeling=$1', 'verwijzing=$1', 'link=$1' ),
	'sitename'                  => array( '1', 'WEBSTEENAAM', 'SITENAAM', 'SITENAME' ),
	'ns'                        => array( '0', 'NR:', 'NS:' ),
	'localurl'                  => array( '0', 'LOKALEURL', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'LOKALEURLE', 'LOCALURLE:' ),
	'servername'                => array( '0', 'SERVERNAAM', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'SKRIPTPAD', 'SCRIPTPAD', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'STIELPAD', 'STIJLPAD', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'GRAMMATIKA:', 'GRAMMATICA:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'GESLACHTE:', 'GESLACHT:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__GIENTITELKONVERSIE__', '__GIENTK__', '__GEENPAGINANAAMCONVERSIE__', '__GEENTITELCONVERSIE__', '__GEENTC__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__GIENINHOUDKONVERSIE__', '__GIENIK__', '__GEENINHOUDCONVERSIE__', '__GEENIC__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'DISSEWEKE', 'HUIDIGEWEEK', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'DISSEDVDW', 'HUIDIGEDVDW', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'LOKALEWEKE', 'PLAATSELIJKEWEEK', 'LOKALEWEEK', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'LOKALEDVDW', 'PLAATSELIJKEDVDW', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'VERSIEID', 'REVISIONID' ),
	'revisionday'               => array( '1', 'VERSIEDAG', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'VERSIEDAG2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'VERSIEMAOND', 'VERSIEMAAND', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'VERSIEMAOND1', 'VERSIEMAAND1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'VERSIEJAOR', 'VERSIEJAAR', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'VERSIETIEDSTEMPEL', 'VERSIETIJD', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'VERSIEGEBRUKER', 'VERSIEGEBRUIKER', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'MEERVOUD:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'HELEURL', 'VOLLEDIGEURL:', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'HELEURLE', 'VOLLEDIGEURLE:', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'KLEERSTE:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'GLEERSTE:', 'HLEERSTE:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'KL:', 'LC:' ),
	'uc'                        => array( '0', 'HL:', 'UC:' ),
	'raw'                       => array( '0', 'RAUW:', 'RUW:', 'RAW:' ),
	'displaytitle'              => array( '1', 'TEUNTITEL', 'WEERGEGEVENTITEL', 'TOONTITEL', 'DISPLAYTITLE' ),
	'nocommafysuffix'           => array( '0', 'GIENSCHEIDINGSTEKEN', 'GEENSCHEIDINGSTEKEN', 'NOSEP' ),
	'newsectionlink'            => array( '1', '__NIEJESEKSIEVERWIEZING__', '__NIEUWESECTIELINK__', '__NIEUWESECTIEKOPPELING__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__GIENNIEJKOPJENVERWIEZING__', '__GEENNIEUWKOPJEKOPPELING__', '__GEENNIEUWESECTIELINK__', '__GEENNIEUWKOPJEVERWIJZING__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'DISSEVERSIE', 'HUIDIGEVERSIE', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'URLKODEREN', 'URLCODEREN', 'CODEERURL', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'ANKERKODEREN', 'ANKERCODEREN', 'CODEERANKER', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'DISSETIEDSTEMPEL', 'HUIDIGETIJDSTEMPEL', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'LOKALETIEDSTEMPEL', 'PLAATSELIJKETIJDSTEMPEL', 'LOKALETIJDSTEMPEL', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'RICHTINGMARKERING', 'RICHTINGSMARKERING', 'DIRECTIONMARK', 'DIRMARK' ),
	'language'                  => array( '0', '#TAAL:', '#LANGUAGE:' ),
	'contentlanguage'           => array( '1', 'INHOUDSTAAL', 'INHOUDTAAL', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'ZIEJENINNAAMRUUMTE', 'PAGINASINNAAMRUIMTE', 'PAGINA’SINNAAMRUIMTE', 'PAGINA\'SINNAAMRUIMTE', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'ANTALBEHEERDERS', 'AANTALBEHEERDERS', 'AANTALADMINS', 'NUMBEROFADMINS' ),
	'formatnum'                 => array( '0', 'FORMATTEERNUM', 'NUMFORMATTEREN', 'FORMATNUM' ),
	'padleft'                   => array( '0', 'LINKSOPVULLEN', 'PADLEFT' ),
	'padright'                  => array( '0', 'RECHTSOPVULLEN', 'PADRIGHT' ),
	'special'                   => array( '0', 'spesiaal', 'speciaal', 'special' ),
	'defaultsort'               => array( '1', 'STANDARDSORTERING:', 'STANDAARDSORTERING:', 'DEFAULTSORT:', 'DEFAULTSORTKEY:', 'DEFAULTCATEGORYSORT:' ),
	'filepath'                  => array( '0', 'BESTAANDSPAD:', 'BESTANDSPAD:', 'FILEPATH:' ),
	'tag'                       => array( '0', 'etiket', 'label', 'tag' ),
	'hiddencat'                 => array( '1', '__VERBÖRGENKAT__', '__VERBORGENCAT__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'ZIEJENINKATEGORIE', 'PAGINASINCATEGORIE', 'PAGINASINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'ZIEDGROOTTE', 'PAGINAGROOTTE', 'PAGESIZE' ),
	'noindex'                   => array( '1', '__GIENINDEX__', '__GEENINDEX__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'ANTALINGROEP', 'AANTALINGROEP', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__STAOTIESEDEURVERWIEZING__', '__STATISCHEDOORVERWIJZING__', '__STATISCHEREDIRECT__', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'BEVEILIGINGSNIVO', 'BEVEILIGINGSNIVEAU', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'daotumopmaak', 'datumopmaak', 'formatdate', 'dateformat' ),
	'url_query'                 => array( '0', 'ZEUKOPDRACHTE', 'ZOEKOPDRACHT', 'QUERY' ),
	'defaultsort_noerror'       => array( '0', 'gienfout', 'geenfout', 'noerror' ),
	'pagesincategory_pages'     => array( '0', 'ziejen', 'paginas', 'pages' ),
	'pagesincategory_subcats'   => array( '0', 'onderkategorieen', 'ondercategorieen', 'subcats' ),
	'pagesincategory_files'     => array( '0', 'bestaanden', 'bestanden', 'files' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'Aktieve_gebrukers' ),
	'Allmessages'               => array( 'Alle_systeemteksten' ),
	'Allpages'                  => array( 'Alle_ziejen' ),
	'Ancientpages'              => array( 'Oudste_ziejen' ),
	'Badtitle'                  => array( 'Verkeerde_ziednaam' ),
	'Blankpage'                 => array( 'Lege_zied' ),
	'Block'                     => array( 'Blokkeren' ),
	'Booksources'               => array( 'Boekinformasie' ),
	'BrokenRedirects'           => array( 'Ebreuken_deurverwiezingen' ),
	'Categories'                => array( 'Kategorieën' ),
	'ChangeEmail'               => array( 'Netpost_wiezigen' ),
	'ChangePassword'            => array( 'Wachtwoord_wiezigen' ),
	'ComparePages'              => array( 'Ziejen_vergelieken' ),
	'Confirmemail'              => array( 'Netpost_bevestigen' ),
	'Contributions'             => array( 'Biedragen' ),
	'CreateAccount'             => array( 'Gebruker_anmaken' ),
	'Deadendpages'              => array( 'Gien_verwiezingen' ),
	'DeletedContributions'      => array( 'Vort-edaone_gebrukersbiedragen' ),
	'DoubleRedirects'           => array( 'Dubbele_deurverwiezingen' ),
	'EditWatchlist'             => array( 'Volglieste_bewarken' ),
	'Emailuser'                 => array( 'Bericht_sturen' ),
	'ExpandTemplates'           => array( 'Mallen_substitueren' ),
	'Export'                    => array( 'Uutvoeren' ),
	'Fewestrevisions'           => array( 'Minste_bewarkingen' ),
	'FileDuplicateSearch'       => array( 'Dubbele_bestaanden_zeuken' ),
	'Filepath'                  => array( 'Bestaandslokasie' ),
	'Import'                    => array( 'Invoeren' ),
	'Invalidateemail'           => array( 'Netpost_ongeldig' ),
	'BlockList'                 => array( 'IP-blokkeerlieste' ),
	'LinkSearch'                => array( 'Verwiezingen_zeuken' ),
	'Listadmins'                => array( 'Beheerderslieste' ),
	'Listbots'                  => array( 'Botlieste' ),
	'Listfiles'                 => array( 'Bestaandslieste' ),
	'Listgrouprights'           => array( 'Groepsrechten_bekieken' ),
	'Listredirects'             => array( 'Deurverwiezingslieste' ),
	'Listusers'                 => array( 'Gebrukerslieste' ),
	'Lockdb'                    => array( 'Databanke_blokkeren' ),
	'Log'                       => array( 'Logboeken' ),
	'Lonelypages'               => array( 'Weesziejen' ),
	'Longpages'                 => array( 'Lange_artikels' ),
	'MergeHistory'              => array( 'Geschiedenisse_bie_mekaar_doon' ),
	'MIMEsearch'                => array( 'MIME-zeuken' ),
	'Mostcategories'            => array( 'Meeste_kategorieën' ),
	'Mostimages'                => array( 'Meestgebruukten_bestaanden' ),
	'Mostinterwikis'            => array( 'Meeste_interwikiverwiezingen' ),
	'Mostlinked'                => array( 'Meest_naor_verwezen_ziejen' ),
	'Mostlinkedcategories'      => array( 'Meestgebruukten_kategorieën' ),
	'Mostlinkedtemplates'       => array( 'Meestgebruken_mallen' ),
	'Mostrevisions'             => array( 'Meeste_bewarkingen' ),
	'Movepage'                  => array( 'Zied_herneumen' ),
	'Mycontributions'           => array( 'Mien_biedragen' ),
	'Mypage'                    => array( 'Mien_gebrukerszied' ),
	'Mytalk'                    => array( 'Mien_overleg' ),
	'Myuploads'                 => array( 'Mien_in-elaojen_bestaanden' ),
	'Newimages'                 => array( 'Nieje_bestaanden' ),
	'Newpages'                  => array( 'Nieje_ziejen' ),
	'PagesWithProp'             => array( 'Ziejen_mit_eigenschap' ),
	'PasswordReset'             => array( 'Wachtwoord_opniej_instellen' ),
	'PermanentLink'             => array( 'Vaste_verwiezing' ),
	'Popularpages'              => array( 'Populaere_artikels' ),
	'Preferences'               => array( 'Veurkeuren' ),
	'Prefixindex'               => array( 'Veurvoegselindex' ),
	'Protectedpages'            => array( 'Beveiligden_ziejen' ),
	'Protectedtitles'           => array( 'Beveiligden_titels' ),
	'Randompage'                => array( 'Netzelde_welk_artikel' ),
	'Randomredirect'            => array( 'Netzelde_welke_deurverwiezing' ),
	'Recentchanges'             => array( 'Leste_wiezigingen' ),
	'Recentchangeslinked'       => array( 'Leste_wiezigingen_ekoppeld' ),
	'Redirect'                  => array( 'Deurverwiezen' ),
	'Revisiondelete'            => array( 'Versie_vortdoon' ),
	'Search'                    => array( 'Zeuken' ),
	'Shortpages'                => array( 'Korte_artikels' ),
	'Specialpages'              => array( 'Spesiale_ziejen' ),
	'Statistics'                => array( 'Staotistieken' ),
	'Tags'                      => array( 'Etiketten' ),
	'Uncategorizedcategories'   => array( 'Kategorieën_zonder_kategorie' ),
	'Uncategorizedimages'       => array( 'Bestaanden_zonder_kategorie' ),
	'Uncategorizedpages'        => array( 'Ziejen_zonder_kategorie' ),
	'Uncategorizedtemplates'    => array( 'Mallen_zonder_kategorie' ),
	'Undelete'                  => array( 'Weerummeplaotsen' ),
	'Unlockdb'                  => array( 'Databanke_vriegeven' ),
	'Unusedcategories'          => array( 'Ongebruukten_kategorieën' ),
	'Unusedimages'              => array( 'Ongebruukten_bestaanden' ),
	'Unusedtemplates'           => array( 'Ongebruukten_mallen' ),
	'Unwatchedpages'            => array( 'Niet-evolgden_ziejen' ),
	'Upload'                    => array( 'Bestaanden_opsturen' ),
	'UploadStash'               => array( 'Bestaandenstallige' ),
	'Userlogin'                 => array( 'Anmelden' ),
	'Userlogout'                => array( 'Aofmelden' ),
	'Userrights'                => array( 'Gebrukersrechten' ),
	'Version'                   => array( 'Versie' ),
	'Wantedcategories'          => array( 'Gewunste_kategorieën' ),
	'Wantedfiles'               => array( 'Gewunste_bestaanden' ),
	'Wantedpages'               => array( 'Gewunste_ziejen' ),
	'Wantedtemplates'           => array( 'Gewunste_mallen' ),
	'Watchlist'                 => array( 'Volglieste' ),
	'Whatlinkshere'             => array( 'Verwiezingen_naor_disse_zied' ),
	'Withoutinterwiki'          => array( 'Gien_interwiki' ),
);

$linkTrail = '/^([a-zäöüïëéèà]+)(.*)$/sDu';

