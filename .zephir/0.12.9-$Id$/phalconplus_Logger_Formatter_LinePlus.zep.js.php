<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Logger\\Formatter',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'LinePlus',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\Phalcon\\Logger\\Formatter',
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => '\\Phalcon\\Logger\\FormatterInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
        'line' => 4,
        'char' => 1,
      ),
    ),
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
          'name' => 'processors',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
            'line' => 5,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 7,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'formatString',
          'default' => 
          array (
            'type' => 'string',
            'value' => '[%date%][%type%] %message%',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
            'line' => 7,
            'char' => 54,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 9,
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
              'name' => 'formatString',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 9,
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
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'formatString',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 11,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 11,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 11,
                'char' => 32,
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
                      'property' => 'formatString',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'formatString',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 12,
                        'char' => 50,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 12,
                      'char' => 50,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 13,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 17,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 9,
          'last-line' => 19,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'format',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 19,
              'char' => 35,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 19,
              'char' => 41,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'timestamp',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 19,
              'char' => 52,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 19,
                'char' => 72,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 19,
              'char' => 72,
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
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'processors',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 21,
                      'char' => 37,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'message',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 21,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 21,
                  'char' => 48,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
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
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'processors',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'date',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 22,
                      'char' => 34,
                    ),
                  ),
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 22,
                          'char' => 54,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 22,
                        'char' => 54,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'timestamp',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 22,
                          'char' => 65,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 22,
                        'char' => 65,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 22,
                    'char' => 66,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 22,
                  'char' => 66,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
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
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'processors',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'type',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 23,
                      'char' => 34,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 23,
                      'char' => 43,
                    ),
                    'name' => 'getTypeString',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 23,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 23,
                        'char' => 62,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 23,
                    'char' => 63,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 23,
                  'char' => 63,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 25,
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
                  'variable' => 'matches',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 25,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 25,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'result',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 25,
                  'char' => 33,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
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
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'preg_match_all',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '/%(\\w+)%/',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 26,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 26,
                        'char' => 46,
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 26,
                            'char' => 53,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'formatString',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 26,
                            'char' => 66,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 26,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 26,
                        'char' => 66,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'matches',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 26,
                          'char' => 75,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 26,
                        'char' => 75,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 26,
                    'char' => 76,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 26,
                  'char' => 76,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 28,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'result',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 28,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 28,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 28,
                'char' => 28,
              ),
              'statements' => 
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'Logger format is not valid: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 29,
                            'char' => 78,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                              'line' => 29,
                              'char' => 85,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'formatString',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                              'line' => 29,
                              'char' => 98,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 29,
                            'char' => 98,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 29,
                          'char' => 98,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 29,
                        'char' => 98,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 29,
                    'char' => 99,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 30,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 32,
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
                  'variable' => 'replace0',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 32,
                  'char' => 21,
                ),
                1 => 
                array (
                  'variable' => 'replace1',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 32,
                  'char' => 31,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 33,
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
                  'variable' => 'replace0',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'reset',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'matches',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 33,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 33,
                        'char' => 37,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 33,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 33,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 34,
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
                  'variable' => 'replace1',
                  'expr' => 
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
                          'type' => 'variable',
                          'value' => 'matches',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 34,
                          'char' => 35,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 34,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 34,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 34,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 36,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'val1',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 36,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'val2',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 36,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'processors',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 36,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 36,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 38,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'replace1',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 38,
                'char' => 30,
              ),
              'value' => 'val1',
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
                      'value' => 'val2',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 39,
                      'char' => 51,
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 39,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'processors',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 39,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 39,
                        'char' => 44,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'val1',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 39,
                        'char' => 49,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 39,
                      'char' => 51,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 39,
                    'char' => 51,
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
                          'variable' => 'processors',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'val1',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                              'line' => 40,
                              'char' => 36,
                            ),
                          ),
                          'expr' => 
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
                                  'value' => 'val2',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                                  'line' => 40,
                                  'char' => 51,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                                'line' => 40,
                                'char' => 51,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 40,
                            'char' => 52,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 40,
                          'char' => 52,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 41,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'processors',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'val1',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                              'line' => 42,
                              'char' => 36,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'string',
                            'value' => 'undefined',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 42,
                            'char' => 49,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 42,
                          'char' => 49,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 43,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 44,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 46,
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
                  'variable' => 'logStr',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 46,
                  'char' => 19,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 47,
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
                  'variable' => 'logStr',
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
                          'type' => 'variable',
                          'value' => 'replace0',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 47,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 47,
                        'char' => 42,
                      ),
                      1 => 
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
                                'value' => 'processors',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                                'line' => 47,
                                'char' => 67,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                              'line' => 47,
                              'char' => 67,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 47,
                          'char' => 68,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 47,
                        'char' => 68,
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 47,
                            'char' => 75,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'formatString',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 47,
                            'char' => 88,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 47,
                          'char' => 88,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 47,
                        'char' => 88,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 47,
                    'char' => 89,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 47,
                  'char' => 89,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 48,
              'char' => 14,
            ),
            13 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'concat',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'logStr',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 48,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'constant',
                  'value' => 'PHP_EOL',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 48,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 48,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 19,
                'char' => 83,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 20,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
            'line' => 20,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 19,
          'last-line' => 51,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addProcessor',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 51,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'processor',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PhalconPlus\\Logger\\Processor\\AbstractProcessor',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 51,
                'char' => 106,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 51,
              'char' => 107,
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
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'processors',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 53,
                      'char' => 34,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'processor',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 53,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 53,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 54,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 51,
          'last-line' => 56,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getProcessor',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 56,
              'char' => 46,
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
                  'type' => 'isset',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 58,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'processors',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 58,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 58,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 58,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 58,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 58,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 58,
                'char' => 42,
              ),
              'statements' => 
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'Processor name is not valid: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 59,
                            'char' => 79,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                            'line' => 59,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                          'line' => 59,
                          'char' => 85,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 59,
                        'char' => 85,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 59,
                    'char' => 86,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 60,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 61,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 61,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'processors',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 61,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 61,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 61,
                  'char' => 37,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 61,
                'char' => 38,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 62,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 56,
          'last-line' => 64,
          'char' => 19,
        ),
        4 => 
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
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 64,
              'char' => 38,
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
                  'type' => 'isset',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 66,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'processors',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                        'line' => 66,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 66,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 66,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 66,
                    'char' => 41,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 66,
                  'char' => 41,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 66,
                'char' => 41,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'undefined',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 67,
                    'char' => 29,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 68,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 69,
              'char' => 14,
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
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 69,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'processors',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                      'line' => 69,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 69,
                    'char' => 41,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'key',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                    'line' => 69,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                  'line' => 69,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
                'line' => 69,
                'char' => 46,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
              'line' => 70,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
          'line' => 64,
          'last-line' => 71,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Formatter/LinePlus.zep',
    'line' => 3,
    'char' => 5,
  ),
);