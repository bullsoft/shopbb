[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Rpc\\Server",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Base\\ProtoBuffer",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                "line": 2,
                "char": 33
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
        "line": 4,
        "char": 8
    },
    {
        "type": "class",
        "name": "AbstractServer",
        "abstract": 1,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "di",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                        "line": 6,
                        "char": 25
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 8,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                    "line": 10,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "phpOnly",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                        "line": 10,
                        "char": 31
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 12,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                    "line": 14,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "eventsManager",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                        "line": 14,
                        "char": 35
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                    "line": 16,
                    "char": 12
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "abstract",
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "di",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\DI",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 16,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 16,
                            "char": 58
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                    "line": 16,
                    "last-line": 18,
                    "char": 28
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "callByParams",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "service",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 18,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "method",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 18,
                            "char": 68
                        },
                        {
                            "type": "parameter",
                            "name": "request",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 18,
                            "char": 77
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "serviceClass",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 20,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 20,
                                    "char": 28
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 21,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "serviceClass",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "service",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 21,
                                                "char": 36
                                            },
                                            "name": "upperfirst",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 21,
                                            "char": 50
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "Service",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 21,
                                            "char": 59
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 21,
                                        "char": 59
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 21,
                                    "char": 59
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 23,
                            "char": 10
                        },
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
                                                "value": "request",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 23,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 23,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 23,
                                    "char": 32
                                },
                                "right": {
                                    "type": "instanceof",
                                    "left": {
                                        "type": "variable",
                                        "value": "request",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 23,
                                        "char": 51
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "ProtoBuffer",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 23,
                                        "char": 65
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 23,
                                    "char": 65
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 23,
                                "char": 65
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "phpOnly",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 24,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 24,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 25,
                                    "char": 9
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "is_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 25,
                                                    "char": 34
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 25,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 25,
                                        "char": 36
                                    },
                                    "statements": [
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "tmp",
                                                    "expr": {
                                                        "type": "empty-array",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 26,
                                                        "char": 25
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 26,
                                                    "char": 25
                                                },
                                                {
                                                    "variable": "param",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 26,
                                                    "char": 32
                                                },
                                                {
                                                    "variable": "paramClass",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 26,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 27,
                                            "char": 15
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "tmp",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 27,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 27,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 28,
                                            "char": 15
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "param",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\ReflectionParameter",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "array",
                                                                    "left": [
                                                                        {
                                                                            "value": {
                                                                                "type": "variable",
                                                                                "value": "serviceClass",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 28,
                                                                                "char": 63
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 28,
                                                                            "char": 63
                                                                        },
                                                                        {
                                                                            "value": {
                                                                                "type": "variable",
                                                                                "value": "method",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 28,
                                                                                "char": 71
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 28,
                                                                            "char": 71
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 28,
                                                                    "char": 72
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 28,
                                                                "char": 72
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "int",
                                                                    "value": "0",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 28,
                                                                    "char": 75
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 28,
                                                                "char": 75
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 28,
                                                        "char": 76
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 28,
                                                    "char": 76
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 29,
                                            "char": 14
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "param",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 29,
                                                    "char": 22
                                                },
                                                "name": "getClass",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 29,
                                                "char": 34
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "paramClass",
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "variable",
                                                                        "value": "param",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 30,
                                                                        "char": 40
                                                                    },
                                                                    "name": "getClass",
                                                                    "call-type": 1,
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 30,
                                                                    "char": 52
                                                                },
                                                                "name": "getName",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 30,
                                                                "char": 62
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 30,
                                                            "char": 62
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 31,
                                                    "char": 19
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "request",
                                                            "expr": {
                                                                "type": "new",
                                                                "class": "paramClass",
                                                                "dynamic": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 31,
                                                                "char": 49
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 31,
                                                            "char": 49
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 32,
                                                    "char": 23
                                                },
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "request",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 32,
                                                            "char": 25
                                                        },
                                                        "name": "softClone",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "tmp",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 32,
                                                                    "char": 39
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 32,
                                                                "char": 39
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 32,
                                                        "char": 40
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 33,
                                                    "char": 13
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "throw",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\PhalconPlus\\Base\\Exception",
                                                        "dynamic": 0,
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
                                                                                        "value": "Service class:method definition is invalid. Detail: ",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                        "line": 34,
                                                                                        "char": 108
                                                                                    },
                                                                                    "right": {
                                                                                        "type": "variable",
                                                                                        "value": "service",
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                        "line": 34,
                                                                                        "char": 118
                                                                                    },
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                    "line": 34,
                                                                                    "char": 118
                                                                                },
                                                                                "right": {
                                                                                    "type": "string",
                                                                                    "value": " : ",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                    "line": 34,
                                                                                    "char": 124
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 34,
                                                                                "char": 124
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "method",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 34,
                                                                                "char": 133
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 34,
                                                                            "char": 133
                                                                        },
                                                                        "right": {
                                                                            "type": "string",
                                                                            "value": ". Request: ",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 34,
                                                                            "char": 147
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 34,
                                                                        "char": 147
                                                                    },
                                                                    "right": {
                                                                        "type": "fcall",
                                                                        "name": "json_encode",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "variable",
                                                                                    "value": "request",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                    "line": 34,
                                                                                    "char": 168
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 34,
                                                                                "char": 168
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 34,
                                                                        "char": 169
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 34,
                                                                    "char": 169
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 34,
                                                                "char": 169
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 34,
                                                        "char": 170
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 35,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 36,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 36,
                                    "char": 14
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "Your input is not allowed. Request: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 37,
                                                        "char": 88
                                                    },
                                                    "right": {
                                                        "type": "fcall",
                                                        "name": "json_encode",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "request",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 37,
                                                                    "char": 109
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 37,
                                                                "char": 109
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 37,
                                                        "char": 110
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 37,
                                                    "char": 110
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 37,
                                                "char": 110
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 37,
                                        "char": 111
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 38,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 40,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "serviceObj",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 40,
                                    "char": 23
                                },
                                {
                                    "variable": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 40,
                                    "char": 33
                                },
                                {
                                    "variable": "e",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 40,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "serviceObj",
                                    "expr": {
                                        "type": "new",
                                        "class": "serviceClass",
                                        "dynamic": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 41,
                                                        "char": 50
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "di",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 41,
                                                        "char": 53
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 41,
                                                    "char": 53
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 41,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 41,
                                        "char": 54
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 41,
                                    "char": 54
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 43,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_callable",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "serviceObj",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 43,
                                                        "char": 35
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 43,
                                                    "char": 35
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 43,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 43,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 43,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 43,
                                        "char": 44
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 43,
                                "char": 46
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
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 44,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "eventsManager",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 44,
                                                "char": 33
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 44,
                                            "char": 33
                                        },
                                        "name": "fire",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "backend-server:beforeExecute",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 44,
                                                    "char": 67
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 44,
                                                "char": 67
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 44,
                                                    "char": 73
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 44,
                                                "char": 73
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "service",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 44,
                                                                "char": 83
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 44,
                                                            "char": 83
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "method",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 44,
                                                                "char": 91
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 44,
                                                            "char": 91
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "request",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 44,
                                                                "char": 100
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 44,
                                                            "char": 100
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 44,
                                                    "char": 101
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 44,
                                                "char": 101
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 44,
                                        "char": 102
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 45,
                                    "char": 15
                                },
                                {
                                    "type": "try-catch",
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "response",
                                                    "expr": {
                                                        "type": "type-hint",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "ProtoBuffer",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 46,
                                                            "char": 99
                                                        },
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "call_user_func_array",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "array",
                                                                        "left": [
                                                                            {
                                                                                "value": {
                                                                                    "type": "variable",
                                                                                    "value": "serviceObj",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                    "line": 46,
                                                                                    "char": 78
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 46,
                                                                                "char": 78
                                                                            },
                                                                            {
                                                                                "value": {
                                                                                    "type": "variable",
                                                                                    "value": "method",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                    "line": 46,
                                                                                    "char": 86
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 46,
                                                                                "char": 86
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 46,
                                                                        "char": 87
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 46,
                                                                    "char": 87
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "array",
                                                                        "left": [
                                                                            {
                                                                                "value": {
                                                                                    "type": "variable",
                                                                                    "value": "request",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                    "line": 46,
                                                                                    "char": 97
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 46,
                                                                                "char": 97
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 46,
                                                                        "char": 98
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 46,
                                                                    "char": 98
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 46,
                                                            "char": 99
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 46,
                                                        "char": 99
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 46,
                                                    "char": 99
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 47,
                                            "char": 13
                                        }
                                    ],
                                    "catches": [
                                        {
                                            "classes": [
                                                {
                                                    "type": "variable",
                                                    "value": "\\Exception",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 47,
                                                    "char": 31
                                                }
                                            ],
                                            "variable": {
                                                "type": "variable",
                                                "value": "e",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 50,
                                                "char": 16
                                            },
                                            "statements": [
                                                {
                                                    "type": "throw",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "e",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 48,
                                                        "char": 24
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 49,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 50,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 50,
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
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 50,
                                                "char": 18
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "eventsManager",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 50,
                                                "char": 33
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 50,
                                            "char": 33
                                        },
                                        "name": "fire",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "backend-server:afterExecute",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 50,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 50,
                                                "char": 66
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 50,
                                                    "char": 72
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 50,
                                                "char": 72
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "service",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 50,
                                                                "char": 82
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 50,
                                                            "char": 82
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "method",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 50,
                                                                "char": 90
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 50,
                                                            "char": 90
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "request",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 50,
                                                                "char": 99
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 50,
                                                            "char": 99
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 50,
                                                    "char": 100
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 50,
                                                "char": 100
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 50,
                                        "char": 101
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 52,
                                    "char": 14
                                },
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
                                                        "value": "response",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 52,
                                                        "char": 34
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 52,
                                                    "char": 34
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 52,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "not",
                                            "left": {
                                                "type": "list",
                                                "left": {
                                                    "type": "instanceof",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "response",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 52,
                                                        "char": 59
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ProtoBuffer",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 52,
                                                        "char": 72
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 52,
                                                    "char": 72
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 52,
                                                "char": 74
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 52,
                                            "char": 74
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 52,
                                        "char": 74
                                    },
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\PhalconPlus\\Base\\Exception",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "string",
                                                                    "value": "Your output is not allowed. Response: ",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 53,
                                                                    "char": 94
                                                                },
                                                                "right": {
                                                                    "type": "fcall",
                                                                    "name": "get_class",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "response",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                                "line": 53,
                                                                                "char": 114
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 53,
                                                                            "char": 114
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 53,
                                                                    "char": 116
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 53,
                                                                "char": 116
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ". We expect scalar type or <ProtoBuffer>",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 53,
                                                                "char": 158
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 53,
                                                            "char": 158
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 53,
                                                        "char": 158
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 53,
                                                "char": 159
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 54,
                                            "char": 13
                                        }
                                    ],
                                    "elseif_statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "is_resource",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "response",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 54,
                                                            "char": 42
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 54,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 54,
                                                "char": 44
                                            },
                                            "statements": [
                                                {
                                                    "type": "throw",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\PhalconPlus\\Base\\Exception",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "Your output is not allowed. Response: #Resource.",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 55,
                                                                    "char": 103
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 55,
                                                                "char": 103
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 55,
                                                        "char": 104
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 56,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 58,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 58,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 58,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "phpOnly",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 58,
                                                    "char": 31
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 58,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 58,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 58,
                                            "char": 40
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "is_object",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "response",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 58,
                                                        "char": 60
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 58,
                                                    "char": 60
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 58,
                                            "char": 62
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 58,
                                        "char": 62
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "response",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 59,
                                                    "char": 33
                                                },
                                                "name": "toArray",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 59,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 60,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 61,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "response",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 61,
                                        "char": 28
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 62,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "Service:method not found. Detail: ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 63,
                                                                "char": 86
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "service",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 63,
                                                                "char": 96
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 63,
                                                            "char": 96
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": " : ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 63,
                                                            "char": 102
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 63,
                                                        "char": 102
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 63,
                                                        "char": 110
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 63,
                                                    "char": 110
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 63,
                                                "char": 110
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 63,
                                        "char": 111
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 64,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 65,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                    "line": 18,
                    "last-line": 76,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "callByObject",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "rawData",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 77,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "service",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 79,
                                    "char": 20
                                },
                                {
                                    "variable": "method",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 79,
                                    "char": 28
                                },
                                {
                                    "variable": "request",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 79,
                                    "char": 37
                                },
                                {
                                    "variable": "response",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 79,
                                    "char": 47
                                },
                                {
                                    "variable": "logId",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 79,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 79,
                                    "char": 57
                                },
                                {
                                    "variable": "message",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 79,
                                        "char": 69
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 79,
                                    "char": 69
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 81,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "service",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 81,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "rawData",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 81,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "service",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 81,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 81,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 81,
                                    "char": 45
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 81,
                                "char": 45
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "service ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 82,
                                                            "char": 60
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "service",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 82,
                                                            "char": 70
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 82,
                                                        "char": 70
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " not exists",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 82,
                                                        "char": 83
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 82,
                                                    "char": 83
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 82,
                                                "char": 83
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 82,
                                        "char": 84
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 85,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "method",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 85,
                                        "char": 43
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "rawData",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 85,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "method",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 85,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 85,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 85,
                                    "char": 43
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 85,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "method ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 86,
                                                            "char": 59
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "method",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 86,
                                                            "char": 68
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 86,
                                                        "char": 68
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " not exists",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 86,
                                                        "char": 81
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 86,
                                                    "char": 81
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 86,
                                                "char": 81
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 86,
                                        "char": 82
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 87,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 89,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "request",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 89,
                                        "char": 42
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "rawData",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 89,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "args",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 89,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 89,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 89,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 89,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "args not exists",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 90,
                                                    "char": 66
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 90,
                                                "char": 66
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 90,
                                        "char": 67
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 91,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 93,
                            "char": 12
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 93,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "eventsManager",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 93,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 93,
                                    "char": 29
                                },
                                "name": "fire",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "backend-server:requestCheck",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 93,
                                            "char": 62
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 93,
                                        "char": 62
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 93,
                                            "char": 68
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 93,
                                        "char": 68
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "service",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 93,
                                                        "char": 78
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 93,
                                                    "char": 78
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 93,
                                                        "char": 86
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 93,
                                                    "char": 86
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "rawData",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 93,
                                                        "char": 95
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 93,
                                                    "char": 95
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 93,
                                            "char": 96
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 93,
                                        "char": 96
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 93,
                                "char": 97
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 95,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "service",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "trim",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "service",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 95,
                                                    "char": 35
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 95,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 95,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 95,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 96,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "method",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "trim",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "method",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 96,
                                                    "char": 33
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 96,
                                                "char": 33
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 96,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 96,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 98,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "service",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 98,
                                        "char": 27
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 98,
                                    "char": 27
                                },
                                "right": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "method",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 98,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 98,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 98,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\PhalconPlus\\Base\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "service:method(args) must exists. All of them!!!",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 99,
                                                    "char": 99
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 99,
                                                "char": 99
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 99,
                                        "char": 100
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 100,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 102,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "logId",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 102,
                                    "char": 40
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "rawData",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 102,
                                        "char": 32
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "logId",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 102,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 102,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 102,
                                "char": 40
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 106,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 106,
                                        "char": 17
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 106,
                                        "char": 21
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 106,
                                    "char": 21
                                },
                                "name": "has",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "logger",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 106,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 106,
                                        "char": 32
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 106,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "message",
                                            "expr": {
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
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "RPC Request - logId: ",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 107,
                                                                            "char": 49
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "logId",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 107,
                                                                            "char": 57
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 107,
                                                                        "char": 57
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": ", invoke: ",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 107,
                                                                        "char": 70
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 107,
                                                                    "char": 70
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "service",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 107,
                                                                    "char": 80
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 107,
                                                                "char": 80
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "::",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 107,
                                                                "char": 85
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 107,
                                                            "char": 85
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "method",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 107,
                                                            "char": 94
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 107,
                                                        "char": 94
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": ", args: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 107,
                                                        "char": 105
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 107,
                                                    "char": 105
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "json_encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "request",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 107,
                                                                "char": 126
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 107,
                                                            "char": 126
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 107,
                                                    "char": 127
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 107,
                                                "char": 127
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 107,
                                            "char": 127
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 108,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 108,
                                                    "char": 18
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "di",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 108,
                                                    "char": 22
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 108,
                                                "char": 22
                                            },
                                            "name": "get",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "logger",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 108,
                                                        "char": 33
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 108,
                                                    "char": 33
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 108,
                                            "char": 35
                                        },
                                        "name": "log",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 108,
                                                    "char": 47
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 108,
                                                "char": 47
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 108,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 109,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 111,
                            "char": 12
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 111,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "eventsManager",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 111,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 111,
                                    "char": 29
                                },
                                "name": "fire",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "backend-server:beforeDispatch",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 111,
                                            "char": 64
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 111,
                                        "char": 64
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 111,
                                            "char": 70
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 111,
                                        "char": 70
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "service",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 111,
                                                        "char": 80
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 111,
                                                    "char": 80
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 111,
                                                        "char": 88
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 111,
                                                    "char": 88
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 111,
                                                        "char": 97
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 111,
                                                    "char": 97
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 111,
                                            "char": 98
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 111,
                                        "char": 98
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 111,
                                "char": 99
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 112,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "response",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 112,
                                            "char": 29
                                        },
                                        "name": "callByParams",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "service",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 112,
                                                    "char": 50
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 112,
                                                "char": 50
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "method",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 112,
                                                    "char": 58
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 112,
                                                "char": 58
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "request",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 112,
                                                    "char": 67
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 112,
                                                "char": 67
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 112,
                                        "char": 68
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 112,
                                    "char": 68
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 113,
                            "char": 12
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
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 113,
                                        "char": 14
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "eventsManager",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 113,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 113,
                                    "char": 29
                                },
                                "name": "fire",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "backend-server:afterDispatch",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 113,
                                            "char": 63
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 113,
                                        "char": 63
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 113,
                                            "char": 69
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 113,
                                        "char": 69
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "service",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 113,
                                                        "char": 79
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 113,
                                                    "char": 79
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "method",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 113,
                                                        "char": 87
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 113,
                                                    "char": 87
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "request",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 113,
                                                        "char": 96
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 113,
                                                    "char": 96
                                                },
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "response",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 113,
                                                        "char": 106
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 113,
                                                    "char": 106
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 113,
                                            "char": 107
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 113,
                                        "char": 107
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 113,
                                "char": 108
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 115,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 115,
                                        "char": 17
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "di",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 115,
                                        "char": 21
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 115,
                                    "char": 21
                                },
                                "name": "has",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "logger",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 115,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 115,
                                        "char": 32
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 115,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "message",
                                            "expr": {
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
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "RPC Response - logId: ",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 116,
                                                                            "char": 50
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "logId",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                            "line": 116,
                                                                            "char": 58
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 116,
                                                                        "char": 58
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": ", invoke: ",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                        "line": 116,
                                                                        "char": 71
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 116,
                                                                    "char": 71
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "service",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                    "line": 116,
                                                                    "char": 81
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 116,
                                                                "char": 81
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "::",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 116,
                                                                "char": 86
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 116,
                                                            "char": 86
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "method",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 116,
                                                            "char": 95
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 116,
                                                        "char": 95
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": ", response: ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 116,
                                                        "char": 110
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 116,
                                                    "char": 110
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "json_encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "response",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                                "line": 116,
                                                                "char": 132
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                            "line": 116,
                                                            "char": 132
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 116,
                                                    "char": 133
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 116,
                                                "char": 133
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 116,
                                            "char": 133
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 117,
                                    "char": 16
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 117,
                                                    "char": 18
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "di",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 117,
                                                    "char": 22
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 117,
                                                "char": 22
                                            },
                                            "name": "get",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "logger",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                        "line": 117,
                                                        "char": 33
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 117,
                                                    "char": 33
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                            "line": 117,
                                            "char": 35
                                        },
                                        "name": "log",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                    "line": 117,
                                                    "char": 47
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                                "line": 117,
                                                "char": 47
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                        "line": 117,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                    "line": 118,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 120,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "response",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                                "line": 120,
                                "char": 24
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                            "line": 121,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n     *\n     * @param array rawData\n     * <code>\n     *     rawData = [\"service\":\"Demo\", \"method\":\"demo\", \"args\": <ProtoBuffer>, \"logId\": \"234fdfaf3334\"]\n     * <\/code>\n     * @return <ProtoBuffer>\n     * @throw \\Exception\n     *\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
                    "line": 77,
                    "last-line": 122,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
            "line": 4,
            "char": 14
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Server\/AbstractServer.zep",
        "line": 4,
        "char": 14
    }
]