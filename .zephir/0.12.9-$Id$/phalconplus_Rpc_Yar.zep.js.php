<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Rpc',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
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
        'name' => 'Phalcon\\DiInterface',
        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
        'line' => 3,
        'char' => 24,
      ),
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
    'line' => 5,
    'char' => 5,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Yar',
    'abstract' => 0,
    'final' => 0,
    'extends' => '\\Phalcon\\Application',
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
          'name' => 'serviceObj',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
            'line' => 7,
            'char' => 30,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 9,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
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
          'name' => 'requestArgs',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
            'line' => 10,
            'char' => 30,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 12,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
          'line' => 13,
          'char' => 13,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => 'responseBody',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'not supported http method',
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
            'line' => 13,
            'char' => 56,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 15,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
          'line' => 17,
          'char' => 7,
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
                'value' => 'DiInterface',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 17,
                'char' => 45,
              ),
              'default' => 
              array (
                'type' => 'null',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 17,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 17,
              'char' => 53,
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
                      'value' => 'di',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 19,
                      'char' => 31,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 19,
                    'char' => 31,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 19,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 20,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'rawBody',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 20,
                        'char' => 22,
                      ),
                      'name' => '__get',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'request',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 20,
                            'char' => 36,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 20,
                          'char' => 36,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 20,
                      'char' => 38,
                    ),
                    'name' => 'getRawBody',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 20,
                    'char' => 51,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 20,
                  'char' => 51,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 21,
              'char' => 5,
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
                  'property' => 'requestArgs',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'msgpack_unpack',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'rawBody',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 21,
                          'char' => 49,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 21,
                        'char' => 49,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 21,
                    'char' => 50,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 21,
                  'char' => 50,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 22,
              'char' => 2,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
          'line' => 17,
          'last-line' => 24,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'handle',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 26,
                    'char' => 11,
                  ),
                  'name' => '__get',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'string',
                        'value' => 'request',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 26,
                        'char' => 25,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 26,
                      'char' => 25,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 26,
                  'char' => 27,
                ),
                'name' => 'isGet',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 26,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'responseBody',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '<h1>Welcome to Phalcon+</h1>
			<p>If you see this page, the msgpack-rpc server is successfully installed and
			working.</p>',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 27,
                        'char' => 154,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 27,
                      'char' => 154,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 28,
                  'char' => 3,
                ),
              ),
              'elseif_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 28,
                        'char' => 17,
                      ),
                      'name' => '__get',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'request',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 28,
                            'char' => 31,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 28,
                          'char' => 31,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 28,
                      'char' => 33,
                    ),
                    'name' => 'isPost',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 28,
                    'char' => 43,
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
                          'variable' => 'e',
                          'expr' => 
                          array (
                            'type' => 'null',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 29,
                            'char' => 25,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 29,
                          'char' => 25,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 30,
                      'char' => 6,
                    ),
                    1 => 
                    array (
                      'type' => 'declare',
                      'data-type' => 'variable',
                      'variables' => 
                      array (
                        0 => 
                        array (
                          'variable' => 'ret',
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
                                  'value' => 'errorCode',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 31,
                                  'char' => 15,
                                ),
                                'value' => 
                                array (
                                  'type' => 'int',
                                  'value' => '0',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 31,
                                  'char' => 18,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 31,
                                'char' => 18,
                              ),
                              1 => 
                              array (
                                'key' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'errorMsg',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 32,
                                  'char' => 14,
                                ),
                                'value' => 
                                array (
                                  'type' => 'string',
                                  'value' => '',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 32,
                                  'char' => 16,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 32,
                                'char' => 16,
                              ),
                              2 => 
                              array (
                                'key' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'logId',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 33,
                                  'char' => 11,
                                ),
                                'value' => 
                                array (
                                  'type' => 'property-access',
                                  'left' => 
                                  array (
                                    'type' => 'mcall',
                                    'variable' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'this',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 33,
                                      'char' => 18,
                                    ),
                                    'name' => '__get',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'string',
                                          'value' => 'logger',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                          'line' => 33,
                                          'char' => 31,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                        'line' => 33,
                                        'char' => 31,
                                      ),
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 33,
                                    'char' => 33,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'uid',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 33,
                                    'char' => 37,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 33,
                                  'char' => 37,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 33,
                                'char' => 37,
                              ),
                              3 => 
                              array (
                                'key' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'data',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 34,
                                  'char' => 10,
                                ),
                                'value' => 
                                array (
                                  'type' => 'empty-array',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 35,
                                  'char' => 4,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 35,
                                'char' => 4,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 35,
                            'char' => 5,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 35,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 36,
                      'char' => 6,
                    ),
                    2 => 
                    array (
                      'type' => 'try-catch',
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
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 37,
                                'char' => 31,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'requestArgs',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 37,
                                'char' => 44,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 37,
                              'char' => 44,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 37,
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
                                'class' => '\\Exception',
                                'dynamic' => 0,
                                'parameters' => 
                                array (
                                  0 => 
                                  array (
                                    'parameter' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'invalid request args',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 38,
                                      'char' => 62,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 38,
                                    'char' => 62,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 38,
                                'char' => 63,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 39,
                              'char' => 17,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 40,
                          'char' => 7,
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
                              'property' => 'serviceObj',
                              'expr' => 
                              array (
                                'type' => 'mcall',
                                'variable' => 
                                array (
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'this',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 40,
                                    'char' => 33,
                                  ),
                                  'name' => 'getDi',
                                  'call-type' => 1,
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 40,
                                  'char' => 42,
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
                                      'value' => 'backendSrv',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 40,
                                      'char' => 57,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 40,
                                    'char' => 57,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 40,
                                'char' => 58,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 40,
                              'char' => 58,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 41,
                          'char' => 7,
                        ),
                        2 => 
                        array (
                          'type' => 'let',
                          'assignments' => 
                          array (
                            0 => 
                            array (
                              'assign-type' => 'array-index',
                              'operator' => 'assign',
                              'variable' => 'ret',
                              'index-expr' => 
                              array (
                                0 => 
                                array (
                                  'type' => 'string',
                                  'value' => 'data',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 41,
                                  'char' => 17,
                                ),
                              ),
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
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 41,
                                    'char' => 26,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'serviceObj',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 41,
                                    'char' => 38,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 41,
                                  'char' => 38,
                                ),
                                'name' => 'callByObject',
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
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                        'line' => 41,
                                        'char' => 57,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'requestArgs',
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                        'line' => 41,
                                        'char' => 69,
                                      ),
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 41,
                                      'char' => 69,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 41,
                                    'char' => 69,
                                  ),
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 41,
                                'char' => 70,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 41,
                              'char' => 70,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 42,
                          'char' => 4,
                        ),
                      ),
                      'catches' => 
                      array (
                        0 => 
                        array (
                          'classes' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => '\\Exception',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 42,
                              'char' => 22,
                            ),
                          ),
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'e',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 46,
                            'char' => 6,
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
                                  'variable' => 'ret',
                                  'index-expr' => 
                                  array (
                                    0 => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'errorCode',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 43,
                                      'char' => 22,
                                    ),
                                  ),
                                  'expr' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'max',
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
                                            'value' => 'e',
                                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                            'line' => 43,
                                            'char' => 32,
                                          ),
                                          'name' => 'getCode',
                                          'call-type' => 1,
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                          'line' => 43,
                                          'char' => 42,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                        'line' => 43,
                                        'char' => 42,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'int',
                                          'value' => '1',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                          'line' => 43,
                                          'char' => 45,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                        'line' => 43,
                                        'char' => 45,
                                      ),
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 43,
                                    'char' => 46,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 43,
                                  'char' => 46,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 44,
                              'char' => 7,
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
                                  'variable' => 'ret',
                                  'index-expr' => 
                                  array (
                                    0 => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'errorMsg',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 44,
                                      'char' => 21,
                                    ),
                                  ),
                                  'expr' => 
                                  array (
                                    'type' => 'mcall',
                                    'variable' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'e',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                      'line' => 44,
                                      'char' => 27,
                                    ),
                                    'name' => 'getMessage',
                                    'call-type' => 1,
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                    'line' => 44,
                                    'char' => 40,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 44,
                                  'char' => 40,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                              'line' => 45,
                              'char' => 4,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 46,
                          'char' => 6,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 46,
                      'char' => 6,
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
                          'property' => 'responseBody',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'msgpack_pack',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'ret',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                  'line' => 46,
                                  'char' => 45,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                                'line' => 46,
                                'char' => 45,
                              ),
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                            'line' => 46,
                            'char' => 46,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                          'line' => 46,
                          'char' => 46,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 47,
                      'char' => 3,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 48,
                  'char' => 11,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 48,
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
                  'variable' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 48,
                  'char' => 21,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 49,
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
                  'variable' => 'response',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Phalcon\\Http\\Response',
                    'dynamic' => 0,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 49,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 49,
                  'char' => 52,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 50,
              'char' => 10,
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
                  'value' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 50,
                  'char' => 12,
                ),
                'name' => 'setStatusCode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '200',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 50,
                      'char' => 30,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 50,
                    'char' => 30,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'OK',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 50,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 50,
                    'char' => 34,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 50,
                'char' => 35,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 51,
              'char' => 10,
            ),
            4 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 51,
                  'char' => 12,
                ),
                'name' => 'setContent',
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 51,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'responseBody',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                        'line' => 51,
                        'char' => 42,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                      'line' => 51,
                      'char' => 42,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                    'line' => 51,
                    'char' => 42,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 51,
                'char' => 43,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 52,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'response',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 52,
                'char' => 18,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
              'line' => 53,
              'char' => 2,
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
                  'value' => '\\Phalcon\\Http\\Response',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                  'line' => 25,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
                'line' => 25,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
            'line' => 25,
            'char' => 2,
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
          'line' => 24,
          'last-line' => 54,
          'char' => 16,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
      'line' => 5,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Rpc/Yar.zep',
    'line' => 5,
    'char' => 5,
  ),
);