<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Rpc\\Client\\Adapter',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
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
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
        'line' => 2,
        'char' => 42,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
    'line' => 4,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Remote',
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
          'name' => 'remoteServerUrl',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
          'line' => 7,
          'char' => 11,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => 'client',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
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
              'name' => 'remoteServerUrl',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 9,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'opts',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                'line' => 9,
                'char' => 71,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 9,
              'char' => 71,
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
                  'type' => 'variable',
                  'value' => 'remoteServerUrl',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 11,
                  'char' => 34,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                'line' => 11,
                'char' => 34,
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
                          'value' => 'server url can not be empty',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 12,
                          'char' => 78,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 12,
                        'char' => 78,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 12,
                    'char' => 79,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 13,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 14,
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
                  'variable' => 'key',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 14,
                  'char' => 16,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 15,
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
                  'variable' => 'key',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_rand',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'remoteServerUrl',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 15,
                          'char' => 45,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 15,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 15,
                    'char' => 46,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 15,
                  'char' => 46,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 16,
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
                  'property' => 'remoteServerUrl',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'remoteServerUrl',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 16,
                      'char' => 52,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 16,
                      'char' => 56,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 16,
                    'char' => 57,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 16,
                  'char' => 57,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 17,
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
                  'property' => 'client',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Yar_Client',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                            'line' => 17,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'remoteServerUrl',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                            'line' => 17,
                            'char' => 65,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 17,
                          'char' => 65,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 17,
                        'char' => 65,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 17,
                    'char' => 66,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 17,
                  'char' => 66,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 19,
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
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'opts',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 19,
                    'char' => 24,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 19,
                  'char' => 24,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                'line' => 19,
                'char' => 24,
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
                      'variable' => 'optKey',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 20,
                      'char' => 23,
                    ),
                    1 => 
                    array (
                      'variable' => 'optVal',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 20,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 21,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'opts',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 21,
                    'char' => 40,
                  ),
                  'key' => 'optKey',
                  'value' => 'optVal',
                  'reverse' => 0,
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                            'line' => 22,
                            'char' => 22,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'client',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                            'line' => 22,
                            'char' => 30,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 22,
                          'char' => 30,
                        ),
                        'name' => 'setOpt',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'optKey',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                              'line' => 22,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                            'line' => 22,
                            'char' => 44,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'optVal',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                              'line' => 22,
                              'char' => 52,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                            'line' => 22,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 22,
                        'char' => 53,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 23,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 24,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 25,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
          'line' => 9,
          'last-line' => 27,
          'char' => 19,
        ),
        1 => 
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
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 27,
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
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 29,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'client',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 29,
                    'char' => 29,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 29,
                  'char' => 29,
                ),
                'name' => 'callByObject',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'rawData',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 29,
                      'char' => 50,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 29,
                    'char' => 50,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                'line' => 29,
                'char' => 51,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 30,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
          'line' => 27,
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
          'name' => '__call',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'method',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 32,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'args',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 32,
              'char' => 54,
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
                'name' => 'method_exists',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 34,
                        'char' => 31,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'client',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 34,
                        'char' => 38,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 34,
                      'char' => 38,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 34,
                    'char' => 38,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'method',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                      'line' => 34,
                      'char' => 46,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 34,
                    'char' => 46,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                'line' => 34,
                'char' => 48,
              ),
              'statements' => 
              array (
                0 => 
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
                                'type' => 'property-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'this',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                                  'line' => 36,
                                  'char' => 47,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'client',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                                  'line' => 36,
                                  'char' => 54,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                                'line' => 36,
                                'char' => 54,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                              'line' => 36,
                              'char' => 54,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'method',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                                'line' => 36,
                                'char' => 62,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                              'line' => 36,
                              'char' => 62,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 36,
                          'char' => 63,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 36,
                        'char' => 63,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'args',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 36,
                          'char' => 69,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 36,
                        'char' => 69,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 36,
                    'char' => 70,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 37,
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
                          'value' => 'method not exists',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                          'line' => 38,
                          'char' => 68,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                        'line' => 38,
                        'char' => 68,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                    'line' => 38,
                    'char' => 69,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
                  'line' => 39,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
              'line' => 40,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
          'line' => 32,
          'last-line' => 42,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
      'line' => 4,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Client/Adapter/Remote.zep',
    'line' => 4,
    'char' => 5,
  ),
);