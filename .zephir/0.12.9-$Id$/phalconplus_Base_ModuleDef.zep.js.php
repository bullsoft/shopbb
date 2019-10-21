<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
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
        'name' => 'PhalconPlus\\Bootstrap',
        'alias' => 'Bs',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
        'line' => 3,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
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
        'name' => 'PhalconPlus\\Enum\\Sys',
        'alias' => 'Sys',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
        'line' => 4,
        'char' => 32,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
    'line' => 23,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'ModuleDef',
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
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'classPath',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 25,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 26,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'className',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 26,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 27,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'name',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 27,
            'char' => 22,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 28,
          'char' => 13,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'configPath',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 28,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 29,
          'char' => 13,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'dir',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 29,
            'char' => 21,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 31,
          'char' => 13,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'property',
          'name' => 'loadedClasses',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 31,
            'char' => 40,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 34,
          'char' => 13,
        ),
        6 => 
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
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 34,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 36,
          'char' => 13,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'runMode',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 36,
            'char' => 29,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 38,
          'char' => 13,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'bootstrap',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 38,
            'char' => 31,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 41,
          'char' => 13,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'isPrimary',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 41,
            'char' => 32,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 43,
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
              'name' => 'boot',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PhalconPlus\\Bootstrap',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 43,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 43,
              'char' => 62,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'moduleDir',
              'const' => 1,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 43,
              'char' => 87,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'isPrimary',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 43,
                'char' => 114,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 43,
              'char' => 114,
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 45,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 45,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 45,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 45,
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
                            'value' => 'Module directory not exists or not a dir, file positon: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 46,
                            'char' => 91,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'moduleDir',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 46,
                            'char' => 102,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 46,
                          'char' => 102,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 46,
                        'char' => 102,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 46,
                    'char' => 103,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 47,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 48,
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
                  'property' => 'dir',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'moduleDir',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 48,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 48,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 50,
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
                  'property' => 'configPath',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Sys',
                    'dynamic' => 0,
                    'name' => 'getModuleConfigPath',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDir',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 50,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 50,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 50,
                    'char' => 67,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 50,
                  'char' => 67,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 53,
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
                            'value' => 'boot',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 53,
                            'char' => 53,
                          ),
                          'name' => 'load',
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
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                  'line' => 53,
                                  'char' => 64,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'configPath',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                  'line' => 53,
                                  'char' => 75,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                'line' => 53,
                                'char' => 75,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                              'line' => 53,
                              'char' => 75,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 53,
                          'char' => 76,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 53,
                        'char' => 76,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 53,
                    'char' => 77,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 53,
                  'char' => 77,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 54,
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 54,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 54,
                        'char' => 31,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 54,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'application',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 54,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 54,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 54,
                  'char' => 45,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 54,
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
                    'class' => '\\PhalconPlus\\Base\\Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Config Path: /application must exists',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 55,
                          'char' => 88,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 55,
                        'char' => 88,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 55,
                    'char' => 89,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 56,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 57,
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
                  'variable' => 'appConfig',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 57,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'config',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 57,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 57,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'application',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 57,
                      'char' => 50,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 57,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 57,
                  'char' => 50,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 59,
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
                  'property' => 'name',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'appConfig',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 59,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 59,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 59,
                    'char' => 41,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 59,
                  'char' => 41,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 60,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'runMode',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\PhalconPlus\\Enum\\RunMode',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'ucfirst',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'strtolower',
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
                                        'value' => 'appConfig',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                        'line' => 60,
                                        'char' => 88,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'mode',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                        'line' => 60,
                                        'char' => 93,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                      'line' => 60,
                                      'char' => 93,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                    'line' => 60,
                                    'char' => 93,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                                'line' => 60,
                                'char' => 94,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                              'line' => 60,
                              'char' => 94,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 60,
                          'char' => 95,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 60,
                        'char' => 95,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 60,
                    'char' => 96,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 60,
                  'char' => 96,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 62,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'className',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'appConfig',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 62,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ns',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 62,
                        'char' => 45,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 62,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 62,
                          'char' => 52,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'runMode',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 62,
                          'char' => 61,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 62,
                        'char' => 61,
                      ),
                      'name' => 'getMapClassName',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 62,
                      'char' => 79,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 62,
                    'char' => 79,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 62,
                  'char' => 79,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 64,
              'char' => 11,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => 'classPath',
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'Sys',
                    'dynamic' => 0,
                    'name' => 'getModuleClassPath',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'moduleDir',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 64,
                          'char' => 64,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 64,
                        'char' => 64,
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 64,
                            'char' => 71,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'runMode',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 64,
                            'char' => 79,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 64,
                          'char' => 79,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 64,
                        'char' => 79,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 64,
                    'char' => 80,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 64,
                  'char' => 80,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 66,
              'char' => 10,
            ),
            10 => 
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 66,
                          'char' => 26,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'classPath',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 66,
                          'char' => 36,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 66,
                        'char' => 36,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 66,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 66,
                  'char' => 38,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 66,
                'char' => 38,
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
                            'value' => 'Module class file not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 67,
                            'char' => 65,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                              'line' => 67,
                              'char' => 72,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'classPath',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                              'line' => 67,
                              'char' => 82,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 67,
                            'char' => 82,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 67,
                          'char' => 82,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 67,
                        'char' => 82,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 67,
                    'char' => 83,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 68,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 69,
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
                  'property' => 'bootstrap',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'boot',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 69,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 69,
                  'char' => 35,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 70,
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
                  'property' => 'isPrimary',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'isPrimary',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 70,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 70,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 71,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 43,
          'last-line' => 73,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'impl',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'di',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Di',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 73,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 73,
              'char' => 42,
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
                        'type' => 'static-property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 75,
                          'char' => 38,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'loadedClasses',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 75,
                          'char' => 38,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 75,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 75,
                          'char' => 44,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'className',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 75,
                          'char' => 54,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 75,
                        'char' => 54,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 75,
                      'char' => 55,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 75,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 75,
                  'char' => 57,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 75,
                'char' => 57,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'require',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 76,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'classPath',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 76,
                      'char' => 36,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 76,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 77,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 78,
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
                  'name' => 'class_exists',
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 78,
                          'char' => 31,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'className',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 78,
                          'char' => 41,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 78,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 78,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 78,
                  'char' => 43,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 78,
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
                            'value' => 'Module class not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 79,
                            'char' => 59,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                              'line' => 79,
                              'char' => 66,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'className',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                              'line' => 79,
                              'char' => 76,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                            'line' => 79,
                            'char' => 76,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                          'line' => 79,
                          'char' => 76,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 79,
                        'char' => 76,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 79,
                    'char' => 77,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 80,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 81,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'static-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'self',
                  'property' => 'loadedClasses',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 81,
                        'char' => 38,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'className',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                        'line' => 81,
                        'char' => 48,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 81,
                      'char' => 48,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 81,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 81,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 82,
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
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 82,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'className',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 82,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 82,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 82,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 83,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'new',
                'class' => 'className',
                'dynamic' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 83,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 83,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                      'line' => 83,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 83,
                    'char' => 40,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 83,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 84,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 74,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 74,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 74,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 73,
          'last-line' => 86,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getIsPrimary',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 88,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'isPrimary',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 88,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 88,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 89,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 86,
          'last-line' => 91,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getClassPath',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 93,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'classPath',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 93,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 93,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 94,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 92,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 92,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 91,
          'last-line' => 96,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getBootstrap',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 98,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'bootstrap',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 98,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 98,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 99,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 97,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 97,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 97,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 96,
          'last-line' => 101,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getClassName',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 103,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'className',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 103,
                  'char' => 31,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 103,
                'char' => 31,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 104,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 102,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 102,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 101,
          'last-line' => 106,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getRunMode',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 108,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'runMode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 108,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 108,
                'char' => 29,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 109,
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
                  'value' => '\\PhalconPlus\\Enum\\RunMode',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 107,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 107,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 107,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 106,
          'last-line' => 111,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getMapClassName',
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 113,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'runMode',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 113,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 113,
                  'char' => 30,
                ),
                'name' => 'getMapClassName',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 113,
                'char' => 48,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 114,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 112,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 112,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 111,
          'last-line' => 116,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getMode',
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 118,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'runMode',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                    'line' => 118,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 118,
                  'char' => 30,
                ),
                'name' => 'getValue',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 118,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 119,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 117,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 117,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 116,
          'last-line' => 121,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getName',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 123,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'name',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 123,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 123,
                'char' => 26,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 124,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 122,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 122,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 121,
          'last-line' => 126,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getConfigPath',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 128,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'configPath',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 128,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 128,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 127,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 127,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 126,
          'last-line' => 131,
          'char' => 19,
        ),
        11 => 
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 133,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'config',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 133,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 133,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 134,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 132,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 132,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 132,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 131,
          'last-line' => 136,
          'char' => 19,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getDir',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 138,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'dir',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                  'line' => 138,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 138,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
              'line' => 139,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
                'line' => 137,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
            'line' => 137,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
          'line' => 136,
          'last-line' => 140,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
      'line' => 23,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/ModuleDef.zep',
    'line' => 23,
    'char' => 5,
  ),
);