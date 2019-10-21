<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Db\\UnitOfWork',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
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
        'name' => '\\PhalconPlus\\Db\\UnitOfWork',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
        'line' => 2,
        'char' => 31,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Field',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractValue',
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
          'name' => 'model',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
            'line' => 6,
            'char' => 27,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
          'line' => 7,
          'char' => 13,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'attr',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
            'line' => 7,
            'char' => 22,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
          'line' => 9,
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
              'name' => 'model',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\Phalcon\\Mvc\\Model',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 9,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 9,
              'char' => 59,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'attr',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 9,
              'char' => 73,
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
                  'property' => 'model',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'model',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 11,
                    'char' => 32,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 11,
                  'char' => 32,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 12,
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
                  'property' => 'attr',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'attr',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 12,
                    'char' => 30,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 12,
                  'char' => 30,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 13,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
          'line' => 9,
          'last-line' => 15,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getValue',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'unitwork',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'UnitOfWork',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 15,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 15,
              'char' => 51,
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
                  'variable' => 'className',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'get_class',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 17,
                            'char' => 40,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 17,
                            'char' => 46,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 17,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 17,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 17,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 17,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 18,
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
                  'variable' => 'hash',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'spl_object_hash',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 18,
                            'char' => 41,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 18,
                            'char' => 47,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 18,
                          'char' => 47,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 18,
                        'char' => 47,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 18,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 18,
                  'char' => 48,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 19,
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
                  'variable' => 'objs',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'unitwork',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 19,
                      'char' => 29,
                    ),
                    'name' => 'getObjects',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 19,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 19,
                  'char' => 42,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 21,
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
                  'value' => 'objs',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 21,
                  'char' => 17,
                ),
                'name' => 'contains',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 21,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'model',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 21,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 21,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 21,
                    'char' => 38,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 21,
                'char' => 40,
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
                      'variable' => 'attr',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 22,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'attr',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 22,
                          'char' => 34,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 22,
                        'char' => 34,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 22,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 23,
                  'char' => 14,
                ),
                1 => 
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 23,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 23,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 23,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 23,
                        'char' => 43,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'attr',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 23,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 23,
                        'char' => 49,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 23,
                    'char' => 51,
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
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 24,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'model',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 24,
                            'char' => 36,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 24,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'attr',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 24,
                          'char' => 43,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 24,
                        'char' => 43,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 25,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 26,
                  'char' => 18,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 26,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 27,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 29,
              'char' => 13,
            ),
            4 => 
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
                              'value' => 'Object(',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                              'line' => 29,
                              'char' => 54,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'hash',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                              'line' => 29,
                              'char' => 59,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 29,
                            'char' => 59,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ') instance of ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                            'line' => 29,
                            'char' => 74,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 29,
                          'char' => 74,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'className',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 29,
                          'char' => 84,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 29,
                        'char' => 84,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => ' not in SplObjectStorage',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 29,
                        'char' => 109,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 29,
                      'char' => 109,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 29,
                    'char' => 109,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 29,
                'char' => 110,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 30,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
          'line' => 15,
          'last-line' => 32,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getField',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'unitwork',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'UnitOfWork',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 32,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 32,
              'char' => 51,
            ),
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
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 34,
                  'char' => 21,
                ),
                'name' => 'getValue',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'unitwork',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 34,
                      'char' => 39,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 34,
                    'char' => 39,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 34,
                'char' => 40,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 35,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
          'line' => 32,
          'last-line' => 37,
          'char' => 19,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__toString',
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
                  'type' => 'concat',
                  'left' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'string',
                      'value' => 'Field: ',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 39,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 39,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'attr',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 39,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 39,
                      'char' => 37,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 39,
                    'char' => 37,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => ', Hash: ',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                    'line' => 39,
                    'char' => 48,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 39,
                  'char' => 48,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'spl_object_hash',
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
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 39,
                          'char' => 71,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'model',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                          'line' => 39,
                          'char' => 77,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                        'line' => 39,
                        'char' => 77,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                      'line' => 39,
                      'char' => 77,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                  'line' => 39,
                  'char' => 78,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
                'line' => 39,
                'char' => 78,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
              'line' => 40,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
          'line' => 37,
          'last-line' => 41,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Db/UnitOfWork/Field.zep',
    'line' => 4,
    'char' => 5,
  ),
);