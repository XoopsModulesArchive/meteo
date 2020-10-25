<?php

// ---------------------------------------------------------------------//
// Meteo 2.0 //
// E-Xoops France - http://www.e-xoopsfr.com //
//   //
// Adaptation pour XOOPS-JP 2.03 par Franck Montuelle //
// http://www.interdetective.net //
//   //
// Version 2.0 //
// Solo  //
// http://www.wolfpackclan.com //
// ---------------------------------------------------------------------//
include 'header.php';
$GLOBALS['xoopsOption']['template_main'] = 'meteo_index.html';
if ('meteo' == $xoopsConfig['startpage']) {
    $xoopsOption['show_rblock'] = 1;

    make_cblock();

    echo '<br>';
} else {
    $xoopsOption['show_rblock'] = 0;
}
function fr()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    $GLOBALS['xoopsOption']['template_main'] = 'meteo_france_index.html';

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $meteo['today_img'] = 'meteodirect/md_france24h.gif';

    $meteo['tomorrow_img'] = 'meteodirect/md_france48h.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

function be()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $date = date('Y-m-d');

    $forecast = date('Y-m');

    $tomorrow = date('d');

    $tomorrow++;

    $format = '-%02d';

    $tomorrow_day = sprintf($format, $tomorrow);

    $meteo['today'] = '' . _MI_METEO_TODAY . '';

    $meteo['tomorrow'] = '' . _MI_METEO_TOMORROW . '';

    $meteo['today_img'] = 'carte/bel/bel_' . $date . '.gif';

    $meteo['tomorrow_img'] = 'carte/bel/bel_' . $forecast . '' . $tomorrow_day . '.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

function eu()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $date = date('Y-m-d');

    $forecast = date('Y-m');

    $tomorrow = date('d');

    $tomorrow++;

    $format = '-%02d';

    $tomorrow_day = sprintf($format, $tomorrow);

    $meteo['today'] = '' . _MI_METEO_TODAY . '';

    $meteo['tomorrow'] = '' . _MI_METEO_TOMORROW . '';

    $meteo['today_img'] = 'carte/eur/eur_' . $date . '.gif';

    $meteo['tomorrow_img'] = 'carte/eur/eur_' . $forecast . '' . $tomorrow_day . '.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

function it()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $date = date('Y-m-d');

    $forecast = date('Y-m');

    $tomorrow = date('d');

    $tomorrow++;

    $format = '-%02d';

    $tomorrow_day = sprintf($format, $tomorrow);

    $meteo['today'] = '' . _MI_METEO_TODAY . '';

    $meteo['tomorrow'] = '' . _MI_METEO_TOMORROW . '';

    $meteo['today_img'] = 'carte/ita/ita_' . $date . '.gif';

    $meteo['tomorrow_img'] = 'carte/ita/ita_' . $forecast . '' . $tomorrow_day . '.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

function es()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $date = date('Y-m-d');

    $forecast = date('Y-m');

    $tomorrow = date('d');

    $tomorrow++;

    $format = '-%02d';

    $tomorrow_day = sprintf($format, $tomorrow);

    $meteo['today'] = '' . _MI_METEO_TODAY . '';

    $meteo['tomorrow'] = '' . _MI_METEO_TOMORROW . '';

    $meteo['today_img'] = 'carte/esp/esp_' . $date . '.gif';

    $meteo['tomorrow_img'] = 'carte/esp/esp_' . $forecast . '' . $tomorrow_day . '.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

function de()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $date = date('Y-m-d');

    $forecast = date('Y-m');

    $tomorrow = date('d');

    $tomorrow++;

    $format = '-%02d';

    $tomorrow_day = sprintf($format, $tomorrow);

    $meteo['today'] = '' . _MI_METEO_TODAY . '';

    $meteo['tomorrow'] = '' . _MI_METEO_TOMORROW . '';

    $meteo['today_img'] = 'carte/all/all_' . $date . '.gif';

    $meteo['tomorrow_img'] = 'carte/all/all_' . $forecast . '' . $tomorrow_day . '.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

function uk()
{
    global $xoopsConfig, $xoopsUser, $xoopsTheme, $xoopsLogger, $xoopsOption;

    require XOOPS_ROOT_PATH . '/modules/meteo/include/countries.php';

    $date = date('Y-m-d');

    $forecast = date('Y-m');

    $tomorrow = date('d');

    $tomorrow++;

    $format = '-%02d';

    $tomorrow_day = sprintf($format, $tomorrow);

    $meteo['today'] = '' . _MI_METEO_TODAY . '';

    $meteo['tomorrow'] = '' . _MI_METEO_TOMORROW . '';

    $meteo['today_img'] = 'carte/roy/roy_' . $date . '.gif';

    $meteo['tomorrow_img'] = 'carte/roy/roy_' . $forecast . '' . $tomorrow_day . '.gif';

    require dirname(__DIR__, 2) . '/header.php';

    $xoopsTpl->assign('meteo', $meteo);

    require dirname(__DIR__, 2) . '/footer.php';
}

$op = !empty($_POST['op']) ? $_POST['op'] : $_GET['op'];
switch ($op) {
    case 'fr':
        fr();
        break;
    case 'be':
        be();
        break;
    case 'eu':
        eu();
        break;
    case 'it':
        it();
        break;
    case 'es':
        es();
        break;
    case 'de':
        de();
        break;
    case 'uk':
        uk();
        break;
    default:
        eu();
        break;
}
