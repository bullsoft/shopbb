<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Rpc\\Server',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
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
        'name' => 'PhalconPlus\\Rpc\\Server\\AbstractServer',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
        'line' => 2,
        'char' => 42,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'SimpleServer',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractServer',
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'final',
            1 => 'public',
          ),
          'type' => 'method',
          'name' => '__construct',
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
                'value' => '\\Phalcon\\DI',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                'line' => 6,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 6,
              'char' => 55,
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
                  'property' => 'di',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'di',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                    'line' => 8,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                  'line' => 8,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 9,
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
                  'property' => 'eventsManager',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                      'line' => 9,
                      'char' => 38,
                    ),
                    'name' => 'getShared',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'eventsManager',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                          'line' => 9,
                          'char' => 62,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                        'line' => 9,
                        'char' => 62,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                    'line' => 9,
                    'char' => 63,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                  'line' => 9,
                  'char' => 63,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 11,
              'char' => 16,
            ),
            2 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_start',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                'line' => 11,
                'char' => 19,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 12,
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
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                  'line' => 12,
                  'char' => 14,
                ),
                'name' => 'onConstruct',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                'line' => 12,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 13,
              'char' => 20,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_end_clean',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                'line' => 13,
                'char' => 23,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 14,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
          'line' => 6,
          'last-line' => 16,
          'char' => 25,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'onConstruct',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
          'line' => 16,
          'last-line' => 21,
          'char' => 22,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'property',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 21,
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
                'type' => 'list',
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                      'line' => 23,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                      'line' => 23,
                      'char' => 21,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                    'line' => 23,
                    'char' => 21,
                  ),
                  'name' => 'has',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'property',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                        'line' => 23,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                      'line' => 23,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                  'line' => 23,
                  'char' => 35,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                'line' => 23,
                'char' => 37,
              ),
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                        'line' => 24,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                        'line' => 24,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                      'line' => 24,
                      'char' => 29,
                    ),
                    'name' => 'get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'property',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                          'line' => 24,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                        'line' => 24,
                        'char' => 42,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                    'line' => 24,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                  'line' => 25,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 26,
              'char' => 14,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
                'line' => 26,
                'char' => 20,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
              'line' => 27,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
          'line' => 21,
          'last-line' => 28,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Server/SimpleServer.zep',
    'line' => 4,
    'char' => 5,
  ),
);