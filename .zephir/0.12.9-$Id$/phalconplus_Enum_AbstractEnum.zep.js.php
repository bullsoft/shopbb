<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Enum',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
    'line' => 3,
    'char' => 8,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'AbstractEnum',
    'abstract' => 1,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => '\\JsonSerializable',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
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
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'val',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 7,
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
              'name' => 'val',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '__PhalconPlus_AbstractEnum_DefaultValue__',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 7,
                'char' => 84,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 7,
              'char' => 84,
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
                  'variable' => 'reflection',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 9,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'defaultVal',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 9,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
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
                  'variable' => 'reflection',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\ReflectionClass',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'get_called_class',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 11,
                          'char' => 65,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 11,
                        'char' => 65,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 11,
                    'char' => 66,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 11,
                  'char' => 66,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 12,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'reflection',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 12,
                    'char' => 23,
                  ),
                  'name' => 'hasConstant',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => '__default',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 12,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 12,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 12,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 12,
                'char' => 48,
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
                      'variable' => 'defaultVal',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'reflection',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 13,
                          'char' => 41,
                        ),
                        'name' => 'getConstant',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '__default',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 13,
                              'char' => 63,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 13,
                            'char' => 63,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 13,
                        'char' => 64,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 13,
                      'char' => 64,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 14,
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
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'static',
                      'dynamic' => 0,
                      'name' => 'isValid',
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'defaultVal',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 14,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 14,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 14,
                      'char' => 45,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 14,
                    'char' => 45,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'throw',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\OutOfRangeException',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'sprintf',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'Invalid __default enumeration %s for Enum %s',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                    'line' => 15,
                                    'char' => 100,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                  'line' => 15,
                                  'char' => 100,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'defaultVal',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                    'line' => 15,
                                    'char' => 112,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                  'line' => 15,
                                  'char' => 112,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
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
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                          'line' => 15,
                                          'char' => 128,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                        'line' => 15,
                                        'char' => 128,
                                      ),
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                    'line' => 15,
                                    'char' => 129,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                  'line' => 15,
                                  'char' => 129,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 15,
                              'char' => 130,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 15,
                            'char' => 130,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 15,
                        'char' => 131,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 16,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 17,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 19,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 19,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '__PhalconPlus_AbstractEnum_DefaultValue__',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 19,
                  'char' => 61,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 19,
                'char' => 61,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 20,
                      'char' => 18,
                    ),
                    'name' => 'setValue',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'defaultVal',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 20,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 20,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 20,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 21,
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
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 22,
                      'char' => 18,
                    ),
                    'name' => 'setValue',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'val',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 22,
                          'char' => 31,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 22,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 22,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 23,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 24,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 7,
          'last-line' => 26,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'setValue',
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
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 26,
              'char' => 40,
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
                  'type' => 'scall',
                  'dynamic-class' => 0,
                  'class' => 'static',
                  'dynamic' => 0,
                  'name' => 'isValid',
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'val',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 28,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 28,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 28,
                  'char' => 34,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 28,
                'char' => 34,
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
                          'type' => 'fcall',
                          'name' => 'sprintf',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => 'Invalid enumeration %s for Enum %s',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                'line' => 29,
                                'char' => 91,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 29,
                              'char' => 91,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'val',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                'line' => 29,
                                'char' => 96,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 29,
                              'char' => 96,
                            ),
                            2 => 
                            array (
                              'parameter' => 
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
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                      'line' => 29,
                                      'char' => 112,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                    'line' => 29,
                                    'char' => 112,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                'line' => 29,
                                'char' => 113,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 29,
                              'char' => 113,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 29,
                          'char' => 114,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 29,
                        'char' => 114,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 29,
                    'char' => 115,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 30,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 31,
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
                  'property' => 'val',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 31,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 31,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 32,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 26,
          'last-line' => 34,
          'char' => 22,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getValue',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 36,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 36,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 36,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 37,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 34,
          'last-line' => 39,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'isValid',
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
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 39,
              'char' => 39,
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
                  'name' => 'in_array',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'val',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 41,
                        'char' => 25,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 41,
                      'char' => 25,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'static',
                        'dynamic' => 0,
                        'name' => 'validValues',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 41,
                        'char' => 48,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 41,
                      'char' => 48,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 41,
                        'char' => 54,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 41,
                      'char' => 54,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 41,
                  'char' => 56,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 41,
                'char' => 56,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 42,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 43,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 44,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 44,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 45,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 39,
          'last-line' => 47,
          'char' => 26,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'commaString',
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
                  'variable' => 'vals',
                  'expr' => 
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 49,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 49,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 49,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 49,
                  'char' => 45,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 50,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 50,
                      'char' => 26,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 50,
                    'char' => 26,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'vals',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 50,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 50,
                    'char' => 32,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 50,
                'char' => 33,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 51,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 47,
          'last-line' => 53,
          'char' => 26,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'validValues',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'assoc',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 53,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 53,
              'char' => 58,
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
                  'variable' => 'reflection',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 55,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'consts',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 55,
                  'char' => 31,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 57,
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
                  'variable' => 'reflection',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\ReflectionClass',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'get_called_class',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 57,
                          'char' => 65,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 57,
                        'char' => 65,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 57,
                    'char' => 66,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 57,
                  'char' => 66,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 58,
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
                  'variable' => 'consts',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'reflection',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 58,
                      'char' => 33,
                    ),
                    'name' => 'getConstants',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 58,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 58,
                  'char' => 48,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 59,
              'char' => 13,
            ),
            3 => 
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
                    'type' => 'variable',
                    'value' => 'consts',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 59,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '__default',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 59,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 59,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 59,
                'char' => 33,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 61,
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
                  'variable' => 'countValues',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 61,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 62,
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
                  'variable' => 'countValues',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_count_values',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'consts',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 62,
                          'char' => 52,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 62,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 62,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 62,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 64,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-identical',
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
                        'type' => 'variable',
                        'value' => 'consts',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 64,
                        'char' => 24,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 64,
                      'char' => 24,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 64,
                  'char' => 28,
                ),
                'right' => 
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
                        'value' => 'countValues',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 64,
                        'char' => 47,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 64,
                      'char' => 47,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 64,
                  'char' => 49,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 64,
                'char' => 49,
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
                      'variable' => 'duplicated',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 65,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 65,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 66,
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
                      'variable' => 'duplicated',
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
                              'value' => 'countValues',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 66,
                              'char' => 54,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 66,
                            'char' => 54,
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
                                  'name' => 'freq',
                                  'const' => 0,
                                  'data-type' => 'variable',
                                  'mandatory' => 0,
                                  'reference' => 0,
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                  'line' => 66,
                                  'char' => 69,
                                ),
                              ),
                              'right' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'return',
                                  'expr' => 
                                  array (
                                    'type' => 'greater',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'freq',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                      'line' => 67,
                                      'char' => 29,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '1',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                      'line' => 67,
                                      'char' => 32,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                    'line' => 67,
                                    'char' => 32,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                  'line' => 68,
                                  'char' => 13,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 68,
                              'char' => 14,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 68,
                            'char' => 14,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 68,
                        'char' => 15,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                      'line' => 68,
                      'char' => 15,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 69,
                  'char' => 17,
                ),
                2 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\RuntimeException',
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
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => 'Duplicated values were found in Enum Class: ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                'line' => 69,
                                'char' => 86,
                              ),
                              'right' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'get_called_class',
                                'call-type' => 1,
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                'line' => 69,
                                'char' => 106,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 69,
                              'char' => 106,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ' with values in ',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                              'line' => 69,
                              'char' => 125,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 69,
                            'char' => 125,
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
                                        'value' => 'duplicated',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                        'line' => 69,
                                        'char' => 160,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                      'line' => 69,
                                      'char' => 160,
                                    ),
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                  'line' => 69,
                                  'char' => 161,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                                'line' => 69,
                                'char' => 161,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                            'line' => 69,
                            'char' => 162,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 69,
                          'char' => 162,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 69,
                        'char' => 162,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 69,
                    'char' => 163,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 70,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 72,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'assoc',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 72,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 72,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 72,
                'char' => 26,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'consts',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 73,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 74,
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
                          'value' => 'consts',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                          'line' => 75,
                          'char' => 39,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                        'line' => 75,
                        'char' => 39,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 75,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 76,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 77,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 66,
          'last-line' => 79,
          'char' => 63,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'jsonSerialize',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 81,
                  'char' => 21,
                ),
                'name' => 'getValue',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 81,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 82,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 79,
          'last-line' => 84,
          'char' => 19,
        ),
        7 => 
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
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'cast',
                'left' => 'string',
                'right' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                    'line' => 86,
                    'char' => 30,
                  ),
                  'name' => 'getValue',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                  'line' => 86,
                  'char' => 41,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
                'line' => 86,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
              'line' => 87,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
          'line' => 84,
          'last-line' => 88,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
      'line' => 3,
      'char' => 14,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/AbstractEnum.zep',
    'line' => 3,
    'char' => 14,
  ),
);