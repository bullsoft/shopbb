<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'SimpleRequest',
    'abstract' => 0,
    'final' => 1,
    'extends' => 'AbstractRequest',
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
          'name' => 'params',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
            'line' => 8,
            'char' => 24,
          ),
          'docblock' => '**
     * @var array
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
          'line' => 10,
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
          'name' => 'softClone',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 10,
              'char' => 41,
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
                  'variable' => 'key',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 12,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 12,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 13,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'data',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 13,
                'char' => 30,
              ),
              'key' => 'key',
              'value' => 'val',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'property_exists',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 14,
                          'char' => 36,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 14,
                        'char' => 36,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 14,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 14,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                    'line' => 14,
                    'char' => 43,
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 15,
                          'char' => 22,
                        ),
                        'name' => '__set',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                              'line' => 15,
                              'char' => 32,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                            'line' => 15,
                            'char' => 32,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'val',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                              'line' => 15,
                              'char' => 37,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                            'line' => 15,
                            'char' => 37,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 15,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                      'line' => 16,
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
                          'assign-type' => 'object-property-array-index',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'params',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                              'line' => 17,
                              'char' => 37,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'val',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                            'line' => 17,
                            'char' => 44,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 17,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                      'line' => 18,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 19,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 20,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
          'line' => 10,
          'last-line' => 22,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getParam',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'idx',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 22,
              'char' => 37,
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
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 24,
                  'char' => 16,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 25,
              'char' => 10,
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
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 25,
                  'char' => 41,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                      'line' => 25,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'params',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                      'line' => 25,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                    'line' => 25,
                    'char' => 35,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'idx',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                    'line' => 25,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 25,
                  'char' => 41,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 25,
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
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                    'line' => 26,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 27,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 28,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
          'line' => 22,
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
          'name' => 'setParams',
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
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 30,
              'char' => 43,
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
                  'property' => 'params',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'params',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                    'line' => 32,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 32,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 33,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 33,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 34,
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
                  'value' => '\\PhalconPlus\\Base\\SimpleRequest',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 31,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 31,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
            'line' => 31,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
          'line' => 30,
          'last-line' => 36,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setParam',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'val',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 36,
              'char' => 37,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 36,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 36,
              'char' => 53,
            ),
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
                  'type' => 'fcall',
                  'name' => 'is_null',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'key',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 38,
                        'char' => 24,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                      'line' => 38,
                      'char' => 24,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 38,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 38,
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
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'params',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 39,
                          'char' => 33,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'val',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 39,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                      'line' => 39,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 40,
                  'char' => 9,
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
                    'name' => 'array_push',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                            'line' => 41,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'params',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                            'line' => 41,
                            'char' => 36,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 41,
                          'char' => 36,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 41,
                        'char' => 36,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'val',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                          'line' => 41,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                        'line' => 41,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                    'line' => 41,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 42,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 43,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 43,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 44,
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
                  'value' => '\\PhalconPlus\\Base\\SimpleRequest',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 37,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 37,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
            'line' => 37,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
          'line' => 36,
          'last-line' => 46,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getParams',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 48,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'params',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                  'line' => 48,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 48,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
              'line' => 49,
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
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
                'line' => 47,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
            'line' => 47,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
          'line' => 46,
          'last-line' => 50,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
      'line' => 3,
      'char' => 11,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/SimpleRequest.zep',
    'line' => 3,
    'char' => 11,
  ),
);