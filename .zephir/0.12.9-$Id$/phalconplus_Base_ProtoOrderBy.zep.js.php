<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
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
        'name' => 'PhalconPlus\\Assert\\Assertion',
        'alias' => 'Assert',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
        'line' => 2,
        'char' => 43,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'ProtoOrderBy',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'ProtoBuffer',
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
          'name' => 'property',
          'docblock' => '**
     * @required
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 13,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'direction',
          'docblock' => '**
     * @required
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 18,
          'char' => 6,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'alias',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
            'line' => 19,
            'char' => 21,
          ),
          'docblock' => '**
     * @optional
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 21,
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
          'name' => 'getProperty',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 23,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'property',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 23,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 23,
                'char' => 30,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 24,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 21,
          'last-line' => 26,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setProperty',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'property',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 26,
              'char' => 49,
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
                  'property' => 'property',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'property',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 28,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 28,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 29,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 26,
          'last-line' => 31,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setDirection',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'orderBy',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PhalconPlus\\Enum\\OrderByDirection',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 31,
                'char' => 77,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 31,
              'char' => 78,
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
                  'property' => 'direction',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'orderBy',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 33,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 33,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 34,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 31,
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
          'name' => 'getDirection',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 38,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'direction',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 38,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 38,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 39,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 36,
          'last-line' => 41,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getAlias',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 43,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'alias',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 43,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 43,
                'char' => 27,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 44,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 41,
          'last-line' => 46,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setAlias',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'alias',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 46,
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
                  'property' => 'alias',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'alias',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 48,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 48,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 49,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 46,
          'last-line' => 51,
          'char' => 19,
        ),
        6 => 
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
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'Assert',
                'dynamic' => 0,
                'name' => 'notEmpty',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 53,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'property',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 53,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 53,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 53,
                    'char' => 40,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 53,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 54,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'Assert',
                'dynamic' => 0,
                'name' => 'notEmpty',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 54,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'direction',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 54,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 54,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 54,
                    'char' => 41,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 54,
                'char' => 42,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 55,
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
                  'variable' => 'orderBy',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 55,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 55,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 56,
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
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 56,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'alias',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 56,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 56,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 56,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 56,
                'char' => 31,
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
                      'variable' => 'orderBy',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'orderBy',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                            'line' => 57,
                            'char' => 35,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                              'line' => 57,
                              'char' => 42,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'alias',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                              'line' => 57,
                              'char' => 49,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                            'line' => 57,
                            'char' => 49,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                          'line' => 57,
                          'char' => 49,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '.',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                          'line' => 57,
                          'char' => 52,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 57,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 57,
                      'char' => 52,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 58,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 59,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
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
                      'type' => 'variable',
                      'value' => 'orderBy',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 59,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 59,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'property',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                        'line' => 59,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                      'line' => 59,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 59,
                    'char' => 41,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => ' ',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 59,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 59,
                  'char' => 45,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 59,
                    'char' => 52,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'direction',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                    'line' => 59,
                    'char' => 62,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                  'line' => 59,
                  'char' => 62,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
                'line' => 59,
                'char' => 62,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
              'line' => 60,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
          'line' => 51,
          'last-line' => 61,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ProtoOrderBy.zep',
    'line' => 4,
    'char' => 5,
  ),
);