<?php

// no direct access
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;


class plgSystemKofi extends CMSPlugin
{

    public function onBeforeCompileHead()
    {
        $app = JFactory::getApplication();

        if (!$app->isClient('site')) {
            return;
        }

        $doc = JFactory::getDocument();
        $doc->addScript('https://storage.ko-fi.com/cdn/scripts/overlay-widget.js');
        $doc->addScript(JUri::root() . 'plugins/system/kofi/kofi.js');

        $doc->addScriptOptions("kofi_options", [
            "username" => $this->params->get("username"),
            "type" => $this->params->get("type"),
            "donateButtonText" => $this->params->get("donateButtonText"),
            "donateButtonBackgroundColor" => $this->params->get("donateButtonBackgroundColor"),
            "donateButtonTextColor" => $this->params->get("donateButtonTextColor"),
        ]);
    }
}