<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Db\\Pdo',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Mysql',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractMysql',
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'descriptor',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 5,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'autoConnect',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 5,
                'char' => 78,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 5,
              'char' => 78,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'autoConnect',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 7,
                'char' => 24,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 8,
                      'char' => 18,
                    ),
                    'name' => 'connect',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'descriptor',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                          'line' => 8,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                        'line' => 8,
                        'char' => 37,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 8,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 9,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'cblock',
                  'value' => '
            zephir_unset_property(this_ptr, "_pdo");
            ',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 13,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 19,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'dialectClass',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 19,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'connectionId',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 19,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 21,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'connectionId',
                  'expr' => 
                  array (
                    'type' => 'static-property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'self',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 21,
                      'char' => 56,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_connectionConsecutive',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 21,
                      'char' => 56,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 21,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 21,
                  'char' => 56,
                ),
                1 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_connectionId',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'connectionId',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 22,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 22,
                  'char' => 47,
                ),
                2 => 
                array (
                  'assign-type' => 'static-property',
                  'operator' => 'assign',
                  'variable' => 'self',
                  'property' => '_connectionConsecutive',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'connectionId',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 23,
                      'char' => 57,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 23,
                      'char' => 60,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 23,
                    'char' => 60,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 23,
                  'char' => 60,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 28,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'dialectClass',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 28,
                    'char' => 58,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'descriptor',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 28,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'dialectClass',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 28,
                      'char' => 56,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 28,
                    'char' => 58,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 28,
                  'char' => 58,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 28,
                'char' => 58,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'dialectClass',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => 'phalcon\\\\db\\\\dialect\\\\',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                          'line' => 29,
                          'char' => 55,
                        ),
                        'right' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                            'line' => 29,
                            'char' => 62,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_dialectType',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                            'line' => 29,
                            'char' => 75,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                          'line' => 29,
                          'char' => 75,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                        'line' => 29,
                        'char' => 75,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 29,
                      'char' => 75,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 30,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 35,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'dialectClass',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 35,
                    'char' => 33,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 35,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'string',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 35,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 35,
                'char' => 42,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_dialect',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'dialectClass',
                        'dynamic' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                        'line' => 36,
                        'char' => 54,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 36,
                      'char' => 54,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 37,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'dialectClass',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                        'line' => 38,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 38,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'object',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 38,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 38,
                    'char' => 46,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => '_dialect',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dialectClass',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                            'line' => 39,
                            'char' => 50,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                          'line' => 39,
                          'char' => 50,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 40,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 41,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 42,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_descriptor',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'descriptor',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 42,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 42,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 47,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
          'line' => 5,
          'last-line' => 49,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'prop',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 49,
              'char' => 39,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'prop',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 51,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '_pdo',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 51,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 51,
                'char' => 25,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'cblock',
                  'value' => '
            add_property_null_ex(this_ptr, SL("_pdo") TSRMLS_CC);
            ',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 55,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 55,
                      'char' => 18,
                    ),
                    'name' => 'connect',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                            'line' => 55,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_descriptor',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                            'line' => 55,
                            'char' => 44,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                          'line' => 55,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                        'line' => 55,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 55,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 56,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 56,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_pdo',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                      'line' => 56,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 56,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 57,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 58,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 58,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 59,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
          'line' => 49,
          'last-line' => 61,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isUnderTransaction',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'string',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'prop',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '_pdo',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 63,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 63,
                  'char' => 27,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 64,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'isPdoSet',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 64,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 64,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 80,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'cblock',
              'value' => '
        isPdoSet = Z_OBJ_HT_P(this_ptr)->has_property(this_ptr, &prop, 0, NULL);
        // isPdoSet = zephir_isset_property(this_ptr, SL("_pdo"));
        ',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 83,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'isPdoSet',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 83,
                    'char' => 22,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 83,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 83,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 83,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                    'line' => 84,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                  'line' => 85,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 87,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'parent',
                'dynamic' => 0,
                'name' => 'isUnderTransaction',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 87,
                'char' => 44,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
              'line' => 88,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
                'line' => 62,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
            'line' => 62,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
          'line' => 61,
          'last-line' => 90,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Pdo/Mysql.zep',
    'line' => 3,
    'char' => 5,
  ),
);