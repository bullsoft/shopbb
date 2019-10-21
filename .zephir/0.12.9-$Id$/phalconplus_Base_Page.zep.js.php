<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
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
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
        'line' => 2,
        'char' => 43,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
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
        'name' => 'Phalcon\\Mvc\\Model\\Resultset',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
        'line' => 3,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
    'line' => 5,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Page',
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
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'pagable',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
            'line' => 10,
            'char' => 27,
          ),
          'docblock' => '**
     * @var <\\Phalcon\\Base\\Pagable>
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 14,
          'char' => 6,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'data',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
            'line' => 15,
            'char' => 24,
          ),
          'docblock' => '**
     * @var mixed array | <ArrayObject>
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 17,
          'char' => 11,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'totalSize',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
            'line' => 17,
            'char' => 26,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 19,
          'char' => 11,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'pageNo',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
            'line' => 19,
            'char' => 23,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 21,
          'char' => 11,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'pageSize',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
            'line' => 21,
            'char' => 25,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 23,
          'char' => 11,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'totalPage',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
            'line' => 23,
            'char' => 26,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 25,
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
              'name' => 'pagable',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'Pagable',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 25,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 25,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'totalSize',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 25,
              'char' => 61,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Mvc\\Model\\Resultset',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 25,
                'char' => 97,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 25,
              'char' => 98,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 27,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 27,
                    'char' => 32,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 27,
                'char' => 33,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 29,
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
                  'variable' => 'hydrateMode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 29,
                  'char' => 24,
                ),
                1 => 
                array (
                  'variable' => 'tmpData',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 29,
                  'char' => 33,
                ),
                2 => 
                array (
                  'variable' => 'item',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 29,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 31,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'pagable',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'pagable',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 31,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 31,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 33,
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
                  'variable' => 'hydrateMode',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 33,
                      'char' => 32,
                    ),
                    'name' => 'getHydrateMode',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 33,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 33,
                  'char' => 49,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 35,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'hydrateMode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 35,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 35,
                'char' => 29,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Resultset',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 36,
                      'char' => 44,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'HYDRATE_RECORDS',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 36,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 36,
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
                          'variable' => 'tmpData',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => '\\ArrayObject',
                            'dynamic' => 0,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 37,
                            'char' => 49,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 37,
                          'char' => 49,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 38,
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
                          'variable' => 'tmpData',
                          'property' => 'modelName',
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
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'data',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                    'line' => 38,
                                    'char' => 57,
                                  ),
                                  'name' => 'getFirst',
                                  'call-type' => 1,
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                  'line' => 38,
                                  'char' => 68,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                'line' => 38,
                                'char' => 68,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 38,
                            'char' => 69,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 38,
                          'char' => 69,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 39,
                      'char' => 19,
                    ),
                    2 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'tmpData',
                          'property' => 'columnMap',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'data',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                'line' => 39,
                                'char' => 47,
                              ),
                              'name' => 'getFirst',
                              'call-type' => 1,
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 39,
                              'char' => 59,
                            ),
                            'name' => 'columnMap',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 39,
                            'char' => 71,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 39,
                          'char' => 71,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 40,
                      'char' => 19,
                    ),
                    3 => 
                    array (
                      'type' => 'for',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'iterator',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'data',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 40,
                              'char' => 42,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 40,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 40,
                        'char' => 44,
                      ),
                      'value' => 'item',
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
                              'value' => 'tmpData',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 41,
                              'char' => 29,
                            ),
                            'name' => 'append',
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
                                    'value' => 'item',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                    'line' => 41,
                                    'char' => 42,
                                  ),
                                  'name' => 'toArray',
                                  'call-type' => 1,
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                  'line' => 41,
                                  'char' => 52,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                'line' => 41,
                                'char' => 52,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 41,
                            'char' => 53,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 42,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 43,
                      'char' => 21,
                    ),
                    4 => 
                    array (
                      'type' => 'break',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 44,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 44,
                  'char' => 19,
                ),
                1 => 
                array (
                  'type' => 'default',
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
                          'variable' => 'tmpData',
                          'expr' => 
                          array (
                            'type' => 'empty-array',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 45,
                            'char' => 33,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 45,
                          'char' => 33,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 46,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'for',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'iterator',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'data',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 46,
                              'char' => 42,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 46,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 46,
                        'char' => 44,
                      ),
                      'value' => 'item',
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'tmpData',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'item',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                                'line' => 47,
                                'char' => 41,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 47,
                              'char' => 41,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 48,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 49,
                      'char' => 21,
                    ),
                    2 => 
                    array (
                      'type' => 'break',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 50,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 50,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 52,
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
                  'property' => 'data',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'tmpData',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 52,
                    'char' => 33,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 52,
                  'char' => 33,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 53,
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
                  'property' => 'totalSize',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'totalSize',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 53,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 53,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 56,
              'char' => 12,
            ),
            7 => 
            array (
              'type' => 'mcall',
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 56,
                      'char' => 14,
                    ),
                    'name' => 'setPageNo',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 57,
                    'char' => 14,
                  ),
                  'name' => 'setPageSize',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 58,
                  'char' => 14,
                ),
                'name' => 'setTotalPage',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 58,
                'char' => 29,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 59,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 25,
          'last-line' => 61,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setPageNo',
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
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 63,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pagable',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 63,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 63,
                      'char' => 42,
                    ),
                    'name' => 'getPageNo',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 63,
                    'char' => 54,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 63,
                  'char' => 54,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 64,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 64,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 65,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 61,
          'last-line' => 67,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setPageSize',
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
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 69,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'pagable',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 69,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 69,
                      'char' => 44,
                    ),
                    'name' => 'getPageSize',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 69,
                    'char' => 58,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 69,
                  'char' => 58,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 70,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 70,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 71,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 67,
          'last-line' => 73,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setTotalPage',
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
                  'property' => 'totalPage',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ceil',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'div',
                          'left' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 75,
                              'char' => 41,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'totalSize',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 75,
                              'char' => 52,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 75,
                            'char' => 52,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 75,
                              'char' => 59,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'pageSize',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                              'line' => 75,
                              'char' => 68,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                            'line' => 75,
                            'char' => 68,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 75,
                          'char' => 68,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 75,
                        'char' => 68,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 75,
                    'char' => 69,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 75,
                  'char' => 69,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 76,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 76,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 77,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 73,
          'last-line' => 79,
          'char' => 19,
        ),
        4 => 
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 81,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'pageNo',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 81,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 81,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 82,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 79,
          'last-line' => 84,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getTotalPage',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 86,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'totalPage',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 86,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 86,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 87,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 84,
          'last-line' => 89,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getTotalSize',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 91,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'totalSize',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 91,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 91,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 92,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 89,
          'last-line' => 94,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'hasPreviousPage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'greater',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 96,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'pageNo',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 96,
                    'char' => 29,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 96,
                  'char' => 29,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '1',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 96,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 96,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 97,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 94,
          'last-line' => 99,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isFirstPage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 101,
                    'char' => 22,
                  ),
                  'name' => 'hasPreviousPage',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 101,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 101,
                'char' => 40,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 102,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 99,
          'last-line' => 104,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isLastPage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 106,
                    'char' => 22,
                  ),
                  'name' => 'hasNextPage',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 106,
                  'char' => 36,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 106,
                'char' => 36,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 107,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 104,
          'last-line' => 109,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'hasNextPage',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 111,
                    'char' => 21,
                  ),
                  'name' => 'getPageNo',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 111,
                  'char' => 34,
                ),
                'right' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                    'line' => 111,
                    'char' => 41,
                  ),
                  'name' => 'getTotalPage',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 111,
                  'char' => 56,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 111,
                'char' => 56,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 112,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 109,
          'last-line' => 114,
          'char' => 19,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getData',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 116,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'data',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 116,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 116,
                'char' => 26,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 117,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 114,
          'last-line' => 119,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isEmpty',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 121,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'data',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                          'line' => 121,
                          'char' => 32,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                        'line' => 121,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                      'line' => 121,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 121,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                  'line' => 121,
                  'char' => 38,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
                'line' => 121,
                'char' => 38,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
              'line' => 122,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
          'line' => 119,
          'last-line' => 123,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
      'line' => 5,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Page.zep',
    'line' => 5,
    'char' => 5,
  ),
);