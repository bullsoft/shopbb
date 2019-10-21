<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Logger\\Processor',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Trace',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractProcessor',
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
          'name' => 'skipClassesPartials',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
            'line' => 8,
            'char' => 37,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
          'line' => 10,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'mode',
          'default' => 
          array (
            'type' => 'static-constant-access',
            'left' => 
            array (
              'type' => 'variable',
              'value' => 'self',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 10,
              'char' => 32,
            ),
            'right' => 
            array (
              'type' => 'variable',
              'value' => 'T_FILE',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 10,
              'char' => 32,
            ),
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
            'line' => 10,
            'char' => 32,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
          'line' => 12,
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
              'name' => 'mode',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'static-constant-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'self',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 12,
                  'char' => 56,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'T_FILE',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 12,
                  'char' => 56,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 12,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 12,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'skipClassesPartials',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 12,
                'char' => 88,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 12,
              'char' => 88,
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
                  'property' => 'mode',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'mode',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 14,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 14,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 15,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'skipClassesPartials',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 15,
                  'char' => 38,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 15,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'skipClassesPartials',
                      'expr' => 
                      array (
                        'type' => 'array',
                        'left' => 
                        array (
                          0 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'string',
                              'value' => 'PhalconPlus\\\\',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 16,
                              'char' => 59,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 16,
                            'char' => 59,
                          ),
                          1 => 
                          array (
                            'value' => 
                            array (
                              'type' => 'string',
                              'value' => 'Phalcon\\\\',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 16,
                              'char' => 70,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 16,
                            'char' => 70,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 16,
                        'char' => 71,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 16,
                      'char' => 71,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 17,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 18,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
          'line' => 12,
          'last-line' => 20,
          'char' => 19,
        ),
        1 => 
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
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'trace',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 22,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 23,
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
                  'variable' => 'trace',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'debug_backtrace',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 23,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 23,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 26,
              'char' => 19,
            ),
            2 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'array_shift',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'trace',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 26,
                      'char' => 26,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 26,
                    'char' => 26,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 26,
                'char' => 27,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 28,
              'char' => 19,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'array_shift',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'trace',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 28,
                      'char' => 26,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 28,
                    'char' => 26,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 28,
                'char' => 27,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 30,
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
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 30,
                    'char' => 18,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 30,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'part',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 30,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 32,
              'char' => 13,
            ),
            5 => 
            array (
              'type' => 'cblock',
              'value' => 'CHECK:',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 33,
              'char' => 13,
            ),
            6 => 
            array (
              'type' => 'while',
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
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'trace',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 33,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'i',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 33,
                        'char' => 28,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 33,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'class',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 33,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 33,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 33,
                  'char' => 38,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 33,
                'char' => 38,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 35,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'skipClassesPartials',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 35,
                      'char' => 51,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 35,
                    'char' => 51,
                  ),
                  'value' => 'part',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'not-identical',
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
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'trace',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 36,
                                    'char' => 32,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'i',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 36,
                                    'char' => 34,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 36,
                                  'char' => 35,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'class',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 36,
                                  'char' => 41,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 36,
                                'char' => 42,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 36,
                              'char' => 42,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'part',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 36,
                                'char' => 48,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 36,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 36,
                          'char' => 52,
                        ),
                        'right' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 36,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 36,
                        'char' => 60,
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
                              'variable' => 'i',
                              'expr' => 
                              array (
                                'type' => 'add',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'i',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 37,
                                  'char' => 31,
                                ),
                                'right' => 
                                array (
                                  'type' => 'int',
                                  'value' => '1',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 37,
                                  'char' => 34,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 37,
                                'char' => 34,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 37,
                              'char' => 34,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 38,
                          'char' => 30,
                        ),
                        1 => 
                        array (
                          'type' => 'cblock',
                          'value' => 'goto CHECK;',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 39,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 40,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 41,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'break',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 42,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 44,
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
                  'variable' => 'j',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 44,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'trace1',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 44,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 44,
                  'char' => 27,
                ),
                2 => 
                array (
                  'variable' => 'trace2',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 44,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 44,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 45,
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
                  'variable' => 'j',
                  'expr' => 
                  array (
                    'type' => 'sub',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'i',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 45,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 45,
                      'char' => 22,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 45,
                    'char' => 22,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 45,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 47,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'trace1',
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
                          'value' => 'file',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 48,
                          'char' => 23,
                        ),
                        'value' => 
                        array (
                          'type' => 'ternary',
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
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'trace',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 48,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'j',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 48,
                                    'char' => 38,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 48,
                                  'char' => 39,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'file',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 48,
                                  'char' => 44,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 48,
                                'char' => 45,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 48,
                              'char' => 47,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 48,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'trace',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 48,
                                'char' => 54,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'j',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 48,
                                'char' => 56,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 48,
                              'char' => 57,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'file',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 48,
                              'char' => 62,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 48,
                            'char' => 64,
                          ),
                          'extra' => 
                          array (
                            'type' => 'string',
                            'value' => 'Nil',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 48,
                            'char' => 69,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 48,
                          'char' => 69,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 48,
                        'char' => 69,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'line',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 49,
                          'char' => 23,
                        ),
                        'value' => 
                        array (
                          'type' => 'ternary',
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
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'trace',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 49,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'j',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 49,
                                    'char' => 38,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 49,
                                  'char' => 39,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'line',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 49,
                                  'char' => 44,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 49,
                                'char' => 45,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 49,
                              'char' => 47,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 49,
                            'char' => 47,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'trace',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 49,
                                'char' => 54,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'j',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 49,
                                'char' => 56,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 49,
                              'char' => 57,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'line',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 49,
                              'char' => 62,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 49,
                            'char' => 64,
                          ),
                          'extra' => 
                          array (
                            'type' => 'int',
                            'value' => '-1',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 50,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 50,
                          'char' => 9,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 50,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 50,
                    'char' => 10,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 50,
                  'char' => 10,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 52,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'trace2',
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
                          'value' => 'class',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 53,
                          'char' => 23,
                        ),
                        'value' => 
                        array (
                          'type' => 'ternary',
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
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'trace',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 53,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'i',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 53,
                                    'char' => 38,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 53,
                                  'char' => 39,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'class',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 53,
                                  'char' => 45,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 53,
                                'char' => 46,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 53,
                              'char' => 48,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 53,
                            'char' => 48,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'trace',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 53,
                                'char' => 55,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'i',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 53,
                                'char' => 57,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 53,
                              'char' => 58,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'class',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 53,
                              'char' => 64,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 53,
                            'char' => 66,
                          ),
                          'extra' => 
                          array (
                            'type' => 'string',
                            'value' => 'Nil',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 53,
                            'char' => 71,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 53,
                          'char' => 71,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 53,
                        'char' => 71,
                      ),
                      1 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'function',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 54,
                          'char' => 23,
                        ),
                        'value' => 
                        array (
                          'type' => 'ternary',
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
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'trace',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 54,
                                    'char' => 36,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'i',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                    'line' => 54,
                                    'char' => 38,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 54,
                                  'char' => 39,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'function',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 54,
                                  'char' => 48,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 54,
                                'char' => 49,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 54,
                              'char' => 51,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 54,
                            'char' => 51,
                          ),
                          'right' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'trace',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 54,
                                'char' => 58,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'i',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 54,
                                'char' => 60,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 54,
                              'char' => 61,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'function',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 54,
                              'char' => 70,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 54,
                            'char' => 72,
                          ),
                          'extra' => 
                          array (
                            'type' => 'string',
                            'value' => 'Nil',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 55,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 55,
                          'char' => 9,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 55,
                        'char' => 9,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 55,
                    'char' => 10,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 55,
                  'char' => 10,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 57,
              'char' => 14,
            ),
            11 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'bitwise_and',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 57,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'mode',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 57,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 57,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0x0011',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 57,
                  'char' => 36,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                'line' => 57,
                'char' => 36,
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
                      'value' => 'self',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 58,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'T_CLASS',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 58,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 58,
                    'char' => 31,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
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
                              'value' => ':',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 59,
                              'char' => 30,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 59,
                            'char' => 30,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'trace2',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 59,
                              'char' => 38,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 59,
                            'char' => 38,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 59,
                        'char' => 39,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 60,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 60,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0x11',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 60,
                    'char' => 22,
                  ),
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
                                  'value' => ':',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 61,
                                  'char' => 30,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 61,
                                'char' => 30,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'trace1',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                  'line' => 61,
                                  'char' => 38,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 61,
                                'char' => 38,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 61,
                            'char' => 40,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '][',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 61,
                            'char' => 45,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 61,
                          'char' => 45,
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
                                'value' => ':',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 61,
                                'char' => 53,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 61,
                              'char' => 53,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'trace2',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                                'line' => 61,
                                'char' => 61,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 61,
                              'char' => 61,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                          'line' => 61,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 61,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 62,
                      'char' => 16,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 62,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'self',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 62,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'T_FILE',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 62,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                    'line' => 62,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 63,
                  'char' => 19,
                ),
                3 => 
                array (
                  'type' => 'default',
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
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
                              'value' => ':',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 64,
                              'char' => 30,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 64,
                            'char' => 30,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'trace1',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                              'line' => 64,
                              'char' => 38,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                            'line' => 64,
                            'char' => 38,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                        'line' => 64,
                        'char' => 39,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                      'line' => 65,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
                  'line' => 65,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
              'line' => 66,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
          'line' => 20,
          'last-line' => 67,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'T_FILE',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0x0001',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
            'line' => 5,
            'char' => 26,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
          'line' => 6,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'T_CLASS',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0x0010',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
            'line' => 6,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
          'line' => 8,
          'char' => 11,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Trace.zep',
    'line' => 3,
    'char' => 5,
  ),
);