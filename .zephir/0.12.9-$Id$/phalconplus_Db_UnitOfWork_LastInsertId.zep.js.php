<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Db\\UnitOfWork',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
    'line' => 2,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => '\\PhalconPlus\\Db\\UnitOfWork',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
        'line' => 2,
        'char' => 31,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'LastInsertId',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractValue',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'model',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
          'line' => 8,
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
              'name' => 'model',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Mvc\\Model',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                'line' => 8,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 8,
              'char' => 59,
            ),
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
                  'property' => 'model',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'model',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 10,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 10,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 11,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
          'line' => 8,
          'last-line' => 13,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getValue',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'unitwork',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'UnitOfWork',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                'line' => 13,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 13,
              'char' => 51,
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
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_class',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 15,
                            'char' => 40,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 15,
                            'char' => 46,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 15,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 15,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 15,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 15,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 16,
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
                  'variable' => 'hash',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'spl_object_hash',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 16,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 16,
                            'char' => 47,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 16,
                          'char' => 47,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 16,
                        'char' => 47,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 16,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 16,
                  'char' => 48,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 17,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'inserted',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'unitwork',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 17,
                      'char' => 33,
                    ),
                    'name' => 'getInserted',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 17,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 17,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 19,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'inserted',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 19,
                  'char' => 21,
                ),
                'name' => 'contains',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 19,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'model',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 19,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 19,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 19,
                    'char' => 42,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                'line' => 19,
                'char' => 44,
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
                      'variable' => 'info',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'inserted',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 20,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 20,
                            'char' => 38,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 20,
                            'char' => 44,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 20,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 20,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 20,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 21,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'info',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 21,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'last_insert_id',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 21,
                            'char' => 41,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 21,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 21,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 21,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'greater',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'info',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 21,
                          'char' => 51,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'last_insert_id',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 21,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 21,
                        'char' => 68,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 21,
                        'char' => 72,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 21,
                      'char' => 72,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 21,
                    'char' => 72,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'intval',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'info',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                                'line' => 22,
                                'char' => 35,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'last_insert_id',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                                'line' => 22,
                                'char' => 50,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                              'line' => 22,
                              'char' => 51,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 22,
                            'char' => 51,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 22,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 23,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 24,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 24,
                    'char' => 21,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 25,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 27,
              'char' => 13,
            ),
            4 => 
            array (
              'type' => 'throw',
              'expr' => 
              array (
                'type' => 'new',
                'class' => '\\PhalconPlus\\Base\\Exception',
                'dynamic' => 0,
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
                              'value' => 'Object(',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                              'line' => 27,
                              'char' => 54,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'hash',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                              'line' => 27,
                              'char' => 59,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 27,
                            'char' => 59,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ') instance of ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                            'line' => 27,
                            'char' => 74,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 27,
                          'char' => 74,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'className',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 27,
                          'char' => 84,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 27,
                        'char' => 84,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => ' not in SplObjectStorage',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 27,
                        'char' => 109,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 27,
                      'char' => 109,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                    'line' => 27,
                    'char' => 109,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                'line' => 27,
                'char' => 110,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 28,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
          'line' => 13,
          'last-line' => 30,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__toString',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'concat',
                'left' => 
                array (
                  'type' => 'string',
                  'value' => 'LastInsertId: ',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 32,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'spl_object_hash',
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 32,
                          'char' => 54,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'model',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                          'line' => 32,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                        'line' => 32,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                      'line' => 32,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                  'line' => 32,
                  'char' => 61,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
                'line' => 32,
                'char' => 61,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
              'line' => 33,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
          'line' => 30,
          'last-line' => 34,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/LastInsertId.zep',
    'line' => 4,
    'char' => 5,
  ),
);