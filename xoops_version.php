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
$modversion['name'] = _MI_METEO_NAME;
$modversion['version'] = '2.0.1';
$modversion['description'] = _MI_METEO_DESC;
$modversion['author'] = 'Solo (www.wolfpackclan.com)';
$modversion['credits'] = 'Meteo Consult (http://www.meteoconsult.fr)';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'images/meteo_slogo.png';
$modversion['dirname'] = 'meteo';
// Menu
$modversion['hasMain'] = 1;
// Templates
$modversion['templates'][1]['file'] = 'meteo_index.html';
$modversion['templates'][1]['description'] = '';
$modversion['templates'][2]['file'] = 'meteo_france_index.html';
$modversion['templates'][2]['description'] = '';
// Block
$modversion['blocks'][1]['file'] = 'meteo.php';
$modversion['blocks'][1]['name'] = _BM_METEO_TITLE_TODAY;
$modversion['blocks'][1]['description'] = _BM_METEO_DESC_TODAY;
$modversion['blocks'][1]['show_func'] = 'a_meteo_show';
$modversion['blocks'][1]['template'] = 'meteo_block.html';
$modversion['blocks'][2]['file'] = 'meteo.php';
$modversion['blocks'][2]['name'] = _BM_METEO_TITLE_TOMORROW;
$modversion['blocks'][2]['description'] = _BM_METEO_DESC_TOMORROW;
$modversion['blocks'][2]['show_func'] = 'b_meteo_show';
$modversion['blocks'][2]['template'] = 'meteo_block.html';
