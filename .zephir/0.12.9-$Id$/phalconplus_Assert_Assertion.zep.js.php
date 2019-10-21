<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Assert',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
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
        'name' => 'PhalconPlus\\Enum\\AssertionCode',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
        'line' => 2,
        'char' => 35,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
    'line' => 7,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 *
 * @ref https://github.com/beberlei/assert
 *',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
    'line' => 8,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Assertion',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'createException',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 10,
              'char' => 52,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 10,
              'char' => 61,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'code',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 10,
              'char' => 67,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 10,
              'char' => 81,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'constraints',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 10,
                'char' => 105,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 10,
              'char' => 105,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => '\\PhalconPlus\\Assert\\InvalidArgumentException',
                'dynamic' => 0,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 12,
                      'char' => 72,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 12,
                    'char' => 72,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'code',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 12,
                      'char' => 78,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 12,
                    'char' => 78,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 12,
                      'char' => 92,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 12,
                    'char' => 92,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 12,
                      'char' => 99,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 12,
                    'char' => 99,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'constraints',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 12,
                      'char' => 112,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 12,
                    'char' => 112,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 12,
                'char' => 113,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 13,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 10,
          'last-line' => 15,
          'char' => 29,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'eq',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value1',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 15,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value2',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 15,
              'char' => 53,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 15,
                'char' => 73,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 15,
              'char' => 73,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 15,
                'char' => 98,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 15,
              'char' => 98,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'value1',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 17,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'value2',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 17,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 17,
                'char' => 29,
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
                      'variable' => 'v1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 18,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'variable' => 'v2',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 18,
                      'char' => 23,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 19,
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
                      'variable' => 'v1',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value1',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 19,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 19,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 19,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 19,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 20,
                  'char' => 15,
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
                      'variable' => 'v2',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value2',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 20,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 20,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 20,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 20,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 22,
                  'char' => 14,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 22,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 22,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 22,
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
                          'variable' => 'message',
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
                                    'type' => 'string',
                                    'value' => 'Value ',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 23,
                                    'char' => 38,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'v1',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 23,
                                    'char' => 43,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 23,
                                  'char' => 43,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => ' does not equal expected value ',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 23,
                                  'char' => 77,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 23,
                                'char' => 77,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'v2',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 23,
                                'char' => 82,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 23,
                              'char' => 82,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '.',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 23,
                              'char' => 85,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 23,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 23,
                          'char' => 85,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 24,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 26,
                  'char' => 17,
                ),
                4 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value1',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 26,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 26,
                        'char' => 49,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 26,
                          'char' => 58,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 26,
                        'char' => 58,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 26,
                            'char' => 87,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_SAME',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 26,
                            'char' => 87,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 26,
                          'char' => 87,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 26,
                        'char' => 87,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 26,
                          'char' => 101,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 26,
                        'char' => 101,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'expected',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 26,
                                'char' => 112,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value2',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 26,
                                'char' => 120,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 26,
                              'char' => 120,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 26,
                          'char' => 121,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 26,
                        'char' => 121,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 26,
                    'char' => 122,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 27,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 29,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 29,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 30,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 16,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 16,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 15,
          'last-line' => 32,
          'char' => 26,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'notEq',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value1',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 32,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value2',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 32,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 32,
                'char' => 76,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 32,
              'char' => 76,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 32,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 32,
              'char' => 101,
            ),
          ),
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
                  'type' => 'variable',
                  'value' => 'value1',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 34,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'value2',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 34,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 34,
                'char' => 29,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 36,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 36,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is equal to expected value \\"%s\\".',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 36,
                                'char' => 84,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 36,
                              'char' => 84,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 36,
                            'char' => 84,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value1',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 37,
                                    'char' => 41,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 37,
                                  'char' => 41,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 37,
                              'char' => 42,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 37,
                            'char' => 42,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value2',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 38,
                                    'char' => 41,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 38,
                                  'char' => 41,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 39,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 39,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 39,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 39,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 41,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value1',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 41,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 41,
                        'char' => 49,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 41,
                          'char' => 58,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 41,
                        'char' => 58,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 41,
                            'char' => 89,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_NOT_EQ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 41,
                            'char' => 89,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 41,
                          'char' => 89,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 41,
                        'char' => 89,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 41,
                          'char' => 103,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 41,
                        'char' => 103,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'expected',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 41,
                                'char' => 114,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value2',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 41,
                                'char' => 122,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 41,
                              'char' => 122,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 41,
                          'char' => 123,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 41,
                        'char' => 123,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 41,
                    'char' => 124,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 42,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 44,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 45,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 33,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 33,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 32,
          'last-line' => 47,
          'char' => 26,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'same',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value1',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 47,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value2',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 47,
              'char' => 55,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 47,
                'char' => 75,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 47,
              'char' => 75,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 47,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 47,
              'char' => 100,
            ),
          ),
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
                  'type' => 'variable',
                  'value' => 'value1',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 49,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'value2',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 49,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 49,
                'char' => 30,
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
                      'variable' => 'v1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 50,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'variable' => 'v2',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 50,
                      'char' => 23,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 51,
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
                      'variable' => 'v1',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value1',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 51,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 51,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 51,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 51,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 52,
                  'char' => 15,
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
                      'variable' => 'v2',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value2',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 52,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 52,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 52,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 52,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 54,
                  'char' => 14,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 54,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 54,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 54,
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
                          'variable' => 'message',
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
                                    'type' => 'string',
                                    'value' => 'Value ',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 55,
                                    'char' => 38,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'v1',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 55,
                                    'char' => 43,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 55,
                                  'char' => 43,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => ' does not equal expected value ',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 55,
                                  'char' => 77,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 55,
                                'char' => 77,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'v2',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 55,
                                'char' => 82,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 55,
                              'char' => 82,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '.',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 55,
                              'char' => 85,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 55,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 55,
                          'char' => 85,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 56,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 58,
                  'char' => 17,
                ),
                4 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value1',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 58,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 58,
                        'char' => 49,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 58,
                          'char' => 58,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 58,
                        'char' => 58,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 58,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_EQ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 58,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 58,
                          'char' => 85,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 58,
                        'char' => 85,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 59,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 59,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'expected',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 59,
                                'char' => 54,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value2',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 59,
                                'char' => 62,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 59,
                              'char' => 62,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 59,
                          'char' => 63,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 59,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 59,
                    'char' => 64,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 60,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 62,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 62,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 63,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 48,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 48,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 47,
          'last-line' => 65,
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
          'name' => 'notEmpty',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 65,
              'char' => 46,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 65,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 65,
              'char' => 66,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 65,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 65,
              'char' => 91,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 67,
                  'char' => 24,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 67,
                'char' => 24,
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
                      'variable' => 'v1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 68,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 69,
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
                      'variable' => 'v1',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 69,
                              'char' => 43,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 69,
                            'char' => 43,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 69,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 69,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 70,
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
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 70,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 70,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 70,
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
                          'variable' => 'message',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 71,
                                'char' => 38,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'v1',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 71,
                                'char' => 43,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 71,
                              'char' => 43,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ' is empty, but non empty value was expected.',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 71,
                              'char' => 89,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 71,
                            'char' => 89,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 71,
                          'char' => 89,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 72,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 73,
                  'char' => 17,
                ),
                3 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 73,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 73,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 73,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 73,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 73,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'VALUE_EMPTY',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 73,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 73,
                          'char' => 85,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 73,
                        'char' => 85,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 73,
                          'char' => 99,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 73,
                        'char' => 99,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 73,
                    'char' => 100,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 74,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 76,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 76,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 77,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 66,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 66,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 65,
          'last-line' => 79,
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
          'name' => 'notNull',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 79,
              'char' => 45,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 79,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 79,
              'char' => 65,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 79,
                'char' => 90,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 79,
              'char' => 90,
            ),
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
                  'type' => 'variable',
                  'value' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 81,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 81,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 81,
                'char' => 27,
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
                      'variable' => 'v1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 82,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 83,
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
                      'variable' => 'v1',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 83,
                              'char' => 43,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 83,
                            'char' => 43,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 83,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 83,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 84,
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
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 84,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 84,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 84,
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
                          'variable' => 'message',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 85,
                                'char' => 38,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'v1',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 85,
                                'char' => 43,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 85,
                              'char' => 43,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ' is null, but non null value was expected.',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 85,
                              'char' => 87,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 85,
                            'char' => 87,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 85,
                          'char' => 87,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 86,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 87,
                  'char' => 17,
                ),
                3 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 87,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 87,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 87,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 87,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 87,
                            'char' => 84,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'VALUE_NULL',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 87,
                            'char' => 84,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 87,
                          'char' => 84,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 87,
                        'char' => 84,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 87,
                          'char' => 98,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 87,
                        'char' => 98,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 87,
                    'char' => 99,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 88,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 89,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 89,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 90,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 80,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 80,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 79,
          'last-line' => 92,
          'char' => 26,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'notBlank',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 92,
              'char' => 46,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 92,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 92,
              'char' => 66,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 92,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 92,
              'char' => 91,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'or',
                  'left' => 
                  array (
                    'type' => 'identical',
                    'left' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 94,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 94,
                      'char' => 29,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 94,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'and',
                      'left' => 
                      array (
                        'type' => 'empty',
                        'left' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'value',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 94,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 94,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 94,
                        'char' => 46,
                      ),
                      'right' => 
                      array (
                        'type' => 'not-equals',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => '0',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 94,
                          'char' => 51,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 94,
                          'char' => 58,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 94,
                        'char' => 58,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 94,
                      'char' => 58,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 94,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 94,
                  'char' => 61,
                ),
                'right' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'and',
                    'left' => 
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
                            'value' => 'value',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 94,
                            'char' => 79,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 94,
                          'char' => 79,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 94,
                      'char' => 82,
                    ),
                    'right' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 94,
                        'char' => 87,
                      ),
                      'right' => 
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
                              'value' => 'value',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 94,
                              'char' => 99,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 94,
                            'char' => 99,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 94,
                        'char' => 100,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 94,
                      'char' => 100,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 94,
                    'char' => 100,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 94,
                  'char' => 102,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 94,
                'char' => 102,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 96,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 96,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is blank, but was expected to contain a value.',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 96,
                                'char' => 96,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 96,
                              'char' => 96,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 96,
                            'char' => 96,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 97,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 97,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 98,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 98,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 98,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 98,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 99,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 99,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 99,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 99,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 99,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 99,
                            'char' => 91,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_NOT_BLANK',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 99,
                            'char' => 91,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 99,
                          'char' => 91,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 99,
                        'char' => 91,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 99,
                          'char' => 105,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 99,
                        'char' => 105,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 99,
                    'char' => 106,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 100,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 101,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 101,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 102,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 92,
                'char' => 104,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 93,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 93,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 92,
          'last-line' => 104,
          'char' => 26,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'integer',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 104,
              'char' => 45,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 104,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 104,
              'char' => 65,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 104,
                'char' => 90,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 104,
              'char' => 90,
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
                  'name' => '\\is_int',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 106,
                        'char' => 26,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 106,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 106,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 106,
                'char' => 28,
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
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 107,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 107,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 107,
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
                          'variable' => 'message',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => '\\sprintf',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'ternary',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'message',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 109,
                                    'char' => 29,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'message',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 109,
                                    'char' => 39,
                                  ),
                                  'extra' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'Value \\"%s\\" is not an integer.',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 109,
                                    'char' => 72,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 109,
                                  'char' => 72,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 109,
                                'char' => 72,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'scall',
                                  'dynamic-class' => 0,
                                  'class' => 'static',
                                  'dynamic' => 0,
                                  'name' => 'stringify',
                                  'parameters' => 
                                  array (
                                    0 => 
                                    array (
                                      'parameter' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'value',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                        'line' => 110,
                                        'char' => 44,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                      'line' => 110,
                                      'char' => 44,
                                    ),
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 111,
                                  'char' => 17,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 111,
                                'char' => 17,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 111,
                            'char' => 18,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 111,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 112,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 113,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 113,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 113,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 113,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 113,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 113,
                            'char' => 89,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_INTEGER',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 113,
                            'char' => 89,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 113,
                          'char' => 89,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 113,
                        'char' => 89,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 113,
                          'char' => 103,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 113,
                        'char' => 103,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 113,
                    'char' => 104,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 114,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 115,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 115,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 116,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 105,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 105,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 104,
          'last-line' => 118,
          'char' => 26,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'numeric',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 118,
              'char' => 45,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 118,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 118,
              'char' => 65,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 118,
                'char' => 90,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 118,
              'char' => 90,
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
                  'name' => 'is_numeric',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 120,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 120,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 120,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 120,
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
                      'variable' => 'v1',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 121,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 122,
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
                      'variable' => 'v1',
                      'expr' => 
                      array (
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'self',
                        'dynamic' => 0,
                        'name' => 'stringify',
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 122,
                              'char' => 43,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 122,
                            'char' => 43,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 122,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 122,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 123,
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
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 123,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 123,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 123,
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
                          'variable' => 'message',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 124,
                                'char' => 38,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'v1',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 124,
                                'char' => 43,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 124,
                              'char' => 43,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ' is not numeric.',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 124,
                              'char' => 61,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 124,
                            'char' => 61,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 124,
                          'char' => 61,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 125,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 126,
                  'char' => 17,
                ),
                3 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 126,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 126,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 126,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 126,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 126,
                            'char' => 89,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_NUMERIC',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 126,
                            'char' => 89,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 126,
                          'char' => 89,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 126,
                        'char' => 89,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 126,
                          'char' => 103,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 126,
                        'char' => 103,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 126,
                    'char' => 104,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 127,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 129,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 129,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 130,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 119,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 119,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 118,
          'last-line' => 132,
          'char' => 26,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'range',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 132,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'minValue',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 132,
              'char' => 57,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'maxValue',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 132,
              'char' => 71,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 132,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 132,
              'char' => 91,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 132,
                'char' => 116,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 132,
              'char' => 116,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'numeric',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 134,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 134,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 134,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 134,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 134,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 134,
                    'char' => 53,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 134,
                'char' => 54,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 135,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'less',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 135,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'minValue',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 135,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 135,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'greater',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 135,
                    'char' => 38,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'maxValue',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 135,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 135,
                  'char' => 49,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 135,
                'char' => 49,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 137,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 137,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Number \\"%s\\" was expected to be at least \\"%d\\" and at most \\"%d\\".',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 137,
                                'char' => 105,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 137,
                              'char' => 105,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 137,
                            'char' => 105,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 138,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 138,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 138,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 138,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'minValue',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 139,
                              'char' => 25,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 139,
                            'char' => 25,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'maxValue',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 141,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 141,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 141,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 141,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 142,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 142,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 142,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 142,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 142,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 142,
                            'char' => 87,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_RANGE',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 142,
                            'char' => 87,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 142,
                          'char' => 87,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 142,
                        'char' => 87,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 143,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 143,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'min',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 143,
                                'char' => 49,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'minValue',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 143,
                                'char' => 59,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 143,
                              'char' => 59,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'max',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 143,
                                'char' => 64,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'maxValue',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 143,
                                'char' => 74,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 143,
                              'char' => 74,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 143,
                          'char' => 75,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 143,
                        'char' => 75,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 143,
                    'char' => 76,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 144,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 146,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 146,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 147,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 133,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 133,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 132,
          'last-line' => 149,
          'char' => 26,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'minLength',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 149,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'minLength',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 149,
              'char' => 62,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 149,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 149,
              'char' => 82,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 149,
                'char' => 107,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 149,
              'char' => 107,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'encodeing',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'utf8',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 149,
                'char' => 132,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 149,
              'char' => 132,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isString',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 151,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 151,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 151,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 151,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 151,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 151,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 151,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 152,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'mb_strlen',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 152,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 152,
                      'char' => 27,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'encodeing',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 152,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 152,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 152,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'minLength',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 152,
                  'char' => 52,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 152,
                'char' => 52,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 154,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 154,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is too short, it should at least %d characters, but only has %d characters.',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 154,
                                'char' => 125,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 154,
                              'char' => 125,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 154,
                            'char' => 125,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 155,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 155,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 155,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 155,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'minLength',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 156,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 156,
                            'char' => 26,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'mb_strlen',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 157,
                                    'char' => 32,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 157,
                                  'char' => 32,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'encodeing',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 157,
                                    'char' => 43,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 157,
                                  'char' => 43,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 158,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 158,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 158,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 158,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 159,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 159,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 159,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 159,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 159,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 159,
                            'char' => 92,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_MIN_LENGTH',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 159,
                            'char' => 92,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 159,
                          'char' => 92,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 159,
                        'char' => 92,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 160,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 160,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'min_length',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 160,
                                'char' => 56,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'minLength',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 160,
                                'char' => 67,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 160,
                              'char' => 67,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'encoding',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 160,
                                'char' => 77,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'encodeing',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 160,
                                'char' => 88,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 160,
                              'char' => 88,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 160,
                          'char' => 89,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 160,
                        'char' => 89,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 160,
                    'char' => 90,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 161,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 162,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 162,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 163,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 149,
                'char' => 145,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 150,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 150,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 149,
          'last-line' => 165,
          'char' => 26,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'maxLength',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 165,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'maxLength',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 165,
              'char' => 62,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 165,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 165,
              'char' => 82,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 165,
                'char' => 107,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 165,
              'char' => 107,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'encodeing',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'utf8',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 165,
                'char' => 132,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 165,
              'char' => 132,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isString',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 167,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 167,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 167,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 167,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 167,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 167,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 167,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 168,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'greater',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'mb_strlen',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 168,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 168,
                      'char' => 27,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'encodeing',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 168,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 168,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 168,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'maxLength',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 168,
                  'char' => 52,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 168,
                'char' => 52,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 170,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 170,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is too long, it should no more than %d characters, but has %d characters.',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 170,
                                'char' => 123,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 170,
                              'char' => 123,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 170,
                            'char' => 123,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 171,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 171,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 171,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 171,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'maxLength',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 172,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 172,
                            'char' => 26,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'mb_strlen',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 173,
                                    'char' => 32,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 173,
                                  'char' => 32,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'encodeing',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 173,
                                    'char' => 43,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 173,
                                  'char' => 43,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 174,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 174,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 174,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 174,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 175,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 175,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 175,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 175,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 175,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 175,
                            'char' => 92,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_MAX_LENGTH',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 175,
                            'char' => 92,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 175,
                          'char' => 92,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 175,
                        'char' => 92,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 176,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 176,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'max_length',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 176,
                                'char' => 56,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'maxLength',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 176,
                                'char' => 67,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 176,
                              'char' => 67,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'encoding',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 176,
                                'char' => 77,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'encodeing',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 176,
                                'char' => 88,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 176,
                              'char' => 88,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 176,
                          'char' => 89,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 176,
                        'char' => 89,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 176,
                    'char' => 90,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 177,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 178,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 178,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 179,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 165,
                'char' => 145,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 166,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 166,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 165,
          'last-line' => 181,
          'char' => 26,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'betweenLength',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 181,
              'char' => 51,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'minLength',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 181,
              'char' => 66,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'maxLength',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 181,
              'char' => 81,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 181,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 181,
              'char' => 101,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 181,
                'char' => 126,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 181,
              'char' => 126,
            ),
            5 => 
            array (
              'type' => 'parameter',
              'name' => 'encodeing',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'utf8',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 181,
                'char' => 151,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 181,
              'char' => 151,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isString',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 183,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 183,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 183,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 183,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 183,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 183,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 183,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 184,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'minLength',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 184,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 184,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'minLength',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 184,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 184,
                    'char' => 43,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 184,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 184,
                    'char' => 52,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 184,
                      'char' => 66,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 184,
                    'char' => 66,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'encodeing',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 184,
                      'char' => 77,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 184,
                    'char' => 77,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 184,
                'char' => 78,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 185,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'maxLength',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 185,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 185,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'maxLength',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 185,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 185,
                    'char' => 43,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 185,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 185,
                    'char' => 52,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 185,
                      'char' => 66,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 185,
                    'char' => 66,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'encodeing',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 185,
                      'char' => 77,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 185,
                    'char' => 77,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 185,
                'char' => 78,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 186,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 186,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 187,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 181,
                'char' => 164,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 182,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 182,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 181,
          'last-line' => 189,
          'char' => 26,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'min',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 189,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'minValue',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 189,
              'char' => 55,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 189,
                'char' => 75,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 189,
              'char' => 75,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 189,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 189,
              'char' => 100,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'numeric',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 191,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 191,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 191,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 191,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 191,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 191,
                    'char' => 53,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 191,
                'char' => 54,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 193,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 193,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'minValue',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 193,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 193,
                'char' => 29,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 195,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 195,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Number \\"%s\\" was expected to be at least \\"%s\\".',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 195,
                                'char' => 86,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 195,
                              'char' => 86,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 195,
                            'char' => 86,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 196,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 196,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 196,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 196,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'minValue',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 197,
                                    'char' => 43,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 197,
                                  'char' => 43,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 198,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 198,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 198,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 198,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 199,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 199,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 199,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 199,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 199,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 199,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_MIN',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 199,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 199,
                          'char' => 85,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 199,
                        'char' => 85,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 200,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 200,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'min',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 200,
                                'char' => 49,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'minValue',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 200,
                                'char' => 59,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 200,
                              'char' => 59,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 200,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 200,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 200,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 201,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 203,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 203,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 204,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 190,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 190,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 189,
          'last-line' => 206,
          'char' => 26,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'max',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 206,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'maxValue',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 206,
              'char' => 55,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 206,
                'char' => 75,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 206,
              'char' => 75,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 206,
                'char' => 100,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 206,
              'char' => 100,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'numeric',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 208,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 208,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 208,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 208,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 208,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 208,
                    'char' => 53,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 208,
                'char' => 54,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 210,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'greater',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 210,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'maxValue',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 210,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 210,
                'char' => 29,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 212,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 212,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Number \\"%s\\" was expected to be at most \\"%s\\".',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 212,
                                'char' => 85,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 212,
                              'char' => 85,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 212,
                            'char' => 85,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 213,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 213,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 213,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 213,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'maxValue',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 214,
                                    'char' => 43,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 214,
                                  'char' => 43,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 215,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 215,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 215,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 215,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 216,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 216,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 216,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 216,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 216,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 216,
                            'char' => 85,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_MAX',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 216,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 216,
                          'char' => 85,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 216,
                        'char' => 85,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 217,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 217,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'max',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 217,
                                'char' => 49,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'maxValue',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 217,
                                'char' => 59,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 217,
                              'char' => 59,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 217,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 217,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 217,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 218,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 220,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 220,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 221,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 207,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 207,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 206,
          'last-line' => 223,
          'char' => 26,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'contains',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 223,
              'char' => 46,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'needle',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 223,
              'char' => 58,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 223,
                'char' => 78,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 223,
              'char' => 78,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 223,
                'char' => 103,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 223,
              'char' => 103,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'encodeing',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'utf8',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 223,
                'char' => 128,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 223,
              'char' => 128,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isString',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 225,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 225,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 225,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 225,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 225,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 225,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 225,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 226,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 226,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'mb_strpos',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 226,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 226,
                      'char' => 37,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'needle',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 226,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 226,
                      'char' => 45,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'null',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 226,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 226,
                      'char' => 51,
                    ),
                    3 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'encodeing',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 226,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 226,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 226,
                  'char' => 64,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 226,
                'char' => 64,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 228,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 228,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" does not contain \\"%s\\".',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 228,
                                'char' => 74,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 228,
                              'char' => 74,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 228,
                            'char' => 74,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 229,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 229,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 229,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 229,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'needle',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 230,
                                    'char' => 41,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 230,
                                  'char' => 41,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 231,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 231,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 231,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 231,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 232,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 232,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 232,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 232,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 232,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 232,
                            'char' => 97,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_STRING_CONTAINS',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 232,
                            'char' => 97,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 232,
                          'char' => 97,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 232,
                        'char' => 97,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 233,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 233,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'needle',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 233,
                                'char' => 52,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'needle',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 233,
                                'char' => 60,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 233,
                              'char' => 60,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'encoding',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 233,
                                'char' => 71,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'encodeing',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 233,
                                'char' => 82,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 233,
                              'char' => 82,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 233,
                          'char' => 83,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 233,
                        'char' => 83,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 233,
                    'char' => 84,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 234,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 235,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 235,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 236,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 223,
                'char' => 141,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 224,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 224,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 223,
          'last-line' => 238,
          'char' => 26,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'notContains',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 238,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'needle',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 238,
              'char' => 61,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 238,
                'char' => 81,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 238,
              'char' => 81,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 238,
                'char' => 106,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 238,
              'char' => 106,
            ),
            4 => 
            array (
              'type' => 'parameter',
              'name' => 'encodeing',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => 'utf8',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 238,
                'char' => 131,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 238,
              'char' => 131,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isString',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 240,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 240,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 240,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 240,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 240,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 240,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 240,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 241,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-identical',
                'left' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 241,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'mb_strpos',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 241,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 241,
                      'char' => 37,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'needle',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 241,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 241,
                      'char' => 45,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'null',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 241,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 241,
                      'char' => 51,
                    ),
                    3 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'encodeing',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 241,
                        'char' => 62,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 241,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 241,
                  'char' => 64,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 241,
                'char' => 64,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 243,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 243,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" contain \\"%s\\".',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 243,
                                'char' => 65,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 243,
                              'char' => 65,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 243,
                            'char' => 65,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 244,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 244,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 244,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 244,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'needle',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 245,
                                    'char' => 41,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 245,
                                  'char' => 41,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 246,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 246,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 246,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 246,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 247,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 247,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 247,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 247,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 247,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 247,
                            'char' => 101,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_STRING_NOT_CONTAINS',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 247,
                            'char' => 101,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 247,
                          'char' => 101,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 247,
                        'char' => 101,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 248,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 248,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'needle',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 248,
                                'char' => 52,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'needle',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 248,
                                'char' => 60,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 248,
                              'char' => 60,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'encoding',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 248,
                                'char' => 71,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'encodeing',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 248,
                                'char' => 82,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 248,
                              'char' => 82,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 248,
                          'char' => 83,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 248,
                        'char' => 83,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 248,
                    'char' => 84,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 249,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 250,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 250,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 251,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 238,
                'char' => 144,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 239,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 239,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 238,
          'last-line' => 253,
          'char' => 26,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'inArray',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 253,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'choices',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 253,
              'char' => 60,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 253,
                'char' => 80,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 253,
              'char' => 80,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 253,
                'char' => 105,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 253,
              'char' => 105,
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
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 255,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 255,
                      'char' => 27,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'choices',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 255,
                        'char' => 36,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 255,
                      'char' => 36,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 255,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 255,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 255,
                  'char' => 44,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 255,
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
                      'variable' => 'message',
                      'expr' => 
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
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 257,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 257,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is not an element of the valid values: %s',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 257,
                                'char' => 91,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 257,
                              'char' => 91,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 257,
                            'char' => 91,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 258,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 258,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 258,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 258,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
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
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 259,
                                    'char' => 27,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 259,
                                  'char' => 27,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'array_map',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'array',
                                          'left' => 
                                          array (
                                            0 => 
                                            array (
                                              'value' => 
                                              array (
                                                'type' => 'fcall',
                                                'name' => 'get_called_class',
                                                'call-type' => 1,
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                                'line' => 259,
                                                'char' => 58,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                              'line' => 259,
                                              'char' => 58,
                                            ),
                                            1 => 
                                            array (
                                              'value' => 
                                              array (
                                                'type' => 'string',
                                                'value' => 'stringify',
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                                'line' => 259,
                                                'char' => 69,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                              'line' => 259,
                                              'char' => 69,
                                            ),
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                          'line' => 259,
                                          'char' => 70,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                        'line' => 259,
                                        'char' => 70,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'choices',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                          'line' => 259,
                                          'char' => 79,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                        'line' => 259,
                                        'char' => 79,
                                      ),
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 259,
                                    'char' => 80,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 259,
                                  'char' => 80,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 260,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 260,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 260,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 260,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 261,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 261,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 261,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 261,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 261,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 261,
                            'char' => 88,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_CHOICE',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 261,
                            'char' => 88,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 261,
                          'char' => 88,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 261,
                        'char' => 88,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 262,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 262,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'choices',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 262,
                                'char' => 54,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'choices',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 262,
                                'char' => 63,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 262,
                              'char' => 63,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 262,
                          'char' => 64,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 262,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 262,
                    'char' => 65,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 263,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 264,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 264,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 265,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 253,
          'last-line' => 267,
          'char' => 26,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'keyExists',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 267,
              'char' => 47,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 267,
              'char' => 56,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 267,
                'char' => 76,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 267,
              'char' => 76,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 267,
                'char' => 101,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 267,
              'char' => 101,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isArray',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 269,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 269,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 269,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 269,
                    'char' => 39,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 269,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 269,
                    'char' => 53,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 269,
                'char' => 54,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 270,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'array_key_exists',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'key',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 270,
                        'char' => 33,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 270,
                      'char' => 33,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 270,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 270,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 270,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 270,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'message',
                      'expr' => 
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
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 272,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 272,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Array does not contain an element with key \\"%s\\"',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 272,
                                'char' => 86,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 272,
                              'char' => 86,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 272,
                            'char' => 86,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'key',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 273,
                                    'char' => 38,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 273,
                                  'char' => 38,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 274,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 274,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 274,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 274,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 275,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 275,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 275,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 275,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 275,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 275,
                            'char' => 92,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_KEY_EXISTS',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 275,
                            'char' => 92,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 275,
                          'char' => 92,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 275,
                        'char' => 92,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 276,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 276,
                        'char' => 43,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'key',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 276,
                                'char' => 50,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 276,
                                'char' => 55,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 276,
                              'char' => 55,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 276,
                          'char' => 56,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 276,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 276,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 277,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 278,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 278,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 279,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 267,
                'char' => 114,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 268,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 268,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 267,
          'last-line' => 281,
          'char' => 26,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'isResource',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 281,
              'char' => 48,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 281,
                'char' => 68,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 281,
              'char' => 68,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 281,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 281,
              'char' => 93,
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
                  'name' => 'is_resource',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 283,
                        'char' => 30,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 283,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 283,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 283,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'message',
                      'expr' => 
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
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 285,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 285,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is not a resource',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 285,
                                'char' => 67,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 285,
                              'char' => 67,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 285,
                            'char' => 67,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 286,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 286,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 287,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 287,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 287,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 287,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 288,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 288,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 288,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 288,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 288,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 288,
                            'char' => 90,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_RESOURCE',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 288,
                            'char' => 90,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 288,
                          'char' => 90,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 288,
                        'char' => 90,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 288,
                          'char' => 104,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 288,
                        'char' => 104,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 288,
                    'char' => 105,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 289,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 290,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 290,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 291,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 281,
                'char' => 106,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 282,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 282,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 281,
          'last-line' => 293,
          'char' => 26,
        ),
        20 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'isString',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 293,
              'char' => 46,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 293,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 293,
              'char' => 66,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 293,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 293,
              'char' => 91,
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
                  'name' => 'is_string',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 295,
                        'char' => 28,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 295,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 295,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 295,
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
                      'variable' => 'message',
                      'expr' => 
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
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 297,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 297,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" expected to be string, type %s given.',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 297,
                                'char' => 87,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 297,
                              'char' => 87,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 297,
                            'char' => 87,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 298,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 298,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 298,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 298,
                            'char' => 41,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'gettype',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 299,
                                    'char' => 30,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 299,
                                  'char' => 30,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 300,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 300,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 300,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 300,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 301,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 301,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 301,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 301,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 301,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 301,
                            'char' => 88,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_STRING',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 301,
                            'char' => 88,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 301,
                          'char' => 88,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 301,
                        'char' => 88,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 301,
                          'char' => 102,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 301,
                        'char' => 102,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 301,
                    'char' => 103,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 302,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 304,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 304,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 305,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 294,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 294,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 293,
          'last-line' => 307,
          'char' => 26,
        ),
        21 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'isArray',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 307,
              'char' => 45,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 307,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 307,
              'char' => 65,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 307,
                'char' => 90,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 307,
              'char' => 90,
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
                  'name' => 'is_array',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 309,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 309,
                      'char' => 27,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 309,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 309,
                'char' => 29,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 311,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 311,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is not an array.',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 311,
                                'char' => 66,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 311,
                              'char' => 66,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 311,
                            'char' => 66,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 312,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 312,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 313,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 313,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 313,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 313,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 314,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 314,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 314,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 314,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 314,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 314,
                            'char' => 87,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_ARRAY',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 314,
                            'char' => 87,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 314,
                          'char' => 87,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 314,
                        'char' => 87,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 314,
                          'char' => 101,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 314,
                        'char' => 101,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 314,
                    'char' => 102,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 315,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 316,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 316,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 317,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 308,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 308,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 307,
          'last-line' => 319,
          'char' => 26,
        ),
        22 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'isJsonString',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 319,
              'char' => 50,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 319,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 319,
              'char' => 70,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'propertyPath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 319,
                'char' => 95,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 319,
              'char' => 95,
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
                'class' => 'static',
                'dynamic' => 0,
                'name' => 'isString',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 321,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 321,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 321,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 321,
                    'char' => 40,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'propertyPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 321,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 321,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 321,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 322,
              'char' => 10,
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
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 322,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'json_decode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 322,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 322,
                        'char' => 37,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 322,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 322,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'not-equals',
                  'left' => 
                  array (
                    'type' => 'constant',
                    'value' => 'JSON_ERROR_NONE',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 322,
                    'char' => 59,
                  ),
                  'right' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'json_last_error',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 322,
                    'char' => 79,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 322,
                  'char' => 79,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 322,
                'char' => 79,
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
                        'type' => 'fcall',
                        'name' => 'sprintf',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'ternary',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 324,
                                'char' => 25,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'message',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 324,
                                'char' => 35,
                              ),
                              'extra' => 
                              array (
                                'type' => 'string',
                                'value' => 'Value \\"%s\\" is not a valid JSON string.',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 324,
                                'char' => 77,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 324,
                              'char' => 77,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 324,
                            'char' => 77,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'scall',
                              'dynamic-class' => 0,
                              'class' => 'static',
                              'dynamic' => 0,
                              'name' => 'stringify',
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'value',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 325,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 325,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 326,
                              'char' => 13,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 326,
                            'char' => 13,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 326,
                        'char' => 14,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 326,
                      'char' => 14,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 328,
                  'char' => 17,
                ),
                1 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'static',
                    'dynamic' => 0,
                    'name' => 'createException',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 328,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 328,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 328,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 328,
                        'char' => 57,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'AssertionCode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 328,
                            'char' => 93,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'INVALID_JSON_STRING',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 328,
                            'char' => 93,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 328,
                          'char' => 93,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 328,
                        'char' => 93,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'propertyPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 328,
                          'char' => 107,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 328,
                        'char' => 107,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 328,
                    'char' => 108,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 329,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 331,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 331,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 332,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 320,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
            'line' => 320,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 319,
          'last-line' => 334,
          'char' => 26,
        ),
        23 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'stringify',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 334,
              'char' => 44,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_bool',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 336,
                      'char' => 25,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 336,
                    'char' => 25,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 336,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 337,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 337,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 337,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'TRUE',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 337,
                      'char' => 41,
                    ),
                    'extra' => 
                    array (
                      'type' => 'string',
                      'value' => 'FALSE',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 337,
                      'char' => 48,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 337,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 338,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 340,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'value',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 340,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 340,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 340,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'NULL',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 340,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 340,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 342,
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
                  'variable' => 'val',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 342,
                  'char' => 16,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 343,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_scalar',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 343,
                      'char' => 27,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 343,
                    'char' => 27,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 343,
                'char' => 29,
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
                      'variable' => 'val',
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'string',
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 344,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 344,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 344,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 345,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'strlen',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'val',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 345,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 345,
                          'char' => 26,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 345,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '100',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 345,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 345,
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
                          'variable' => 'val',
                          'expr' => 
                          array (
                            'type' => 'concat',
                            'left' => 
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
                                    'value' => 'val',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 346,
                                    'char' => 37,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 346,
                                  'char' => 37,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '0',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 346,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 346,
                                  'char' => 40,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '96',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                    'line' => 346,
                                    'char' => 44,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                  'line' => 346,
                                  'char' => 44,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 346,
                              'char' => 46,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => ' ...',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 346,
                              'char' => 52,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 346,
                            'char' => 52,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 346,
                          'char' => 52,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 347,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 348,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 348,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 349,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 351,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'or',
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
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 351,
                          'char' => 26,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 351,
                        'char' => 26,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 351,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'is_object',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 351,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 351,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 351,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 351,
                  'char' => 49,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'is_resource',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 351,
                        'char' => 68,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 351,
                      'char' => 68,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 351,
                  'char' => 70,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 351,
                'char' => 70,
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
                      'variable' => 'val',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'print_r',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 352,
                              'char' => 36,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 352,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 352,
                              'char' => 42,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 352,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 352,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 352,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 353,
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
                      'variable' => 'val',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'preg_replace',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '/\\s+/',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 353,
                              'char' => 41,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 353,
                            'char' => 41,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => ' ',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 353,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 353,
                            'char' => 44,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'val',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 353,
                              'char' => 49,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 353,
                            'char' => 49,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 353,
                        'char' => 50,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 353,
                      'char' => 50,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 354,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'strlen',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'val',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                            'line' => 354,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 354,
                          'char' => 26,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 354,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '160',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 354,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 354,
                    'char' => 34,
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
                                'value' => 'val',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 355,
                                'char' => 34,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 355,
                              'char' => 34,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'int',
                                'value' => '0',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 355,
                                'char' => 37,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 355,
                              'char' => 37,
                            ),
                            2 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'int',
                                'value' => '156',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                                'line' => 355,
                                'char' => 42,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                              'line' => 355,
                              'char' => 42,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 355,
                          'char' => 44,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => ' ...',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                          'line' => 355,
                          'char' => 50,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                        'line' => 355,
                        'char' => 50,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                      'line' => 356,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 357,
                  'char' => 18,
                ),
                3 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                    'line' => 357,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                  'line' => 358,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 360,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'unknown',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
                'line' => 360,
                'char' => 23,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
              'line' => 361,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
          'line' => 334,
          'last-line' => 362,
          'char' => 27,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
      'line' => 8,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Assert/Assertion.zep',
    'line' => 8,
    'char' => 5,
  ),
);