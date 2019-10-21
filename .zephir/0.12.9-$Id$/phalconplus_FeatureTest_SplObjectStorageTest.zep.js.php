<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\FeatureTest',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'SplObjectStorageTest',
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
          'name' => 'objects',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
          'line' => 7,
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
                  'property' => 'objects',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\SplObjectStorage',
                    'dynamic' => 0,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 9,
                    'char' => 52,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 9,
                  'char' => 52,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 10,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
          'line' => 7,
          'last-line' => 12,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'insert',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 12,
              'char' => 36,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'obj',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => '\\stdClass',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                'line' => 12,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 12,
              'char' => 53,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                'line' => 12,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 12,
              'char' => 70,
            ),
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 14,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'objects',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 14,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 14,
                  'char' => 23,
                ),
                'name' => 'detach',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'obj',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 14,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 14,
                    'char' => 34,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                'line' => 14,
                'char' => 35,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 15,
              'char' => 12,
            ),
            1 => 
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 15,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'objects',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 15,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 15,
                  'char' => 23,
                ),
                'name' => 'attach',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'obj',
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 15,
                      'char' => 34,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 15,
                    'char' => 34,
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
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 16,
                            'char' => 18,
                          ),
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'name',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 16,
                            'char' => 24,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 16,
                          'char' => 24,
                        ),
                        1 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'method',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 17,
                            'char' => 20,
                          ),
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'insert',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 17,
                            'char' => 28,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 17,
                          'char' => 28,
                        ),
                        2 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'initial_data',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 18,
                            'char' => 25,
                          ),
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'data',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 19,
                            'char' => 9,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 19,
                          'char' => 9,
                        ),
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 19,
                      'char' => 10,
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 19,
                    'char' => 10,
                  ),
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                'line' => 19,
                'char' => 11,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 20,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
          'line' => 12,
          'last-line' => 22,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'exec',
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
                  'variable' => 'obj',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 24,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'info',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 24,
                  'char' => 22,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 25,
              'char' => 12,
            ),
            1 => 
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 25,
                    'char' => 14,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'objects',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 25,
                    'char' => 23,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 25,
                  'char' => 23,
                ),
                'name' => 'rewind',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                'line' => 25,
                'char' => 32,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 26,
              'char' => 13,
            ),
            2 => 
            array (
              'type' => 'while',
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
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 26,
                    'char' => 20,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'objects',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 26,
                    'char' => 29,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 26,
                  'char' => 29,
                ),
                'name' => 'valid',
                'call-type' => 1,
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                'line' => 26,
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
                      'variable' => 'obj',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 27,
                            'char' => 28,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'objects',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 27,
                            'char' => 37,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 27,
                          'char' => 37,
                        ),
                        'name' => 'current',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                        'line' => 27,
                        'char' => 47,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 27,
                      'char' => 47,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 28,
                  'char' => 15,
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
                      'variable' => 'info',
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
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 28,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'objects',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 28,
                            'char' => 38,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 28,
                          'char' => 38,
                        ),
                        'name' => 'getInfo',
                        'call-type' => 1,
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                        'line' => 28,
                        'char' => 48,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 28,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 29,
                  'char' => 16,
                ),
                2 => 
                array (
                  'type' => 'echo',
                  'expressions' => 
                  array (
                    0 => 
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
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'Key: ',
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                  'line' => 29,
                                  'char' => 24,
                                ),
                                'right' => 
                                array (
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'property-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'this',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                      'line' => 29,
                                      'char' => 31,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'objects',
                                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                      'line' => 29,
                                      'char' => 40,
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                    'line' => 29,
                                    'char' => 40,
                                  ),
                                  'name' => 'key',
                                  'call-type' => 1,
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                  'line' => 29,
                                  'char' => 47,
                                ),
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                'line' => 29,
                                'char' => 47,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => ' Name: ',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                'line' => 29,
                                'char' => 57,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                              'line' => 29,
                              'char' => 57,
                            ),
                            'right' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'info',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                'line' => 29,
                                'char' => 63,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => 'name',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                'line' => 29,
                                'char' => 68,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                              'line' => 29,
                              'char' => 70,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 29,
                            'char' => 70,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' Obj: ',
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                            'line' => 29,
                            'char' => 79,
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 29,
                          'char' => 79,
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
                                'value' => 'obj',
                                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                                'line' => 29,
                                'char' => 94,
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                              'line' => 29,
                              'char' => 94,
                            ),
                          ),
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                          'line' => 29,
                          'char' => 96,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                        'line' => 29,
                        'char' => 96,
                      ),
                      'right' => 
                      array (
                        'type' => 'constant',
                        'value' => 'PHP_EOL',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                        'line' => 29,
                        'char' => 105,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 29,
                      'char' => 105,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 30,
                  'char' => 16,
                ),
                3 => 
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
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                        'line' => 30,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'objects',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                        'line' => 30,
                        'char' => 27,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                      'line' => 30,
                      'char' => 27,
                    ),
                    'name' => 'next',
                    'call-type' => 1,
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                    'line' => 30,
                    'char' => 34,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
                  'line' => 31,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
              'line' => 32,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
          'line' => 22,
          'last-line' => 33,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/FeatureTest/SplObjectStorageTest.zep',
    'line' => 3,
    'char' => 5,
  ),
);