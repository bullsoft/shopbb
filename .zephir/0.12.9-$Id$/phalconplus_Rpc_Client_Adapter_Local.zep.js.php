<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Rpc\\Client\\Adapter',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
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
        'name' => 'PhalconPlus\\Rpc\\Client\\AbstractClient',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
        'line' => 2,
        'char' => 42,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
    'line' => 3,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'PhalconPlus\\Base\\ProtoBuffer',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
        'line' => 3,
        'char' => 33,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
    'line' => 5,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Local',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractClient',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'config',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
          'line' => 9,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'di',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
          'line' => 11,
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
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 11,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 11,
              'char' => 49,
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 13,
                    'char' => 26,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 13,
                  'char' => 26,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 14,
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
                  'property' => 'config',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 14,
                      'char' => 31,
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
                          'value' => 'config',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 14,
                          'char' => 42,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 14,
                        'char' => 42,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 14,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 14,
                  'char' => 43,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 15,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
          'line' => 11,
          'last-line' => 17,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'callByParams',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'service',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 17,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'method',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 17,
              'char' => 66,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'request',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'ProtoBuffer',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 17,
                'char' => 88,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 17,
              'char' => 89,
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
                  'variable' => 'serviceClass',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 19,
                  'char' => 25,
                ),
                1 => 
                array (
                  'variable' => 'serviceObj',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 19,
                  'char' => 37,
                ),
                2 => 
                array (
                  'variable' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 19,
                  'char' => 47,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 20,
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
                  'variable' => 'serviceClass',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'service',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 20,
                        'char' => 36,
                      ),
                      'name' => 'upperfirst',
                      'call-type' => 1,
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 20,
                      'char' => 50,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'Service',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 20,
                      'char' => 59,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 20,
                    'char' => 59,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 20,
                  'char' => 59,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 21,
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
                  'name' => 'class_exists',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'serviceClass',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 21,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 21,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 21,
                  'char' => 40,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 21,
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
                            'value' => 'Service class not exists: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 22,
                            'char' => 78,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'serviceClass',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 22,
                            'char' => 92,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 22,
                          'char' => 92,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 22,
                        'char' => 92,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 22,
                    'char' => 93,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 23,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 24,
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
                  'variable' => 'serviceObj',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'serviceClass',
                    'dynamic' => 1,
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 24,
                            'char' => 50,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'di',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 24,
                            'char' => 53,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 24,
                          'char' => 53,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 24,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 24,
                    'char' => 54,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 24,
                  'char' => 54,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 25,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_callable',
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
                            'value' => 'serviceObj',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 25,
                            'char' => 35,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 25,
                          'char' => 35,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'method',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 25,
                            'char' => 43,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 25,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 25,
                      'char' => 44,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 25,
                    'char' => 44,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 25,
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
                            'value' => 'ServerClass: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 26,
                            'char' => 37,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'serviceClass',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 26,
                            'char' => 51,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 26,
                          'char' => 51,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 26,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 26,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 27,
                  'char' => 21,
                ),
                1 => 
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
                            'value' => 'InvokeMethod: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 27,
                            'char' => 38,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'method',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 27,
                            'char' => 46,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 27,
                          'char' => 46,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 27,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 27,
                    'char' => 47,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 28,
                  'char' => 21,
                ),
                2 => 
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
                            'value' => 'InputParam: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 28,
                            'char' => 36,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'var_export',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'request',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 28,
                                  'char' => 56,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 28,
                                'char' => 56,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'bool',
                                  'value' => 'true',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 28,
                                  'char' => 62,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 28,
                                'char' => 62,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 28,
                            'char' => 63,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 28,
                          'char' => 63,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 28,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 28,
                    'char' => 64,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 30,
                  'char' => 14,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'is_object',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'request',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 30,
                              'char' => 34,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 30,
                            'char' => 34,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 30,
                        'char' => 37,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 30,
                      'char' => 37,
                    ),
                    'right' => 
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
                              'type' => 'variable',
                              'value' => 'request',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 30,
                              'char' => 56,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 30,
                            'char' => 56,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 30,
                        'char' => 58,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 30,
                      'char' => 58,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 30,
                    'char' => 58,
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
                                'value' => 'Your input is not allowed. Request: ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 31,
                                'char' => 92,
                              ),
                              'right' => 
                              array (
                                'type' => 'fcall',
                                'name' => 'json_encode',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'request',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 31,
                                      'char' => 113,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 31,
                                    'char' => 113,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 31,
                                'char' => 114,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 31,
                              'char' => 114,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 31,
                            'char' => 114,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 31,
                        'char' => 115,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 32,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 34,
                  'char' => 14,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'is_object',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'request',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 34,
                            'char' => 33,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 34,
                          'char' => 33,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 34,
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
                            'value' => 'request',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 34,
                            'char' => 57,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ProtoBuffer',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 34,
                            'char' => 70,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 34,
                          'char' => 70,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 34,
                        'char' => 72,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 34,
                      'char' => 72,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 34,
                    'char' => 72,
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
                                'value' => 'Your input is not allowed. Request: ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 35,
                                'char' => 91,
                              ),
                              'right' => 
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
                                      'type' => 'variable',
                                      'value' => 'request',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 35,
                                      'char' => 110,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 35,
                                    'char' => 110,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 35,
                                'char' => 111,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 35,
                              'char' => 111,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 35,
                            'char' => 111,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 35,
                        'char' => 112,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 36,
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
                              'value' => 'request',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 36,
                              'char' => 38,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 36,
                            'char' => 38,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 36,
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
                              'variable' => 'tmp',
                              'expr' => 
                              array (
                                'type' => 'empty-array',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 37,
                                'char' => 29,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 37,
                              'char' => 29,
                            ),
                            1 => 
                            array (
                              'variable' => 'param',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 37,
                              'char' => 36,
                            ),
                            2 => 
                            array (
                              'variable' => 'paramClass',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 37,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 38,
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
                              'variable' => 'tmp',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'request',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 38,
                                'char' => 34,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 38,
                              'char' => 34,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 39,
                          'char' => 19,
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
                              'variable' => 'param',
                              'expr' => 
                              array (
                                'type' => 'new',
                                'class' => '\\ReflectionParameter',
                                'dynamic' => 0,
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
                                            'value' => 'serviceClass',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                            'line' => 39,
                                            'char' => 67,
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                          'line' => 39,
                                          'char' => 67,
                                        ),
                                        1 => 
                                        array (
                                          'value' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'method',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                            'line' => 39,
                                            'char' => 75,
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                          'line' => 39,
                                          'char' => 75,
                                        ),
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 39,
                                      'char' => 76,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 39,
                                    'char' => 76,
                                  ),
                                  1 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'int',
                                      'value' => '0',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 39,
                                      'char' => 79,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 39,
                                    'char' => 79,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 39,
                                'char' => 80,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 39,
                              'char' => 80,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 40,
                          'char' => 18,
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
                              'value' => 'param',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 40,
                              'char' => 26,
                            ),
                            'name' => 'getClass',
                            'call-type' => 1,
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 40,
                            'char' => 38,
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
                                  'variable' => 'paramClass',
                                  'expr' => 
                                  array (
                                    'type' => 'mcall',
                                    'variable' => 
                                    array (
                                      'type' => 'mcall',
                                      'variable' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'param',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                        'line' => 41,
                                        'char' => 44,
                                      ),
                                      'name' => 'getClass',
                                      'call-type' => 1,
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 41,
                                      'char' => 56,
                                    ),
                                    'name' => 'getName',
                                    'call-type' => 1,
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 41,
                                    'char' => 66,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 41,
                                  'char' => 66,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 42,
                              'char' => 23,
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
                                  'variable' => 'request',
                                  'expr' => 
                                  array (
                                    'type' => 'new',
                                    'class' => 'paramClass',
                                    'dynamic' => 1,
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 42,
                                    'char' => 53,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 42,
                                  'char' => 53,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 43,
                              'char' => 27,
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
                                  'value' => 'request',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 43,
                                  'char' => 29,
                                ),
                                'name' => 'softClone',
                                'call-type' => 1,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'tmp',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 43,
                                      'char' => 43,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 43,
                                    'char' => 43,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 43,
                                'char' => 44,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 44,
                              'char' => 17,
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
                                              'type' => 'concat',
                                              'left' => 
                                              array (
                                                'type' => 'string',
                                                'value' => 'Service class:method definition is invalid. Detail: ',
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                                'line' => 45,
                                                'char' => 112,
                                              ),
                                              'right' => 
                                              array (
                                                'type' => 'variable',
                                                'value' => 'service',
                                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                                'line' => 45,
                                                'char' => 122,
                                              ),
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                              'line' => 45,
                                              'char' => 122,
                                            ),
                                            'right' => 
                                            array (
                                              'type' => 'string',
                                              'value' => ' : ',
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                              'line' => 45,
                                              'char' => 128,
                                            ),
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                            'line' => 45,
                                            'char' => 128,
                                          ),
                                          'right' => 
                                          array (
                                            'type' => 'variable',
                                            'value' => 'method',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                            'line' => 45,
                                            'char' => 137,
                                          ),
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                          'line' => 45,
                                          'char' => 137,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'string',
                                          'value' => '. Request: ',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                          'line' => 45,
                                          'char' => 151,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                        'line' => 45,
                                        'char' => 151,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'fcall',
                                        'name' => 'json_encode',
                                        'call-type' => 1,
                                        'parameters' => 
                                        array (
                                          0 => 
                                          array (
                                            'parameter' => 
                                            array (
                                              'type' => 'variable',
                                              'value' => 'request',
                                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                              'line' => 45,
                                              'char' => 172,
                                            ),
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                            'line' => 45,
                                            'char' => 172,
                                          ),
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                        'line' => 45,
                                        'char' => 173,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                      'line' => 45,
                                      'char' => 173,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 45,
                                    'char' => 173,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 45,
                                'char' => 174,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 46,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 47,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 48,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 48,
                  'char' => 21,
                ),
                5 => 
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
                            'value' => 'Finally InputParam: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 48,
                            'char' => 43,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'var_export',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'request',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 48,
                                  'char' => 63,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 48,
                                'char' => 63,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'bool',
                                  'value' => 'true',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 48,
                                  'char' => 69,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 48,
                                'char' => 69,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 48,
                            'char' => 70,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 48,
                          'char' => 70,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 48,
                        'char' => 70,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 48,
                    'char' => 71,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 49,
                  'char' => 15,
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
                      'variable' => 'response',
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
                                    'value' => 'serviceObj',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 49,
                                    'char' => 60,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 49,
                                  'char' => 60,
                                ),
                                1 => 
                                array (
                                  'value' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'method',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 49,
                                    'char' => 68,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 49,
                                  'char' => 68,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 49,
                              'char' => 69,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 49,
                            'char' => 69,
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
                                    'value' => 'request',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                    'line' => 49,
                                    'char' => 79,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                  'line' => 49,
                                  'char' => 79,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 49,
                              'char' => 80,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 49,
                            'char' => 80,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 49,
                        'char' => 81,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 49,
                      'char' => 81,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 50,
                  'char' => 18,
                ),
                7 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'response',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 50,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 51,
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
                                'value' => 'No service found: ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 52,
                                'char' => 70,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'serviceClass',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                                'line' => 52,
                                'char' => 85,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 52,
                              'char' => 85,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '::',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 52,
                              'char' => 90,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 52,
                            'char' => 90,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'method',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 52,
                            'char' => 98,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 52,
                          'char' => 98,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 52,
                        'char' => 98,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 52,
                    'char' => 99,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 53,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 54,
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
                  'value' => 'ProtoBuffer',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 18,
                  'char' => 5,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 18,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
            'line' => 18,
            'char' => 5,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
          'line' => 17,
          'last-line' => 56,
          'char' => 20,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'callByObject',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'rawData',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 56,
              'char' => 47,
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
                  'variable' => 'service',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 58,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'method',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 58,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'request',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 58,
                  'char' => 37,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 60,
              'char' => 17,
            ),
            1 => 
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
                        'value' => 'Local callByObject: ',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 60,
                        'char' => 40,
                      ),
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'var_export',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'rawData',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 60,
                              'char' => 60,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 60,
                            'char' => 60,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 60,
                              'char' => 66,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 60,
                            'char' => 66,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 60,
                        'char' => 67,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 60,
                      'char' => 67,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 60,
                    'char' => 67,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 60,
                'char' => 68,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 62,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'service',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 62,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'rawData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 62,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'service',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 62,
                      'char' => 43,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 62,
                    'char' => 45,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 62,
                  'char' => 45,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 62,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => 'service ',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 63,
                              'char' => 60,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'service',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 63,
                              'char' => 70,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 63,
                            'char' => 70,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' not exists',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 63,
                            'char' => 83,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 63,
                          'char' => 83,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 63,
                        'char' => 83,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 63,
                    'char' => 84,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 64,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 66,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'method',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 66,
                    'char' => 43,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'rawData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 66,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'method',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 66,
                      'char' => 41,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 66,
                    'char' => 43,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 66,
                  'char' => 43,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 66,
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
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => 'method ',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 67,
                              'char' => 59,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'method',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 67,
                              'char' => 68,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 67,
                            'char' => 68,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' not exists',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 67,
                            'char' => 81,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 67,
                          'char' => 81,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 67,
                        'char' => 81,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 67,
                    'char' => 82,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 68,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 70,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'request',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 70,
                    'char' => 42,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'rawData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 70,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'args',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 70,
                      'char' => 40,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 70,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 70,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 70,
                'char' => 42,
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
                          'value' => 'args not exists',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 71,
                          'char' => 66,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 71,
                        'char' => 66,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 71,
                    'char' => 67,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 72,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 74,
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
                  'variable' => 'service',
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
                          'type' => 'variable',
                          'value' => 'service',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 74,
                          'char' => 35,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 74,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 74,
                    'char' => 36,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 74,
                  'char' => 36,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 75,
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
                  'variable' => 'method',
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
                          'type' => 'variable',
                          'value' => 'method',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 75,
                          'char' => 33,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 75,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 75,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 75,
                  'char' => 34,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 77,
              'char' => 10,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'service',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 77,
                    'char' => 27,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 77,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'method',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 77,
                    'char' => 42,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 77,
                  'char' => 42,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 77,
                'char' => 42,
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
                          'value' => 'service:method(args) must exists. All of them!!!',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 78,
                          'char' => 99,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 78,
                        'char' => 99,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 78,
                    'char' => 100,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 79,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 81,
              'char' => 17,
            ),
            8 => 
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
                              'value' => 'Invoke callByParams with (',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 81,
                              'char' => 46,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'service',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                              'line' => 81,
                              'char' => 56,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 81,
                            'char' => 56,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ', ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                            'line' => 81,
                            'char' => 61,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 81,
                          'char' => 61,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'method',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                          'line' => 81,
                          'char' => 70,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 81,
                        'char' => 70,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => ')',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                        'line' => 81,
                        'char' => 73,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 81,
                      'char' => 73,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 81,
                    'char' => 73,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 81,
                'char' => 74,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 82,
              'char' => 14,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                  'line' => 82,
                  'char' => 21,
                ),
                'name' => 'callByParams',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'service',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 82,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 82,
                    'char' => 42,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'method',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 82,
                      'char' => 50,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 82,
                    'char' => 50,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'request',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                      'line' => 82,
                      'char' => 59,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                    'line' => 82,
                    'char' => 59,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
                'line' => 82,
                'char' => 60,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
              'line' => 83,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
          'line' => 56,
          'last-line' => 84,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
      'line' => 5,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Local.zep',
    'line' => 5,
    'char' => 5,
  ),
);