<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Db',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Mysql',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'di',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 8,
            'char' => 22,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 9,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'descriptor',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 9,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 10,
          'char' => 11,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'options',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 10,
            'char' => 25,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 12,
          'char' => 11,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'retryTimes',
          'default' => 
          array (
            'type' => 'static-constant-access',
            'left' => 
            array (
              'type' => 'variable',
              'value' => 'self',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 12,
              'char' => 43,
            ),
            'right' => 
            array (
              'type' => 'variable',
              'value' => 'RETRY_TIMES',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 12,
              'char' => 43,
            ),
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 12,
            'char' => 43,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 13,
          'char' => 11,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'retryInterval',
          'default' => 
          array (
            'type' => 'static-constant-access',
            'left' => 
            array (
              'type' => 'variable',
              'value' => 'self',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 13,
              'char' => 49,
            ),
            'right' => 
            array (
              'type' => 'variable',
              'value' => 'RETRY_INTERVAL',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 13,
              'char' => 49,
            ),
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 13,
            'char' => 49,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 15,
          'char' => 11,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'name',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 16,
          'char' => 11,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'connection',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 16,
            'char' => 30,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 17,
          'char' => 11,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'connected',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 17,
            'char' => 30,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 19,
          'char' => 10,
        ),
      ),
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
              'name' => 'di',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\DI',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 19,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 19,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 19,
              'char' => 63,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'config',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 21,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'dbConfig',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 21,
                  'char' => 29,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 22,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 22,
                      'char' => 25,
                    ),
                    'name' => 'get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'config',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 22,
                          'char' => 36,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 22,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 22,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 22,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 23,
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
                  'variable' => 'dbConfig',
                  'expr' => 
                  array (
                    'type' => 'property-dynamic-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 23,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 23,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 23,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 23,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 24,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'di',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 24,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 24,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 26,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'name',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 26,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 26,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 27,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'dbConfig',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 27,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'retryTimes',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 27,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 27,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 27,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 27,
                'char' => 40,
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
                      'property' => 'retryTimes',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dbConfig',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 28,
                          'char' => 45,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'retryTimes',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 28,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 28,
                        'char' => 56,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 28,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 29,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 30,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'dbConfig',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 30,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'retryInterval',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 30,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 30,
                    'char' => 41,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 30,
                  'char' => 43,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 30,
                'char' => 43,
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
                      'property' => 'retryInterval',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'dbConfig',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 31,
                          'char' => 48,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'retryInterval',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 31,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 31,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 31,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 32,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 35,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'options',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\PDO',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 36,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'MYSQL_ATTR_INIT_COMMAND',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 36,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 36,
                          'char' => 43,
                        ),
                        'value' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'SET NAMES ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 36,
                            'char' => 56,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'dbConfig',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 36,
                              'char' => 67,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'charset',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 36,
                              'char' => 75,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 36,
                            'char' => 75,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 36,
                          'char' => 75,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 36,
                        'char' => 75,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\PDO',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 37,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ATTR_TIMEOUT',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 37,
                            'char' => 32,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 37,
                          'char' => 32,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbConfig',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 37,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'timeout',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 37,
                            'char' => 51,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 37,
                          'char' => 51,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 37,
                        'char' => 51,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\PDO',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 38,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ATTR_ERRMODE',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 38,
                            'char' => 32,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 38,
                          'char' => 32,
                        ),
                        'value' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\PDO',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 39,
                            'char' => 9,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ERRMODE_EXCEPTION',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 39,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 39,
                          'char' => 9,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 39,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 39,
                    'char' => 10,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 39,
                  'char' => 10,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 40,
              'char' => 10,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'dbConfig',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 40,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 40,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 40,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 40,
                  'char' => 37,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 40,
                'char' => 37,
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
                      'property' => 'options',
                      'expr' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'dbConfig',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 41,
                              'char' => 42,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'options',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 41,
                              'char' => 51,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 41,
                            'char' => 51,
                          ),
                          'name' => 'toArray',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 41,
                          'char' => 62,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 41,
                          'char' => 71,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 41,
                        'char' => 71,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 41,
                      'char' => 71,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 42,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
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
                      'property' => 'options',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 43,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 43,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 44,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 46,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'descriptor',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'host',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 47,
                          'char' => 18,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbConfig',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 47,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'host',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 47,
                            'char' => 34,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 47,
                          'char' => 34,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 47,
                        'char' => 34,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'port',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 48,
                          'char' => 18,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbConfig',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 48,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'port',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 48,
                            'char' => 34,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 48,
                          'char' => 34,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 48,
                        'char' => 34,
                      ),
                      2 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'username',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 49,
                          'char' => 22,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbConfig',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 49,
                            'char' => 33,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'username',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 49,
                            'char' => 42,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 49,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 49,
                        'char' => 42,
                      ),
                      3 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'password',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 50,
                          'char' => 22,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbConfig',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 50,
                            'char' => 33,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'password',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 50,
                            'char' => 42,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 50,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 50,
                        'char' => 42,
                      ),
                      4 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'dbname',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 51,
                          'char' => 20,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbConfig',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 51,
                            'char' => 31,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'dbname',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 51,
                            'char' => 38,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 51,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 51,
                        'char' => 38,
                      ),
                      5 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'options',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 52,
                          'char' => 21,
                        ),
                        'value' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 52,
                            'char' => 28,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'options',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 53,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 53,
                          'char' => 9,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 53,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 53,
                    'char' => 10,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 53,
                  'char' => 10,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 54,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 19,
          'last-line' => 56,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getConnection',
          'parameters' => 
          array (
            0 => 
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 56,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 56,
              'char' => 61,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'tryTimes',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 58,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'e',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 58,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 59,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'tryTimes',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 59,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'retryTimes',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 59,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 59,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 59,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 61,
              'char' => 13,
            ),
            2 => 
            array (
              'type' => 'while',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 61,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'connected',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                    'line' => 61,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 61,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 61,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'try-catch',
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
                          'value' => 'autoConnect',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 63,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 63,
                          'char' => 40,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 63,
                        'char' => 40,
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
                              'property' => 'connection',
                              'expr' => 
                              array (
                                'type' => 'new',
                                'class' => '\\Phalcon\\Db\\Adapter\\Pdo\\Mysql',
                                'dynamic' => 0,
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
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 64,
                                        'char' => 83,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'descriptor',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 64,
                                        'char' => 94,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 64,
                                      'char' => 94,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 64,
                                    'char' => 94,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 64,
                                'char' => 95,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 64,
                              'char' => 95,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 65,
                          'char' => 17,
                        ),
                      ),
                      'else_statements' => 
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
                              'property' => 'connection',
                              'expr' => 
                              array (
                                'type' => 'new',
                                'class' => '\\PhalconPlus\\Db\\Pdo\\Mysql',
                                'dynamic' => 0,
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
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 67,
                                        'char' => 79,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'descriptor',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 67,
                                        'char' => 90,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 67,
                                      'char' => 90,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 67,
                                    'char' => 90,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'autoConnect',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 67,
                                      'char' => 103,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 67,
                                    'char' => 103,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 67,
                                'char' => 104,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 67,
                              'char' => 104,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 68,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 69,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'connected',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 69,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 69,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 70,
                      'char' => 13,
                    ),
                  ),
                  'catches' => 
                  array (
                    0 => 
                    array (
                      'classes' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => '\\Exception',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 70,
                          'char' => 31,
                        ),
                      ),
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'e',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                        'line' => 85,
                        'char' => 9,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'fcall',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'error_log',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'PHP Fatal error:  PhalconPlus::Db::MySQL::connect() failed to connect to MySQL. Detail: ',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                          'line' => 71,
                                          'char' => 116,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'fcall',
                                          'name' => 'json_encode',
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
                                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                  'line' => 72,
                                                  'char' => 44,
                                                ),
                                                'right' => 
                                                array (
                                                  'type' => 'variable',
                                                  'value' => 'descriptor',
                                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                  'line' => 72,
                                                  'char' => 55,
                                                ),
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                'line' => 72,
                                                'char' => 55,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                              'line' => 72,
                                              'char' => 55,
                                            ),
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                          'line' => 72,
                                          'char' => 57,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 72,
                                        'char' => 57,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '. We will try ',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 73,
                                        'char' => 42,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 73,
                                      'char' => 42,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'strval',
                                      'call-type' => 1,
                                      'parameters' => 
                                      array (
                                        0 => 
                                        array (
                                          'parameter' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'tryTimes',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                            'line' => 73,
                                            'char' => 59,
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                          'line' => 73,
                                          'char' => 59,
                                        ),
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 73,
                                      'char' => 61,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 73,
                                    'char' => 61,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ' times for you.',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 73,
                                    'char' => 78,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                  'line' => 73,
                                  'char' => 78,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 73,
                                'char' => 78,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 73,
                            'char' => 79,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 74,
                          'char' => 19,
                        ),
                        1 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'variable',
                              'operator' => 'assign',
                              'variable' => 'tryTimes',
                              'expr' => 
                              array (
                                'type' => 'sub',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'tryTimes',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                  'line' => 74,
                                  'char' => 41,
                                ),
                                'right' => 
                                array (
                                  'type' => 'int',
                                  'value' => '1',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                  'line' => 74,
                                  'char' => 44,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 74,
                                'char' => 44,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 74,
                              'char' => 44,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 75,
                          'char' => 18,
                        ),
                        2 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'greater',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'tryTimes',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 75,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '0',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 75,
                              'char' => 33,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                            'line' => 75,
                            'char' => 33,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'fcall',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'usleep',
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
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 77,
                                        'char' => 33,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'retryInterval',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 77,
                                        'char' => 47,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 77,
                                      'char' => 47,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 77,
                                    'char' => 47,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 77,
                                'char' => 48,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 78,
                              'char' => 29,
                            ),
                            1 => 
                            array (
                              'type' => 'fcall',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'error_log',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'concat',
                                        'left' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'PHP Notice:  PhalconPlus::Db::MySQL::connnect() retry to connect to MySQL for the ',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                          'line' => 78,
                                          'char' => 113,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'fcall',
                                          'name' => 'strval',
                                          'call-type' => 1,
                                          'parameters' => 
                                          array (
                                            0 => 
                                            array (
                                              'parameter' => 
                                              array (
                                                'type' => 'sub',
                                                'left' => 
                                                array (
                                                  'type' => 'property-access',
                                                  'left' => 
                                                  array (
                                                    'type' => 'variable',
                                                    'value' => 'this',
                                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                    'line' => 78,
                                                    'char' => 126,
                                                  ),
                                                  'right' => 
                                                  array (
                                                    'type' => 'variable',
                                                    'value' => 'retryTimes',
                                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                    'line' => 78,
                                                    'char' => 138,
                                                  ),
                                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                  'line' => 78,
                                                  'char' => 138,
                                                ),
                                                'right' => 
                                                array (
                                                  'type' => 'variable',
                                                  'value' => 'tryTimes',
                                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                  'line' => 78,
                                                  'char' => 148,
                                                ),
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                'line' => 78,
                                                'char' => 148,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                              'line' => 78,
                                              'char' => 148,
                                            ),
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                          'line' => 78,
                                          'char' => 149,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 78,
                                        'char' => 149,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'string',
                                        'value' => ' time ... ',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 78,
                                        'char' => 160,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 78,
                                      'char' => 160,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 78,
                                    'char' => 160,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 78,
                                'char' => 161,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 79,
                              'char' => 17,
                            ),
                          ),
                          'else_statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'fcall',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'error_log',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'concat',
                                      'left' => 
                                      array (
                                        'type' => 'string',
                                        'value' => 'PHP Fatal error:  PhalconPlus::Db::MySQL::connect() finally failed to connect to MySQL. Detail: ',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 80,
                                        'char' => 128,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'fcall',
                                        'name' => 'json_encode',
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
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                'line' => 81,
                                                'char' => 48,
                                              ),
                                              'right' => 
                                              array (
                                                'type' => 'variable',
                                                'value' => 'descriptor',
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                                'line' => 81,
                                                'char' => 59,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                              'line' => 81,
                                              'char' => 59,
                                            ),
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                            'line' => 81,
                                            'char' => 59,
                                          ),
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                        'line' => 81,
                                        'char' => 60,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                      'line' => 81,
                                      'char' => 60,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                    'line' => 81,
                                    'char' => 60,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 81,
                                'char' => 61,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 82,
                              'char' => 25,
                            ),
                            1 => 
                            array (
                              'type' => 'throw',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'e',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                                'line' => 82,
                                'char' => 28,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                              'line' => 83,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                          'line' => 84,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                      'line' => 85,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 85,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 86,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 86,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'connection',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 86,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 86,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
              'line' => 87,
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
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => '\\Phalcon\\Db\\Adapter\\Pdo\\Mysql',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                  'line' => 57,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
                'line' => 57,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 57,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 56,
          'last-line' => 88,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'RETRY_TIMES',
          'default' => 
          array (
            'type' => 'int',
            'value' => '5',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 5,
            'char' => 26,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 6,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'RETRY_INTERVAL',
          'default' => 
          array (
            'type' => 'int',
            'value' => '100000',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
            'line' => 6,
            'char' => 34,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
          'line' => 8,
          'char' => 11,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/Mysql.zep',
    'line' => 3,
    'char' => 5,
  ),
);