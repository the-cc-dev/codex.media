<?php defined('SYSPATH') or die('No direct script access.');

class Dao_Settings extends Dao_MySQL_Base
{
    protected $cache_key = 'Dao_Settings';

    protected $table = 'settings';
}
