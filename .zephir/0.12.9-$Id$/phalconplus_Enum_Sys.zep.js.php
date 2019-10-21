<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Enum',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
    'line' => 3,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'PhalconPlus\\Enum\\AbstractEnum',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
        'line' => 3,
        'char' => 34,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
    'line' => 5,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Sys',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractEnum',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'rootDir',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 18,
            'char' => 30,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 19,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'primaryModuleDir',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 19,
            'char' => 39,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
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
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'init',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleDir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 21,
              'char' => 50,
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
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'static-property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 23,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'primaryModuleDir',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 23,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 23,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 23,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 23,
                  'char' => 43,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 23,
                'char' => 43,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 25,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 26,
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
                  'variable' => 'moduleDir',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'rtrim',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDir',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 26,
                          'char' => 40,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 26,
                        'char' => 40,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'self',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 26,
                            'char' => 50,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'DS',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 26,
                            'char' => 50,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 26,
                          'char' => 50,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 26,
                        'char' => 50,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 26,
                    'char' => 51,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 26,
                  'char' => 51,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 27,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'is_dir',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'moduleDir',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 27,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 27,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 27,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 27,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\PhalconPlus\\Base\\Exception',
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
                            'value' => 'Module directory not exists or not a dir, file positon: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 28,
                            'char' => 108,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'moduleDir',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 28,
                            'char' => 119,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 28,
                          'char' => 119,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 28,
                        'char' => 119,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 28,
                    'char' => 120,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 29,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 30,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'static-property',
                  'operator' => 'assign',
                  'variable' => 'self',
                  'property' => 'primaryModuleDir',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'moduleDir',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 30,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 30,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 31,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'static-property',
                  'operator' => 'assign',
                  'variable' => 'self',
                  'property' => 'rootDir',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'dirname',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDir',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 31,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 31,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 31,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 31,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 32,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 33,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 21,
          'last-line' => 36,
          'char' => 26,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getPrimaryModuleDir',
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
                  'type' => 'static-property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'self',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 38,
                    'char' => 39,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'primaryModuleDir',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 38,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 38,
                  'char' => 39,
                ),
                'right' => 
                array (
                  'type' => 'static-constant-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'self',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 38,
                    'char' => 49,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'DS',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 38,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 38,
                  'char' => 49,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 38,
                'char' => 49,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 39,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 37,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 37,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 36,
          'last-line' => 42,
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
          'name' => 'getRootDir',
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
                  'type' => 'static-property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'self',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 44,
                    'char' => 30,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'rootDir',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 44,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 44,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'static-constant-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'self',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 44,
                    'char' => 40,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'DS',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 44,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 44,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 44,
                'char' => 40,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 43,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 43,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 42,
          'last-line' => 48,
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
          'name' => 'getCommonDir',
          'statements' => 
          array (
            0 => 
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 50,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DS',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 50,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 50,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 50,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 51,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rootDir',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 51,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 51,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 51,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 52,
                              'char' => 30,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'COMMON_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 52,
                              'char' => 30,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 52,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 52,
                          'char' => 30,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 54,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 54,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 54,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 54,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 54,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 55,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 49,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 49,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 48,
          'last-line' => 58,
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
          'name' => 'getGlobalConfigDir',
          'statements' => 
          array (
            0 => 
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 60,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DS',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 60,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 60,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 60,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 61,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rootDir',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 61,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 61,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 61,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 62,
                              'char' => 30,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'COMMON_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 62,
                              'char' => 30,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 62,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 62,
                          'char' => 30,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'static-constant-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'self',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 63,
                                'char' => 29,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'CONF_NAME',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 63,
                                'char' => 29,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 63,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'static-constant-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'self',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 64,
                                'char' => 9,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'EXT',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 64,
                                'char' => 9,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 64,
                              'char' => 9,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 64,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 64,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 64,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 64,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 64,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 65,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 59,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 59,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 58,
          'last-line' => 68,
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
          'name' => 'getGlobalConfigPath',
          'statements' => 
          array (
            0 => 
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 70,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DS',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 70,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 70,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 70,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 71,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rootDir',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 71,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 71,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 71,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 72,
                              'char' => 30,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'COMMON_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 72,
                              'char' => 30,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 72,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 72,
                          'char' => 30,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 73,
                              'char' => 28,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'CONF_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 73,
                              'char' => 28,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 73,
                            'char' => 28,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 73,
                          'char' => 28,
                        ),
                        3 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'static-constant-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'self',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 74,
                                'char' => 29,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'CONF_NAME',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 74,
                                'char' => 29,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 74,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'static-constant-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'self',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 75,
                                'char' => 9,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'EXT',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 75,
                                'char' => 9,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 75,
                              'char' => 9,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 75,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 75,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 75,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 75,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 75,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 69,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 69,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 68,
          'last-line' => 79,
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
          'name' => 'getGlobalLoadDir',
          'statements' => 
          array (
            0 => 
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 81,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DS',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 81,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 81,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 81,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 82,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rootDir',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 82,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 82,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 82,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 83,
                              'char' => 30,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'COMMON_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 83,
                              'char' => 30,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 83,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 83,
                          'char' => 30,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 84,
                              'char' => 28,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'LOAD_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 84,
                              'char' => 28,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 84,
                            'char' => 28,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 84,
                          'char' => 28,
                        ),
                        3 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 86,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 86,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 86,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 86,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 86,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 87,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 80,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 80,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 79,
          'last-line' => 90,
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
          'name' => 'getModuleDirByName',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleName',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 90,
              'char' => 64,
            ),
          ),
          'statements' => 
          array (
            0 => 
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 92,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DS',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 92,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 92,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 92,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 93,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rootDir',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 93,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 93,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 93,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'moduleName',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 94,
                            'char' => 23,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 94,
                          'char' => 23,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 96,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 96,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 96,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 96,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 96,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 97,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 91,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 91,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 90,
          'last-line' => 100,
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
          'name' => 'getModuleNameByDir',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleDir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 100,
              'char' => 63,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'pathinfo',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'moduleDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 102,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 102,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'PATHINFO_FILENAME',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 102,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 102,
                    'char' => 53,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 102,
                'char' => 54,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 103,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 101,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 101,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 100,
          'last-line' => 105,
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
          'name' => 'getModuleClassPath',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleDir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 105,
              'char' => 63,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'runMode',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PhalconPlus\\Enum\\RunMode',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 105,
                'char' => 99,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 105,
              'char' => 100,
            ),
          ),
          'statements' => 
          array (
            0 => 
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
                      'value' => '',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 107,
                      'char' => 24,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 107,
                    'char' => 24,
                  ),
                  1 => 
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
                            'type' => 'variable',
                            'value' => 'moduleDir',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 108,
                            'char' => 22,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 108,
                          'char' => 22,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 109,
                              'char' => 27,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'APP_NAME',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 109,
                              'char' => 27,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 109,
                            'char' => 27,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 109,
                          'char' => 27,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 110,
                              'char' => 21,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'DS',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 110,
                              'char' => 21,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 110,
                            'char' => 21,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 110,
                          'char' => 21,
                        ),
                        3 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'runMode',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 111,
                              'char' => 21,
                            ),
                            'name' => 'getMapClassName',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 111,
                            'char' => 39,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 111,
                          'char' => 39,
                        ),
                        4 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 113,
                              'char' => 9,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'EXT',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 113,
                              'char' => 9,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 113,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 113,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 113,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 113,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 113,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 114,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 105,
          'last-line' => 117,
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
          'name' => 'getModuleConfigPath',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleDir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 117,
              'char' => 64,
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
                  'variable' => 'confPrefix',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 119,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 119,
                  'char' => 26,
                ),
                1 => 
                array (
                  'variable' => 'confPath',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 119,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 119,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 121,
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
                  'variable' => 'confPrefix',
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
                          'type' => 'static-constant-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'self',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 121,
                            'char' => 42,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'DS',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 121,
                            'char' => 42,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 121,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 121,
                        'char' => 42,
                      ),
                      1 => 
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
                                'name' => 'rtrim',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'moduleDir',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                      'line' => 122,
                                      'char' => 28,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                    'line' => 122,
                                    'char' => 28,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'static-constant-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'self',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                        'line' => 122,
                                        'char' => 38,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'DS',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                        'line' => 122,
                                        'char' => 38,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                      'line' => 122,
                                      'char' => 38,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                    'line' => 122,
                                    'char' => 38,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 122,
                                'char' => 39,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 122,
                              'char' => 39,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'static-constant-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'self',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 123,
                                  'char' => 27,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'APP_NAME',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 123,
                                  'char' => 27,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 123,
                                'char' => 27,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 123,
                              'char' => 27,
                            ),
                            2 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'static-constant-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'self',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 124,
                                  'char' => 28,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'CONF_NAME',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 124,
                                  'char' => 28,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 124,
                                'char' => 28,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 124,
                              'char' => 28,
                            ),
                            3 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'string',
                                'value' => '',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 126,
                                'char' => 9,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 126,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 126,
                          'char' => 10,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 126,
                        'char' => 10,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 126,
                    'char' => 11,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 126,
                  'char' => 11,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 128,
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
                  'variable' => 'confPath',
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
                          'value' => '',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 128,
                          'char' => 32,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 128,
                        'char' => 32,
                      ),
                      1 => 
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
                                'type' => 'variable',
                                'value' => 'confPrefix',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 129,
                                'char' => 23,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 129,
                              'char' => 23,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'constant',
                                'value' => 'APP_RUN_ENV',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 130,
                                'char' => 24,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 130,
                              'char' => 24,
                            ),
                            2 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'static-constant-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'self',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 132,
                                  'char' => 9,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'EXT',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 132,
                                  'char' => 9,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 132,
                                'char' => 9,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 132,
                              'char' => 9,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 132,
                          'char' => 10,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 132,
                        'char' => 10,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 132,
                    'char' => 11,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 132,
                  'char' => 11,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 134,
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
                  'name' => 'is_file',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'confPath',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 134,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 134,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 134,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 134,
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
                      'variable' => 'confPath',
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
                              'value' => '',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 135,
                              'char' => 36,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 135,
                            'char' => 36,
                          ),
                          1 => 
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
                                    'type' => 'variable',
                                    'value' => 'confPrefix',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                    'line' => 136,
                                    'char' => 27,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 136,
                                  'char' => 27,
                                ),
                                1 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'static-constant-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'self',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                      'line' => 137,
                                      'char' => 32,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'CONF_NAME',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                      'line' => 137,
                                      'char' => 32,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                    'line' => 137,
                                    'char' => 32,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 137,
                                  'char' => 32,
                                ),
                                2 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'static-constant-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'self',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                      'line' => 139,
                                      'char' => 13,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'EXT',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                      'line' => 139,
                                      'char' => 13,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                    'line' => 139,
                                    'char' => 13,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 139,
                                  'char' => 13,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 139,
                              'char' => 14,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 139,
                            'char' => 14,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 139,
                        'char' => 15,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 139,
                      'char' => 15,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 140,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 142,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'is_file',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'confPath',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 142,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 142,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 142,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 142,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\PhalconPlus\\Base\\Exception',
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
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Module Config file not exists: ',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 143,
                                  'char' => 83,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'confPath',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                  'line' => 143,
                                  'char' => 94,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 143,
                                'char' => 94,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' & ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                                'line' => 143,
                                'char' => 100,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 143,
                              'char' => 100,
                            ),
                            'right' => 
                            array (
                              'type' => 'constant',
                              'value' => 'APP_RUN_ENV',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 143,
                              'char' => 114,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 143,
                            'char' => 114,
                          ),
                          'right' => 
                          array (
                            'type' => 'static-constant-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 143,
                              'char' => 125,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'EXT',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 143,
                              'char' => 125,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 143,
                            'char' => 125,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 143,
                          'char' => 125,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 143,
                        'char' => 125,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 143,
                    'char' => 126,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                  'line' => 144,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 146,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'confPath',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 146,
                'char' => 24,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 147,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 117,
          'last-line' => 150,
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
          'name' => 'getComposerAutoloadPath',
          'statements' => 
          array (
            0 => 
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
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'self',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 152,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DS',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                        'line' => 152,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 152,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 152,
                    'char' => 32,
                  ),
                  1 => 
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
                            'type' => 'static-property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'self',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 153,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rootDir',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                              'line' => 153,
                              'char' => 26,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 153,
                            'char' => 26,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 153,
                          'char' => 26,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'vendor',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 154,
                            'char' => 19,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 154,
                          'char' => 19,
                        ),
                        2 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'autoload.php',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                            'line' => 156,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                          'line' => 156,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                      'line' => 156,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                    'line' => 156,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
                'line' => 156,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
              'line' => 157,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 150,
          'last-line' => 158,
          'char' => 26,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'COMMON_NAME',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'common',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 8,
            'char' => 31,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 9,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'CONF_NAME',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'config',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 9,
            'char' => 31,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 10,
          'char' => 9,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'LOAD_NAME',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'load',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 10,
            'char' => 29,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 11,
          'char' => 9,
        ),
        3 => 
        array (
          'type' => 'const',
          'name' => 'PUB_NAME',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'public',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 11,
            'char' => 31,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 12,
          'char' => 9,
        ),
        4 => 
        array (
          'type' => 'const',
          'name' => 'APP_NAME',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'app',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 12,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 14,
          'char' => 9,
        ),
        5 => 
        array (
          'type' => 'const',
          'name' => 'DS',
          'default' => 
          array (
            'type' => 'constant',
            'value' => 'DIRECTORY_SEPARATOR',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 14,
            'char' => 35,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 15,
          'char' => 9,
        ),
        6 => 
        array (
          'type' => 'const',
          'name' => 'EXT',
          'default' => 
          array (
            'type' => 'string',
            'value' => '.php',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 15,
            'char' => 21,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 16,
          'char' => 9,
        ),
        7 => 
        array (
          'type' => 'const',
          'name' => 'ENV_NAME',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'phalconplus.env',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
            'line' => 16,
            'char' => 37,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
          'line' => 18,
          'char' => 11,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
      'line' => 5,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/Sys.zep',
    'line' => 5,
    'char' => 5,
  ),
);