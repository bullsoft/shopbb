<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Enum',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
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
        'name' => 'PhalconPlus\\Enum\\AbstractEnum',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
        'line' => 2,
        'char' => 34,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Exception',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractEnum',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'details',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 8,
          'char' => 13,
        ),
      ),
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'has',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'eCode',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 8,
              'char' => 44,
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
                  'variable' => 'code',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 10,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 10,
                  'char' => 24,
                ),
                1 => 
                array (
                  'variable' => 'details',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 10,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 10,
                  'char' => 38,
                ),
                2 => 
                array (
                  'variable' => 'className',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 10,
                  'char' => 49,
                ),
                3 => 
                array (
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 10,
                  'char' => 54,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 11,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 11,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 11,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 12,
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
                  'variable' => 'code',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'className',
                    'dynamic' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'eCode',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 12,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 12,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 12,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 12,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 19,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'cblock',
              'value' => '
        #if PHP_VERSION_ID >= 70000
        zephir_read_static_property_ce(&details, phalconplus_enum_exception_ce, SL("details") TSRMLS_CC, 0);
        #else
        zephir_read_static_property_ce(&details, phalconplus_enum_exception_ce, SL("details") TSRMLS_CC);
        #endif
        ',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 20,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 20,
                  'char' => 51,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'details',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 20,
                    'char' => 30,
                  ),
                  'right' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'code',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 20,
                      'char' => 36,
                    ),
                    'name' => '__toString',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 20,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 20,
                  'char' => 51,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 20,
                'char' => 51,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 21,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 22,
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
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 23,
                    'char' => 22,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 24,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 25,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 8,
          'last-line' => 27,
          'char' => 29,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getByCode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'eCode',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 27,
              'char' => 47,
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
                  'variable' => 'detail',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 29,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 29,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 30,
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
                  'variable' => 'detail',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'has',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'eCode',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 30,
                          'char' => 39,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 30,
                        'char' => 39,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 30,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 30,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 31,
              'char' => 10,
            ),
            2 => 
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
                    'value' => 'detail',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 31,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 31,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 31,
                'char' => 26,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'detail',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'code',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 32,
                          'char' => 28,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'eCode',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 32,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 32,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 33,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 34,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'detail',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 34,
                'char' => 22,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 35,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 27,
          'last-line' => 37,
          'char' => 26,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'newException',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'e',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 37,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'logger',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Logger\\Adapter',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 37,
                'char' => 75,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 37,
                'char' => 83,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 37,
              'char' => 83,
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
                  'variable' => 'code',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 39,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'eCode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 39,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'eName',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 39,
                  'char' => 31,
                ),
                3 => 
                array (
                  'variable' => 'map2Name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 39,
                  'char' => 41,
                ),
                4 => 
                array (
                  'variable' => 'className',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 39,
                  'char' => 52,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 40,
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
                  'variable' => 'map2Name',
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
                          'type' => 'scall',
                          'dynamic-class' => 0,
                          'class' => 'static',
                          'dynamic' => 0,
                          'name' => 'validValues',
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'bool',
                                'value' => 'true',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                                'line' => 40,
                                'char' => 59,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                              'line' => 40,
                              'char' => 59,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 40,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 40,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 40,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 40,
                  'char' => 61,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 41,
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
                  'variable' => 'eCode',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'e',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 41,
                      'char' => 23,
                    ),
                    'name' => 'getCode',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 41,
                    'char' => 33,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 41,
                  'char' => 33,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 44,
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
                  'variable' => 'eName',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => '\\Phalcon\\Text',
                    'dynamic' => 0,
                    'name' => 'camelize',
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
                            'value' => 'map2Name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                            'line' => 44,
                            'char' => 53,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'eCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                            'line' => 44,
                            'char' => 59,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 44,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 44,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 44,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 44,
                  'char' => 61,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 46,
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
                  'variable' => 'eClassName',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 46,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'exception',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 46,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 47,
              'char' => 11,
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
                  'variable' => 'eClassName',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'static',
                      'dynamic' => 0,
                      'name' => 'exceptionClassPrefix',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 47,
                      'char' => 57,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'eName',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 47,
                      'char' => 64,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 47,
                    'char' => 64,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 47,
                  'char' => 64,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 49,
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
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_called_class',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 49,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 49,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 50,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'code',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'className',
                    'dynamic' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'eCode',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 50,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 50,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 50,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 50,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 52,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'exception',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'eClassName',
                    'dynamic' => 1,
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
                            'value' => 'code',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                            'line' => 52,
                            'char' => 47,
                          ),
                          'name' => 'getMessage',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 52,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 52,
                        'char' => 60,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'logger',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 52,
                          'char' => 68,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 52,
                        'char' => 68,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 52,
                    'char' => 69,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 52,
                  'char' => 69,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 54,
              'char' => 17,
            ),
            9 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'exception',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 54,
                  'char' => 19,
                ),
                'name' => 'setCode',
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
                        'value' => 'code',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 54,
                        'char' => 33,
                      ),
                      'name' => 'getCode',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 54,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 54,
                    'char' => 43,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 54,
                'char' => 44,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 55,
              'char' => 17,
            ),
            10 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'exception',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 55,
                  'char' => 19,
                ),
                'name' => 'setLevel',
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
                        'value' => 'code',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 55,
                        'char' => 34,
                      ),
                      'name' => 'getLevel',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 55,
                      'char' => 45,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 55,
                    'char' => 45,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 55,
                'char' => 46,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 56,
              'char' => 17,
            ),
            11 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'exception',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 56,
                  'char' => 19,
                ),
                'name' => 'setMessage',
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
                        'value' => 'e',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 56,
                        'char' => 33,
                      ),
                      'name' => 'getMessage',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 56,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 56,
                    'char' => 46,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 56,
                'char' => 47,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 58,
              'char' => 14,
            ),
            12 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'exception',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 58,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 59,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 37,
          'last-line' => 61,
          'char' => 26,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'exceptionClassPrefix',
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
                  'type' => 'constant',
                  'value' => '__NAMESPACE__',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 63,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '\\\\Exception\\\\',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 63,
                  'char' => 45,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 63,
                'char' => 45,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 64,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 61,
          'last-line' => 66,
          'char' => 26,
        ),
        4 => 
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
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'detail',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 68,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 68,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 69,
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
                  'variable' => 'detail',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'getByCode',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                            'line' => 69,
                            'char' => 45,
                          ),
                          'name' => 'getValue',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 69,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 69,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 69,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 69,
                  'char' => 57,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 70,
              'char' => 10,
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
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 70,
                  'char' => 39,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'detail',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 70,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'message',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 70,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 70,
                  'char' => 39,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 70,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 71,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 72,
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
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 73,
                    'char' => 20,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 74,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 75,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 66,
          'last-line' => 77,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getLevel',
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
                  'variable' => 'detail',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 79,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 79,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 80,
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
                  'variable' => 'detail',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'getByCode',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                            'line' => 80,
                            'char' => 45,
                          ),
                          'name' => 'getValue',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                          'line' => 80,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                        'line' => 80,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 80,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 80,
                  'char' => 57,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 81,
              'char' => 10,
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
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 81,
                  'char' => 37,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'detail',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 81,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'level',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 81,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 81,
                  'char' => 37,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 81,
                'char' => 37,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 82,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 83,
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
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => '\\Phalcon\\Logger',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 84,
                      'char' => 42,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'DEBUG',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                      'line' => 84,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                    'line' => 84,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 85,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 86,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 77,
          'last-line' => 88,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getCode',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                  'line' => 90,
                  'char' => 21,
                ),
                'name' => 'getValue',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
                'line' => 90,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
              'line' => 91,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
          'line' => 88,
          'last-line' => 92,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Exception.zep',
    'line' => 4,
    'char' => 5,
  ),
);