<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
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
        'name' => 'PhalconPlus\\Base\\Pagable',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 2,
        'char' => 29,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 3,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'PhalconPlus\\Assert\\Assertion',
        'alias' => 'Assert',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 3,
        'char' => 43,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 4,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Db\\AdapterInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 4,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 5,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Mvc\\Model\\Transaction\\Manager',
        'alias' => 'TxManager',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 5,
        'char' => 55,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 6,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Mvc\\Model\\MetaDataInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 6,
        'char' => 40,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 7,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Db\\AdapterInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 7,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 8,
    'char' => 3,
  ),
  7 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Mvc\\Model\\Resultset',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
        'line' => 8,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 14,
    'char' => 5,
  ),
  8 => 
  array (
    'type' => 'class',
    'name' => 'Model',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\Phalcon\\Mvc\\Model',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'ctime',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 19,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'property',
          'name' => 'mtime',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 21,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '__p_UK',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 21,
            'char' => 26,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 23,
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
          'name' => 'initialize',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'self',
                'dynamic' => 0,
                'name' => 'setUp',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'notNullValidations',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 26,
                            'char' => 32,
                          ),
                          'value' => 
                          array (
                            'type' => 'bool',
                            'value' => 'false',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 26,
                            'char' => 39,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 26,
                          'char' => 39,
                        ),
                        1 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'castOnHydrate',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 27,
                            'char' => 27,
                          ),
                          'value' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 27,
                            'char' => 33,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 27,
                          'char' => 33,
                        ),
                        2 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'forceCasting',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 28,
                            'char' => 26,
                          ),
                          'value' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 29,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 29,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 29,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 29,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 29,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 30,
              'char' => 12,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 30,
                  'char' => 14,
                ),
                'name' => 'useDynamicUpdate',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'true',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 30,
                      'char' => 36,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 30,
                    'char' => 36,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 30,
                'char' => 37,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 31,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 31,
                  'char' => 14,
                ),
                'name' => 'keepSnapshots',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'true',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 31,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 31,
                    'char' => 33,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 31,
                'char' => 34,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 32,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 23,
          'last-line' => 34,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getMessage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 36,
                  'char' => 21,
                ),
                'name' => 'getFirstMessage',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 36,
                'char' => 39,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 37,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 34,
          'last-line' => 39,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getFirstMessage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'count',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 41,
                        'char' => 23,
                      ),
                      'name' => 'getMessages',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 41,
                            'char' => 36,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 41,
                          'char' => 36,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 41,
                      'char' => 37,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 41,
                    'char' => 37,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 41,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'cast',
                    'left' => 'string',
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'current',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 42,
                              'char' => 42,
                            ),
                            'name' => 'getMessages',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 42,
                                  'char' => 55,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 42,
                                'char' => 55,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 42,
                            'char' => 56,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 42,
                          'char' => 56,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 42,
                      'char' => 57,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 42,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 43,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 44,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 44,
                'char' => 21,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 45,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 39,
          'last-line' => 47,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getLastMessage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'count',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 49,
                        'char' => 23,
                      ),
                      'name' => 'getMessages',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 49,
                            'char' => 36,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 49,
                          'char' => 36,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 49,
                      'char' => 37,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 49,
                    'char' => 37,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 49,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'cast',
                    'left' => 'string',
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'end',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 50,
                              'char' => 38,
                            ),
                            'name' => 'getMessages',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 50,
                                  'char' => 51,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 50,
                                'char' => 51,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 50,
                            'char' => 52,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 50,
                          'char' => 52,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 50,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 50,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 51,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 52,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 52,
                'char' => 21,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 53,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 47,
          'last-line' => 55,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'createBuilder',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'alias',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 55,
                'char' => 51,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 55,
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
                  'variable' => 'source',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 57,
                  'char' => 19,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 58,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'alias',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 58,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 58,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 58,
                'char' => 25,
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
                      'variable' => 'source',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'key' => 
                            array (
                              'type' => 'variable',
                              'value' => 'alias',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 59,
                              'char' => 32,
                            ),
                            'value' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'get_called_class',
                              'call-type' => 1,
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 59,
                              'char' => 51,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 59,
                            'char' => 51,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 59,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 59,
                      'char' => 52,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 60,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'source',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'get_called_class',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 61,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 61,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 62,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 63,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 63,
                      'char' => 21,
                    ),
                    'name' => 'getModelsManager',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 63,
                    'char' => 41,
                  ),
                  'name' => 'createBuilder',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 63,
                  'char' => 58,
                ),
                'name' => 'from',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'source',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 63,
                      'char' => 70,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 63,
                    'char' => 70,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 63,
                'char' => 71,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 64,
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
                  'value' => '\\Phalcon\\Mvc\\Model\\Query\\BuilderInterface',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 56,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 56,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 56,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 55,
          'last-line' => 68,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getInstance',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 71,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 72,
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
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_called_class',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 72,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 72,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 73,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'className',
                'dynamic' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 73,
                'char' => 33,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 74,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @deprecated 非单例，不建议用此方法名称，将在以后移除
     *',
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
                  'value' => '\\Phalcon\\Mvc\\Model',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 70,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 70,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 70,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 69,
          'last-line' => 76,
          'char' => 26,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'newInstance',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 78,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 79,
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
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_called_class',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 79,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 79,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 80,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'className',
                'dynamic' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 80,
                'char' => 33,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 81,
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
                  'value' => '\\Phalcon\\Mvc\\Model',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 77,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 77,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 77,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 76,
          'last-line' => 83,
          'char' => 26,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'batchInsert',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'columns',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 83,
              'char' => 53,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'rows',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 83,
              'char' => 65,
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
                  'variable' => 'model',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 85,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'conn',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 85,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'e',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 85,
                  'char' => 27,
                ),
                3 => 
                array (
                  'variable' => 'row',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 85,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 86,
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
                  'variable' => 'columnMap',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 86,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 86,
                  'char' => 27,
                ),
                1 => 
                array (
                  'variable' => 'newColumns',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 86,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 86,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 88,
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
                  'variable' => 'className',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 88,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 89,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_called_class',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 89,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 89,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 90,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'model',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'className',
                    'dynamic' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 90,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 90,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 92,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'method_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'model',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 92,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 92,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'columnMap',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 92,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 92,
                    'char' => 42,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 92,
                'char' => 44,
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
                      'variable' => 'columnMap',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'array_flip',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'model',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 93,
                                'char' => 46,
                              ),
                              'name' => 'columnMap',
                              'call-type' => 1,
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 93,
                              'char' => 58,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 93,
                            'char' => 58,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 93,
                        'char' => 59,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 93,
                      'char' => 59,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 94,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'val',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 94,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 95,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'columns',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 95,
                    'char' => 32,
                  ),
                  'value' => 'val',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
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
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'columnMap',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 96,
                              'char' => 35,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'val',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 96,
                              'char' => 39,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 96,
                            'char' => 40,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 96,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 96,
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'newColumns',
                              'expr' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'columnMap',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 97,
                                  'char' => 49,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'val',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 97,
                                  'char' => 53,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 97,
                                'char' => 54,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 97,
                              'char' => 54,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 98,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 99,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 100,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'newColumns',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'columns',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 101,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 101,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 102,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 103,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'conn',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'model',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 103,
                      'char' => 26,
                    ),
                    'name' => 'getWriteConnection',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 103,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 103,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 104,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'try-catch',
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
                      'value' => 'conn',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 105,
                      'char' => 18,
                    ),
                    'name' => 'begin',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 105,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 106,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'rows',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 106,
                    'char' => 29,
                  ),
                  'value' => 'row',
                  'reverse' => 0,
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
                          'value' => 'conn',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 107,
                          'char' => 22,
                        ),
                        'name' => 'insert',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'model',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 107,
                                'char' => 36,
                              ),
                              'name' => 'getSource',
                              'call-type' => 1,
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 107,
                              'char' => 48,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 107,
                            'char' => 48,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'row',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 107,
                              'char' => 53,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 107,
                            'char' => 53,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'newColumns',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 107,
                              'char' => 65,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 107,
                            'char' => 65,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 107,
                        'char' => 66,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 108,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 109,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'conn',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 109,
                      'char' => 18,
                    ),
                    'name' => 'commit',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 109,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 110,
                  'char' => 9,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 110,
                      'char' => 27,
                    ),
                  ),
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'e',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 115,
                    'char' => 14,
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
                          'value' => 'conn',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 111,
                          'char' => 18,
                        ),
                        'name' => 'rollback',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 111,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 112,
                      'char' => 17,
                    ),
                    1 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'e',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 112,
                        'char' => 20,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 113,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 115,
                  'char' => 14,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 115,
              'char' => 14,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 115,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 116,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 83,
          'last-line' => 118,
          'char' => 26,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'beforeValidationOnCreate',
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
                  'property' => 'ctime',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'date',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Y-m-d H:i:s',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 120,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 120,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 120,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 120,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 121,
              'char' => 11,
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
                  'property' => 'mtime',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 121,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ctime',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 121,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 121,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 121,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 122,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 118,
          'last-line' => 124,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'afterFetch',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 124,
          'last-line' => 129,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'beforeCreate',
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
                  'property' => 'ctime',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'date',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Y-m-d H:i:s',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 131,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 131,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 131,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 131,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 132,
              'char' => 11,
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
                  'property' => 'mtime',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 132,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ctime',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 132,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 132,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 132,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 133,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 129,
          'last-line' => 135,
          'char' => 19,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'beforeSave',
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
                  'property' => 'mtime',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'date',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Y-m-d H:i:s',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 137,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 137,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 137,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 137,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 138,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 138,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 139,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 135,
          'last-line' => 149,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'findByPagable',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'pagable',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'Pagable',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 150,
                'char' => 51,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 150,
              'char' => 52,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 150,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 150,
              'char' => 71,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'Assert',
                'dynamic' => 0,
                'name' => 'notNull',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pagable',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 152,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 152,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'constant',
                            'value' => '__CLASS__',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 152,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '::',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 152,
                            'char' => 46,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 152,
                          'char' => 46,
                        ),
                        'right' => 
                        array (
                          'type' => 'constant',
                          'value' => '__METHOD__',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 152,
                          'char' => 58,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 152,
                        'char' => 58,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => ': Pagable can not be null',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 152,
                        'char' => 84,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 152,
                      'char' => 84,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 152,
                    'char' => 84,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 152,
                'char' => 85,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 154,
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
                  'variable' => 'builder',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 154,
                  'char' => 20,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 155,
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
                  'variable' => 'builder',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 155,
                      'char' => 28,
                    ),
                    'name' => 'createBuilder',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 155,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 155,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 157,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 157,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'orderBys',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 157,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 157,
                  'char' => 31,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 159,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'orderBys',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_map',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'strval',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 159,
                          'char' => 40,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 159,
                        'char' => 40,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pagable',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 159,
                            'char' => 50,
                          ),
                          'name' => 'getOrderBys',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 159,
                          'char' => 64,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 159,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 159,
                    'char' => 65,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 159,
                  'char' => 65,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 160,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'orderBys',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 160,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 160,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 160,
                'char' => 28,
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
                      'value' => 'builder',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 162,
                      'char' => 21,
                    ),
                    'name' => 'orderBy',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'implode',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => ', ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 162,
                                'char' => 40,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 162,
                              'char' => 40,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'orderBys',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 162,
                                'char' => 50,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 162,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 162,
                          'char' => 51,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 162,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 162,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 163,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 165,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 165,
                  'char' => 39,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 165,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'columns',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 165,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 165,
                  'char' => 39,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 165,
                'char' => 39,
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
                      'value' => 'builder',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 166,
                      'char' => 21,
                    ),
                    'name' => 'columns',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'val',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 166,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 166,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 166,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 167,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
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
                      'value' => 'builder',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 168,
                      'char' => 21,
                    ),
                    'name' => 'columns',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '*',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 168,
                          'char' => 31,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 168,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 168,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 169,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 171,
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
                  'variable' => 'bind',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 171,
                    'char' => 22,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 171,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 172,
              'char' => 10,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 172,
                  'char' => 36,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 172,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'bind',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 172,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 172,
                  'char' => 36,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 172,
                'char' => 36,
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
                      'variable' => 'bind',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'val',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 173,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 173,
                      'char' => 27,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 174,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 176,
              'char' => 10,
            ),
            9 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 176,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 176,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'conditions',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 176,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 176,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 176,
                'char' => 42,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'empty',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'bind',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 177,
                      'char' => 27,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 177,
                    'char' => 27,
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
                          'value' => 'builder',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 178,
                          'char' => 25,
                        ),
                        'name' => 'where',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'val',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 178,
                              'char' => 35,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 178,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 178,
                        'char' => 36,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 179,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
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
                          'value' => 'builder',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 180,
                          'char' => 25,
                        ),
                        'name' => 'where',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'val',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 180,
                              'char' => 35,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 180,
                            'char' => 35,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'bind',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 180,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 180,
                            'char' => 41,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 180,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 181,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 182,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 183,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'queryBuilder',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 183,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'page',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 183,
                  'char' => 31,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 184,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'queryBuilder',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Phalcon\\Paginator\\Adapter\\QueryBuilder',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'builder',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 185,
                                'char' => 20,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'builder',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 185,
                                'char' => 28,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 185,
                              'char' => 28,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'limit',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 186,
                                'char' => 18,
                              ),
                              'value' => 
                              array (
                                'type' => 'mcall',
                                'variable' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pagable',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 186,
                                  'char' => 27,
                                ),
                                'name' => 'getPageSize',
                                'call-type' => 1,
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 186,
                                'char' => 41,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 186,
                              'char' => 41,
                            ),
                            2 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'page',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 187,
                                'char' => 17,
                              ),
                              'value' => 
                              array (
                                'type' => 'mcall',
                                'variable' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pagable',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 187,
                                  'char' => 26,
                                ),
                                'name' => 'getPageNo',
                                'call-type' => 1,
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 188,
                                'char' => 9,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 188,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 188,
                          'char' => 10,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 188,
                        'char' => 10,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 188,
                    'char' => 11,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 188,
                  'char' => 11,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 190,
              'char' => 11,
            ),
            12 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'page',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'queryBuilder',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 190,
                      'char' => 33,
                    ),
                    'name' => 'getPaginate',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 190,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 190,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 192,
              'char' => 10,
            ),
            13 => 
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'page',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 192,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'items',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 192,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 192,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 192,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 192,
                  'char' => 41,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 192,
                'char' => 41,
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
                      'variable' => 'hydration',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 193,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 194,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'hydration',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 194,
                      'char' => 51,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'params',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 194,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'hydration',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 194,
                        'char' => 49,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 194,
                      'char' => 51,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 194,
                    'char' => 51,
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'page',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 195,
                            'char' => 22,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'items',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 195,
                            'char' => 29,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 195,
                          'char' => 29,
                        ),
                        'name' => 'setHydrateMode',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'hydration',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 195,
                              'char' => 54,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 195,
                            'char' => 54,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 195,
                        'char' => 55,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 196,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 197,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 199,
              'char' => 14,
            ),
            14 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'Page',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pagable',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 199,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 199,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'page',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 199,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'total_items',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 199,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 199,
                      'char' => 51,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 199,
                    'char' => 51,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'page',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 199,
                        'char' => 58,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'items',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 199,
                        'char' => 64,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 199,
                      'char' => 64,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 199,
                    'char' => 64,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 199,
                'char' => 65,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 200,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * find with paginator
     * @var array params
     *    - params["columns"]
     *    - params["conditions"]
     *    - params["bind"]
     *    - params["hydration"]: \\Phalcon\\Mvc\\Model\\Resultset::HYDRATE_OBJECTS | HYDRATE_ARRAYS | HYDRATE_RECORDS
     *
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 150,
          'last-line' => 204,
          'char' => 19,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'exists',
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
                  'variable' => 'metaData',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 207,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'readConnection',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 207,
                  'char' => 37,
                ),
                2 => 
                array (
                  'variable' => 'schema',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 207,
                  'char' => 45,
                ),
                3 => 
                array (
                  'variable' => 'source',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 207,
                  'char' => 53,
                ),
                4 => 
                array (
                  'variable' => 'table',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 207,
                  'char' => 60,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 208,
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
                  'variable' => 'metaData',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 209,
                      'char' => 29,
                    ),
                    'name' => 'getModelsMetaData',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 209,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 209,
                  'char' => 49,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'readConnection',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 210,
                      'char' => 35,
                    ),
                    'name' => 'getReadConnection',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 210,
                    'char' => 55,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 210,
                  'char' => 55,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 211,
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
                  'variable' => 'schema',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 212,
                      'char' => 27,
                    ),
                    'name' => 'getSchema',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 212,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 212,
                  'char' => 39,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'source',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 213,
                      'char' => 27,
                    ),
                    'name' => 'getSource',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 213,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 213,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 215,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'schema',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 215,
                'char' => 19,
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
                      'variable' => 'table',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'variable',
                              'value' => 'schema',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 216,
                              'char' => 32,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 216,
                            'char' => 32,
                          ),
                          1 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'variable',
                              'value' => 'source',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 216,
                              'char' => 40,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 216,
                            'char' => 40,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 216,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 216,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 217,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'table',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'source',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 218,
                        'char' => 31,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 218,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 219,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 221,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 221,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '__p_UK',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 221,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 221,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 221,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 221,
                'char' => 32,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 222,
                      'char' => 18,
                    ),
                    'name' => '_p_buildUkCond',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'metaData',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 222,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 222,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'readConnection',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 222,
                          'char' => 58,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 222,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 222,
                    'char' => 59,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 223,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 225,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 225,
                  'char' => 17,
                ),
                'name' => '_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'metaData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 225,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 225,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'readConnection',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 225,
                      'char' => 50,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 225,
                    'char' => 50,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'table',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 225,
                      'char' => 57,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 225,
                    'char' => 57,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 225,
                'char' => 59,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 226,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 227,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 228,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 229,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 230,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Check if a reord is already exists?
     *',
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 206,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 206,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 205,
          'last-line' => 235,
          'char' => 19,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setUpdateCond',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 236,
              'char' => 47,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 238,
                  'char' => 21,
                ),
                'name' => 'setUpdateCondition',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'params',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 238,
                      'char' => 47,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 238,
                    'char' => 47,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 238,
                'char' => 48,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 239,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @alias setUpdateCondition()
     * @deprecated
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 236,
          'last-line' => 249,
          'char' => 19,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setUpdateCondition',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'params',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 250,
              'char' => 52,
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
                  'variable' => 'metaData',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 252,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'writeConnection',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 252,
                  'char' => 38,
                ),
                2 => 
                array (
                  'variable' => 'columnMap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 252,
                  'char' => 49,
                ),
                3 => 
                array (
                  'variable' => 'bindDataTypes',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 252,
                  'char' => 64,
                ),
                4 => 
                array (
                  'variable' => 'primaryKeys',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 252,
                  'char' => 77,
                ),
                5 => 
                array (
                  'variable' => 'attributeField',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 252,
                  'char' => 93,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 253,
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
                  'variable' => 'pk',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 253,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 253,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'type',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 253,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 254,
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
                  'variable' => 'whereUk',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 254,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 254,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'uniqueParams',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 254,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 254,
                  'char' => 44,
                ),
                2 => 
                array (
                  'variable' => 'uniqueTypes',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 254,
                    'char' => 62,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 254,
                  'char' => 62,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 256,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'metaData',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 256,
                      'char' => 29,
                    ),
                    'name' => 'getModelsMetaData',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 256,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 256,
                  'char' => 49,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'writeConnection',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 257,
                      'char' => 36,
                    ),
                    'name' => 'getWriteConnection',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 257,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 257,
                  'char' => 57,
                ),
                2 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'columnMap',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'metaData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 258,
                      'char' => 34,
                    ),
                    'name' => 'getColumnMap',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 258,
                          'char' => 52,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 258,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 258,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 258,
                  'char' => 53,
                ),
                3 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'bindDataTypes',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'metaData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 259,
                      'char' => 38,
                    ),
                    'name' => 'getBindTypes',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 259,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 259,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 259,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 259,
                  'char' => 57,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 261,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'primaryKeys',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'metaData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 261,
                      'char' => 36,
                    ),
                    'name' => 'getPrimaryKeyAttributes',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 261,
                          'char' => 65,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 261,
                        'char' => 65,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 261,
                    'char' => 66,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 261,
                  'char' => 66,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 262,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'primaryKeys',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 262,
                'char' => 31,
              ),
              'value' => 'pk',
              'reverse' => 0,
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
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'columnMap',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 266,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 266,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 266,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 266,
                    'char' => 42,
                  ),
                  'statements' => 
                  array (
                    0 => 
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
                            'value' => 'attributeField',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 267,
                            'char' => 57,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'columnMap',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 267,
                              'char' => 52,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pk',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 267,
                              'char' => 55,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 267,
                            'char' => 57,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 267,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 267,
                        'char' => 57,
                      ),
                      'statements' => 
                      array (
                        0 => 
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
                                      'type' => 'string',
                                      'value' => 'Model::setUpdateCond: Column \'',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                      'line' => 268,
                                      'char' => 90,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'pk',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                      'line' => 268,
                                      'char' => 95,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 268,
                                    'char' => 95,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '\' isn\'t part of the column map',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 268,
                                    'char' => 127,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 268,
                                  'char' => 127,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 268,
                                'char' => 127,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 268,
                            'char' => 128,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 269,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 270,
                      'char' => 13,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'attributeField',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'pk',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 271,
                            'char' => 40,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 271,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 272,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 274,
                  'char' => 14,
                ),
                1 => 
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
                        'value' => 'type',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 274,
                        'char' => 47,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'bindDataTypes',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 274,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'pk',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 274,
                          'char' => 45,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 274,
                        'char' => 47,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 274,
                      'char' => 47,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 274,
                    'char' => 47,
                  ),
                  'statements' => 
                  array (
                    0 => 
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
                                  'type' => 'string',
                                  'value' => 'Model::setupdateCond: Column \'',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 275,
                                  'char' => 86,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pk',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 275,
                                  'char' => 91,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 275,
                                'char' => 91,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '\' isn\'t part of the table columns',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 275,
                                'char' => 126,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 275,
                              'char' => 126,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 275,
                            'char' => 126,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 275,
                        'char' => 127,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 276,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 278,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 278,
                      'char' => 52,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-dynamic-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 278,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'attributeField',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 278,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 278,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 278,
                    'char' => 52,
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
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'uniqueParams',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'value',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 279,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 279,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 280,
                      'char' => 13,
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
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'uniqueParams',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 281,
                            'char' => 42,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 281,
                          'char' => 42,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 282,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 284,
                  'char' => 15,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'whereUk',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'writeConnection',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 284,
                            'char' => 45,
                          ),
                          'name' => 'escapeIdentifier',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pk',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 284,
                                'char' => 65,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 284,
                              'char' => 65,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 284,
                          'char' => 67,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' = ?',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 284,
                          'char' => 73,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 284,
                        'char' => 73,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 284,
                      'char' => 73,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 285,
                  'char' => 15,
                ),
                4 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'uniqueTypes',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 285,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 285,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 286,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 291,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'conditions',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 291,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'bind',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 291,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'bindTypes',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 291,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 292,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'conditions',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 292,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 292,
                    'char' => 36,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 292,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 292,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 292,
                'char' => 40,
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'conditions',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 294,
                      'char' => 53,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'params',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 294,
                        'char' => 40,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'conditions',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 294,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 294,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 294,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 296,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 298,
              'char' => 10,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 298,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_uniqueKey',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 298,
                      'char' => 36,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 298,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 298,
                  'char' => 36,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 298,
                'char' => 36,
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
                      'property' => '_uniqueKey',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 299,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_uniqueKey',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 299,
                            'char' => 53,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 299,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' AND ',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 299,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 299,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 299,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 300,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 301,
              'char' => 10,
            ),
            9 => 
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
                    'value' => 'conditions',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 301,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 301,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 301,
                  'char' => 39,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 301,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'merge_append',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'whereUk',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 302,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 302,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'conditions',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 302,
                          'char' => 45,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 302,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 302,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 303,
                  'char' => 15,
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
                      'property' => '_uniqueKey',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 303,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_uniqueKey',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 303,
                            'char' => 53,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 303,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'join',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => ' AND ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 303,
                                'char' => 65,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 303,
                              'char' => 65,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'whereUk',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 303,
                                'char' => 74,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 303,
                              'char' => 74,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 303,
                          'char' => 75,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 303,
                        'char' => 75,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 303,
                      'char' => 75,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 304,
                  'char' => 9,
                ),
              ),
              'elseif_statements' => 
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
                        'value' => 'conditions',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 304,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 304,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'string',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 304,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 304,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'conditions',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'join',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => ' AND ',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                      'line' => 305,
                                      'char' => 40,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 305,
                                    'char' => 40,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'whereUk',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                      'line' => 305,
                                      'char' => 49,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 305,
                                    'char' => 49,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 305,
                                'char' => 51,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' AND ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 305,
                                'char' => 59,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 305,
                              'char' => 59,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'conditions',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 305,
                              'char' => 71,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 305,
                            'char' => 71,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 305,
                          'char' => 71,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 306,
                      'char' => 15,
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
                          'property' => '_uniqueKey',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 306,
                                'char' => 41,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_uniqueKey',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 306,
                                'char' => 53,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 306,
                              'char' => 53,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'conditions',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 306,
                              'char' => 65,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 306,
                            'char' => 65,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 306,
                          'char' => 65,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 307,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 309,
                  'char' => 11,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 309,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_uniqueKey',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'str_replace',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_values',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'columnMap',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 309,
                                'char' => 66,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 309,
                              'char' => 66,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 309,
                          'char' => 67,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 309,
                        'char' => 67,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'array_keys',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'columnMap',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 309,
                                'char' => 89,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 309,
                              'char' => 89,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 309,
                          'char' => 90,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 309,
                        'char' => 90,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 309,
                            'char' => 97,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_uniqueKey',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 309,
                            'char' => 108,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 309,
                          'char' => 108,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 309,
                        'char' => 108,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 309,
                    'char' => 109,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 309,
                  'char' => 109,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 311,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'countKeys',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'substr_count',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 311,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_uniqueKey',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 311,
                            'char' => 54,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 311,
                          'char' => 54,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 311,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '= ?',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 311,
                          'char' => 59,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 311,
                        'char' => 59,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 311,
                    'char' => 60,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 311,
                  'char' => 60,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 316,
              'char' => 10,
            ),
            12 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'bind',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 316,
                  'char' => 37,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 316,
                    'char' => 30,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'bind',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 316,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 316,
                  'char' => 37,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 316,
                'char' => 37,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'merge_append',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uniqueParams',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 317,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 317,
                        'char' => 38,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'bind',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 317,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 317,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 317,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 318,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 320,
              'char' => 10,
            ),
            13 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 320,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_uniqueParams',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 320,
                    'char' => 33,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 320,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 320,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 320,
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
                      'property' => '_uniqueParams',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 321,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 321,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 322,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 323,
              'char' => 20,
            ),
            14 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'merge_append',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 323,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_uniqueParams',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 323,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 323,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 323,
                    'char' => 41,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'uniqueParams',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 323,
                      'char' => 55,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 323,
                    'char' => 55,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 323,
                'char' => 56,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 324,
              'char' => 11,
            ),
            15 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_uniqueParams',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_pad',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 324,
                            'char' => 50,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_uniqueParams',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 324,
                            'char' => 64,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 324,
                          'char' => 64,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 324,
                        'char' => 64,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'countKeys',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 324,
                          'char' => 75,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 324,
                        'char' => 75,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'null',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 324,
                          'char' => 81,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 324,
                        'char' => 81,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 324,
                    'char' => 82,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 324,
                  'char' => 82,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 326,
              'char' => 10,
            ),
            16 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'bindTypes',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 326,
                  'char' => 47,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 326,
                    'char' => 35,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'bindTypes',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 326,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 326,
                  'char' => 47,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 326,
                'char' => 47,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'merge_append',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uniqueTypes',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 327,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 327,
                        'char' => 37,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'bindTypes',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 327,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 327,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 327,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 328,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 330,
              'char' => 10,
            ),
            17 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 330,
                    'char' => 17,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_uniqueTypes',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 330,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 330,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 330,
                  'char' => 39,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 330,
                'char' => 39,
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
                      'property' => '_uniqueTypes',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 331,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 331,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 332,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 333,
              'char' => 20,
            ),
            18 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'merge_append',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 333,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_uniqueTypes',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 333,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 333,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 333,
                    'char' => 40,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'uniqueTypes',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 333,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 333,
                    'char' => 53,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 333,
                'char' => 54,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 334,
              'char' => 11,
            ),
            19 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_uniqueTypes',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_pad',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 334,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_uniqueTypes',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 334,
                            'char' => 62,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 334,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 334,
                        'char' => 62,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'countKeys',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 334,
                          'char' => 73,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 334,
                        'char' => 73,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\Phalcon\\Db\\Column',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 334,
                            'char' => 104,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'BIND_SKIP',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 334,
                            'char' => 104,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 334,
                          'char' => 104,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 334,
                        'char' => 104,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 334,
                    'char' => 105,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 334,
                  'char' => 105,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 335,
              'char' => 14,
            ),
            20 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 335,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 336,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * 如果想在更新某条记录的时候额外加入其他条件，可以使用此方法
     * where = [
         \'id > ?\',  // 占位符仅支持?形式，不支持:placeHolder这种形式
         \'bind\' => [
             14
         ]
     ];
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 250,
          'last-line' => 341,
          'char' => 19,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setUqKeys',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'whereUk',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 342,
              'char' => 44,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 344,
                  'char' => 21,
                ),
                'name' => 'setUniqueKeys',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'whereUk',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 344,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 344,
                    'char' => 43,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 344,
                'char' => 44,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 345,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @alias setUniqueKeys
     * @deprecated
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 342,
          'last-line' => 349,
          'char' => 19,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setUniqueKeys',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'whereUk',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 350,
              'char' => 48,
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
                  'variable' => 'field',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 356,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'attributeField',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 356,
                  'char' => 34,
                ),
                2 => 
                array (
                  'variable' => 'type',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 356,
                  'char' => 40,
                ),
                3 => 
                array (
                  'variable' => 'metaData',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 356,
                  'char' => 50,
                ),
                4 => 
                array (
                  'variable' => 'columnMap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 356,
                  'char' => 61,
                ),
                5 => 
                array (
                  'variable' => 'bindDataTypes',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 356,
                  'char' => 76,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 358,
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
                  'variable' => 'metaData',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 358,
                      'char' => 29,
                    ),
                    'name' => 'getModelsMetaData',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 358,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 358,
                  'char' => 49,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 359,
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
                  'variable' => 'columnMap',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'metaData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 359,
                      'char' => 34,
                    ),
                    'name' => 'getColumnMap',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 359,
                          'char' => 52,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 359,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 359,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 359,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 360,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'bindDataTypes',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'metaData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 360,
                      'char' => 38,
                    ),
                    'name' => 'getBindTypes',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 360,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 360,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 360,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 360,
                  'char' => 57,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 362,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'whereUk',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 362,
                'char' => 39,
              ),
              'value' => 'attributeField',
              'reverse' => 0,
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
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'columnMap',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 363,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 363,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 363,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 363,
                    'char' => 42,
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
                          'variable' => 'tmp',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 364,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 365,
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
                          'variable' => 'tmp',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'array_flip',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'columnMap',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 365,
                                  'char' => 47,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 365,
                                'char' => 47,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 365,
                            'char' => 48,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 365,
                          'char' => 48,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 366,
                      'char' => 18,
                    ),
                    2 => 
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
                            'value' => 'field',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 366,
                            'char' => 54,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'tmp',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 366,
                              'char' => 37,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'attributeField',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 366,
                              'char' => 52,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 366,
                            'char' => 54,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 366,
                          'char' => 54,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 366,
                        'char' => 54,
                      ),
                      'statements' => 
                      array (
                        0 => 
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
                                      'type' => 'string',
                                      'value' => 'Model::setUqKeys: Column \'',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                      'line' => 367,
                                      'char' => 86,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'attributeField',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                      'line' => 367,
                                      'char' => 103,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 367,
                                    'char' => 103,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '\' isn\'t part of the column map',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 367,
                                    'char' => 135,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 367,
                                  'char' => 135,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 367,
                                'char' => 135,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 367,
                            'char' => 136,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 368,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 369,
                      'char' => 13,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'field',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'attributeField',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 370,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 370,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 371,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 373,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '__p_UK',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'attributeField',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 373,
                          'char' => 44,
                        ),
                        1 => 
                        array (
                          'type' => 'string',
                          'value' => 'field',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 373,
                          'char' => 51,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'field',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 373,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 373,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 375,
                  'char' => 14,
                ),
                2 => 
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
                        'value' => 'type',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 375,
                        'char' => 50,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'bindDataTypes',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 375,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'field',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 375,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 375,
                        'char' => 50,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 375,
                      'char' => 50,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 375,
                    'char' => 50,
                  ),
                  'statements' => 
                  array (
                    0 => 
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
                                  'type' => 'string',
                                  'value' => 'Model::setUqKeys: Column \'',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 376,
                                  'char' => 82,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'field',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 376,
                                  'char' => 90,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 376,
                                'char' => 90,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '\' isn\'t part of the table columns',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 376,
                                'char' => 125,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 376,
                              'char' => 125,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 376,
                            'char' => 125,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 376,
                        'char' => 126,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 377,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 378,
                  'char' => 15,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '__p_UK',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'attributeField',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 378,
                          'char' => 44,
                        ),
                        1 => 
                        array (
                          'type' => 'string',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 378,
                          'char' => 50,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 378,
                        'char' => 58,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 378,
                      'char' => 58,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 379,
                  'char' => 15,
                ),
                4 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '__p_UK',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'attributeField',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 379,
                          'char' => 44,
                        ),
                        1 => 
                        array (
                          'type' => 'string',
                          'value' => 'op',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 379,
                          'char' => 48,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '=',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 379,
                        'char' => 53,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 379,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 380,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 381,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 381,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 382,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * columnMap field
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 350,
          'last-line' => 384,
          'char' => 19,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => '_p_buildUkCond',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'metaData',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'MetaDataInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 384,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 384,
              'char' => 67,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'connection',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'AdapterInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 384,
                'char' => 97,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 384,
              'char' => 98,
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
                  'variable' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'type',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'info',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 30,
                ),
                3 => 
                array (
                  'variable' => 'field',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 37,
                ),
                4 => 
                array (
                  'variable' => 'whereUk',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 46,
                ),
                5 => 
                array (
                  'variable' => 'uniqueParams',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 60,
                ),
                6 => 
                array (
                  'variable' => 'uniqueTypes',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 73,
                ),
                7 => 
                array (
                  'variable' => 'attributeField',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 386,
                  'char' => 89,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 388,
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
                  'variable' => 'whereUk',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 388,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 388,
                  'char' => 25,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'uniqueParams',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 389,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 389,
                  'char' => 26,
                ),
                2 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'uniqueTypes',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 390,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 390,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 392,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 392,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '__p_UK',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 392,
                  'char' => 50,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 392,
                'char' => 50,
              ),
              'key' => 'attributeField',
              'value' => 'info',
              'reverse' => 0,
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
                      'variable' => 'type',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'info',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 393,
                          'char' => 28,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 393,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 393,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 393,
                      'char' => 34,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'field',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'info',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 394,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'field',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 394,
                          'char' => 31,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 394,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 394,
                      'char' => 32,
                    ),
                    2 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'value',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 395,
                        'char' => 25,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 395,
                      'char' => 25,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 396,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 396,
                      'char' => 52,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-dynamic-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 396,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'attributeField',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 396,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 396,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 396,
                    'char' => 52,
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
                          'variable' => 'selfVal',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 397,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 398,
                      'char' => 18,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fetch',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'selfVal',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 398,
                          'char' => 47,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'info',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 398,
                            'char' => 39,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'value',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 398,
                            'char' => 45,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 398,
                          'char' => 47,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 398,
                        'char' => 47,
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'uniqueParams',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'selfVal',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 399,
                                'char' => 49,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 399,
                              'char' => 49,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 400,
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'uniqueParams',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 401,
                                'char' => 47,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 401,
                              'char' => 47,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 402,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 403,
                      'char' => 13,
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
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'uniqueParams',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 404,
                            'char' => 42,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 404,
                          'char' => 42,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 405,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 406,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'uniqueTypes',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 406,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 406,
                      'char' => 37,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'whereUk',
                      'expr' => 
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
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'connection',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 407,
                                'char' => 40,
                              ),
                              'name' => 'escapeIdentifier',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'field',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 407,
                                    'char' => 63,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 407,
                                  'char' => 63,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 407,
                              'char' => 65,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ' ',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 407,
                              'char' => 68,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 407,
                            'char' => 68,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'info',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 407,
                              'char' => 73,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'op',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 407,
                              'char' => 76,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 407,
                            'char' => 77,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 407,
                          'char' => 77,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' ?',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 407,
                          'char' => 80,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 407,
                        'char' => 80,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 407,
                      'char' => 80,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 408,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 410,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'usefulParams',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 410,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 410,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 411,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'usefulParams',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_filter',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uniqueParams',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 411,
                          'char' => 53,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 411,
                        'char' => 53,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'closure',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'type' => 'parameter',
                              'name' => 'elem',
                              'const' => 0,
                              'data-type' => 'variable',
                              'mandatory' => 0,
                              'reference' => 0,
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 411,
                              'char' => 68,
                            ),
                          ),
                          'right' => 
                          array (
                            0 => 
                            array (
                              'type' => 'return',
                              'expr' => 
                              array (
                                'type' => 'not',
                                'left' => 
                                array (
                                  'type' => 'empty',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'elem',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                    'line' => 412,
                                    'char' => 31,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 412,
                                  'char' => 31,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 412,
                                'char' => 31,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 413,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 413,
                          'char' => 10,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 413,
                        'char' => 10,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 413,
                    'char' => 11,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 413,
                  'char' => 11,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 415,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'usefulParams',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 415,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 415,
                'char' => 31,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 416,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 417,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 419,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_uniqueKey',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'join',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => ' AND ',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 419,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 419,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'whereUk',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 419,
                          'char' => 51,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 419,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 419,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 419,
                  'char' => 52,
                ),
                1 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_uniqueParams',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueParams',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 420,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 420,
                  'char' => 43,
                ),
                2 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_uniqueTypes',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueTypes',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 421,
                    'char' => 41,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 421,
                  'char' => 41,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 422,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 422,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 423,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 411,
          'last-line' => 425,
          'char' => 62,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getUniqueFields',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
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
                      'value' => 'key',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 428,
                      'char' => 17,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 428,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_uniqueKey',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 428,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 428,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 428,
                    'char' => 35,
                  ),
                  1 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'params',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 429,
                      'char' => 20,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 429,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_uniqueParams',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 429,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 429,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 429,
                    'char' => 41,
                  ),
                  2 => 
                  array (
                    'key' => 
                    array (
                      'type' => 'string',
                      'value' => 'types',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 430,
                      'char' => 19,
                    ),
                    'value' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 430,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_uniqueTypes',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 431,
                        'char' => 9,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 431,
                      'char' => 9,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 431,
                    'char' => 9,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 431,
                'char' => 10,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 432,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 425,
          'last-line' => 434,
          'char' => 19,
        ),
        20 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'toProtoBuffer',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'columns',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 434,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 434,
              'char' => 49,
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
                  'variable' => 'proto',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 436,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'toArray',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 436,
                  'char' => 27,
                ),
                2 => 
                array (
                  'variable' => 'key',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 436,
                  'char' => 32,
                ),
                3 => 
                array (
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 436,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 437,
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
                  'variable' => 'toArray',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 437,
                      'char' => 28,
                    ),
                    'name' => 'toArray',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'columns',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 437,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 437,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 437,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 437,
                  'char' => 45,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 438,
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
                  'variable' => 'proto',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'ProtoBuffer',
                    'dynamic' => 0,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 438,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 438,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 439,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'toArray',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 439,
                'char' => 33,
              ),
              'key' => 'key',
              'value' => 'val',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-dynamic-object-property',
                      'operator' => 'assign',
                      'variable' => 'proto',
                      'property' => 'key',
                      'expr' => 
                      array (
                        'type' => 'ternary',
                        'left' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'is_scalar',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'val',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 440,
                                'char' => 45,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 440,
                              'char' => 45,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 440,
                          'char' => 46,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'val',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 440,
                          'char' => 50,
                        ),
                        'extra' => 
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
                                'value' => 'val',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 440,
                                'char' => 61,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 440,
                              'char' => 61,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 440,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 440,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 440,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 441,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 442,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'modelName',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'manager',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 31,
                ),
                2 => 
                array (
                  'variable' => 'relations',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 42,
                ),
                3 => 
                array (
                  'variable' => 'referenceModel',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 58,
                ),
                4 => 
                array (
                  'variable' => 'referencedEntity',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 76,
                ),
                5 => 
                array (
                  'variable' => 'options',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 85,
                ),
                6 => 
                array (
                  'variable' => 'alias',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 92,
                ),
                7 => 
                array (
                  'variable' => 'lowerAlias',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 442,
                  'char' => 104,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 444,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'modelName',
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
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 444,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 444,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 444,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 444,
                  'char' => 34,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'manager',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 444,
                      'char' => 51,
                    ),
                    'name' => 'getModelsManager',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 444,
                    'char' => 70,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 444,
                  'char' => 70,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 445,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'relations',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'manager',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 445,
                      'char' => 33,
                    ),
                    'name' => 'getRelations',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'modelName',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 445,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 445,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 445,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 445,
                  'char' => 57,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 446,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'relations',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 446,
                'char' => 30,
              ),
              'value' => 'val',
              'reverse' => 0,
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
                      'variable' => 'referenceModel',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'val',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 447,
                          'char' => 38,
                        ),
                        'name' => 'getReferencedModel',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 447,
                        'char' => 59,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 447,
                      'char' => 59,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 448,
                  'char' => 15,
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
                      'variable' => 'referencedEntity',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'strtolower',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'referenceModel',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 448,
                              'char' => 61,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 448,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 448,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 448,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 449,
                  'char' => 15,
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
                      'variable' => 'options',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'val',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 449,
                          'char' => 31,
                        ),
                        'name' => 'getOptions',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 449,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 449,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 450,
                  'char' => 14,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'alias',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 450,
                      'char' => 44,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 450,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'alias',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 450,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 450,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 450,
                    'char' => 44,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'typeof',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'alias',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 451,
                            'char' => 34,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 451,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'string',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 451,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 451,
                        'char' => 43,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'throw',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => '\\Exception',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Relation alias must be a string',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 452,
                                  'char' => 73,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 452,
                                'char' => 73,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 452,
                            'char' => 74,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 453,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 454,
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
                          'variable' => 'lowerAlias',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'strtolower',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'alias',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                  'line' => 454,
                                  'char' => 50,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                                'line' => 454,
                                'char' => 50,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 454,
                            'char' => 51,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 454,
                          'char' => 51,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 455,
                      'char' => 13,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'lowerAlias',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'referencedEntity',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 456,
                            'char' => 50,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 456,
                          'char' => 50,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 457,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 458,
                  'char' => 15,
                ),
                4 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'method',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 458,
                      'char' => 23,
                    ),
                    1 => 
                    array (
                      'variable' => 'property',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 458,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 459,
                  'char' => 15,
                ),
                5 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'method',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => 'get',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 459,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'alias',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 459,
                          'char' => 35,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 459,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 459,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 460,
                  'char' => 15,
                ),
                6 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'property',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'lcfirst',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'alias',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                              'line' => 460,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 460,
                            'char' => 41,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 460,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 460,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 461,
                  'char' => 15,
                ),
                7 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable-dynamic-object-property',
                      'operator' => 'assign',
                      'variable' => 'proto',
                      'property' => 'property',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                            'line' => 461,
                            'char' => 42,
                          ),
                          'name' => 'method',
                          'call-type' => 2,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                          'line' => 461,
                          'char' => 54,
                        ),
                        'name' => 'toArray',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                        'line' => 461,
                        'char' => 64,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 461,
                      'char' => 64,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 462,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 463,
              'char' => 14,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'proto',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 463,
                'char' => 21,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 464,
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
                  'value' => 'ProtoBuffer',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 435,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 435,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 435,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 434,
          'last-line' => 470,
          'char' => 19,
        ),
        21 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getReadConnection',
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
                  'variable' => 'dbConn',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 473,
                  'char' => 19,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 474,
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
                  'variable' => 'dbConn',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                      'line' => 474,
                      'char' => 27,
                    ),
                    'name' => 'getWriteConnection',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 474,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 474,
                  'char' => 48,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 475,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'dbConn',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 475,
                  'char' => 19,
                ),
                'name' => 'isUnderTransaction',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 475,
                'char' => 41,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'dbConn',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 476,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 477,
                  'char' => 9,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'parent',
                    'dynamic' => 0,
                    'name' => 'getReadConnection',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                    'line' => 478,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 479,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
              'line' => 480,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * Gets the connection used to read data for the model
     *
     * Check transaction in writeConnection before `_transaction`
     *',
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
                  'value' => 'AdapterInterface',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                  'line' => 472,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
                'line' => 472,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
            'line' => 472,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
          'line' => 471,
          'last-line' => 481,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
      'line' => 14,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Model.zep',
    'line' => 14,
    'char' => 5,
  ),
);