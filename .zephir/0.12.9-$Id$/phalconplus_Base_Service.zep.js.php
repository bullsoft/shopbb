<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Service',
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
          'name' => 'di',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
            'line' => 8,
            'char' => 24,
          ),
          'docblock' => '**
     * @var <\\Phalcon\\DI>
     *',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
          'line' => 10,
          'char' => 9,
        ),
      ),
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 10,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 10,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                    'line' => 12,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 12,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 13,
              'char' => 16,
            ),
            1 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_start',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 13,
                'char' => 19,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 14,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 14,
                  'char' => 14,
                ),
                'name' => 'onConstruct',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 14,
                'char' => 28,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 15,
              'char' => 20,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'ob_end_clean',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 15,
                'char' => 23,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 16,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
          'line' => 10,
          'last-line' => 18,
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
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
          'line' => 18,
          'last-line' => 20,
          'char' => 22,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'getDI',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 22,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'di',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 22,
                  'char' => 24,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 22,
                'char' => 24,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 23,
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
                  'value' => '\\Phalcon\\DI',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 21,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 21,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
            'line' => 21,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
          'line' => 20,
          'last-line' => 25,
          'char' => 22,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => '__get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 25,
              'char' => 41,
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
                'name' => 'property_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                      'line' => 27,
                      'char' => 32,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                    'line' => 27,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                      'line' => 27,
                      'char' => 37,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                    'line' => 27,
                    'char' => 37,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                'line' => 27,
                'char' => 39,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'property-dynamic-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                      'line' => 28,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                      'line' => 28,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                    'line' => 28,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 29,
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
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                        'line' => 30,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'di',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                        'line' => 30,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                      'line' => 30,
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
                          'value' => 'key',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                          'line' => 30,
                          'char' => 37,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                        'line' => 30,
                        'char' => 37,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                    'line' => 30,
                    'char' => 38,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
                  'line' => 31,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
              'line' => 32,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
          'line' => 25,
          'last-line' => 33,
          'char' => 22,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/Service.zep',
    'line' => 3,
    'char' => 5,
  ),
);