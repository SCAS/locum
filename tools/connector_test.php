<?php

class locum {
  
  public $locum_config;
  public $locum_cntl;
  public $db;
  public $dsn;
  
  public function __construct() {
    
    
    $this->dsn = $dsn;
    $locum_class_name = 'locum_polaris_40';
    $connector_config = 'config/locum_polaris_40.ini';
    $this->locum_config = parse_ini_file('config/locum.ini', true);
    
    ini_set('memory_limit','128M');
    
    require_once('MDB2.php');
    require_once($locum_class_name . '.php');
    $this->locum_config = array();
    $this->locum_config = array_merge($this->locum_config, parse_ini_file($connector_config, true));
    $this->locum_cntl =& new $locum_class_name;
    
  }
  
  
}