<?php

/**
 * Extend Akismet class
 *
 * @author giles
 */
class PluginsbAkismetSpamCheck extends Akismet 
{
  public function __construct()
  {
    $siteUrl = sfConfig::get('app_sbAkismetSpamCheck_site_url', null);
    $apiKey = sfConfig::get('app_sbAkismetSpamCheck_api_key', null);
    
    if(is_null($siteUrl) or is_null($apiKey) or empty($siteUrl) or empty($apiKey))
    {
      throw new Exception('Please make sure your site_url and api_key are configured');
    }
    
    parent::__construct($siteUrl, $apiKey);
  }
}