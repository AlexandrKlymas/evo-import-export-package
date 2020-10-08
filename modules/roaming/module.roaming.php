<?php
use Illuminate\Support\Facades\View;

if (IN_MANAGER_MODE != "true" || empty($modx) || !($modx instanceof DocumentParser)) {
    die("<b>INCLUDE_ORDERING_ERROR</b><br /><br />Please use the MODX Content Manager instead of accessing this file directly.");
}
if (!$modx->hasPermission('exec_module')) {
    header("location: " . $modx->getManagerPath() . "?a=106");
}

$moduleurl = 'index.php?a=112&id=' . $_GET['id'] . '&';
$action    = isset($_GET['action']) ? $_GET['action'] : 'main';

$data = [
    'module_url'     => $moduleurl,
    'manager_theme' => $modx->config['manager_theme'],
];

switch ($action) {
    case 'main':
        $view = View::addNamespace('Import', dirname(__FILE__) . '/../custom/packages/example/modules/roaming/views');
        $outTpl = (string) View::make('Import::main', $data);
        return $outTpl;
}
