<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Mvc',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
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
        'name' => 'Phalcon\\Mvc\\Application',
        'alias' => 'BaseApplication',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
        'line' => 3,
        'char' => 47,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
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
        'name' => 'Psr\\Http\\Message\\ServerRequestInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
        'line' => 4,
        'char' => 44,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
    'line' => 5,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Psr\\Http\\Message\\ResponseInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
        'line' => 5,
        'char' => 39,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
    'line' => 6,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\DiInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
        'line' => 6,
        'char' => 24,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
    'line' => 7,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Psr\\Http\\Message\\UploadedFileInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
        'line' => 7,
        'char' => 43,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
    'line' => 8,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Http\\Cookie',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
        'line' => 8,
        'char' => 24,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
    'line' => 10,
    'char' => 5,
  ),
  7 => 
  array (
    'type' => 'class',
    'name' => 'PsrApplication',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'BaseApplication',
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
          'name' => 'psrRequest',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
            'line' => 12,
            'char' => 33,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 13,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 14,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
          'line' => 16,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'nativeRequest',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
            'line' => 16,
            'char' => 36,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 18,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
          'line' => 20,
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
              'name' => 'dependencyInjector',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'DiInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 20,
                'char' => 64,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 20,
                'char' => 72,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 20,
              'char' => 72,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'psrRequest',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ServerRequestInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 20,
                'char' => 108,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 20,
                'char' => 116,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 20,
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
                'class' => 'parent',
                'dynamic' => 0,
                'name' => '__construct',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'dependencyInjector',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 22,
                      'char' => 47,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 22,
                    'char' => 47,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 22,
                'char' => 48,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
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
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_sendHeaders',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 23,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 23,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 24,
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
                  'property' => '_sendCookies',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 24,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 24,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 25,
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
                  'property' => 'psrRequest',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'psrRequest',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 25,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 25,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 27,
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
                  'property' => 'nativeRequest',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\PhalconPlus\\Http\\PsrRequest',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'psrRequest',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 27,
                          'char' => 78,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 27,
                        'char' => 78,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 27,
                    'char' => 79,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 27,
                  'char' => 79,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 28,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
          'line' => 20,
          'last-line' => 30,
          'char' => 19,
        ),
        1 => 
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
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 32,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'nativeRequest',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 32,
                  'char' => 32,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 32,
                'char' => 32,
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 33,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'nativeRequest',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 33,
                        'char' => 33,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 33,
                      'char' => 33,
                    ),
                    'name' => 'removeTmpFiles',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 33,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 34,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 35,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
          'line' => 30,
          'last-line' => 37,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'handle',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'uri',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 37,
                'char' => 45,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 37,
              'char' => 45,
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
                  'variable' => 'psrRequest',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 39,
                  'char' => 23,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 41,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 41,
                    'char' => 23,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_dependencyInjector',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 41,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 41,
                  'char' => 44,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 41,
                'char' => 44,
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
                          'value' => 'there is no di(dependency injector) in PsrAppliction',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 42,
                          'char' => 103,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 42,
                        'char' => 103,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 42,
                    'char' => 104,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 43,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 45,
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
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 45,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'psrRequest',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 45,
                      'char' => 36,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 45,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 45,
                  'char' => 36,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 45,
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
                      'variable' => 'psrRequest',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 46,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'psrRequest',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 46,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 46,
                        'char' => 46,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 46,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 47,
                  'char' => 9,
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
                          'value' => 'request in PsrApplication must instance of \\\\Psr\\\\Http\\\\Message\\\\ServerRequestInterface',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 48,
                          'char' => 138,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 48,
                        'char' => 138,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 48,
                    'char' => 139,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 49,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 51,
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
                  'name' => 'class_exists',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => '\\\\GuzzleHttp\\\\Psr7\\\\Response',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 51,
                        'char' => 54,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 51,
                      'char' => 54,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 51,
                  'char' => 56,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 51,
                'char' => 56,
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
                          'value' => 'PsrApplication depends on GuzzleHttp\\\\Psr7\\\\Response',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 52,
                          'char' => 103,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 52,
                        'char' => 103,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 52,
                    'char' => 104,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 53,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 55,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 55,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_dependencyInjector',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 55,
                    'char' => 35,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 55,
                  'char' => 35,
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
                      'value' => 'request',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 55,
                      'char' => 53,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 55,
                    'char' => 53,
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 55,
                        'char' => 60,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'nativeRequest',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 55,
                        'char' => 74,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 55,
                      'char' => 74,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 55,
                    'char' => 74,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 55,
                'char' => 75,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 58,
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
                  'variable' => 'reqUri',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'psrRequest',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 58,
                        'char' => 33,
                      ),
                      'name' => 'getUri',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 58,
                      'char' => 43,
                    ),
                    'name' => 'getPath',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 58,
                    'char' => 53,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 58,
                  'char' => 53,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 60,
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
                  'variable' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 60,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 62,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 62,
                'char' => 19,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 63,
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
                  'variable' => 'response',
                  'expr' => 
                  array (
                    'type' => 'type-hint',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => '\\Phalcon\\Http\\Response',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 63,
                      'char' => 71,
                    ),
                    'right' => 
                    array (
                      'type' => 'scall',
                      'dynamic-class' => 0,
                      'class' => 'parent',
                      'dynamic' => 0,
                      'name' => 'handle',
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'reqUri',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 63,
                            'char' => 70,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 63,
                          'char' => 70,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 63,
                      'char' => 71,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 63,
                    'char' => 71,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 63,
                  'char' => 71,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 64,
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
                  'variable' => 'stdout',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ob_get_clean',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 64,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 64,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 66,
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
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 66,
                      'char' => 28,
                    ),
                    'name' => 'mapHeaders',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'response',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 66,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 66,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 66,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 66,
                  'char' => 49,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 67,
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
                  'variable' => 'status',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 67,
                      'char' => 31,
                    ),
                    'name' => 'getStatusCode',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 67,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 67,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 68,
              'char' => 11,
            ),
            12 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'reason',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'response',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 68,
                      'char' => 31,
                    ),
                    'name' => 'getReasonPhrase',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 68,
                    'char' => 49,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 68,
                  'char' => 49,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 70,
              'char' => 16,
            ),
            13 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_start',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 70,
                'char' => 19,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 71,
              'char' => 16,
            ),
            14 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 71,
                  'char' => 18,
                ),
                'name' => 'send',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 71,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 72,
              'char' => 11,
            ),
            15 => 
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 72,
                    'char' => 37,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 72,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 74,
              'char' => 10,
            ),
            16 => 
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
                    'value' => 'stdout',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 74,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 74,
                  'char' => 26,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 74,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'content',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'stdout',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 75,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 75,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 75,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 75,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 76,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 78,
              'char' => 11,
            ),
            17 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'psrResponse',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 78,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 79,
              'char' => 11,
            ),
            18 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'psrResponse',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\GuzzleHttp\\Psr7\\Response',
                    'dynamic' => 0,
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
                            'value' => 'status',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 63,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'status',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 70,
                          ),
                          'extra' => 
                          array (
                            'type' => 'int',
                            'value' => '200',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 74,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 79,
                          'char' => 74,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 79,
                        'char' => 74,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'headers',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 79,
                          'char' => 83,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 79,
                        'char' => 83,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 79,
                          'char' => 92,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 79,
                        'char' => 92,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'psrRequest',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 105,
                          ),
                          'name' => 'getProtocolVersion',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 79,
                          'char' => 126,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 79,
                        'char' => 126,
                      ),
                      4 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'ternary',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'reason',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 134,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'reason',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 141,
                          ),
                          'extra' => 
                          array (
                            'type' => 'string',
                            'value' => 'OK',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 79,
                            'char' => 144,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 79,
                          'char' => 144,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 79,
                        'char' => 144,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 79,
                    'char' => 145,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 79,
                  'char' => 145,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 81,
              'char' => 10,
            ),
            19 => 
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
                        'type' => 'variable',
                        'value' => 'headers',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 81,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'Content-Length',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 81,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 81,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 81,
                    'char' => 44,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 81,
                  'char' => 44,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 81,
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
                      'variable' => 'psrResponse',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'psrResponse',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 82,
                          'char' => 43,
                        ),
                        'name' => 'withAddedHeader',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'Content-Length',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 82,
                              'char' => 74,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 82,
                            'char' => 74,
                          ),
                          1 => 
                          array (
                            'parameter' => 
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
                                    'value' => 'content',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                    'line' => 82,
                                    'char' => 90,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 82,
                                  'char' => 90,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 82,
                              'char' => 91,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 82,
                            'char' => 91,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 82,
                        'char' => 92,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 82,
                      'char' => 92,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 83,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 85,
              'char' => 14,
            ),
            20 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'psrResponse',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 85,
                'char' => 27,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 86,
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
                  'value' => 'ResponseInterface',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 37,
                  'char' => 70,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 37,
                'char' => 70,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 38,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
            'line' => 38,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
          'line' => 37,
          'last-line' => 88,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'mapHeaders',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'response',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Http\\Response',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 88,
                'char' => 67,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 88,
              'char' => 68,
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
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'response',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 90,
                        'char' => 32,
                      ),
                      'name' => 'getHeaders',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 90,
                      'char' => 46,
                    ),
                    'name' => 'toArray',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 90,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 90,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 92,
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
                  'variable' => 'rawHeaders',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'headers_list',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 92,
                    'char' => 40,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 92,
                  'char' => 40,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 93,
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
                  'variable' => 'h',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 93,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'pos',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 93,
                  'char' => 19,
                ),
                2 => 
                array (
                  'variable' => 'nativeHeaders',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 93,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 93,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 94,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'rawHeaders',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 94,
                'char' => 29,
              ),
              'value' => 'h',
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
                              'value' => 'h',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 95,
                              'char' => 31,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 95,
                            'char' => 31,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => ':',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 95,
                              'char' => 34,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 95,
                            'char' => 34,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 95,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 95,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 96,
                  'char' => 14,
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 96,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'pos',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 96,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 96,
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
                          'variable' => 'name',
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
                                  'value' => 'h',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 97,
                                  'char' => 36,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 97,
                                'char' => 36,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'int',
                                  'value' => '0',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 97,
                                  'char' => 39,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 97,
                                'char' => 39,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'pos',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 97,
                                  'char' => 44,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 97,
                                'char' => 44,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 97,
                            'char' => 45,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 97,
                          'char' => 45,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 98,
                      'char' => 19,
                    ),
                    1 => 
                    array (
                      'type' => 'declare',
                      'data-type' => 'variable',
                      'variables' => 
                      array (
                        0 => 
                        array (
                          'variable' => 'value',
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
                                        'value' => 'h',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                        'line' => 98,
                                        'char' => 42,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                      'line' => 98,
                                      'char' => 42,
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
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                          'line' => 98,
                                          'char' => 48,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'int',
                                          'value' => '1',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                          'line' => 98,
                                          'char' => 51,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                        'line' => 98,
                                        'char' => 51,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                      'line' => 98,
                                      'char' => 51,
                                    ),
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 98,
                                  'char' => 52,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 98,
                                'char' => 52,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 98,
                            'char' => 53,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 98,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 99,
                      'char' => 18,
                    ),
                    2 => 
                    array (
                      'type' => 'if',
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
                              'type' => 'variable',
                              'value' => 'nativeHeaders',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 99,
                              'char' => 39,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'name',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 99,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 99,
                            'char' => 45,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 99,
                          'char' => 47,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 99,
                        'char' => 47,
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
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'nativeHeaders',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                      'line' => 100,
                                      'char' => 47,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'name',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                      'line' => 100,
                                      'char' => 52,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                    'line' => 100,
                                    'char' => 53,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 100,
                                  'char' => 53,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 100,
                              'char' => 55,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 100,
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
                                  'assign-type' => 'array-index',
                                  'operator' => 'assign',
                                  'variable' => 'nativeHeaders',
                                  'index-expr' => 
                                  array (
                                    0 => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'name',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                      'line' => 101,
                                      'char' => 47,
                                    ),
                                  ),
                                  'expr' => 
                                  array (
                                    'type' => 'array',
                                    'left' => 
                                    array (
                                      0 => 
                                      array (
                                        'value' => 
                                        array (
                                          'type' => 'array-access',
                                          'left' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'nativeHeaders',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                            'line' => 101,
                                            'char' => 65,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'name',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                            'line' => 101,
                                            'char' => 70,
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                          'line' => 101,
                                          'char' => 71,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                        'line' => 101,
                                        'char' => 71,
                                      ),
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                    'line' => 101,
                                    'char' => 72,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 101,
                                  'char' => 72,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 102,
                              'char' => 21,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 103,
                          'char' => 23,
                        ),
                        1 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'array-index-append',
                              'operator' => 'assign',
                              'variable' => 'nativeHeaders',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'name',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 103,
                                  'char' => 43,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 103,
                                'char' => 54,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 103,
                              'char' => 54,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 104,
                          'char' => 17,
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
                              'variable' => 'nativeHeaders',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'name',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 105,
                                  'char' => 43,
                                ),
                              ),
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 105,
                                'char' => 52,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 105,
                              'char' => 52,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 106,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 107,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 108,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 111,
              'char' => 21,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'header_remove',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 111,
                'char' => 24,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 112,
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
                  'variable' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_merge',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'nativeHeaders',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 112,
                          'char' => 48,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 112,
                        'char' => 48,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'headers',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 112,
                          'char' => 57,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 112,
                        'char' => 57,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 112,
                    'char' => 58,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 112,
                  'char' => 58,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 114,
              'char' => 10,
            ),
            6 => 
            array (
              'type' => 'if',
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
                      'type' => 'variable',
                      'value' => 'nativeHeaders',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 114,
                      'char' => 31,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'Set-Cookie',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 114,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                    'line' => 114,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 114,
                  'char' => 45,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 114,
                'char' => 45,
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
                      'variable' => 'headers',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'Set-Cookie',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 115,
                          'char' => 35,
                        ),
                      ),
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
                                  'value' => 'nativeHeaders',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 115,
                                  'char' => 61,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Set-Cookie',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 115,
                                  'char' => 72,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 115,
                                'char' => 73,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 115,
                              'char' => 73,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 115,
                          'char' => 74,
                        ),
                        'right' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'nativeHeaders',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 115,
                            'char' => 88,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'Set-Cookie',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                            'line' => 115,
                            'char' => 99,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 115,
                          'char' => 100,
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
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'nativeHeaders',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 115,
                                  'char' => 115,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Set-Cookie',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                  'line' => 115,
                                  'char' => 126,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                                'line' => 115,
                                'char' => 127,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                              'line' => 115,
                              'char' => 127,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 115,
                          'char' => 128,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 115,
                        'char' => 128,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 115,
                      'char' => 128,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'headers',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'Set-Cookie',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                          'line' => 117,
                          'char' => 35,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                        'line' => 117,
                        'char' => 41,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                      'line' => 117,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                  'line' => 118,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 119,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'headers',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
                'line' => 119,
                'char' => 23,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
              'line' => 120,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
          'line' => 88,
          'last-line' => 121,
          'char' => 22,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
      'line' => 10,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Mvc/PsrApplication.zep',
    'line' => 10,
    'char' => 5,
  ),
);