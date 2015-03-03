<?php
trait OptionsSchemaTrait
{

    protected $_fields = [
  '_constraints' => 
  [
    'primary' => 
    [
      'type' => 'primary',
      'columns' => 
      [
        0 => 'id',
      ],
      'length' => 
      [
      ],
    ],
    'options_name' => 
    [
      'type' => 'unique',
      'columns' => 
      [
        0 => 'name',
      ],
      'length' => 
      [
      ],
    ],
  ],
  'id' => 
  [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'autoIncrement' => true,
    'precision' => NULL,
  ],
  'name' => 
  [
    'type' => 'string',
    'length' => 100,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'precision' => NULL,
    'fixed' => NULL,
  ],
  'value' => 
  [
    'type' => 'text',
    'length' => NULL,
    'null' => true,
    'default' => NULL,
    'comment' => '',
    'precision' => NULL,
  ],
  'autoload' => 
  [
    'type' => 'boolean',
    'length' => NULL,
    'null' => false,
    'default' => '0',
    'comment' => '1: true (autoload); 0:false',
    'precision' => NULL,
  ],
];

    protected $_records = [
  0 => 
  [
    'name' => 'front_theme',
    'value' => 'FrontendTheme',
    'autoload' => true,
  ],
  1 => 
  [
    'name' => 'default_language',
    'value' => 'en-us',
    'autoload' => true,
  ],
  2 => 
  [
    'name' => 'site_description',
    'value' => 'Open Source CMS built on CakePHP 3.0',
    'autoload' => true,
  ],
  3 => 
  [
    'name' => 'site_slogan',
    'value' => 'Open Source CMS built on CakePHP 3.0',
    'autoload' => true,
  ],
  4 => 
  [
    'name' => 'back_theme',
    'value' => 'BackendTheme',
    'autoload' => true,
  ],
  5 => 
  [
    'name' => 'site_title',
    'value' => 'My QuickApps CMS Site',
    'autoload' => true,
  ],
  6 => 
  [
    'name' => 'url_locale_prefix',
    'value' => '1',
    'autoload' => true,
  ],
  7 => 
  [
    'name' => 'site_email',
    'value' => 'demo@email.com',
    'autoload' => false,
  ],
  8 => 
  [
    'name' => 'site_maintenance_message',
    'value' => 'We sincerely apologize for the inconvenience.<br/>Our site is currently undergoing scheduled maintenance and upgrades, but will return shortly.<br/>Thanks you for your patience.',
    'autoload' => false,
  ],
  9 => 
  [
    'name' => 'site_maintenance_ip',
    'value' => NULL,
    'autoload' => false,
  ],
  10 => 
  [
    'name' => 'site_nodes_home',
    'value' => '5',
    'autoload' => true,
  ],
  11 => 
  [
    'name' => 'site_maintenance',
    'value' => '0',
    'autoload' => true,
  ],
];

    public function fields()
    {
        foreach ($this->_fields as $name => $info) {
            if (!empty($info['autoIncrement'])) {
                $this->_fields[$name]['length'] = null;
            }
        }
        return $this->_fields;
    }

    public function records()
    {
        return $this->_records;
    }
}

class OptionsSchema
{

    use OptionsSchemaTrait;

}