<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
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
        'name' => 'PhalconPlus\\Enum\\OrderByDirection',
        'alias' => 'OrderByDirection',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
        'line' => 2,
        'char' => 58,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Pagable',
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
          'name' => 'pageNo',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
            'line' => 9,
            'char' => 25,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 10,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'pageSize',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
            'line' => 10,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 11,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'orderBys',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
            'line' => 11,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 13,
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
          'name' => 'getPageNo',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 15,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'pageNo',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 15,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 15,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 16,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 13,
          'last-line' => 18,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getPageSize',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 20,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'pageSize',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 20,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 20,
                'char' => 30,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 21,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 18,
          'last-line' => 23,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getOrderBys',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 25,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'orderBys',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 25,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 25,
                'char' => 30,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 26,
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
                  'value' => '\\PhalconPlus\\Base\\ProtoOrderBy',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 24,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 24,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
            'line' => 24,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 23,
          'last-line' => 28,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setOrderBy',
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
                'value' => '\\PhalconPlus\\Base\\ProtoOrderBy',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 28,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 28,
              'char' => 72,
            ),
          ),
          'statements' => 
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 30,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'orderBys',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 30,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 30,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                    'line' => 30,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'orderBy',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 30,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                    'line' => 30,
                    'char' => 43,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 30,
                'char' => 44,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 31,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 31,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 32,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 28,
          'last-line' => 34,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setOrderBys',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'orderBys',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 34,
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
                  'variable' => 'item',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 36,
                  'char' => 17,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 37,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'orderBys',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 37,
                'char' => 30,
              ),
              'value' => 'item',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
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
                            'value' => 'item',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 38,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'property',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 38,
                            'char' => 35,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 38,
                          'char' => 36,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 38,
                        'char' => 39,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 38,
                      'char' => 39,
                    ),
                    'right' => 
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
                            'value' => 'item',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 38,
                            'char' => 51,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'direction',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 38,
                            'char' => 61,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 38,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 38,
                        'char' => 64,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 38,
                      'char' => 64,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                    'line' => 38,
                    'char' => 64,
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
                          'variable' => 'orderBy',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 39,
                          'char' => 28,
                        ),
                        1 => 
                        array (
                          'variable' => 'direction',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 39,
                          'char' => 39,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 40,
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
                          'variable' => 'orderBy',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'ProtoOrderBy',
                            'dynamic' => 0,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 40,
                            'char' => 49,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 40,
                          'char' => 49,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 41,
                      'char' => 23,
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
                          'value' => 'orderBy',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 41,
                          'char' => 25,
                        ),
                        'name' => 'setProperty',
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
                                'value' => 'item',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                                'line' => 41,
                                'char' => 42,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'property',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                                'line' => 41,
                                'char' => 51,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                              'line' => 41,
                              'char' => 52,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 41,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 41,
                        'char' => 53,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 42,
                      'char' => 19,
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
                          'variable' => 'direction',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'OrderByDirection',
                            'dynamic' => 0,
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
                                    'value' => 'item',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                                    'line' => 42,
                                    'char' => 58,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'direction',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                                    'line' => 42,
                                    'char' => 68,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                                  'line' => 42,
                                  'char' => 69,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                                'line' => 42,
                                'char' => 69,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 42,
                            'char' => 70,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 42,
                          'char' => 70,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 43,
                      'char' => 23,
                    ),
                    4 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'orderBy',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 43,
                          'char' => 25,
                        ),
                        'name' => 'setDirection',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'direction',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                              'line' => 43,
                              'char' => 48,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 43,
                            'char' => 48,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 43,
                        'char' => 49,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 44,
                      'char' => 20,
                    ),
                    5 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                          'line' => 44,
                          'char' => 22,
                        ),
                        'name' => 'setOrderBy',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'orderBy',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                              'line' => 44,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                            'line' => 44,
                            'char' => 41,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                        'line' => 44,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                      'line' => 45,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 46,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 47,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 34,
          'last-line' => 49,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setPageNo',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'pageNo',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 49,
              'char' => 41,
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
                  'property' => 'pageNo',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'pageNo',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                    'line' => 51,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 51,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 52,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 52,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 53,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 49,
          'last-line' => 55,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setPageSize',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'pageSize',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 55,
              'char' => 45,
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
                  'property' => 'pageSize',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'pageSize',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                    'line' => 57,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                  'line' => 57,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 58,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
                'line' => 58,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
              'line' => 59,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 55,
          'last-line' => 61,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'DEFAULT_PAGE_NO',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
            'line' => 6,
            'char' => 30,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 7,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'DEFAULT_PAGE_SIZE',
          'default' => 
          array (
            'type' => 'int',
            'value' => '15',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
            'line' => 7,
            'char' => 33,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
          'line' => 9,
          'char' => 13,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Pagable.zep',
    'line' => 4,
    'char' => 5,
  ),
);