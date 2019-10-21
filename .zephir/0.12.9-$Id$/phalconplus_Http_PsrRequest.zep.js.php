<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Http',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 4,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Http\\Request',
        'alias' => 'BaseRequest',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 4,
        'char' => 40,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 5,
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
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 5,
        'char' => 44,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 6,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Psr\\Http\\Message\\UploadedFileInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 6,
        'char' => 43,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 8,
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
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 8,
        'char' => 24,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 9,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\FilterInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 9,
        'char' => 28,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 10,
    'char' => 3,
  ),
  6 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Http\\Request\\File',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 10,
        'char' => 30,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 11,
    'char' => 3,
  ),
  7 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Http\\Request\\Exception',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 11,
        'char' => 35,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 12,
    'char' => 3,
  ),
  8 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Events\\ManagerInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 12,
        'char' => 36,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 13,
    'char' => 3,
  ),
  9 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Phalcon\\Di\\InjectionAwareInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
        'line' => 13,
        'char' => 39,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 15,
    'char' => 5,
  ),
  10 => 
  array (
    'type' => 'class',
    'name' => 'PsrRequest',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'BaseRequest',
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
          'name' => 'attributes',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 17,
            'char' => 31,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 19,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 20,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'cookies',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 20,
            'char' => 28,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 22,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 23,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'headers',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 23,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 24,
          'char' => 13,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'files',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 24,
            'char' => 26,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 26,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 27,
          'char' => 13,
        ),
        4 => 
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
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 27,
            'char' => 33,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 29,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 31,
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
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ServerRequestInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 31,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 31,
              'char' => 65,
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
                  'property' => 'attributes',
                  'expr' => 
                  array (
                    'type' => 'short-ternary',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 33,
                        'char' => 40,
                      ),
                      'name' => 'getAttributes',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 33,
                      'char' => 57,
                    ),
                    'extra' => 
                    array (
                      'type' => 'empty-array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 33,
                      'char' => 62,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 33,
                    'char' => 62,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 33,
                  'char' => 62,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 34,
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
                  'property' => 'cookies',
                  'expr' => 
                  array (
                    'type' => 'short-ternary',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 34,
                        'char' => 37,
                      ),
                      'name' => 'getCookieParams',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 34,
                      'char' => 56,
                    ),
                    'extra' => 
                    array (
                      'type' => 'empty-array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 34,
                      'char' => 61,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 34,
                    'char' => 61,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 34,
                  'char' => 61,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 35,
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
                  'property' => 'headers',
                  'expr' => 
                  array (
                    'type' => 'short-ternary',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 35,
                        'char' => 37,
                      ),
                      'name' => 'getHeaders',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 35,
                      'char' => 51,
                    ),
                    'extra' => 
                    array (
                      'type' => 'empty-array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 35,
                      'char' => 56,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 35,
                    'char' => 56,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 35,
                  'char' => 56,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 36,
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
                  'property' => '_rawBody',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 36,
                        'char' => 38,
                      ),
                      'name' => 'getBody',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 36,
                      'char' => 49,
                    ),
                    'name' => '__toString',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 36,
                    'char' => 62,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 36,
                  'char' => 62,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 38,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => '_SERVER',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'REQUEST_URI',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 38,
                      'char' => 32,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'self',
                    'dynamic' => 0,
                    'name' => 'getRequestTarget',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 38,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 38,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 38,
                    'char' => 67,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 38,
                  'char' => 67,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 39,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => '_SERVER',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'REQUEST_METHOD',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 39,
                      'char' => 35,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 39,
                      'char' => 47,
                    ),
                    'name' => 'getMethod',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 39,
                    'char' => 59,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 39,
                  'char' => 59,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 41,
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
                  'variable' => 'posts',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 41,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'gets',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 41,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'cookies',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 41,
                  'char' => 33,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 42,
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
                  'variable' => 'posts',
                  'expr' => 
                  array (
                    'type' => 'short-ternary',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 42,
                        'char' => 29,
                      ),
                      'name' => 'getParsedBody',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 42,
                      'char' => 46,
                    ),
                    'extra' => 
                    array (
                      'type' => 'empty-array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 42,
                      'char' => 51,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 42,
                    'char' => 51,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 42,
                  'char' => 51,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 43,
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
                  'variable' => 'gets',
                  'expr' => 
                  array (
                    'type' => 'short-ternary',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 43,
                        'char' => 29,
                      ),
                      'name' => 'getQueryParams',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 43,
                      'char' => 47,
                    ),
                    'extra' => 
                    array (
                      'type' => 'empty-array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 43,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 43,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 43,
                  'char' => 52,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 44,
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
                  'variable' => 'cookies',
                  'expr' => 
                  array (
                    'type' => 'short-ternary',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 44,
                        'char' => 31,
                      ),
                      'name' => 'getCookieParams',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 44,
                      'char' => 50,
                    ),
                    'extra' => 
                    array (
                      'type' => 'empty-array',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 44,
                      'char' => 55,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 44,
                    'char' => 55,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 44,
                  'char' => 55,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 46,
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
                  'variable' => 'k',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 46,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'v',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 46,
                  'char' => 17,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 48,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'posts',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 48,
                'char' => 28,
              ),
              'key' => 'k',
              'value' => 'v',
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_POST',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'k',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 49,
                          'char' => 24,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'v',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 49,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 49,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 50,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 52,
              'char' => 11,
            ),
            12 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'gets',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 52,
                'char' => 26,
              ),
              'key' => 'k',
              'value' => 'v',
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_GET',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'k',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 53,
                          'char' => 23,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'v',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 53,
                        'char' => 28,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 53,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 54,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 55,
              'char' => 11,
            ),
            13 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => '_GET',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => '_url',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 55,
                      'char' => 22,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 55,
                        'char' => 34,
                      ),
                      'name' => 'getUri',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 55,
                      'char' => 44,
                    ),
                    'name' => 'getPath',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 55,
                    'char' => 54,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 55,
                  'char' => 54,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 57,
              'char' => 11,
            ),
            14 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'request',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 57,
                  'char' => 29,
                ),
                'name' => 'getServerParams',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 57,
                'char' => 48,
              ),
              'key' => 'k',
              'value' => 'v',
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_SERVER',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'k',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 58,
                          'char' => 26,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'v',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 58,
                        'char' => 31,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 58,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 59,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 60,
              'char' => 11,
            ),
            15 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 60,
                  'char' => 26,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'headers',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 60,
                  'char' => 35,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 60,
                'char' => 35,
              ),
              'key' => 'k',
              'value' => 'v',
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
                      'variable' => 'k',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'strtoupper',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
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
                                    'type' => 'string',
                                    'value' => '-',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 61,
                                    'char' => 45,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 61,
                                  'char' => 45,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '_',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 61,
                                    'char' => 48,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 61,
                                  'char' => 48,
                                ),
                                2 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'k',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 61,
                                    'char' => 51,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 61,
                                  'char' => 51,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 61,
                              'char' => 52,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 61,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 61,
                        'char' => 53,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 61,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 62,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_SERVER',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => 'HTTP_',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 62,
                            'char' => 30,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'k',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 62,
                            'char' => 32,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 62,
                          'char' => 32,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'v',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 62,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 62,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 63,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 64,
              'char' => 11,
            ),
            16 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => '_SERVER',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'REQUEST_URI',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 64,
                      'char' => 32,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'scall',
                    'dynamic-class' => 0,
                    'class' => 'self',
                    'dynamic' => 0,
                    'name' => 'getRequestTarget',
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'request',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 64,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 64,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 64,
                    'char' => 67,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 64,
                  'char' => 67,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 66,
              'char' => 11,
            ),
            17 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'cookies',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 66,
                'char' => 29,
              ),
              'key' => 'k',
              'value' => 'v',
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_COOKIE',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'k',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 67,
                          'char' => 26,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'v',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 67,
                        'char' => 31,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 67,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 68,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 70,
              'char' => 10,
            ),
            18 => 
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 70,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cookies',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 70,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 70,
                    'char' => 33,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 70,
                  'char' => 33,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 70,
                'char' => 33,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 71,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cookies',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 71,
                          'char' => 35,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 71,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'session_name',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 71,
                        'char' => 50,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 71,
                      'char' => 52,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 71,
                    'char' => 52,
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
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 72,
                                  'char' => 33,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'cookies',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 72,
                                  'char' => 41,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 72,
                                'char' => 41,
                              ),
                              'right' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'session_name',
                                'call-type' => 1,
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 72,
                                'char' => 56,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 72,
                              'char' => 57,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 72,
                            'char' => 57,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 72,
                        'char' => 58,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 73,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 74,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 75,
              'char' => 12,
            ),
            19 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 75,
                  'char' => 14,
                ),
                'name' => 'mapFiles',
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
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 75,
                        'char' => 32,
                      ),
                      'name' => 'getUploadedFiles',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 75,
                      'char' => 51,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 75,
                    'char' => 51,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 75,
                'char' => 52,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 76,
              'char' => 11,
            ),
            20 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 76,
                  'char' => 19,
                ),
                1 => 
                array (
                  'variable' => 'input',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 76,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 77,
              'char' => 11,
            ),
            21 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 77,
                  'char' => 35,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'files',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 77,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 77,
                'char' => 42,
              ),
              'key' => 'prefix',
              'value' => 'input',
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => '_FILES',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefix',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 78,
                          'char' => 30,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'input',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 78,
                        'char' => 39,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 78,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 79,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 81,
              'char' => 11,
            ),
            22 => 
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
                    'value' => 'request',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 81,
                    'char' => 39,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 81,
                  'char' => 39,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 82,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 31,
          'last-line' => 84,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'getRequestTarget',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ServerRequestInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 84,
                'char' => 79,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 84,
              'char' => 80,
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
                  'variable' => 'target',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 86,
                        'char' => 30,
                      ),
                      'name' => 'getUri',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 86,
                      'char' => 40,
                    ),
                    'name' => 'getPath',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 86,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 86,
                  'char' => 50,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 87,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'target',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 87,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 87,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 87,
                  'char' => 23,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 87,
                'char' => 25,
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
                      'variable' => 'target',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '/',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 88,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 88,
                      'char' => 27,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 89,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 90,
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
                  'type' => 'not-equals',
                  'left' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 90,
                        'char' => 21,
                      ),
                      'name' => 'getUri',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 90,
                      'char' => 31,
                    ),
                    'name' => 'getQuery',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 90,
                    'char' => 44,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 90,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 90,
                  'char' => 46,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 90,
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
                      'operator' => 'concat-assign',
                      'variable' => 'target',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => '?',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 91,
                          'char' => 28,
                        ),
                        'right' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'request',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 91,
                              'char' => 38,
                            ),
                            'name' => 'getUri',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 91,
                            'char' => 48,
                          ),
                          'name' => 'getQuery',
                          'call-type' => 1,
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 91,
                          'char' => 59,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 91,
                        'char' => 59,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 91,
                      'char' => 59,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 92,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 93,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'target',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 93,
                'char' => 22,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 94,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 84,
          'last-line' => 96,
          'char' => 29,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'mapFiles',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'uploads',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 96,
              'char' => 44,
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
                  'variable' => 'file',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 98,
                  'char' => 17,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 99,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'uploads',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 99,
                'char' => 29,
              ),
              'value' => 'file',
              'reverse' => 0,
              'statements' => 
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
                          'value' => 'file',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 100,
                          'char' => 29,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 100,
                        'char' => 29,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 100,
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 101,
                          'char' => 22,
                        ),
                        'name' => 'mapFiles',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'file',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 101,
                              'char' => 36,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 101,
                            'char' => 36,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 101,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 102,
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
                        'type' => 'instanceof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'file',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 102,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'UploadedFileInterface',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 102,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 102,
                        'char' => 60,
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
                              'variable' => 'tmpname',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 103,
                              'char' => 28,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 104,
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
                              'variable' => 'tmpname',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'tempnam',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'fcall',
                                      'name' => 'sys_get_temp_dir',
                                      'call-type' => 1,
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 104,
                                      'char' => 57,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 104,
                                    'char' => 57,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'upload',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 104,
                                      'char' => 65,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 104,
                                    'char' => 65,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 104,
                                'char' => 66,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 104,
                              'char' => 66,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 106,
                          'char' => 18,
                        ),
                        2 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'list',
                            'left' => 
                            array (
                              'type' => 'equals',
                              'left' => 
                              array (
                                'type' => 'constant',
                                'value' => 'UPLOAD_ERR_OK',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 106,
                                'char' => 36,
                              ),
                              'right' => 
                              array (
                                'type' => 'mcall',
                                'variable' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'file',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 106,
                                  'char' => 43,
                                ),
                                'name' => 'getError',
                                'call-type' => 1,
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 106,
                                'char' => 54,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 106,
                              'char' => 54,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 106,
                            'char' => 56,
                          ),
                          'statements' => 
                          array (
                            0 => 
                            array (
                              'type' => 'fcall',
                              'expr' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'file_put_contents',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'tmpname',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 107,
                                      'char' => 46,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 107,
                                    'char' => 46,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'cast',
                                      'left' => 'string',
                                      'right' => 
                                      array (
                                        'type' => 'mcall',
                                        'variable' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'file',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                          'line' => 107,
                                          'char' => 62,
                                        ),
                                        'name' => 'getStream',
                                        'call-type' => 1,
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                        'line' => 107,
                                        'char' => 74,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 107,
                                      'char' => 74,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 107,
                                    'char' => 74,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 107,
                                'char' => 75,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 108,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 110,
                          'char' => 19,
                        ),
                        3 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'object-property-append',
                              'operator' => 'assign',
                              'variable' => 'this',
                              'property' => 'files',
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
                                      'value' => 'error',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 111,
                                      'char' => 30,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'file',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                        'line' => 111,
                                        'char' => 37,
                                      ),
                                      'name' => 'getError',
                                      'call-type' => 1,
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 111,
                                      'char' => 48,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 111,
                                    'char' => 48,
                                  ),
                                  1 => 
                                  array (
                                    'key' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'name',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 112,
                                      'char' => 30,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'file',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                        'line' => 112,
                                        'char' => 37,
                                      ),
                                      'name' => 'getClientFilename',
                                      'call-type' => 1,
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 112,
                                      'char' => 57,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 112,
                                    'char' => 57,
                                  ),
                                  2 => 
                                  array (
                                    'key' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'size',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 113,
                                      'char' => 30,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'file',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                        'line' => 113,
                                        'char' => 37,
                                      ),
                                      'name' => 'getSize',
                                      'call-type' => 1,
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 113,
                                      'char' => 47,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 113,
                                    'char' => 47,
                                  ),
                                  3 => 
                                  array (
                                    'key' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'tmp_name',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 114,
                                      'char' => 30,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'tmpname',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 114,
                                      'char' => 39,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 114,
                                    'char' => 39,
                                  ),
                                  4 => 
                                  array (
                                    'key' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'type',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 115,
                                      'char' => 30,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'file',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                        'line' => 115,
                                        'char' => 37,
                                      ),
                                      'name' => 'getClientMediaType',
                                      'call-type' => 1,
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                      'line' => 116,
                                      'char' => 17,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                    'line' => 116,
                                    'char' => 17,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 116,
                                'char' => 18,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 116,
                              'char' => 18,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 117,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 118,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 118,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 119,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 96,
          'last-line' => 121,
          'char' => 20,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'removeTmpFiles',
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
                  'variable' => 'item',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 123,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'tmp',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 123,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 124,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 124,
                  'char' => 26,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'files',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 124,
                  'char' => 33,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 124,
                'char' => 33,
              ),
              'value' => 'item',
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
                      'value' => 'tmp',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 125,
                      'char' => 42,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'item',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 125,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'tmp_name',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 125,
                        'char' => 40,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 125,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 125,
                    'char' => 42,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'file_exists',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'tmp',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 126,
                              'char' => 35,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 126,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 126,
                        'char' => 37,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'fcall',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'unlink',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'tmp',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                  'line' => 127,
                                  'char' => 31,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                                'line' => 127,
                                'char' => 31,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 127,
                            'char' => 32,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 128,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 129,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 130,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 131,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 121,
          'last-line' => 133,
          'char' => 19,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getScheme',
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
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 135,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'psrRequest',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 135,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 135,
                    'char' => 33,
                  ),
                  'name' => 'getUri',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 135,
                  'char' => 43,
                ),
                'name' => 'getScheme',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 135,
                'char' => 55,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 136,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 134,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 134,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 133,
          'last-line' => 140,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isAjax',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'and',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 143,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'headers',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 143,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 143,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'HTTP_X_REQUESTED_WITH',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 143,
                      'char' => 57,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 143,
                    'char' => 60,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 143,
                  'char' => 60,
                ),
                'right' => 
                array (
                  'type' => 'identical',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 143,
                        'char' => 67,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'headers',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 143,
                        'char' => 75,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 143,
                      'char' => 75,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'HTTP_X_REQUESTED_WITH',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 143,
                      'char' => 97,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 143,
                    'char' => 101,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'XMLHttpRequest',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 143,
                    'char' => 117,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 143,
                  'char' => 117,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 143,
                'char' => 117,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 144,
              'char' => 5,
            ),
          ),
          'docblock' => '**
    * Checks whether request has been made using ajax
    *',
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 142,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 142,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 141,
          'last-line' => 148,
          'char' => 19,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isSoap',
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
                  'variable' => 'contentType',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 151,
                  'char' => 24,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 152,
              'char' => 10,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 152,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'headers',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 152,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 152,
                    'char' => 31,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'HTTP_SOAPACTION',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 152,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 152,
                  'char' => 49,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 152,
                'char' => 49,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 153,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 154,
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
                      'variable' => 'contentType',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                          'line' => 155,
                          'char' => 36,
                        ),
                        'name' => 'getContentType',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 155,
                        'char' => 53,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 155,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 156,
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
                        'value' => 'contentType',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 156,
                        'char' => 35,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 156,
                      'char' => 35,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 156,
                    'char' => 35,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'memstr',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'contentType',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 157,
                              'char' => 42,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 157,
                            'char' => 42,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'application/soap+xml',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                              'line' => 157,
                              'char' => 64,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                            'line' => 157,
                            'char' => 64,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                        'line' => 157,
                        'char' => 65,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 158,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 159,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 160,
              'char' => 14,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 160,
                'char' => 21,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 161,
              'char' => 5,
            ),
          ),
          'docblock' => '**
    * Checks whether request has been made using SOAP
    *',
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 150,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 150,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 149,
          'last-line' => 164,
          'char' => 19,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getHttpHost',
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
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 166,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'psrRequest',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 166,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 166,
                    'char' => 33,
                  ),
                  'name' => 'getUri',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 166,
                  'char' => 43,
                ),
                'name' => 'getHost',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 166,
                'char' => 53,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 167,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 165,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 165,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 164,
          'last-line' => 169,
          'char' => 19,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getPort',
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
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 171,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'psrRequest',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 171,
                      'char' => 33,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 171,
                    'char' => 33,
                  ),
                  'name' => 'getUri',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 171,
                  'char' => 43,
                ),
                'name' => 'getPort',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 171,
                'char' => 53,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 172,
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
                'data-type' => 'int',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 170,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 170,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 169,
          'last-line' => 174,
          'char' => 19,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getHeaders',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 176,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'headers',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 176,
                  'char' => 29,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 176,
                'char' => 29,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 177,
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
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 175,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 175,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 174,
          'last-line' => 179,
          'char' => 19,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getContentType',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 181,
                    'char' => 18,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'psrRequest',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 181,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                  'line' => 181,
                  'char' => 30,
                ),
                'name' => 'getHeaderLine',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'Content-Type',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                      'line' => 181,
                      'char' => 57,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                    'line' => 181,
                    'char' => 57,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 181,
                'char' => 58,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
              'line' => 182,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 179,
                'char' => 48,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
                'line' => 180,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
            'line' => 180,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
          'line' => 179,
          'last-line' => 184,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
      'line' => 15,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Http/PsrRequest.zep',
    'line' => 15,
    'char' => 5,
  ),
);