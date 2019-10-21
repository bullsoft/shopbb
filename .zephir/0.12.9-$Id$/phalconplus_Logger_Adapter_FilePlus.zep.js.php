<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Logger\\Adapter',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
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
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
        'line' => 2,
        'char' => 43,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
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
        'name' => 'Phalcon\\Logger\\AdapterInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
        'line' => 3,
        'char' => 36,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
    'line' => 5,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'FilePlus',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\Phalcon\\Logger\\Adapter\\File',
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
          'name' => 'type2Handler',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
            'line' => 7,
            'char' => 30,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 8,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'type2Ext',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
            'line' => 8,
            'char' => 26,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
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
          'name' => 'mode',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
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
          'name' => '_path',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
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
          'name' => '_options',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 14,
          'char' => 11,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_fileHandler',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 16,
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
              'name' => 'filePath',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 16,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 16,
                'char' => 69,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 16,
              'char' => 69,
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
                'name' => 'notEmpty',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'filePath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 18,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 18,
                    'char' => 34,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 18,
                'char' => 35,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 20,
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
                  'variable' => 'mode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 20,
                  'char' => 17,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 21,
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
                  'value' => 'mode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 21,
                  'char' => 38,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 21,
                    'char' => 31,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'mode',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 21,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 21,
                  'char' => 38,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 21,
                'char' => 38,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'strpos',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 22,
                            'char' => 27,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 22,
                          'char' => 27,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'r',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 22,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 22,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 22,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 22,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 22,
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
                          'property' => 'mode',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 23,
                            'char' => 38,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 23,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 24,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\InvalidArgumentException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Logger must be opened in append or write mode',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                              'line' => 25,
                              'char' => 98,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 25,
                            'char' => 98,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 25,
                        'char' => 99,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 26,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 27,
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
                      'property' => 'mode',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'ab',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 28,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 28,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 29,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 31,
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
                  'property' => '_fileHandler',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 31,
                      'char' => 39,
                    ),
                    'name' => 'open',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'filePath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 31,
                          'char' => 53,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 31,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 31,
                    'char' => 54,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 31,
                  'char' => 54,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 32,
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
                  'property' => '_path',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'filePath',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 32,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 32,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 33,
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
                  'property' => '_options',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 33,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 33,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 36,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'type2Handler',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'int',
                      'value' => '-1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 36,
                      'char' => 34,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 36,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_fileHandler',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 36,
                      'char' => 56,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 36,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 36,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 37,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'type2Ext',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'int',
                      'value' => '-1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 37,
                      'char' => 30,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 37,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 37,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 38,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 16,
          'last-line' => 40,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'open',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'filePath',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 40,
              'char' => 43,
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
                  'variable' => 'handler',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 42,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 42,
                  'char' => 27,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 43,
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
                  'variable' => 'handler',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'fopen',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'filePath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 43,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 43,
                        'char' => 37,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 43,
                            'char' => 44,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 43,
                            'char' => 49,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 43,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 43,
                        'char' => 49,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 43,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 43,
                  'char' => 50,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 44,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'handler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 44,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 44,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 44,
                'char' => 29,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'Cannot open log file ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 45,
                            'char' => 56,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'filePath',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 45,
                            'char' => 66,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 45,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 45,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 45,
                    'char' => 67,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 46,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 47,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'handler',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 47,
                'char' => 23,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 48,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 40,
          'last-line' => 51,
          'char' => 20,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'log',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 51,
              'char' => 33,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 51,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 51,
              'char' => 53,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 51,
                'char' => 76,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 51,
              'char' => 76,
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
                  'variable' => 'handler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 53,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'toggledType',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 53,
                  'char' => 27,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 55,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'type',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 55,
                      'char' => 19,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 55,
                    'char' => 19,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'string',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 55,
                    'char' => 29,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 55,
                  'char' => 29,
                ),
                'right' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 55,
                      'char' => 47,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 55,
                    'char' => 47,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'integer',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 55,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 55,
                  'char' => 57,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 55,
                'char' => 57,
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
                      'variable' => 'toggledType',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'message',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 56,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 56,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 57,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 58,
                          'char' => 20,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 58,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'string',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 58,
                        'char' => 30,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 58,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 58,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 58,
                        'char' => 48,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'null',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 58,
                        'char' => 55,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 58,
                      'char' => 55,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 58,
                    'char' => 55,
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
                          'variable' => 'toggledType',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 59,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 59,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 60,
                      'char' => 4,
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
                          'variable' => 'toggledType',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'type',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 61,
                            'char' => 27,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 61,
                          'char' => 27,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 62,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 63,
                  'char' => 3,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 65,
              'char' => 4,
            ),
            2 => 
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
                    'value' => 'toggledType',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 65,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 65,
                  'char' => 26,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 65,
                  'char' => 33,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 65,
                'char' => 33,
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
                      'variable' => 'toggledType',
                      'expr' => 
                      array (
                        'type' => 'static-constant-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => '\\Phalcon\\Logger',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 66,
                          'char' => 44,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'DEBUG',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 66,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 66,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 66,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 67,
                  'char' => 3,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 69,
              'char' => 10,
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
                  'value' => 'handler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 69,
                  'char' => 59,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 69,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'type2Handler',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 69,
                      'char' => 45,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 69,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'toggledType',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 69,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 69,
                  'char' => 59,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 69,
                'char' => 59,
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
                      'property' => '_fileHandler',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'handler',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 70,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 70,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 71,
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
                      'property' => '_fileHandler',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 72,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'type2Handler',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 72,
                            'char' => 56,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 72,
                          'char' => 56,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '-1',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 72,
                          'char' => 59,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 72,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 72,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 73,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 75,
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
                'name' => 'log',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'type',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 75,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 75,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 75,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 75,
                    'char' => 41,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 75,
                      'char' => 50,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 75,
                    'char' => 50,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 75,
                'char' => 51,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 76,
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
                  'value' => 'AdapterInterface',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 52,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 52,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
            'line' => 52,
            'char' => 2,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 51,
          'last-line' => 92,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'registerExtension',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'ext',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 92,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'types',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 92,
              'char' => 63,
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
                'name' => 'notEmpty',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ext',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 94,
                      'char' => 29,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 94,
                    'char' => 29,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 94,
                'char' => 30,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 95,
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
                      'type' => 'variable',
                      'value' => 'types',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 95,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 95,
                    'char' => 31,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 95,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 97,
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
                  'variable' => 'filePath',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 97,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'type',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 97,
                  'char' => 27,
                ),
                2 => 
                array (
                  'variable' => 'fileHandler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 97,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 98,
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
                  'variable' => 'filePath',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 98,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_path',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 98,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 98,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ext',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 98,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 98,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 98,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 99,
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
                  'variable' => 'fileHandler',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 99,
                      'char' => 32,
                    ),
                    'name' => 'open',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'filePath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 99,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 99,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 99,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 99,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 100,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'types',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 100,
                'char' => 27,
              ),
              'value' => 'type',
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
                      'assign-type' => 'object-property-array-index',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'type2Handler',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 101,
                          'char' => 40,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'fileHandler',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 101,
                        'char' => 55,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 101,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 102,
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
                      'property' => 'type2Ext',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 102,
                          'char' => 36,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ext',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 102,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 102,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 103,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 104,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 92,
          'last-line' => 106,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'close',
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
                  'variable' => 'type',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 108,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'handler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 108,
                  'char' => 27,
                ),
                2 => 
                array (
                  'variable' => 'result',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 108,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 109,
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
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 109,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 109,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 110,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 110,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'type2Handler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 110,
                  'char' => 49,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 110,
                'char' => 49,
              ),
              'key' => 'type',
              'value' => 'handler',
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
                      'type' => 'fcall',
                      'name' => 'fclose',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'handler',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 111,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 111,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 111,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 111,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 111,
                    'char' => 41,
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
                          'variable' => 'result',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'false',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 112,
                            'char' => 35,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 112,
                          'char' => 35,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 113,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'type' => 'break',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 114,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 115,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 115,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'type2Handler',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 115,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 115,
                        'char' => 37,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 115,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 115,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 115,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 116,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 117,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'result',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 117,
                'char' => 22,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 118,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 107,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
            'line' => 107,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 106,
          'last-line' => 120,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getProcessorVar',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 120,
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
                  'variable' => 'processor',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 122,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 123,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'try-catch',
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
                      'variable' => 'processor',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 124,
                            'char' => 34,
                          ),
                          'name' => 'getFormatter',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 124,
                          'char' => 50,
                        ),
                        'name' => 'getProcessor',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                              'line' => 124,
                              'char' => 67,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 124,
                            'char' => 67,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 124,
                        'char' => 68,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 124,
                      'char' => 68,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 125,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'cast',
                    'left' => 'string',
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'processor',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 125,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 125,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 126,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 126,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 128,
                  'char' => 14,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 128,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'undefined',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 128,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 129,
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 121,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
            'line' => 121,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 120,
          'last-line' => 131,
          'char' => 19,
        ),
        6 => 
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
              'name' => 'property',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 131,
              'char' => 43,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 133,
                  'char' => 21,
                ),
                'name' => 'getProcessorVar',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'property',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 133,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 133,
                    'char' => 46,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 133,
                'char' => 47,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 134,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 131,
          'last-line' => 136,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__destruct',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 138,
                  'char' => 14,
                ),
                'name' => 'close',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 138,
                'char' => 22,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 139,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 136,
          'last-line' => 141,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__wakeup',
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
                  'variable' => 'type',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 143,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'ext',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 143,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'handler',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 143,
                  'char' => 31,
                ),
                3 => 
                array (
                  'variable' => 'ext2Handler',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 143,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 143,
                  'char' => 49,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 144,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 144,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'type2Ext',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 144,
                  'char' => 41,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                'line' => 144,
                'char' => 41,
              ),
              'key' => 'type',
              'value' => 'ext',
              'reverse' => 0,
              'statements' => 
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
                      'value' => 'handler',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 145,
                      'char' => 48,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ext2Handler',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 145,
                        'char' => 42,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'ext',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 145,
                        'char' => 46,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 145,
                      'char' => 48,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 145,
                    'char' => 48,
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
                          'variable' => 'handler',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                              'line' => 148,
                              'char' => 36,
                            ),
                            'name' => 'open',
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
                                    'type' => 'property-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'this',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                                      'line' => 148,
                                      'char' => 47,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => '_path',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                                      'line' => 148,
                                      'char' => 54,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                                    'line' => 148,
                                    'char' => 54,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'ext',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                                    'line' => 148,
                                    'char' => 59,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                                  'line' => 148,
                                  'char' => 59,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                                'line' => 148,
                                'char' => 59,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 148,
                            'char' => 60,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 148,
                          'char' => 60,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 149,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'ext2Handler',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'ext',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                              'line' => 149,
                              'char' => 36,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'handler',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                            'line' => 149,
                            'char' => 47,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 149,
                          'char' => 47,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 150,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 151,
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
                      'property' => 'type2Handler',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                          'line' => 151,
                          'char' => 40,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'handler',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 151,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 151,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 152,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 153,
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
                  'property' => '_fileHandler',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 153,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type2Handler',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                        'line' => 153,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 153,
                      'char' => 52,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '-1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                      'line' => 153,
                      'char' => 55,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                    'line' => 153,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
                  'line' => 153,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
              'line' => 154,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
          'line' => 141,
          'last-line' => 155,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
      'line' => 5,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Adapter/FilePlus.zep',
    'line' => 5,
    'char' => 5,
  ),
);