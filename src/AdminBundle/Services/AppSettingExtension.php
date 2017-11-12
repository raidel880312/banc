<?php

namespace AdminBundle\Services;

use AdminBundle\Services\AppSettings;

class AppSettingExtension extends \Twig_Extension{

    protected $appSetting;

    function __construct(AppSettings $appsetting) {
        $this->appSetting = $appsetting;
    }

    public function getGlobals() {
        return array(
            'appsetting' => $this->appSetting
        );
    }

    public function getName() {
        return 'appsetting';
    }

}
