<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
    'line' => 7,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * throw new Exception("error message");
 * throw new Exception(["error message", ["foo", "bar"]]);
 *
 *',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
    'line' => 8,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Exception',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\Exception',
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
          'name' => 'message',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
            'line' => 10,
            'char' => 25,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 11,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'level',
          'default' => 
          array (
            'type' => 'static-constant-access',
            'left' => 
            array (
              'type' => 'variable',
              'value' => '\\Phalcon\\Logger',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 11,
              'char' => 45,
            ),
            'right' => 
            array (
              'type' => 'variable',
              'value' => 'DEBUG',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 11,
              'char' => 45,
            ),
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
            'line' => 11,
            'char' => 45,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 12,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'code',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
            'line' => 12,
            'char' => 23,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 14,
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
              'name' => 'info',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 14,
                'char' => 44,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 14,
              'char' => 44,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 14,
                'char' => 77,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 14,
                'char' => 85,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 14,
              'char' => 85,
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
                  'variable' => 'message',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 16,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 16,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'args',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 16,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 16,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 17,
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
                  'variable' => 'message',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'string',
                      'value' => 'An exception created: ',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 17,
                      'char' => 46,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'get_called_class',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 17,
                      'char' => 66,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 17,
                    'char' => 66,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 17,
                  'char' => 66,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 18,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'info',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 18,
                  'char' => 23,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 18,
                'char' => 23,
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'is_array',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'info',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 21,
                          'char' => 29,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 21,
                        'char' => 29,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 21,
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
                          'variable' => 'message',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 22,
                                'char' => 39,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ', message: ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 22,
                                'char' => 53,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 22,
                              'char' => 53,
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
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'info',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                      'line' => 22,
                                      'char' => 66,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '0',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                      'line' => 22,
                                      'char' => 68,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                    'line' => 22,
                                    'char' => 69,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 22,
                                  'char' => 69,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 22,
                              'char' => 70,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 22,
                            'char' => 70,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 22,
                          'char' => 70,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 23,
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
                          'value' => 'args',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 23,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'info',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 23,
                            'char' => 36,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 23,
                            'char' => 38,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 23,
                          'char' => 40,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 23,
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
                              'assign-type' => 'variable',
                              'operator' => 'assign',
                              'variable' => 'args',
                              'expr' => 
                              array (
                                'type' => 'ternary',
                                'left' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'is_array',
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
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                          'line' => 24,
                                          'char' => 45,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'int',
                                          'value' => '1',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                          'line' => 24,
                                          'char' => 47,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                        'line' => 24,
                                        'char' => 48,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                      'line' => 24,
                                      'char' => 48,
                                    ),
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 24,
                                  'char' => 50,
                                ),
                                'right' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'info',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                    'line' => 24,
                                    'char' => 56,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '1',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                    'line' => 24,
                                    'char' => 58,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 24,
                                  'char' => 60,
                                ),
                                'extra' => 
                                array (
                                  'type' => 'array',
                                  'left' => 
                                  array (
                                    0 => 
                                    array (
                                      'value' => 
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
                                              'type' => 'array-access',
                                              'left' => 
                                              array (
                                                'type' => 'variable',
                                                'value' => 'info',
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                                'line' => 24,
                                                'char' => 74,
                                              ),
                                              'right' => 
                                              array (
                                                'type' => 'int',
                                                'value' => '1',
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                                'line' => 24,
                                                'char' => 76,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                              'line' => 24,
                                              'char' => 77,
                                            ),
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                            'line' => 24,
                                            'char' => 77,
                                          ),
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                        'line' => 24,
                                        'char' => 78,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                      'line' => 24,
                                      'char' => 78,
                                    ),
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 24,
                                  'char' => 79,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 24,
                                'char' => 79,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 24,
                              'char' => 79,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 25,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 26,
                      'char' => 13,
                    ),
                  ),
                  'elseif_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_string',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'info',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 26,
                              'char' => 36,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 26,
                            'char' => 36,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 26,
                        'char' => 38,
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
                              'variable' => 'message',
                              'expr' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'message',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                    'line' => 27,
                                    'char' => 39,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ', message: ',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                    'line' => 27,
                                    'char' => 53,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 27,
                                  'char' => 53,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'info',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 27,
                                  'char' => 59,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 27,
                                'char' => 59,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 27,
                              'char' => 59,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 28,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 29,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 29,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 31,
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
                        'value' => 'logger',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 31,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 31,
                      'char' => 27,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 31,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 31,
                'char' => 29,
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
                      'value' => 'logger',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 32,
                      'char' => 20,
                    ),
                    'name' => 'log',
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
                              'type' => 'variable',
                              'value' => 'message',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 32,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ', args: ',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 32,
                              'char' => 43,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 32,
                            'char' => 43,
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
                                  'type' => 'variable',
                                  'value' => 'args',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 32,
                                  'char' => 61,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 32,
                                'char' => 61,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'constant',
                                  'value' => 'JSON_UNESCAPED_UNICODE',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                  'line' => 32,
                                  'char' => 85,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 32,
                                'char' => 85,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 32,
                            'char' => 86,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 32,
                          'char' => 86,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 32,
                        'char' => 86,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 32,
                            'char' => 93,
                          ),
                          'name' => 'getLevel',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 32,
                          'char' => 104,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 32,
                        'char' => 104,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 32,
                    'char' => 105,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 33,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 35,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 35,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'message',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 35,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 35,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 35,
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
                      'property' => 'message',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'message',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 36,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 36,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 37,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 39,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'cnt',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 39,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'argsCnt',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 39,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 40,
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
                  'variable' => 'cnt',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 40,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 40,
                            'char' => 45,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 40,
                          'char' => 45,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 40,
                        'char' => 45,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '%s',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 40,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 40,
                        'char' => 49,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 40,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 40,
                  'char' => 50,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 41,
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
                  'variable' => 'argsCnt',
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
                          'type' => 'variable',
                          'value' => 'args',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                          'line' => 41,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 41,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 41,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 41,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 43,
              'char' => 10,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'greater-equal',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'argsCnt',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 43,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'cnt',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 43,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 43,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'message',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'vsprintf',
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
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 44,
                                'char' => 47,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                                'line' => 44,
                                'char' => 55,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 44,
                              'char' => 55,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 44,
                            'char' => 55,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'args',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                              'line' => 44,
                              'char' => 61,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                            'line' => 44,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                        'line' => 44,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                      'line' => 44,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 45,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 46,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 14,
          'last-line' => 48,
          'char' => 19,
        ),
        1 => 
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
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 50,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'level',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 50,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 50,
                'char' => 27,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 51,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 48,
          'last-line' => 53,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setCode',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'code',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 53,
              'char' => 37,
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
                  'property' => 'code',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'code',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 55,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 55,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 56,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 56,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 57,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 53,
          'last-line' => 59,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setLevel',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'level',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 59,
              'char' => 39,
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
                  'property' => 'level',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'level',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 61,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 61,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 62,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 62,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 63,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 59,
          'last-line' => 65,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setMessage',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'msg',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 65,
              'char' => 39,
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
                  'property' => 'message',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'msg',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                    'line' => 67,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                  'line' => 67,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 68,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
                'line' => 68,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
              'line' => 69,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
          'line' => 65,
          'last-line' => 70,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
      'line' => 8,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Exception.zep',
    'line' => 8,
    'char' => 5,
  ),
);