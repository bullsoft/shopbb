<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'PhalconPlus\\Logger\\Processor',
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Uid',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'AbstractProcessor',
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
          'name' => 'uid',
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
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
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'len',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '18',
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                'line' => 7,
                'char' => 45,
              ),
              'reference' => 0,
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
              'line' => 7,
              'char' => 45,
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
                  'type' => 'greater',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'strlen',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'len',
                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                          'line' => 9,
                          'char' => 23,
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                        'line' => 9,
                        'char' => 23,
                      ),
                    ),
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                    'line' => 9,
                    'char' => 25,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '2',
                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                    'line' => 9,
                    'char' => 28,
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                  'line' => 9,
                  'char' => 28,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                'line' => 9,
                'char' => 30,
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
                      'property' => 'uid',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'len',
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                        'line' => 10,
                        'char' => 32,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                      'line' => 10,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                  'line' => 11,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => 'uid',
                      'expr' => 
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
                              'type' => 'fcall',
                              'name' => 'hash',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'md5',
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                    'line' => 12,
                                    'char' => 44,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                  'line' => 12,
                                  'char' => 44,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'fcall',
                                    'name' => 'uniqid',
                                    'call-type' => 1,
                                    'parameters' => 
                                    array (
                                      0 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'string',
                                          'value' => '',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                          'line' => 12,
                                          'char' => 53,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                        'line' => 12,
                                        'char' => 53,
                                      ),
                                      1 => 
                                      array (
                                        'parameter' => 
                                        array (
                                          'type' => 'bool',
                                          'value' => 'true',
                                          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                          'line' => 12,
                                          'char' => 59,
                                        ),
                                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                        'line' => 12,
                                        'char' => 59,
                                      ),
                                    ),
                                    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                    'line' => 12,
                                    'char' => 60,
                                  ),
                                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                                  'line' => 12,
                                  'char' => 60,
                                ),
                              ),
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                              'line' => 12,
                              'char' => 61,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                            'line' => 12,
                            'char' => 61,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '0',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                              'line' => 12,
                              'char' => 64,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                            'line' => 12,
                            'char' => 64,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'len',
                              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                              'line' => 12,
                              'char' => 69,
                            ),
                            'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                            'line' => 12,
                            'char' => 69,
                          ),
                        ),
                        'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                        'line' => 12,
                        'char' => 70,
                      ),
                      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                      'line' => 12,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                  'line' => 13,
                  'char' => 9,
                ),
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
              'line' => 14,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
          'line' => 7,
          'last-line' => 16,
          'char' => 19,
        ),
        1 => 
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
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                  'line' => 18,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'uid',
                  'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                  'line' => 18,
                  'char' => 25,
                ),
                'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
                'line' => 18,
                'char' => 25,
              ),
              'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
              'line' => 19,
              'char' => 5,
            ),
          ),
          'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
          'line' => 16,
          'last-line' => 20,
          'char' => 19,
        ),
      ),
      'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/Users/weigang/Developments/github/phalconplus/phalconplus/Logger/Processor/Uid.zep',
    'line' => 3,
    'char' => 5,
  ),
);