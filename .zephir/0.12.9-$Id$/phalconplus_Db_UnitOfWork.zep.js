[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Db",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "SplObjectStorage",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 3,
                "char": 21
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 4,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Base\\Exception",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 4,
                "char": 31
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 5,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Mvc\\Model\\Transaction\\Manager",
                "alias": "TxManager",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 5,
                "char": 55
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 6,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Mvc\\Model\\Transaction\\Failed",
                "alias": "TxFailed",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 6,
                "char": 53
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 7,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Db\\UnitOfWork\\AbstractValue",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 7,
                "char": 44
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 8,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Mvc\\Model",
                "alias": "Model",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 8,
                "char": 31
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 9,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Mvc\\Model\\Resultset",
                "alias": "Resultset",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                "line": 9,
                "char": 45
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 11,
        "char": 5
    },
    {
        "type": "class",
        "name": "UnitOfWork",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "dbServiceName",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 15,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "objects",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 17,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "inserted",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 19,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "updated",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 21,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "deleted",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 23,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "exception",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 25,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "failed",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 27,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "dbServiceName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 27,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "objects",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\SplObjectStorage",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 29,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 29,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 30,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "deleted",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\SplObjectStorage",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 30,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 30,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 31,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "inserted",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\SplObjectStorage",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 31,
                                        "char": 53
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 31,
                                    "char": 53
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 32,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "updated",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\SplObjectStorage",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 32,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 32,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 34,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "dbServiceName",
                                    "expr": {
                                        "type": "variable",
                                        "value": "dbServiceName",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 34,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 34,
                                    "char": 48
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 35,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 27,
                    "last-line": 37,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "save",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 37,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Base\\Model",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 37,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 37,
                            "char": 67
                        },
                        {
                            "type": "parameter",
                            "name": "initial_data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 37,
                                "char": 92
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 37,
                            "char": 92
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "initial_data",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 39,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 39,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 39,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 40,
                                            "char": 19
                                        },
                                        "name": "assign",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "initial_data",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 40,
                                                    "char": 39
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 40,
                                                "char": 39
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 40,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 41,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 42,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "model",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 42,
                                        "char": 19
                                    },
                                    "name": "exists",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 42,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 42,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 43,
                                            "char": 18
                                        },
                                        "name": "insert",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 43,
                                                    "char": 30
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 43,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 43,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 43,
                                                "char": 37
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "initial_data",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 43,
                                                    "char": 51
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 43,
                                                "char": 51
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 43,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 44,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 45,
                                            "char": 18
                                        },
                                        "name": "update",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 45,
                                                    "char": 30
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 45,
                                                "char": 30
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 45,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 45,
                                                "char": 37
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "initial_data",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 45,
                                                    "char": 51
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 45,
                                                "char": 51
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 45,
                                        "char": 52
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 46,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 47,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 37,
                    "last-line": 49,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "insert",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 49,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Base\\Model",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 49,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 49,
                            "char": 69
                        },
                        {
                            "type": "parameter",
                            "name": "initial_data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 49,
                                "char": 94
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 49,
                            "char": 94
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 51,
                                    "char": 14
                                },
                                "name": "detach",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 51,
                                            "char": 27
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 51,
                                        "char": 27
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 51,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 52,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 52,
                                    "char": 14
                                },
                                "name": "attach",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 52,
                                            "char": 27
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 52,
                                        "char": 27
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 53,
                                                        "char": 20
                                                    },
                                                    "value": {
                                                        "type": "string",
                                                        "value": "insert",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 53,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 53,
                                                    "char": 28
                                                },
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 54,
                                                        "char": 18
                                                    },
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 54,
                                                        "char": 24
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 54,
                                                    "char": 24
                                                },
                                                {
                                                    "key": {
                                                        "type": "string",
                                                        "value": "initial_data",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 55,
                                                        "char": 26
                                                    },
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "initial_data",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 56,
                                                        "char": 9
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 56,
                                                    "char": 9
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 56,
                                            "char": 10
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 56,
                                        "char": 10
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 56,
                                "char": 11
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 57,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 49,
                    "last-line": 61,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "update",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 62,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 62,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "initial_data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 62,
                                "char": 72
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 62,
                            "char": 72
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "instanceof",
                                        "left": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 64,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "Model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 64,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 64,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 64,
                                    "char": 38
                                },
                                "right": {
                                    "type": "list",
                                    "left": {
                                        "type": "instanceof",
                                        "left": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 64,
                                            "char": 56
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "Resultset",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 64,
                                            "char": 67
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 64,
                                        "char": 67
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 64,
                                    "char": 69
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 64,
                                "char": 69
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 65,
                                            "char": 18
                                        },
                                        "name": "detach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 65,
                                                    "char": 31
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 65,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 65,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 66,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 66,
                                            "char": 18
                                        },
                                        "name": "attach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 66,
                                                    "char": 31
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 66,
                                                "char": 31
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "method",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 67,
                                                                "char": 24
                                                            },
                                                            "value": {
                                                                "type": "string",
                                                                "value": "update",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 67,
                                                                "char": 32
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 67,
                                                            "char": 32
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "name",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 68,
                                                                "char": 22
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "name",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 68,
                                                                "char": 28
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 68,
                                                            "char": 28
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "initial_data",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 69,
                                                                "char": 30
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "initial_data",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 70,
                                                                "char": 13
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 70,
                                                            "char": 13
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 70,
                                                    "char": 14
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 70,
                                                "char": 14
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 70,
                                        "char": 15
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 71,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "UnitOfWork: Accept <Model> & <Resultset> only",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 72,
                                                    "char": 78
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 72,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 72,
                                        "char": 79
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 73,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 74,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param \\Phalcon\\Mvc\\Model | \\Phalcon\\Mvc\\Model\\Resultset model\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 62,
                    "last-line": 78,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "delete",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 79,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "object",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 79,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "instanceof",
                                        "left": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 81,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "Model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 81,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 81,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 81,
                                    "char": 38
                                },
                                "right": {
                                    "type": "list",
                                    "left": {
                                        "type": "instanceof",
                                        "left": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 81,
                                            "char": 56
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "Resultset",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 81,
                                            "char": 67
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 81,
                                        "char": 67
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 81,
                                    "char": 69
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 81,
                                "char": 69
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 82,
                                            "char": 18
                                        },
                                        "name": "detach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 82,
                                                    "char": 31
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 82,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 82,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 83,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 83,
                                            "char": 18
                                        },
                                        "name": "attach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 83,
                                                    "char": 31
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 83,
                                                "char": 31
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "method",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 84,
                                                                "char": 24
                                                            },
                                                            "value": {
                                                                "type": "string",
                                                                "value": "delete",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 84,
                                                                "char": 32
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 84,
                                                            "char": 32
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "name",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 85,
                                                                "char": 22
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "name",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 86,
                                                                "char": 13
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 86,
                                                            "char": 13
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 86,
                                                    "char": 14
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 86,
                                                "char": 14
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 86,
                                        "char": 15
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 87,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "UnitOfWork: Accept <Model> & <Resultset> only",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 88,
                                                    "char": 78
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 88,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 88,
                                        "char": 79
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 89,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 90,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     * @param \\Phalcon\\Mvc\\Model | \\Phalcon\\Mvc\\Model\\Resultset model\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 79,
                    "last-line": 92,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "attach",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 92,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "info",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 92,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 94,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 94,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 94,
                                    "char": 23
                                },
                                "name": "attach",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 94,
                                            "char": 36
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 94,
                                        "char": 36
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "info",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 94,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 94,
                                        "char": 42
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 94,
                                "char": 43
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 95,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 92,
                    "last-line": 97,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "detach",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 97,
                            "char": 33
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 99,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 99,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 99,
                                    "char": 23
                                },
                                "name": "detach",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 99,
                                            "char": 36
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 99,
                                        "char": 36
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 99,
                                "char": 37
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 100,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 97,
                    "last-line": 102,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "exec",
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "exception",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 104,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 104,
                                    "char": 35
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 105,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "failed",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 105,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 105,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 107,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "txManager",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 107,
                                    "char": 22
                                },
                                {
                                    "variable": "transaction",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 107,
                                    "char": 35
                                },
                                {
                                    "variable": "e",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 107,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 108,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "txManager",
                                    "expr": {
                                        "type": "new",
                                        "class": "TxManager",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 108,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 108,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 110,
                            "char": 17
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "txManager",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 110,
                                    "char": 19
                                },
                                "name": "setDbService",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 110,
                                                "char": 38
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "dbServiceName",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 110,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 110,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 110,
                                        "char": 52
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 110,
                                "char": 53
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 111,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "transaction",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "txManager",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 111,
                                            "char": 37
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 111,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 111,
                                    "char": 43
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 113,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "objects",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 113,
                                    "char": 20
                                },
                                {
                                    "variable": "obj",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 113,
                                    "char": 25
                                },
                                {
                                    "variable": "info",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 113,
                                    "char": 31
                                },
                                {
                                    "variable": "newMethod",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 113,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 114,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "objects",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\SplObjectStorage",
                                        "dynamic": 0,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 114,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 114,
                                    "char": 46
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 115,
                            "char": 15
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "objects",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 115,
                                    "char": 17
                                },
                                "name": "addAll",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 115,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "objects",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 115,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 115,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 115,
                                        "char": 38
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 115,
                                "char": 39
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 116,
                            "char": 15
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "objects",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 116,
                                    "char": 17
                                },
                                "name": "rewind",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 116,
                                "char": 26
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 117,
                            "char": 11
                        },
                        {
                            "type": "try-catch",
                            "statements": [
                                {
                                    "type": "while",
                                    "expr": {
                                        "type": "list",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "objects",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 118,
                                                "char": 27
                                            },
                                            "name": "valid",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 118,
                                            "char": 35
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 118,
                                        "char": 37
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "obj",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "objects",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 119,
                                                            "char": 35
                                                        },
                                                        "name": "current",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 119,
                                                        "char": 45
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 119,
                                                    "char": 45
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 120,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "info",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "objects",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 120,
                                                            "char": 36
                                                        },
                                                        "name": "getInfo",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 120,
                                                        "char": 46
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 120,
                                                    "char": 46
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 122,
                                            "char": 19
                                        },
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "method",
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "info",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 122,
                                                            "char": 34
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "method",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 122,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 122,
                                                        "char": 42
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 122,
                                                    "char": 42
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 122,
                                            "char": 48
                                        },
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "info",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 122,
                                                        "char": 54
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 122,
                                                        "char": 61
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 122,
                                                    "char": 62
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 122,
                                                "char": 63
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 123,
                                            "char": 19
                                        },
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "name",
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "info",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 123,
                                                            "char": 32
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "name",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 123,
                                                            "char": 37
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 123,
                                                        "char": 38
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 123,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 123,
                                            "char": 44
                                        },
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "info",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 123,
                                                        "char": 50
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 123,
                                                        "char": 55
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 123,
                                                    "char": 56
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 123,
                                                "char": 57
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 125,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "instanceof",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "obj",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 125,
                                                    "char": 33
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "\\Phalcon\\Mvc\\Model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 125,
                                                    "char": 54
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 125,
                                                "char": 54
                                            },
                                            "statements": [
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "obj",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 126,
                                                            "char": 25
                                                        },
                                                        "name": "setTransaction",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "transaction",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 126,
                                                                    "char": 52
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 126,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 126,
                                                        "char": 53
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 127,
                                                    "char": 17
                                                }
                                            ],
                                            "elseif_statements": [
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "instanceof",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "obj",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 127,
                                                            "char": 39
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "\\Phalcon\\Mvc\\Model\\Resultset",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 127,
                                                            "char": 70
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 127,
                                                        "char": 70
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "fcall",
                                                            "expr": {
                                                                "type": "fcall",
                                                                "name": "iterator_apply",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "obj",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 128,
                                                                            "char": 39
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 128,
                                                                        "char": 39
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "closure",
                                                                            "left": [
                                                                                {
                                                                                    "type": "parameter",
                                                                                    "name": "iterator",
                                                                                    "const": 0,
                                                                                    "data-type": "variable",
                                                                                    "mandatory": 0,
                                                                                    "cast": {
                                                                                        "type": "variable",
                                                                                        "value": "\\Iterator",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 128,
                                                                                        "char": 69
                                                                                    },
                                                                                    "reference": 0,
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 128,
                                                                                    "char": 70
                                                                                },
                                                                                {
                                                                                    "type": "parameter",
                                                                                    "name": "transaction",
                                                                                    "const": 0,
                                                                                    "data-type": "variable",
                                                                                    "mandatory": 0,
                                                                                    "reference": 0,
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 128,
                                                                                    "char": 83
                                                                                }
                                                                            ],
                                                                            "right": [
                                                                                {
                                                                                    "type": "mcall",
                                                                                    "expr": {
                                                                                        "type": "mcall",
                                                                                        "variable": {
                                                                                            "type": "mcall",
                                                                                            "variable": {
                                                                                                "type": "variable",
                                                                                                "value": "iterator",
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                                "line": 129,
                                                                                                "char": 34
                                                                                            },
                                                                                            "name": "current",
                                                                                            "call-type": 1,
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                            "line": 129,
                                                                                            "char": 45
                                                                                        },
                                                                                        "name": "setTransaction",
                                                                                        "call-type": 1,
                                                                                        "parameters": [
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "variable",
                                                                                                    "value": "transaction",
                                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                                    "line": 129,
                                                                                                    "char": 72
                                                                                                },
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                                "line": 129,
                                                                                                "char": 72
                                                                                            }
                                                                                        ],
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 129,
                                                                                        "char": 73
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 130,
                                                                                    "char": 21
                                                                                }
                                                                            ],
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 130,
                                                                            "char": 22
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 130,
                                                                        "char": 22
                                                                    },
                                                                    {
                                                                        "parameter": {
                                                                            "type": "array",
                                                                            "left": [
                                                                                {
                                                                                    "value": {
                                                                                        "type": "variable",
                                                                                        "value": "obj",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 130,
                                                                                        "char": 28
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 130,
                                                                                    "char": 28
                                                                                },
                                                                                {
                                                                                    "value": {
                                                                                        "type": "variable",
                                                                                        "value": "transaction",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 130,
                                                                                        "char": 41
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 130,
                                                                                    "char": 41
                                                                                }
                                                                            ],
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 130,
                                                                            "char": 42
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 130,
                                                                        "char": 42
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 130,
                                                                "char": 43
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 131,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 133,
                                                    "char": 19
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 133,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "newMethod",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "exec",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 133,
                                                            "char": 37
                                                        },
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "ucfirst",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "method",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 133,
                                                                        "char": 52
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 133,
                                                                    "char": 52
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 133,
                                                            "char": 53
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 133,
                                                        "char": 53
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 133,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 134,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "equals",
                                                "left": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 134,
                                                        "char": 25
                                                    },
                                                    "name": "newMethod",
                                                    "call-type": 2,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "obj",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 134,
                                                                "char": 41
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 134,
                                                            "char": 41
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "info",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 134,
                                                                "char": 47
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 134,
                                                            "char": 47
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 134,
                                                    "char": 50
                                                },
                                                "right": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 134,
                                                    "char": 58
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 134,
                                                "char": 58
                                            },
                                            "statements": [
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "transaction",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 135,
                                                            "char": 33
                                                        },
                                                        "name": "rollback",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "concat",
                                                                            "left": {
                                                                                "type": "concat",
                                                                                "left": {
                                                                                    "type": "concat",
                                                                                    "left": {
                                                                                        "type": "string",
                                                                                        "value": "Model exec failed: ",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 135,
                                                                                        "char": 63
                                                                                    },
                                                                                    "right": {
                                                                                        "type": "variable",
                                                                                        "value": "name",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 135,
                                                                                        "char": 70
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 135,
                                                                                    "char": 70
                                                                                },
                                                                                "right": {
                                                                                    "type": "string",
                                                                                    "value": ":",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 135,
                                                                                    "char": 74
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                "line": 135,
                                                                                "char": 74
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "newMethod",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                "line": 135,
                                                                                "char": 86
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 135,
                                                                            "char": 86
                                                                        },
                                                                        "right": {
                                                                            "type": "string",
                                                                            "value": ". Model Exception: ",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 136,
                                                                            "char": 65
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 136,
                                                                        "char": 65
                                                                    },
                                                                    "right": {
                                                                        "type": "fcall",
                                                                        "name": "json_encode",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "mcall",
                                                                                    "variable": {
                                                                                        "type": "variable",
                                                                                        "value": "obj",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 136,
                                                                                        "char": 83
                                                                                    },
                                                                                    "name": "getMessages",
                                                                                    "call-type": 1,
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 136,
                                                                                    "char": 97
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                "line": 136,
                                                                                "char": 97
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 136,
                                                                        "char": 98
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 136,
                                                                    "char": 98
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 136,
                                                                "char": 98
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 136,
                                                        "char": 99
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 137,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 138,
                                            "char": 23
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "objects",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 138,
                                                    "char": 25
                                                },
                                                "name": "next",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 138,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 139,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 140,
                                    "char": 23
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "transaction",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 140,
                                            "char": 25
                                        },
                                        "name": "commit",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 140,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 141,
                                    "char": 9
                                }
                            ],
                            "catches": [
                                {
                                    "classes": [
                                        {
                                            "type": "variable",
                                            "value": "TxFailed",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 141,
                                            "char": 25
                                        }
                                    ],
                                    "variable": {
                                        "type": "variable",
                                        "value": "e",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 147,
                                        "char": 15
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "failed",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "obj",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 142,
                                                        "char": 35
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 142,
                                                    "char": 35
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 143,
                                            "char": 15
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "exception",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "e",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 143,
                                                        "char": 36
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 143,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 144,
                                            "char": 19
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "objects",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 144,
                                                    "char": 21
                                                },
                                                "name": "removeAll",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 144,
                                                                "char": 37
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "objects",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 144,
                                                                "char": 45
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 144,
                                                            "char": 45
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 144,
                                                        "char": 45
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 144,
                                                "char": 46
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 145,
                                            "char": 18
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 145,
                                                "char": 25
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 146,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 147,
                                    "char": 15
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 147,
                            "char": 15
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "objects",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 147,
                                    "char": 17
                                },
                                "name": "removeAll",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 147,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "objects",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 147,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 147,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 147,
                                        "char": 41
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 147,
                                "char": 42
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 148,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 148,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 149,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 103,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                        "line": 103,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 128,
                    "last-line": 151,
                    "char": 48
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "execInsert",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\Mvc\\Model",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 151,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 151,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "info",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 151,
                            "char": 70
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "initial_data",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 153,
                                    "char": 25
                                },
                                {
                                    "variable": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 153,
                                    "char": 33
                                },
                                {
                                    "variable": "last_insert_id",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 153,
                                    "char": 49
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 154,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "initial_data",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "info",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 154,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "initial_data",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 154,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 154,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 154,
                                    "char": 46
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 156,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "variable",
                                            "value": "initial_data",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 156,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 156,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 156,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 156,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "col",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 157,
                                            "char": 20
                                        },
                                        {
                                            "variable": "val",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 157,
                                            "char": 25
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 158,
                                    "char": 15
                                },
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "initial_data",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 158,
                                        "char": 42
                                    },
                                    "key": "col",
                                    "value": "val",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "and",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "is_object",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 159,
                                                                "char": 33
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 159,
                                                            "char": 33
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 159,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "instanceof",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 159,
                                                        "char": 51
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "AbstractValue",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 159,
                                                        "char": 67
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 159,
                                                    "char": 67
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 159,
                                                "char": 67
                                            },
                                            "statements": [
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "instanceof",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "val",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 160,
                                                            "char": 37
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "\\PhalconPlus\\Db\\UnitOfWork\\LastInsertId",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 160,
                                                            "char": 79
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 160,
                                                        "char": 79
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "array-index",
                                                                    "operator": "assign",
                                                                    "variable": "initial_data",
                                                                    "index-expr": [
                                                                        {
                                                                            "type": "variable",
                                                                            "value": "col",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 161,
                                                                            "char": 45
                                                                        }
                                                                    ],
                                                                    "expr": {
                                                                        "type": "mcall",
                                                                        "variable": {
                                                                            "type": "variable",
                                                                            "value": "val",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 161,
                                                                            "char": 53
                                                                        },
                                                                        "name": "getValue",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "variable",
                                                                                    "value": "this",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 161,
                                                                                    "char": 67
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                "line": 161,
                                                                                "char": 67
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 161,
                                                                        "char": 68
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 161,
                                                                    "char": 68
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 162,
                                                            "char": 21
                                                        }
                                                    ],
                                                    "elseif_statements": [
                                                        {
                                                            "type": "if",
                                                            "expr": {
                                                                "type": "instanceof",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "val",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 162,
                                                                    "char": 43
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "\\PhalconPlus\\Db\\UnitOfWork\\Field",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 162,
                                                                    "char": 78
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 162,
                                                                "char": 78
                                                            },
                                                            "statements": [
                                                                {
                                                                    "type": "let",
                                                                    "assignments": [
                                                                        {
                                                                            "assign-type": "array-index",
                                                                            "operator": "assign",
                                                                            "variable": "initial_data",
                                                                            "index-expr": [
                                                                                {
                                                                                    "type": "variable",
                                                                                    "value": "col",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 163,
                                                                                    "char": 45
                                                                                }
                                                                            ],
                                                                            "expr": {
                                                                                "type": "mcall",
                                                                                "variable": {
                                                                                    "type": "variable",
                                                                                    "value": "val",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                    "line": 163,
                                                                                    "char": 53
                                                                                },
                                                                                "name": "getField",
                                                                                "call-type": 1,
                                                                                "parameters": [
                                                                                    {
                                                                                        "parameter": {
                                                                                            "type": "variable",
                                                                                            "value": "this",
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                            "line": 163,
                                                                                            "char": 67
                                                                                        },
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                        "line": 163,
                                                                                        "char": 67
                                                                                    }
                                                                                ],
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                                "line": 163,
                                                                                "char": 68
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 163,
                                                                            "char": 68
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 164,
                                                                    "char": 21
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 165,
                                                            "char": 17
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 165,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 166,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 167,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "result",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 167,
                                                    "char": 32
                                                },
                                                "name": "create",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "initial_data",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 167,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 167,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 167,
                                                "char": 53
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 167,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 168,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "result",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 169,
                                                    "char": 32
                                                },
                                                "name": "create",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 169,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 169,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 170,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 171,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 171,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 171,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 171,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "last_insert_id",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "model",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 172,
                                                        "char": 40
                                                    },
                                                    "name": "getWriteConnection",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 172,
                                                    "char": 62
                                                },
                                                "name": "lastInsertId",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 172,
                                                "char": 77
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 172,
                                            "char": 77
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 173,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 173,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "inserted",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 173,
                                                "char": 28
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 173,
                                            "char": 28
                                        },
                                        "name": "attach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 173,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 173,
                                                "char": 41
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "last_insert_id",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 174,
                                                                "char": 32
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "last_insert_id",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 175,
                                                                "char": 13
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 175,
                                                            "char": 13
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 175,
                                                    "char": 14
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 175,
                                                "char": 14
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 175,
                                        "char": 15
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 176,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 177,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "result",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 177,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 178,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 151,
                    "last-line": 180,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "execUpdate",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 180,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "info",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 180,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 180,
                            "char": 58
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 182,
                                    "char": 19
                                },
                                {
                                    "variable": "initial_data",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 182,
                                    "char": 33
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 184,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "initial_data",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "info",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 184,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "initial_data",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 184,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 184,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 184,
                                    "char": 46
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 185,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "list",
                                        "left": {
                                            "type": "variable",
                                            "value": "initial_data",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 185,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 185,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 185,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 185,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "col",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 186,
                                            "char": 20
                                        },
                                        {
                                            "variable": "val",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 186,
                                            "char": 25
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 187,
                                    "char": 15
                                },
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "initial_data",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 187,
                                        "char": 42
                                    },
                                    "key": "col",
                                    "value": "val",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "and",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "is_object",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 188,
                                                                "char": 33
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 188,
                                                            "char": 33
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 188,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "instanceof",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 188,
                                                        "char": 51
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "AbstractValue",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 188,
                                                        "char": 67
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 188,
                                                    "char": 67
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 188,
                                                "char": 67
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index",
                                                            "operator": "assign",
                                                            "variable": "initial_data",
                                                            "index-expr": [
                                                                {
                                                                    "type": "variable",
                                                                    "value": "col",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 189,
                                                                    "char": 41
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "val",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                    "line": 189,
                                                                    "char": 49
                                                                },
                                                                "name": "getValue",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                            "line": 189,
                                                                            "char": 63
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                        "line": 189,
                                                                        "char": 63
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 189,
                                                                "char": 64
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 189,
                                                            "char": 64
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 189,
                                                    "char": 65
                                                },
                                                {
                                                    "type": "empty",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 190,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 191,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 192,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "result",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 192,
                                                    "char": 32
                                                },
                                                "name": "update",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "initial_data",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 192,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                        "line": 192,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 192,
                                                "char": 53
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 192,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 193,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "result",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 194,
                                                    "char": 32
                                                },
                                                "name": "update",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 194,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 194,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 195,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 196,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 196,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 196,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 196,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 197,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "updated",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 197,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 197,
                                            "char": 27
                                        },
                                        "name": "attach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 197,
                                                    "char": 40
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 197,
                                                "char": 40
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "updated_data",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 198,
                                                                "char": 29
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "initial_data",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                                "line": 199,
                                                                "char": 13
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                            "line": 199,
                                                            "char": 13
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 199,
                                                    "char": 14
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 199,
                                                "char": 14
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 199,
                                        "char": 15
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 200,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 201,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "result",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 201,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 202,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 180,
                    "last-line": 204,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "execDelete",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "model",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 204,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "info",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 204,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 204,
                            "char": 58
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "result",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "model",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 206,
                                            "char": 28
                                        },
                                        "name": "delete",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 206,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 206,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 207,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "result",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 207,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 207,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 207,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 208,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "deleted",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 208,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                            "line": 208,
                                            "char": 27
                                        },
                                        "name": "attach",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "model",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                    "line": 208,
                                                    "char": 40
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                                "line": 208,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 208,
                                        "char": 41
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 209,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 210,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "result",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 210,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 211,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 204,
                    "last-line": 213,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getObjects",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "clone",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 215,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "objects",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 215,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 215,
                                    "char": 35
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 215,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 216,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 213,
                    "last-line": 218,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getInserted",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "clone",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 220,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "inserted",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 220,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 220,
                                    "char": 36
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 220,
                                "char": 36
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 221,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 218,
                    "last-line": 223,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getUpdated",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "clone",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 225,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "updated",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 225,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 225,
                                    "char": 35
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 225,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 226,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 223,
                    "last-line": 228,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDeleted",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "clone",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 230,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "deleted",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                        "line": 230,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 230,
                                    "char": 35
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 230,
                                "char": 35
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 231,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 228,
                    "last-line": 233,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getException",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 235,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "exception",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 235,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 235,
                                "char": 31
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 236,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 233,
                    "last-line": 238,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getFailed",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 240,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "failed",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                    "line": 240,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                                "line": 240,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                            "line": 241,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
                    "line": 238,
                    "last-line": 242,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
            "line": 11,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Db\/UnitOfWork.zep",
        "line": 11,
        "char": 5
    }
]