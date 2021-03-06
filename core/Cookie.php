<?php

  class Cookie {

    public static function setRememberCookie($value) {
      setcookie(REMEMBER_ME_COOKIE_NAME, $value, time() + COOKIE_DURABILITY, PROOT);
    }

    public static function deleteRememberCookie() {
      setcookie(REMEMBER_ME_COOKIE_NAME, '', time() - 3600, PROOT);
    }

    public static function getCookie($cookieName) {
      return isset($_COOKIE[$cookieName]) ? $_COOKIE[$cookieName] : null;
    }
  }