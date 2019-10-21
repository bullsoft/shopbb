<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
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
        'name' => 'PhalconPlus\\Enum\\Sys',
        'alias' => 'Sys',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
        'line' => 3,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
    'line' => 4,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'PhalconPlus\\Enum\\RunMode',
        'alias' => 'RunMode',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
        'line' => 4,
        'char' => 40,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
    'line' => 6,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Bootstrap',
    'abstract' => 0,
    'final' => 1,
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
          'name' => 'config',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 9,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
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
          'name' => 'di',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 11,
            'char' => 25,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 12,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 13,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 15,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'application',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 15,
            'char' => 33,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 17,
          'char' => 13,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'primaryModuleDef',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 17,
            'char' => 38,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 19,
          'char' => 13,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'activeModules',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 19,
            'char' => 33,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 21,
          'char' => 13,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'debug',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 21,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 25,
          'char' => 13,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'env',
          'default' => 
          array (
            'type' => 'static-constant-access',
            'left' => 
            array (
              'type' => 'variable',
              'value' => '\\PhalconPlus\\Enum\\RunEnv',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 25,
              'char' => 50,
            ),
            'right' => 
            array (
              'type' => 'variable',
              'value' => 'DEV',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 25,
              'char' => 50,
            ),
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 25,
            'char' => 50,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 27,
          'char' => 13,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'autoHandle',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'true',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 27,
            'char' => 33,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 28,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 29,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 31,
          'char' => 13,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'loadedFiles',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 31,
            'char' => 32,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 33,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 35,
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
              'name' => 'moduleDir',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 35,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'env',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 35,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 35,
              'char' => 65,
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
                'class' => 'Sys',
                'dynamic' => 0,
                'name' => 'init',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'moduleDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 38,
                      'char' => 28,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 38,
                    'char' => 28,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 38,
                'char' => 29,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 40,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'likely',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'env',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 40,
                    'char' => 29,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 40,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 40,
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
                      'variable' => 'sysEnv',
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
                              'name' => 'get_cfg_var',
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
                                      'value' => 'Sys',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                      'line' => 42,
                                      'char' => 56,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'ENV_NAME',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                      'line' => 42,
                                      'char' => 56,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                    'line' => 42,
                                    'char' => 56,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                  'line' => 42,
                                  'char' => 56,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 42,
                              'char' => 57,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 42,
                            'char' => 57,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 42,
                        'char' => 58,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 42,
                      'char' => 58,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 45,
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
                      'type' => 'empty',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'sysEnv',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 45,
                        'char' => 30,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 45,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 45,
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
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'env',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'sysEnv',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 45,
                            'char' => 54,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 45,
                          'char' => 54,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 45,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 46,
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
                      'property' => 'env',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'env',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 47,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 47,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 48,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 52,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'not-equals',
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
                          'type' => 'constant',
                          'value' => 'PHP_SAPI',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 52,
                          'char' => 27,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 52,
                        'char' => 27,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 52,
                          'char' => 30,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 52,
                        'char' => 30,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '3',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 52,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 52,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 52,
                    'char' => 36,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'cli',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 52,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 52,
                  'char' => 43,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => '\\PhalconPlus\\Enum\\RunEnv',
                    'dynamic' => 0,
                    'name' => 'isInProd',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 52,
                            'char' => 86,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'env',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 52,
                            'char' => 90,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 52,
                          'char' => 90,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 52,
                        'char' => 90,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 52,
                    'char' => 92,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 52,
                  'char' => 92,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 52,
                'char' => 92,
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
                      'property' => 'debug',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\Debug',
                        'dynamic' => 0,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 53,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 53,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 54,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 54,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'debug',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 54,
                        'char' => 25,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 54,
                      'char' => 25,
                    ),
                    'name' => 'listen',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 54,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 55,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 58,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_ENV',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 58,
                      'char' => 23,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 58,
                    'char' => 23,
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 58,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'env',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 58,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 58,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 58,
                    'char' => 34,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 58,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 58,
                    'char' => 41,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 58,
                'char' => 42,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 59,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_RUN_ENV',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 59,
                      'char' => 27,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 59,
                    'char' => 27,
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 59,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'env',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 59,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 59,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 59,
                    'char' => 38,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 59,
                      'char' => 45,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 59,
                    'char' => 45,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 59,
                'char' => 46,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 60,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_ROOT_DIR',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 60,
                      'char' => 28,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 60,
                    'char' => 28,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'Sys',
                      'dynamic' => 0,
                      'name' => 'getRootDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 60,
                      'char' => 47,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 60,
                    'char' => 47,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 60,
                      'char' => 54,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 60,
                    'char' => 54,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 60,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 61,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_MODULE_DIR',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 61,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 61,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'Sys',
                      'dynamic' => 0,
                      'name' => 'getPrimaryModuleDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 61,
                      'char' => 58,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 61,
                    'char' => 58,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 61,
                      'char' => 65,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 61,
                    'char' => 65,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 61,
                'char' => 66,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 62,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_PRI_MODULE_DIR',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 62,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 62,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'Sys',
                      'dynamic' => 0,
                      'name' => 'getPrimaryModuleDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 62,
                      'char' => 62,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 62,
                    'char' => 62,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 62,
                      'char' => 69,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 62,
                    'char' => 69,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 62,
                'char' => 70,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 63,
              'char' => 14,
            ),
            8 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_ROOT_COMMON_DIR',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 63,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 63,
                    'char' => 35,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'Sys',
                      'dynamic' => 0,
                      'name' => 'getCommonDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 63,
                      'char' => 56,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 63,
                    'char' => 56,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 63,
                      'char' => 63,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 63,
                    'char' => 63,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 63,
                'char' => 64,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 64,
              'char' => 14,
            ),
            9 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_ROOT_COMMON_LOAD_DIR',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 64,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 64,
                    'char' => 40,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'Sys',
                      'dynamic' => 0,
                      'name' => 'getGlobalLoadDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 64,
                      'char' => 65,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 64,
                    'char' => 65,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 64,
                      'char' => 72,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 64,
                    'char' => 72,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 64,
                'char' => 73,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 65,
              'char' => 14,
            ),
            10 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'define',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'APP_ROOT_COMMON_CONF_DIR',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 65,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 65,
                    'char' => 40,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'Sys',
                      'dynamic' => 0,
                      'name' => 'getGlobalConfigDir',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 65,
                      'char' => 67,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 65,
                    'char' => 67,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 65,
                      'char' => 74,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 65,
                    'char' => 74,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 65,
                'char' => 75,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 68,
              'char' => 10,
            ),
            11 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'likely',
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
                        'type' => 'scall',
                        'dynamic-class' => 0,
                        'class' => 'Sys',
                        'dynamic' => 0,
                        'name' => 'getComposerAutoloadPath',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 68,
                        'char' => 57,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 68,
                      'char' => 57,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 68,
                  'char' => 59,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 68,
                'char' => 59,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Sys',
                    'dynamic' => 0,
                    'name' => 'getComposerAutoloadPath',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 69,
                    'char' => 51,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 70,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 71,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 35,
          'last-line' => 73,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'registerModule',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleDef',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PhalconPlus\\Base\\ModuleDef',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 73,
                'char' => 75,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 73,
              'char' => 76,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 75,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'activeModules',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 75,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 75,
                        'char' => 46,
                      ),
                      'right' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDef',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 75,
                          'char' => 57,
                        ),
                        'name' => 'getName',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 75,
                        'char' => 67,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 75,
                      'char' => 68,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 75,
                    'char' => 70,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 75,
                  'char' => 70,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 75,
                'char' => 70,
              ),
              'statements' => 
              array (
                0 => 
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 76,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'activeModules',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 76,
                        'char' => 39,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 76,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'moduleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 76,
                        'char' => 50,
                      ),
                      'name' => 'getName',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 76,
                      'char' => 60,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 76,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 77,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 78,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 78,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'di',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 78,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 78,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 78,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 78,
                  'char' => 39,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 78,
                'char' => 39,
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
                            'value' => 'DI doesn\'t load yet, failed to register module ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 79,
                            'char' => 99,
                          ),
                          'right' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'moduleDef',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 79,
                              'char' => 111,
                            ),
                            'name' => 'getName',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 79,
                            'char' => 121,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 79,
                          'char' => 121,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 79,
                        'char' => 121,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 79,
                    'char' => 122,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 80,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 81,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 81,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'config',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 81,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 81,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 81,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 81,
                  'char' => 43,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 81,
                'char' => 43,
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
                            'value' => 'Config doesn\'t initial yet, failed to register module ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 82,
                            'char' => 106,
                          ),
                          'right' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'moduleDef',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 82,
                              'char' => 118,
                            ),
                            'name' => 'getName',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 82,
                            'char' => 128,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 82,
                          'char' => 128,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 82,
                        'char' => 128,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 82,
                    'char' => 129,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 83,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 85,
              'char' => 10,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'moduleDef',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 85,
                  'char' => 22,
                ),
                'name' => 'getIsPrimary',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 85,
                'char' => 38,
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
                      'name' => 'defined',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'APP_RUN_MODE',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 87,
                            'char' => 37,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 87,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 87,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 87,
                    'char' => 39,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'define',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'APP_RUN_MODE',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 87,
                              'char' => 60,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 87,
                            'char' => 60,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'moduleDef',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                'line' => 87,
                                'char' => 72,
                              ),
                              'name' => 'getMode',
                              'call-type' => 1,
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 87,
                              'char' => 82,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 87,
                            'char' => 82,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'false',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 87,
                              'char' => 89,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 87,
                            'char' => 89,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 87,
                        'char' => 90,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 87,
                      'char' => 92,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 89,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'declare',
                  'data-type' => 'variable',
                  'variables' => 
                  array (
                    0 => 
                    array (
                      'variable' => 'moduleConf',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDef',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 89,
                          'char' => 40,
                        ),
                        'name' => 'getConfig',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 89,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 89,
                      'char' => 52,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 91,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'mcall',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 91,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 91,
                        'char' => 26,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 91,
                      'char' => 26,
                    ),
                    'name' => 'merge',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleConf',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 91,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 91,
                        'char' => 43,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 91,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 93,
                  'char' => 16,
                ),
                3 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 93,
                      'char' => 18,
                    ),
                    'name' => 'load',
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
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'moduleDef',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 93,
                              'char' => 34,
                            ),
                            'name' => 'getRunMode',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 93,
                            'char' => 48,
                          ),
                          'name' => 'getScriptPath',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 93,
                          'char' => 64,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 93,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 93,
                    'char' => 65,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 94,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 96,
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
                  'variable' => 'module',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'moduleDef',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 96,
                      'char' => 32,
                    ),
                    'name' => 'impl',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 96,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'di',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 96,
                            'char' => 46,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 96,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 96,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 96,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 96,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 99,
              'char' => 14,
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
                  'value' => 'module',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 99,
                  'char' => 16,
                ),
                'name' => 'registerAutoloaders',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 99,
                'char' => 38,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 100,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'module',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 100,
                  'char' => 16,
                ),
                'name' => 'registerServices',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 100,
                'char' => 35,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 103,
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
                  'property' => 'activeModules',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'moduleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 103,
                        'char' => 43,
                      ),
                      'name' => 'getName',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 103,
                      'char' => 53,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'module',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 103,
                    'char' => 63,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 103,
                  'char' => 63,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 104,
              'char' => 14,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'module',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 104,
                'char' => 22,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 105,
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
                  'value' => '\\PhalconPlus\\Base\\AbstractModule',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 74,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 74,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 74,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 73,
          'last-line' => 107,
          'char' => 20,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'initConf',
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
                  'variable' => 'globalConfPath',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Sys',
                    'dynamic' => 0,
                    'name' => 'getGlobalConfigPath',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 110,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 110,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 111,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
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
                          'value' => 'globalConfPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 111,
                          'char' => 44,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 111,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 111,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 111,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 111,
                'char' => 46,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'error_log',
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
                            'type' => 'string',
                            'value' => 'PHP Notice:  PhalconPlus\\\\Bootstrap Global config file not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 114,
                            'char' => 91,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'globalConfPath',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 114,
                            'char' => 107,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 114,
                          'char' => 107,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 114,
                        'char' => 107,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 114,
                    'char' => 108,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 115,
                  'char' => 15,
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
                      'property' => 'config',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\Config',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'empty-array',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 115,
                              'char' => 54,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 115,
                            'char' => 54,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 115,
                        'char' => 55,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 115,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 116,
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
                      'property' => 'config',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\Config',
                        'dynamic' => 0,
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
                                'value' => 'this',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                'line' => 117,
                                'char' => 57,
                              ),
                              'name' => 'load',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'globalConfPath',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                    'line' => 117,
                                    'char' => 77,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                  'line' => 117,
                                  'char' => 77,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 117,
                              'char' => 78,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 117,
                            'char' => 78,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 117,
                        'char' => 79,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 117,
                      'char' => 79,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 118,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 120,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 120,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'primaryModuleDef',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 120,
                    'char' => 41,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 120,
                  'char' => 41,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 120,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'primaryModuleDef',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\PhalconPlus\\Base\\ModuleDef',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 121,
                              'char' => 78,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 121,
                            'char' => 78,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'constant',
                              'value' => 'APP_MODULE_DIR',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 121,
                              'char' => 94,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 121,
                            'char' => 94,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 121,
                              'char' => 100,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 121,
                            'char' => 100,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 121,
                        'char' => 101,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 121,
                      'char' => 101,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 122,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 124,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 124,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 125,
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
                  'value' => '\\PhalconPlus\\Bootstrap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 108,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 108,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 108,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 107,
          'last-line' => 127,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setApp',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'app',
              'const' => 0,
              'data-type' => 'object',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 127,
              'char' => 38,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'autoHandle',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 127,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 127,
              'char' => 66,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'likely',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 129,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'application',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 129,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 129,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 129,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 129,
                  'char' => 44,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 129,
                'char' => 44,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'likely',
                    'left' => 
                    array (
                      'type' => 'or',
                      'left' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'instanceof',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'app',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 130,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\Phalcon\\Application',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 130,
                            'char' => 59,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 130,
                          'char' => 59,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 130,
                        'char' => 62,
                      ),
                      'right' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'instanceof',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'app',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 130,
                            'char' => 78,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '\\Yar_Server',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 130,
                            'char' => 91,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 130,
                          'char' => 91,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 130,
                        'char' => 93,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 130,
                      'char' => 93,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 130,
                    'char' => 93,
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
                          'property' => 'application',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'app',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 131,
                            'char' => 44,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 131,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 132,
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
                          'variable' => 'this',
                          'property' => 'autoHandle',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'autoHandle',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 132,
                            'char' => 50,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 132,
                          'char' => 50,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 133,
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
                        'class' => '\\PhalconPlus\\Base\\Exception',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Application must be instance of phalcon\\\\appliction or yar_server',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 134,
                              'char' => 120,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 134,
                            'char' => 120,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 134,
                        'char' => 121,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 135,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 136,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 137,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 137,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 138,
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
                  'value' => '\\PhalconPlus\\Bootstrap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 128,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 128,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 128,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 127,
          'last-line' => 141,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getApp',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 143,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'application',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 143,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 143,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 143,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 143,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 143,
                'char' => 46,
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
                          'type' => 'string',
                          'value' => 'Sorry, empty application in bootstrap',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 144,
                          'char' => 88,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 144,
                        'char' => 88,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 144,
                    'char' => 89,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 145,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 146,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 146,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'application',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 146,
                  'char' => 33,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 146,
                'char' => 33,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
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
                'data-type' => 'object',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 141,
                'char' => 40,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 142,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 142,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 141,
          'last-line' => 150,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'exec',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 153,
                  'char' => 14,
                ),
                'name' => 'initConf',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 153,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 155,
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
                  'variable' => 'handleMethod',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'exec',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 155,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 155,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 156,
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
                  'operator' => 'concat-assign',
                  'variable' => 'handleMethod',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 156,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'primaryModuleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 156,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 156,
                      'char' => 51,
                    ),
                    'name' => 'getMapClassName',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 156,
                    'char' => 69,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 156,
                  'char' => 69,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 157,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'call_user_func_array',
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
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 157,
                            'char' => 42,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 157,
                          'char' => 42,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'handleMethod',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 157,
                            'char' => 56,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 157,
                          'char' => 56,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 157,
                      'char' => 57,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 157,
                    'char' => 57,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'func_get_args',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 157,
                      'char' => 74,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 157,
                    'char' => 74,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 157,
                'char' => 75,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 158,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 150,
          'last-line' => 160,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'terminate',
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
                  'name' => 'session_status',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 162,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'constant',
                  'value' => 'PHP_SESSION_ACTIVE',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 162,
                  'char' => 51,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 162,
                'char' => 51,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'session_write_close',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 162,
                    'char' => 74,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 162,
                  'char' => 76,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 163,
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
                  'name' => 'headers_sent',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 163,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 163,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'session_id',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 163,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 163,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 163,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 163,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 165,
              'char' => 21,
            ),
            2 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_unset',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 165,
                'char' => 24,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 167,
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
                  'variable' => '_SESSION',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 167,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 167,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 168,
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
                  'variable' => '_POST',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 168,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 168,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 169,
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
                  'variable' => '_GET',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 169,
                    'char' => 22,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 169,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 170,
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
                  'variable' => '_SERVER',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 170,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 170,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 171,
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
                  'variable' => '_REQUEST',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 171,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 171,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 172,
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
                  'variable' => '_COOKIE',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 172,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 172,
                  'char' => 25,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 173,
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
                  'variable' => '_FILES',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 173,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 173,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 175,
              'char' => 19,
            ),
            10 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => '\\Phalcon\\Di',
                'dynamic' => 0,
                'name' => 'reset',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 175,
                'char' => 29,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 176,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'di',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 176,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 176,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 177,
              'char' => 11,
            ),
            12 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'config',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 177,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 177,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 178,
              'char' => 11,
            ),
            13 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'application',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 178,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 178,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 179,
              'char' => 11,
            ),
            14 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'loadedFiles',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 179,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 179,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 180,
              'char' => 11,
            ),
            15 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'primaryModuleDef',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 180,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 180,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 181,
              'char' => 11,
            ),
            16 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'activeModules',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 181,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 181,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 182,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 160,
          'last-line' => 184,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 186,
                  'char' => 14,
                ),
                'name' => 'terminate',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 186,
                'char' => 26,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 187,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 184,
          'last-line' => 191,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'execModule',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 192,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 192,
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
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 195,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 195,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 195,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 195,
                'char' => 31,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 195,
                      'char' => 38,
                    ),
                    'name' => 'initConf',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 195,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 195,
                  'char' => 51,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 197,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 197,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 197,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 197,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 197,
                'char' => 27,
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
                      'property' => 'di',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\DI\\FactoryDefault',
                        'dynamic' => 0,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 198,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 198,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 200,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 200,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 200,
                        'char' => 22,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 200,
                      'char' => 22,
                    ),
                    'name' => 'setShared',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'bootstrap',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 200,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 200,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 200,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 200,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 200,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 201,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 204,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 204,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'application',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 204,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 204,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 204,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 204,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 204,
                'char' => 46,
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
                      'property' => 'application',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\Mvc\\Application',
                        'dynamic' => 0,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 205,
                        'char' => 67,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 205,
                      'char' => 67,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 206,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 207,
              'char' => 12,
            ),
            3 => 
            array (
              'type' => 'mcall',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 207,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'application',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 207,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 207,
                  'char' => 27,
                ),
                'name' => 'setDI',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 207,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 207,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 207,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 207,
                    'char' => 42,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 207,
                'char' => 43,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 210,
              'char' => 12,
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
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 210,
                  'char' => 14,
                ),
                'name' => 'registerModule',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 210,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'primaryModuleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 210,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 210,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 210,
                    'char' => 52,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 210,
                'char' => 53,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 212,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 212,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'autoHandle',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 212,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 212,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 212,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 212,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 212,
                  'char' => 45,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 215,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 215,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'application',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 215,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 215,
                  'char' => 34,
                ),
                'name' => 'handle',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 215,
                      'char' => 49,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 215,
                    'char' => 49,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 215,
                'char' => 50,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 216,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * @request a uri string (for \\Phalcon\\Mvc\\Application) or Psr\\Http\\Message\\Request
     *',
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
                  'value' => '\\PhalconPlus\\Bootstrap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 192,
                  'char' => 80,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 192,
                'char' => 80,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => '\\Phalcon\\Http\\Response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 193,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 193,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 193,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 192,
          'last-line' => 218,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'execSrv',
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 221,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 221,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 221,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 221,
                'char' => 31,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 221,
                      'char' => 38,
                    ),
                    'name' => 'initConf',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 221,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 221,
                  'char' => 51,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 223,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 223,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 223,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 223,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 223,
                'char' => 27,
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
                      'property' => 'di',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\DI\\FactoryDefault',
                        'dynamic' => 0,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 224,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 224,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 225,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 225,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 225,
                        'char' => 22,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 225,
                      'char' => 22,
                    ),
                    'name' => 'setShared',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'bootstrap',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 225,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 225,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 225,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 225,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 225,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 226,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 229,
              'char' => 12,
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
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 229,
                  'char' => 14,
                ),
                'name' => 'registerModule',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 229,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'primaryModuleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 229,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 229,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 229,
                    'char' => 52,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 229,
                'char' => 53,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 231,
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
                  'variable' => 'backendSrv',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 231,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 231,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 233,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 233,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 233,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 233,
                    'char' => 30,
                  ),
                  'name' => 'has',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => 'backendSrv',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 233,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 233,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 233,
                  'char' => 47,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 233,
                'char' => 47,
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
                      'variable' => 'backendSrv',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 234,
                            'char' => 35,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'di',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 234,
                            'char' => 39,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 234,
                          'char' => 39,
                        ),
                        'name' => 'get',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'backendSrv',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 234,
                              'char' => 54,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 234,
                            'char' => 54,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 234,
                        'char' => 55,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 234,
                      'char' => 55,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 235,
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
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'instanceof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'backendSrv',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 235,
                          'char' => 39,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '\\PhalconPlus\\Rpc\\Server\\AbstractServer',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 235,
                          'char' => 79,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 235,
                        'char' => 79,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 235,
                      'char' => 81,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 235,
                    'char' => 81,
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
                              'type' => 'string',
                              'value' => 'Service object(DI[\\"backendSrv\\"]) must be type of \\\\PhalconPlus\\\\Rpc\\\\Server\\\\AbstractServer',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 236,
                              'char' => 148,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 236,
                            'char' => 148,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 236,
                        'char' => 149,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 237,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 238,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'backendSrv',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\PhalconPlus\\Rpc\\Server\\SimpleServer',
                        'dynamic' => 0,
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
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                'line' => 239,
                                'char' => 76,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'di',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                'line' => 239,
                                'char' => 79,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 239,
                              'char' => 79,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 239,
                            'char' => 79,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 239,
                        'char' => 80,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 239,
                      'char' => 80,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 240,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 240,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 240,
                        'char' => 22,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 240,
                      'char' => 22,
                    ),
                    'name' => 'setShared',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'backendSrv',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 240,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 240,
                        'char' => 43,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'backendSrv',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 240,
                          'char' => 55,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 240,
                        'char' => 55,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 240,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 241,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 244,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 244,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'application',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 244,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 244,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 244,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 244,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 244,
                'char' => 46,
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
                      'property' => 'application',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Yar_Server',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'backendSrv',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 245,
                              'char' => 63,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 245,
                            'char' => 63,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 245,
                        'char' => 64,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 245,
                      'char' => 64,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 246,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 249,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 249,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'autoHandle',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 249,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 249,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 249,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 249,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 249,
                  'char' => 45,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 252,
              'char' => 16,
            ),
            7 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_start',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 252,
                'char' => 19,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 253,
              'char' => 12,
            ),
            8 => 
            array (
              'type' => 'mcall',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 253,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'application',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 253,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 253,
                  'char' => 27,
                ),
                'name' => 'handle',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 253,
                'char' => 36,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 254,
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
                  'variable' => 'content',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ob_get_clean',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 254,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 254,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 256,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 256,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 257,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'response',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Phalcon\\Http\\Response',
                    'dynamic' => 0,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 257,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 257,
                  'char' => 52,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 258,
              'char' => 16,
            ),
            12 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 258,
                  'char' => 18,
                ),
                'name' => 'setStatusCode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '200',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 258,
                      'char' => 36,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 258,
                    'char' => 36,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'OK',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 258,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 258,
                    'char' => 40,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 258,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 259,
              'char' => 16,
            ),
            13 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 259,
                  'char' => 18,
                ),
                'name' => 'setContent',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'content',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 259,
                      'char' => 37,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 259,
                    'char' => 37,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 259,
                'char' => 38,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 260,
              'char' => 14,
            ),
            14 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'response',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 260,
                'char' => 24,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 261,
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
                  'value' => '\\Phalcon\\Http\\Response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 218,
                  'char' => 59,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 218,
                'char' => 59,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => '\\PhalconPlus\\Bootstrap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 219,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 219,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 219,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 218,
          'last-line' => 263,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'execTask',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'argv',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 263,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'di',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\DI\\FactoryDefault',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 263,
                'char' => 72,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 263,
                'char' => 80,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 263,
              'char' => 80,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 266,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'config',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 266,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 266,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 266,
                'char' => 31,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 266,
                      'char' => 38,
                    ),
                    'name' => 'initConf',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 266,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 266,
                  'char' => 51,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 267,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 267,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 267,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 267,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 267,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'likely',
                    'left' => 
                    array (
                      'type' => 'or',
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
                              'value' => 'di',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 268,
                              'char' => 33,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 268,
                            'char' => 33,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 268,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'not',
                        'left' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'instanceof',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'di',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 268,
                              'char' => 53,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '\\Phalcon\\DI\\FactoryDefault\\CLI',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 268,
                              'char' => 85,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 268,
                            'char' => 85,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 268,
                          'char' => 87,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 268,
                        'char' => 87,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 268,
                      'char' => 87,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 268,
                    'char' => 87,
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
                          'property' => 'di',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => '\\Phalcon\\DI\\FactoryDefault\\CLI',
                            'dynamic' => 0,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 269,
                            'char' => 68,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 269,
                          'char' => 68,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 270,
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
                          'assign-type' => 'object-property',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => 'di',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'di',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 271,
                            'char' => 34,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 271,
                          'char' => 34,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 272,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 273,
                  'char' => 16,
                ),
                1 => 
                array (
                  'type' => 'mcall',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 273,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 273,
                        'char' => 22,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 273,
                      'char' => 22,
                    ),
                    'name' => 'setShared',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'bootstrap',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 273,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 273,
                        'char' => 42,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 273,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 273,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 273,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 274,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 277,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 277,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'application',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 277,
                        'char' => 44,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 277,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 277,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 277,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 277,
                'char' => 46,
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
                      'property' => 'application',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\CLI\\Console',
                        'dynamic' => 0,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 278,
                        'char' => 63,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 278,
                      'char' => 63,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 279,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 280,
              'char' => 12,
            ),
            3 => 
            array (
              'type' => 'mcall',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 280,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'application',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 280,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 280,
                  'char' => 27,
                ),
                'name' => 'setDI',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 280,
                        'char' => 39,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 280,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 280,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 280,
                    'char' => 42,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 280,
                'char' => 43,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 283,
              'char' => 12,
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
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 283,
                  'char' => 14,
                ),
                'name' => 'registerModule',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 283,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'primaryModuleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 283,
                        'char' => 52,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 283,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 283,
                    'char' => 52,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 283,
                'char' => 53,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 286,
              'char' => 10,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 286,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'autoHandle',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 286,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 286,
                  'char' => 30,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 286,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 286,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 286,
                  'char' => 45,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 289,
              'char' => 14,
            ),
            6 => 
            array (
              'type' => 'return',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 289,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'application',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 289,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 289,
                  'char' => 34,
                ),
                'name' => 'handle',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'argv',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 289,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 289,
                    'char' => 46,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 289,
                'char' => 47,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 290,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 263,
          'last-line' => 292,
          'char' => 19,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getPrimaryModuleDef',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 294,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'primaryModuleDef',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 294,
                  'char' => 38,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 294,
                'char' => 38,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 295,
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
                  'value' => '\\PhalconPlus\\Base\\ModuleDef',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 293,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 293,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 293,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 292,
          'last-line' => 297,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getPrimaryModule',
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
                  'variable' => 'name',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 299,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'primaryModuleDef',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 299,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 299,
                      'char' => 43,
                    ),
                    'name' => 'getName',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 299,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 299,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 300,
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
                  'type' => 'isset',
                  'left' => 
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 300,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'activeModules',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 300,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 300,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'name',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 300,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 300,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 300,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 300,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 300,
                'char' => 46,
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
                            'value' => 'Module not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 301,
                            'char' => 71,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 301,
                            'char' => 77,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 301,
                          'char' => 77,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 301,
                        'char' => 77,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 301,
                    'char' => 78,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 302,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 303,
              'char' => 14,
            ),
            2 => 
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 303,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'activeModules',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 303,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 303,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 303,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 303,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 304,
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
                  'value' => '\\PhalconPlus\\Base\\AbstractModule',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 298,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 298,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 298,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 297,
          'last-line' => 306,
          'char' => 19,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getModule',
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
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 306,
              'char' => 43,
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 308,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'activeModules',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 308,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 308,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'name',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 308,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 308,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 308,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 308,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 308,
                'char' => 46,
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
                            'value' => 'Module not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 309,
                            'char' => 71,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 309,
                            'char' => 77,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 309,
                          'char' => 77,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 309,
                        'char' => 77,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 309,
                    'char' => 78,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 310,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 311,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 311,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'activeModules',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 311,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 311,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 311,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 311,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 312,
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
                  'value' => '\\PhalconPlus\\Base\\AbstractModule',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 307,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 307,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 307,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 306,
          'last-line' => 314,
          'char' => 19,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getModuleDef',
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
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 314,
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 316,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'activeModules',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 316,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 316,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'name',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 316,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 316,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 316,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 316,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 316,
                'char' => 46,
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
                            'value' => 'Module not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 317,
                            'char' => 71,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 317,
                            'char' => 77,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 317,
                          'char' => 77,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 317,
                        'char' => 77,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 317,
                    'char' => 78,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 318,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 319,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 319,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'activeModules',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 319,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 319,
                    'char' => 35,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 319,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 319,
                  'char' => 42,
                ),
                'name' => 'getDef',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 319,
                'char' => 51,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 320,
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
                  'value' => '\\PhalconPlus\\Base\\ModuleDef',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 315,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 315,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 315,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 314,
          'last-line' => 322,
          'char' => 19,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'dependModule',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleName',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 322,
              'char' => 52,
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
                  'variable' => 'module',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 324,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'moduleDef',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 324,
                  'char' => 30,
                ),
                2 => 
                array (
                  'variable' => 'moduleDir',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 324,
                  'char' => 41,
                ),
                3 => 
                array (
                  'variable' => 'moduleConf',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 324,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 325,
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
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Sys',
                    'dynamic' => 0,
                    'name' => 'getModuleDirByName',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleName',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 325,
                          'char' => 59,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 325,
                        'char' => 59,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 325,
                    'char' => 60,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 325,
                  'char' => 60,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 326,
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
                  'variable' => 'moduleDef',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\PhalconPlus\\Base\\ModuleDef',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 326,
                          'char' => 61,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 326,
                        'char' => 61,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDir',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 326,
                          'char' => 72,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 326,
                        'char' => 72,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 326,
                    'char' => 73,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 326,
                  'char' => 73,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 328,
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
                  'variable' => 'module',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 328,
                      'char' => 27,
                    ),
                    'name' => 'registerModule',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDef',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 328,
                          'char' => 52,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 328,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 328,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 328,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 335,
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
                  'variable' => 'moduleConf',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Phalcon\\Config',
                    'dynamic' => 0,
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
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 335,
                            'char' => 51,
                          ),
                          'name' => 'load',
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
                                  'value' => 'moduleDef',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                  'line' => 335,
                                  'char' => 67,
                                ),
                                'name' => 'getConfigPath',
                                'call-type' => 1,
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                                'line' => 335,
                                'char' => 83,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                              'line' => 335,
                              'char' => 83,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 335,
                          'char' => 84,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 335,
                        'char' => 84,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 335,
                    'char' => 85,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 335,
                  'char' => 85,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 337,
              'char' => 18,
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
                  'value' => 'moduleConf',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 337,
                  'char' => 20,
                ),
                'name' => 'merge',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 337,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 337,
                        'char' => 39,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 337,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 337,
                    'char' => 39,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 337,
                'char' => 40,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 338,
              'char' => 12,
            ),
            6 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 338,
                  'char' => 14,
                ),
                'name' => 'setConfig',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'moduleConf',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 338,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 338,
                    'char' => 35,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 338,
                'char' => 36,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 339,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'module',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 339,
                'char' => 22,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 340,
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
                  'value' => '\\PhalconPlus\\Base\\AbstractModule',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 323,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 323,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 323,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 322,
          'last-line' => 342,
          'char' => 19,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isDebug',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'null',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 344,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 344,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'debug',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 344,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 344,
                  'char' => 35,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 344,
                'char' => 35,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 345,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 343,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 343,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 342,
          'last-line' => 347,
          'char' => 19,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getDebug',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 349,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'debug',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 349,
                  'char' => 27,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 349,
                'char' => 27,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 350,
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
                  'value' => '\\Phalcon\\Debug',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 348,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 348,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 348,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 347,
          'last-line' => 352,
          'char' => 19,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getEnv',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 354,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'env',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 354,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 354,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 355,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 353,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 353,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 352,
          'last-line' => 357,
          'char' => 19,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getConfig',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 359,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'config',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 359,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 359,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 360,
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
                  'value' => '\\Phalcon\\Config',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 358,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 358,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
            'line' => 358,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 357,
          'last-line' => 363,
          'char' => 19,
        ),
        20 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setConfig',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'config',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Config',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 363,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 363,
              'char' => 55,
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
                  'variable' => 'globalConf',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 365,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 366,
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
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 366,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 366,
                      'char' => 23,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 366,
                    'char' => 23,
                  ),
                  'name' => 'has',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => 'config',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 366,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 366,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 366,
                  'char' => 36,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 366,
                'char' => 36,
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
                      'variable' => 'globalConf',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\Phalcon\\Config',
                        'dynamic' => 0,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 367,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 367,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 368,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'globalConf',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 369,
                            'char' => 35,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'di',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 369,
                            'char' => 39,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 369,
                          'char' => 39,
                        ),
                        'name' => 'getConfig',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 369,
                        'char' => 51,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 369,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 370,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 371,
              'char' => 18,
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
                  'value' => 'globalConf',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 371,
                  'char' => 20,
                ),
                'name' => 'merge',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 371,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 371,
                    'char' => 33,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 371,
                'char' => 34,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 372,
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
                  'property' => 'config',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'globalConf',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 372,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 372,
                  'char' => 38,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 373,
              'char' => 12,
            ),
            4 => 
            array (
              'type' => 'mcall',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 373,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 373,
                    'char' => 18,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 373,
                  'char' => 18,
                ),
                'name' => 'set',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'config',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 373,
                      'char' => 29,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 373,
                    'char' => 29,
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 373,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 373,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 373,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 373,
                    'char' => 43,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 373,
                'char' => 44,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 374,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 374,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 375,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 363,
          'last-line' => 377,
          'char' => 19,
        ),
        21 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'load',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'filePath',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 377,
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
                'type' => 'unlikely',
                'left' => 
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
                          'value' => 'filePath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 379,
                          'char' => 40,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 379,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 379,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 379,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 379,
                'char' => 42,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 380,
                    'char' => 25,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 381,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 383,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
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
                          'value' => 'filePath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 383,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 383,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 383,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 383,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 383,
                'char' => 40,
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
                            'value' => 'The file you try to load is not exists. file position: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 384,
                            'char' => 107,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'filePath',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                            'line' => 384,
                            'char' => 117,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                          'line' => 384,
                          'char' => 117,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                        'line' => 384,
                        'char' => 117,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 384,
                    'char' => 118,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 385,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 387,
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
                  'variable' => 'loader',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 387,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'config',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 387,
                  'char' => 27,
                ),
                2 => 
                array (
                  'variable' => 'application',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 387,
                  'char' => 40,
                ),
                3 => 
                array (
                  'variable' => 'di',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 387,
                  'char' => 44,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 388,
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
                  'variable' => 'bootstrap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 388,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'rootPath',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 388,
                  'char' => 32,
                ),
                2 => 
                array (
                  'variable' => 'fileRet',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 388,
                  'char' => 41,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 390,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'fileRet',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 390,
                  'char' => 55,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 390,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'loadedFiles',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 390,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 390,
                    'char' => 44,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'filePath',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 390,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 390,
                  'char' => 55,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 390,
                'char' => 55,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'fileRet',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 391,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 392,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 394,
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
                  'variable' => 'rootPath',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'rootPath',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 395,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 395,
                  'char' => 30,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'loader',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'loader',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 396,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 396,
                  'char' => 26,
                ),
                2 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'config',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 397,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 397,
                  'char' => 26,
                ),
                3 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'application',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'application',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 398,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 398,
                  'char' => 36,
                ),
                4 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'bootstrap',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'bootstrap',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 399,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 399,
                  'char' => 32,
                ),
                5 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'di',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 400,
                    'char' => 18,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 400,
                  'char' => 18,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 402,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'dynamic-variable',
                  'operator' => 'assign',
                  'variable' => 'rootPath',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Sys',
                    'dynamic' => 0,
                    'name' => 'getRootDir',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 402,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 402,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 403,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'dynamic-variable',
                  'operator' => 'assign',
                  'variable' => 'loader',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Phalcon\\Loader',
                    'dynamic' => 0,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 403,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 403,
                  'char' => 45,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 404,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'dynamic-variable',
                  'operator' => 'assign',
                  'variable' => 'config',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 404,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'config',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 404,
                      'char' => 36,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 404,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 404,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 405,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'dynamic-variable',
                  'operator' => 'assign',
                  'variable' => 'application',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 405,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'application',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 405,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 405,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 405,
                  'char' => 46,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 406,
              'char' => 11,
            ),
            10 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'dynamic-variable',
                  'operator' => 'assign',
                  'variable' => 'bootstrap',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 406,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 406,
                  'char' => 31,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 407,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'dynamic-variable',
                  'operator' => 'assign',
                  'variable' => 'di',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 407,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 407,
                      'char' => 28,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 407,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 407,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 419,
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
                  'variable' => 'fileRet',
                  'expr' => 
                  array (
                    'type' => 'require',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'filePath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 419,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 419,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 419,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 420,
              'char' => 11,
            ),
            13 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'loadedFiles',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'filePath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                      'line' => 420,
                      'char' => 39,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'fileRet',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                    'line' => 420,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                  'line' => 420,
                  'char' => 50,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 421,
              'char' => 14,
            ),
            14 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'fileRet',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
                'line' => 421,
                'char' => 23,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
              'line' => 422,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
          'line' => 377,
          'last-line' => 423,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
      'line' => 6,
      'char' => 11,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Bootstrap.zep',
    'line' => 6,
    'char' => 11,
  ),
);