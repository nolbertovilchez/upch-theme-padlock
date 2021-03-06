<?php

namespace insite\theme\espire\assets;

class EspireAsset extends \yii\web\AssetBundle {

    public $sourcePath = '@vendor/insite/yii2-theme-espire/dist';
    
    public $css        = [
        'css/ei-icon.css',
        'css/themify-icons.css',
        'css/animate.min.css',
        'css/app.min.css'
    ];
    
    public $js = [
        'js/app.min.js'
    ];
    
    public $depends    = [
        'yii\web\JqueryAsset',
        'insite\asset\FontAwesome',
        'insite\asset\Popper',
        'insite\asset\Bootstrap4',
        'insite\asset\Pace',
        'insite\asset\PerfectScrollbar',
        'insite\asset\Noty',
        'insite\asset\SweetAlert2'
    ];
    
    public function init()
    {
        parent::init();
        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css|js|images)%', $from);
        };
    }

}
