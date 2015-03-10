<?php
class BlocksFixture
{

    public $fields = [
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
    'blocks_delta' =>
    [
      'type' => 'unique',
      'columns' =>
      [
        0 => 'delta',
        1 => 'handler',
      ],
      'length' =>
      [
      ],
    ],
    ],
    'id' =>
    [
    'type' => 'integer',
    'unsigned' => false,
    'null' => false,
    'default' => null,
    'comment' => 'Primary Key - Unique block ID.',
    'autoIncrement' => true,
    'precision' => null,
    ],
    'copy_id' =>
    [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => true,
    'default' => null,
    'comment' => 'id of the block this block is a copy of',
    'precision' => null,
    'autoIncrement' => null,
    ],
    'delta' =>
    [
    'type' => 'string',
    'length' => 30,
    'null' => false,
    'default' => null,
    'comment' => 'unique ID within a handler',
    'precision' => null,
    'fixed' => null,
    ],
    'handler' =>
    [
    'type' => 'string',
    'length' => 100,
    'null' => false,
    'default' => 'Block',
    'comment' => 'Name of the plugin that created this block. Used to generate event name, e.g. "Menu" triggers "Block.Menu.display" when rendering the block',
    'precision' => null,
    'fixed' => null,
    ],
    'title' =>
    [
    'type' => 'string',
    'length' => 100,
    'null' => false,
    'default' => null,
    'comment' => '',
    'precision' => null,
    'fixed' => null,
    ],
    'description' =>
    [
    'type' => 'string',
    'length' => 200,
    'null' => true,
    'default' => null,
    'comment' => '',
    'precision' => null,
    'fixed' => null,
    ],
    'body' =>
    [
    'type' => 'text',
    'length' => null,
    'null' => true,
    'default' => null,
    'comment' => '',
    'precision' => null,
    ],
    'visibility' =>
    [
    'type' => 'string',
    'length' => 8,
    'null' => false,
    'default' => 'except',
    'comment' => 'indicate how to show blocks on pages. (except = show on all pages except listed pages; only = show only on listed pages; php = use custom PHP code to determine visibility)',
    'precision' => null,
    'fixed' => null,
    ],
    'pages' =>
    [
    'type' => 'text',
    'length' => null,
    'null' => true,
    'default' => null,
    'comment' => 'Contents of the "Pages" block contains either a list of paths on which to include/exclude the block or PHP code, depending on "visibility" setting.',
    'precision' => null,
    ],
    'locale' =>
    [
    'type' => 'text',
    'length' => null,
    'null' => true,
    'default' => null,
    'comment' => '',
    'precision' => null,
    ],
    'settings' =>
    [
    'type' => 'text',
    'length' => null,
    'null' => true,
    'default' => null,
    'comment' => 'additional information used by this block, used by blocks handlers <> `Block`',
    'precision' => null,
    ],
    'status' =>
    [
    'type' => 'boolean',
    'length' => null,
    'null' => false,
    'default' => '0',
    'comment' => '',
    'precision' => null,
    ],
    ];

    public $records = [
    0 =>
    [
    'id' => 1,
    'copy_id' => null,
    'delta' => '1',
    'handler' => 'System',
    'title' => 'Management [menu:1]',
    'description' => 'Associated block for "Management" menu.',
    'body' => null,
    'visibility' => 'except',
    'pages' => null,
    'locale' => null,
    'settings' => null,
    'status' => true,
    ],
    1 =>
    [
    'id' => 2,
    'copy_id' => null,
    'delta' => '2',
    'handler' => 'System',
    'title' => 'Site Main Menu [menu:2]',
    'description' => 'Associated block for "Site Main Menu" menu.',
    'body' => null,
    'visibility' => 'except',
    'pages' => null,
    'locale' => null,
    'settings' => null,
    'status' => true,
    ],
    2 =>
    [
    'id' => 3,
    'copy_id' => null,
    'delta' => 'dashboard_recent_content',
    'handler' => 'Node',
    'title' => 'Recent Content',
    'description' => 'Shows a list of latest created contents.',
    'body' => null,
    'visibility' => 'except',
    'pages' => null,
    'locale' => null,
    'settings' => null,
    'status' => true,
    ],
    3 =>
    [
    'id' => 4,
    'copy_id' => null,
    'delta' => 'dashboard_search',
    'handler' => 'Node',
    'title' => 'Search',
    'description' => 'Quick Search Form',
    'body' => null,
    'visibility' => 'except',
    'pages' => null,
    'locale' => null,
    'settings' => null,
    'status' => true,
    ],
    4 =>
    [
    'id' => 5,
    'copy_id' => null,
    'delta' => 'language_switcher',
    'handler' => 'Locale',
    'title' => 'Change Language',
    'description' => 'Language switcher block',
    'body' => null,
    'visibility' => 'except',
    'pages' => null,
    'locale' => null,
    'settings' => 'a:2:{s:4:"type";s:4:"html";s:5:"flags";b:1;}',
    'status' => true,
    ],
    5 =>
    [
    'id' => 6,
    'copy_id' => null,
    'delta' => 'categories',
    'handler' => 'Taxonomy',
    'title' => 'Categories',
    'description' => 'List of terms block',
    'body' => null,
    'visibility' => 'except',
    'pages' => null,
    'locale' => null,
    'settings' => null,
    'status' => false,
    ],
    ];
}
