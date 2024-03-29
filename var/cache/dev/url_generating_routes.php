<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_ali' => [[], ['_controller' => 'App\\Controller\\AliController::index'], [], [['text', '/']], [], [], []],
    'cv' => [[], ['_controller' => 'App\\Controller\\AliController::cv'], [], [['text', '/cv']], [], [], []],
    'E-Portfolio' => [[], ['_controller' => 'App\\Controller\\AliController::portfolio'], [], [['text', '/E-Portfolio']], [], [], []],
    'tp_page' => [[], ['_controller' => 'App\\Controller\\AliController::tpPage'], [], [['text', '/tp']], [], [], []],
    'download_tp_report' => [['reportId'], ['_controller' => 'App\\Controller\\AliController::downloadTPReport'], [], [['variable', '', '[^/]++', 'reportId', true], ['text', '/tp/download/tp']], [], [], []],
    'en_savoir_plus' => [[], ['_controller' => 'App\\Controller\\AliController::enSavoirPlus'], [], [['text', '/en_savoir_plus']], [], [], []],
    'cv_download' => [[], ['_controller' => 'App\\Controller\\AliController::downloadCV'], [], [['text', '/cv/download']], [], [], []],
    'App\Controller\AliController::index' => [[], ['_controller' => 'App\\Controller\\AliController::index'], [], [['text', '/']], [], [], []],
    'App\Controller\AliController::cv' => [[], ['_controller' => 'App\\Controller\\AliController::cv'], [], [['text', '/cv']], [], [], []],
    'App\Controller\AliController::portfolio' => [[], ['_controller' => 'App\\Controller\\AliController::portfolio'], [], [['text', '/E-Portfolio']], [], [], []],
    'App\Controller\AliController::tpPage' => [[], ['_controller' => 'App\\Controller\\AliController::tpPage'], [], [['text', '/tp']], [], [], []],
    'App\Controller\AliController::downloadTPReport' => [['reportId'], ['_controller' => 'App\\Controller\\AliController::downloadTPReport'], [], [['variable', '', '[^/]++', 'reportId', true], ['text', '/tp/download/tp']], [], [], []],
    'App\Controller\AliController::enSavoirPlus' => [[], ['_controller' => 'App\\Controller\\AliController::enSavoirPlus'], [], [['text', '/en_savoir_plus']], [], [], []],
    'App\Controller\AliController::downloadCV' => [[], ['_controller' => 'App\\Controller\\AliController::downloadCV'], [], [['text', '/cv/download']], [], [], []],
];
