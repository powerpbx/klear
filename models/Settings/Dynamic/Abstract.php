<?php


/**
 * Interfaz para sobre-escribir dinámicamente las propiedades de siteConfig para klear
 * @author jabi
 *
 */
abstract class Klear_Model_Settings_Dynamic_Abstract
{
    abstract public function init($siteConfig);
    
    public function processSiteName($sitename) {
        return $sitename;
    }
    
    public function processLogo($logo) {
        return $logo;
    }
    
    public function processYear($year) {
        return $year;
    }
    
    public function processLang($lang) {
        return $lang;
    }

    public function processLangs($langs) {
        return $langs;
    }
    
    public function processjQueryUI($jQueryUIconf) {
        return $jQueryUIconf;
    }
    
    public function processCssExtended($cssExtended) {
        return $cssExtended;
    }
    
    public function processAuthConfig($auth) {
        return $auth;
    }
    
}
