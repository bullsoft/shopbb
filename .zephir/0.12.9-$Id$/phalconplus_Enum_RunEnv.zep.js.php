<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Enum',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
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
        'name' => 'PhalconPlus\\Enum\\AbstractEnum',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
        'line' => 2,
        'char' => 34,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'RunEnv',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractEnum',
    'definition' => 
    array (
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
          'name' => 'isInProd',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'env',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
              'line' => 16,
              'char' => 47,
            ),
          ),
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
                        'value' => 'env',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                        'line' => 19,
                        'char' => 26,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                      'line' => 19,
                      'char' => 26,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                        'line' => 19,
                        'char' => 29,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                      'line' => 19,
                      'char' => 29,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'int',
                        'value' => '7',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                        'line' => 19,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                      'line' => 19,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                  'line' => 19,
                  'char' => 35,
                ),
                'right' => 
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
                        'type' => 'static-constant-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                          'line' => 19,
                          'char' => 60,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'PRODUCTION',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                          'line' => 19,
                          'char' => 60,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                        'line' => 19,
                        'char' => 60,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                      'line' => 19,
                      'char' => 60,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                        'line' => 19,
                        'char' => 63,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                      'line' => 19,
                      'char' => 63,
                    ),
                    2 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'int',
                        'value' => '7',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                        'line' => 19,
                        'char' => 66,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                      'line' => 19,
                      'char' => 66,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                  'line' => 19,
                  'char' => 67,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                'line' => 19,
                'char' => 67,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
              'line' => 20,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                'line' => 17,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 17,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 16,
          'last-line' => 22,
          'char' => 26,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isInAbTest',
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
                  'type' => 'static-constant-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'self',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                    'line' => 24,
                    'char' => 31,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'AB_TEST',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                    'line' => 24,
                    'char' => 31,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                  'line' => 24,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                    'line' => 24,
                    'char' => 38,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'val',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                    'line' => 24,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                  'line' => 24,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
                'line' => 24,
                'char' => 42,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
              'line' => 25,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 22,
          'last-line' => 26,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'DEV',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'dev',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 6,
            'char' => 21,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 7,
          'char' => 9,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'DEBUG',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'debug',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 7,
            'char' => 24,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 8,
          'char' => 9,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'TEST',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'test',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 8,
            'char' => 22,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 9,
          'char' => 9,
        ),
        3 => 
        array (
          'type' => 'const',
          'name' => 'UAT',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'uat',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 9,
            'char' => 20,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 10,
          'char' => 9,
        ),
        4 => 
        array (
          'type' => 'const',
          'name' => 'PRE_PRODUCTION',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'pre_production',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 10,
            'char' => 42,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 11,
          'char' => 9,
        ),
        5 => 
        array (
          'type' => 'const',
          'name' => 'AB_TEST',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'ab_test',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 11,
            'char' => 28,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 12,
          'char' => 9,
        ),
        6 => 
        array (
          'type' => 'const',
          'name' => 'PRODUCTION',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'production',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 12,
            'char' => 34,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 14,
          'char' => 9,
        ),
        7 => 
        array (
          'type' => 'const',
          'name' => '__default',
          'default' => 
          array (
            'type' => 'static-constant-access',
            'left' => 
            array (
              'type' => 'variable',
              'value' => 'self',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
              'line' => 14,
              'char' => 32,
            ),
            'right' => 
            array (
              'type' => 'variable',
              'value' => 'DEV',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
              'line' => 14,
              'char' => 32,
            ),
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
            'line' => 14,
            'char' => 32,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
          'line' => 16,
          'char' => 10,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Enum/RunEnv.zep',
    'line' => 4,
    'char' => 5,
  ),
);