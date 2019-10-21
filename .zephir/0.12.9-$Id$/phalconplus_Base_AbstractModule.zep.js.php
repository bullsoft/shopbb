<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Base',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
    'line' => 4,
    'char' => 8,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'AbstractModule',
    'abstract' => 1,
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
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
            'line' => 7,
            'char' => 24,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 10,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'def',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
            'line' => 10,
            'char' => 25,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 12,
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
              'name' => 'di',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\DI',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 12,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 12,
              'char' => 49,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'def',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\PhalconPlus\\Base\\ModuleDef',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 12,
                'char' => 83,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 12,
                'char' => 91,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 12,
              'char' => 91,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                    'line' => 14,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 14,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 15,
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
                  'property' => 'def',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'def',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                    'line' => 15,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 15,
                  'char' => 28,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 16,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 12,
          'last-line' => 18,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getDef',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 20,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'def',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 20,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 20,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 21,
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 19,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 19,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
            'line' => 19,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 18,
          'last-line' => 23,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getDi',
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
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 25,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'di',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 25,
                  'char' => 24,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 25,
                'char' => 24,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 26,
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
                  'value' => '\\Phalcon\\Di',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 24,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 24,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
            'line' => 24,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 23,
          'last-line' => 28,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isPrimary',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'equals',
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
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                      'line' => 30,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'def',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                      'line' => 30,
                      'char' => 26,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                    'line' => 30,
                    'char' => 26,
                  ),
                  'name' => 'getIsPrimary',
                  'call-type' => 1,
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 30,
                  'char' => 43,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 30,
                  'char' => 49,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 30,
                'char' => 49,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 31,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 28,
          'last-line' => 33,
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
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                    'line' => 35,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'def',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                    'line' => 35,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                  'line' => 35,
                  'char' => 26,
                ),
                'name' => 'getBootstrap',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
                'line' => 35,
                'char' => 41,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
              'line' => 36,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 33,
          'last-line' => 38,
          'char' => 19,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'abstract',
            1 => 'public',
          ),
          'type' => 'method',
          'name' => 'registerAutoloaders',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 38,
          'last-line' => 39,
          'char' => 28,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'abstract',
            1 => 'public',
          ),
          'type' => 'method',
          'name' => 'registerServices',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
          'line' => 39,
          'last-line' => 40,
          'char' => 28,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
      'line' => 4,
      'char' => 14,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Base/AbstractModule.zep',
    'line' => 4,
    'char' => 14,
  ),
);