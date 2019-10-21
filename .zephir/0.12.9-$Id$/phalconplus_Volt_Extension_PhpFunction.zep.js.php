<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Volt\\Extension',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
    'line' => 4,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'PhpFunction',
    'abstract' => 0,
    'final' => 0,
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
          'name' => 'ns',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
            'line' => 6,
            'char' => 18,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
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
          'name' => 'func',
          'default' => 
          array (
            'type' => 'string',
            'value' => '__invoke__',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
            'line' => 8,
            'char' => 30,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
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
          'name' => 'setCustNamespace',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'ns',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 10,
              'char' => 48,
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
                  'property' => 'ns',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'ns',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 12,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 12,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 13,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
          'line' => 10,
          'last-line' => 15,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setCustFuncName',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'func',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 15,
              'char' => 49,
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
                    'value' => 'func',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 17,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 17,
                  'char' => 24,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                'line' => 17,
                'char' => 24,
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
                      'property' => 'func',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'func',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 18,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 18,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 19,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 20,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
          'line' => 15,
          'last-line' => 22,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'compileFunction',
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
                  'variable' => 'params',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 24,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 24,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 25,
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
                  'variable' => 'name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 25,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'args',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 25,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'code',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 25,
                  'char' => 29,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 26,
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
                  'variable' => 'params',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'func_get_args',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 26,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 26,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 27,
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
                  'variable' => 'name',
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
                          'value' => 'params',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 27,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 27,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 27,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 27,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 28,
              'char' => 17,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'array_pop',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'params',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 28,
                      'char' => 25,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 28,
                    'char' => 25,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                'line' => 28,
                'char' => 26,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 30,
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
                  'variable' => 'args',
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
                          'value' => ',',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 30,
                          'char' => 26,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 30,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'params',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 30,
                          'char' => 34,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 30,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 30,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 30,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 35,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 35,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 35,
                    'char' => 25,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'func',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 35,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 35,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                'line' => 35,
                'char' => 31,
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
                      'variable' => 'pos',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 36,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 37,
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
                      'variable' => 'pos',
                      'expr' => 
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
                              'value' => 'args',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                              'line' => 37,
                              'char' => 34,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 37,
                            'char' => 34,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => ',',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                              'line' => 37,
                              'char' => 37,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 37,
                            'char' => 37,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 37,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 37,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 38,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pos',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 38,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 38,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 38,
                    'char' => 30,
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
                          'variable' => 'name',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'trim',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'args',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 40,
                                  'char' => 37,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 40,
                                'char' => 37,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '\'\\"',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 40,
                                  'char' => 42,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 40,
                                'char' => 42,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 40,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 40,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 41,
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
                          'variable' => 'args',
                          'expr' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 41,
                            'char' => 28,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 41,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 42,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'name',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'trim',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'substr',
                                  'call-type' => 1,
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'args',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                        'line' => 44,
                                        'char' => 44,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                      'line' => 44,
                                      'char' => 44,
                                    ),
                                    1 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'int',
                                        'value' => '0',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                        'line' => 44,
                                        'char' => 47,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                      'line' => 44,
                                      'char' => 47,
                                    ),
                                    2 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'pos',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                        'line' => 44,
                                        'char' => 52,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                      'line' => 44,
                                      'char' => 52,
                                    ),
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 44,
                                  'char' => 53,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 44,
                                'char' => 53,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => '\'\\"',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 44,
                                  'char' => 58,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 44,
                                'char' => 58,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 44,
                            'char' => 59,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 44,
                          'char' => 59,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 45,
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
                          'variable' => 'args',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'substr',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'args',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 45,
                                  'char' => 39,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 45,
                                'char' => 39,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'add',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'pos',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                    'line' => 45,
                                    'char' => 44,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '1',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                    'line' => 45,
                                    'char' => 46,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 45,
                                  'char' => 46,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 45,
                                'char' => 46,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 45,
                            'char' => 47,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 45,
                          'char' => 47,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 46,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 47,
                  'char' => 15,
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
                      'variable' => 'code',
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
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 47,
                                  'char' => 29,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'ns',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                  'line' => 47,
                                  'char' => 33,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 47,
                                'char' => 33,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'name',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                                'line' => 47,
                                'char' => 40,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                              'line' => 47,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '(',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                              'line' => 47,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 47,
                            'char' => 44,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'args',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 47,
                            'char' => 51,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 47,
                          'char' => 51,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ')',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 47,
                          'char' => 54,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 47,
                        'char' => 54,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 47,
                      'char' => 54,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 48,
                  'char' => 18,
                ),
                4 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'code',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 48,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 49,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 51,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'function_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 51,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 51,
                    'char' => 32,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                'line' => 51,
                'char' => 34,
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
                      'variable' => 'code',
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
                              'value' => 'name',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                              'line' => 52,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '(',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                              'line' => 52,
                              'char' => 33,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 52,
                            'char' => 33,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'args',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                            'line' => 52,
                            'char' => 40,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 52,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ')',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                          'line' => 52,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                        'line' => 52,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                      'line' => 52,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 53,
                  'char' => 18,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'code',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                    'line' => 53,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
                  'line' => 54,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
              'line' => 55,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
          'line' => 22,
          'last-line' => 56,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Volt/Extension/PhpFunction.zep',
    'line' => 4,
    'char' => 5,
  ),
);