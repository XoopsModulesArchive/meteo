<?php

function a_meteo_show()
{
    global $xoopsDB, $xoopsUser;

    $block = [];

    $block['title'] = '_MI_METEO_TITLE_TODAY';

    {
        $date = date('Y-m-d');
        $image = 'carte/eur/eur_' . $date . '.gif';
        $lien = './modules/meteo/index.php';
        $block['image'] = (string)$image;
        $block['lien'] = (string)$lien;
        $block['texte'] = _BM_METEO_TODAY;
    }

    return $block;
}

function b_meteo_show()
{
    global $xoopsDB, $xoopsUser;

    $block = [];

    $block['title'] = '_MI_METEO_TITLE_TOMORROW';

    {
        $forecast = date('Y-m');
        $tomorrow = date('d');
        $tomorrow++;
        $format = '-%02d';
        $tomorrow_day = sprintf($format, $tomorrow);
        $image = 'carte/eur/eur_' . $forecast . '' . $tomorrow_day . '.gif';
        $lien = './modules/meteo/index.php';
        $block['image'] = (string)$image;
        $block['lien'] = (string)$lien;
        $block['texte'] = _BM_METEO_TOMORROW;
    }

    return $block;
}
