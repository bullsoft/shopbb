<?php
namespace LightCloud\Uc\Plugins;
use Phalcon\Mvc\User\Plugin;

class Volt extends Plugin
{
    public static function showField($fields, $field)
    {
        $fieldId = $field[0];
        if($fields[$fieldId]['inputType'] == "TEXT") {
            return sprintf($fields[$fieldId]['fieldDesc'], $field[2]);
        } elseif ($fields[$fieldId]['inputType'] == "OPTION") {
            $a = explode(",", $fields[$fieldId]['fieldDesc']);
            $b = explode(",", $fields[$fieldId]['defaultValue']);
            $idx = array_search($field[2], $b);
            return $a[$idx];
        }
    }

    public static function yourJs($whichController, $whichAction)
    {
        $fileVirtualPath = sprintf("%s/yourjs/%s/%s.js", \LightCloud\Uc\getSiteConf()->get("template"),
                                   $whichController,
                                   $whichAction);
        $filePath = sprintf("%spublic/templates/%s", APP_MODULE_DIR, $fileVirtualPath);
        if(file_exists($filePath)) {
            $f = sprintf("%s%s", getDI()->getConfig()->application->staticUrl, $fileVirtualPath);
            return '<script src="'.$f.'"></script>';
        } else {
            return  "";
        }
    }

    public static function yourCss($whichController, $whichAction)
    {
        $fileVirtualPath = sprintf("%s/yourcss/%s/%s.css", \LightCloud\Uc\getSiteConf()->get("template"),
                                   $whichController,
                                   $whichAction);
        $filePath = sprintf("%spublic/templates/%s", APP_MODULE_DIR, $fileVirtualPath);
        if(file_exists($filePath)) {
            $f = sprintf("%s%s", getDI()->getConfig()->application->staticUrl, $fileVirtualPath);
            return '<link href="'.$f.'" rel="stylesheet">';
        } else {
            return  "";
        }
    }
}
