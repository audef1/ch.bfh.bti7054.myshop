<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Trans
 *
 * @author nalet
 */
use Symfony\Component\Yaml\Yaml as Yaml;

class Trans {

    private static $dir = '../../locale/';
    private static $trans = array();
    private static $filename = 'messages.yml';
    private static $fallback = "en_EN";
    private static $domain = "en_EN";
    private static $allDomains = array();

    public static function init() {

        $diro = dir(__dir__ . '/' . self::$dir);

        while (false !== ($entry = $diro->read())) {
            if ($entry !== '.' && $entry !== '..') {
                self::$allDomains[] = $entry;
                self::$trans[$entry] = self::parseMessages($entry);
            }
        }
        $diro->close();
    }

    private static function parseMessages($key) {
        $file = file_get_contents(__dir__ . '/' . self::$dir . $key . '/' . self::$filename);
        return Yaml::parse($file);
    }

    public static function _($key) {
        if (isset(self::$trans[self::$domain][$key])) {
            return self::$trans[self::$domain][$key];
        }

        if (isset(self::$trans[self::$fallback][$key])) {
            return self::$trans[self::$fallback][$key];
        }

        return $key;
    }

    public static function _fd($key, $domain) {
        if (isset(self::$trans[$domain][$key])) {
            return self::$trans[$domain][$key];
        }

        if (isset(self::$trans[self::$fallback][$key])) {
            return self::$trans[self::$fallback][$key];
        }

        return $key;
    }

    public static function setFallbackLang($key) {
        self::$fallback = $key;
    }

    public static function setDomain($key) {
        self::$domain = $key;
    }

    public static function getFallbackLang() {
        return self::$fallback;
    }

    public static function getDomain() {
        return self::$domain;
    }

    public static function getAllDomains() {
        return self::$allDomains;
    }

}
