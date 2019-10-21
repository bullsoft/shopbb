[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Rpc\\Client\\Adapter",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Rpc\\Client\\AbstractClient",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                "line": 2,
                "char": 42
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "Remote",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractClient",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "remoteServerUrl",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                    "line": 7,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "client",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                    "line": 9,
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
                            "name": "remoteServerUrl",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 9,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "opts",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                "line": 9,
                                "char": 71
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 9,
                            "char": 71
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "remoteServerUrl",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 11,
                                    "char": 34
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                "line": 11,
                                "char": 34
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
                                                    "value": "server url can not be empty",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 12,
                                                    "char": 78
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 12,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 12,
                                        "char": 79
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 13,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 14,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "key",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 14,
                                    "char": 16
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 15,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "key",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_rand",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "remoteServerUrl",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 15,
                                                    "char": 45
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 15,
                                                "char": 45
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 15,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 15,
                                    "char": 46
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 16,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "remoteServerUrl",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "remoteServerUrl",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 16,
                                            "char": 52
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 16,
                                            "char": 56
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 16,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 16,
                                    "char": 57
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 17,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "client",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Yar_Client",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                        "line": 17,
                                                        "char": 49
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "remoteServerUrl",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                        "line": 17,
                                                        "char": 65
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 17,
                                                    "char": 65
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 17,
                                                "char": 65
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 17,
                                        "char": 66
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 17,
                                    "char": 66
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 19,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "opts",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 19,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 19,
                                    "char": 24
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                "line": 19,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "optKey",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 20,
                                            "char": 23
                                        },
                                        {
                                            "variable": "optVal",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 20,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 21,
                                    "char": 15
                                },
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "opts",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 21,
                                        "char": 40
                                    },
                                    "key": "optKey",
                                    "value": "optVal",
                                    "reverse": 0,
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
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                        "line": 22,
                                                        "char": 22
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "client",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                        "line": 22,
                                                        "char": 30
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 22,
                                                    "char": 30
                                                },
                                                "name": "setOpt",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "optKey",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                            "line": 22,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                        "line": 22,
                                                        "char": 44
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "optVal",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                            "line": 22,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                        "line": 22,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 22,
                                                "char": 53
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 23,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 24,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                    "line": 9,
                    "last-line": 27,
                    "char": 19
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
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 27,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 29,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "client",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 29,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 29,
                                    "char": 29
                                },
                                "name": "callByObject",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "rawData",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 29,
                                            "char": 50
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 29,
                                        "char": 50
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                "line": 29,
                                "char": 51
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 30,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                    "line": 27,
                    "last-line": 32,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__call",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "method",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 32,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "args",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 32,
                            "char": 54
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "method_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 34,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "client",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 34,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 34,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 34,
                                        "char": 38
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "method",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                            "line": 34,
                                            "char": 46
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 34,
                                        "char": 46
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                "line": 34,
                                "char": 48
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
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
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                                    "line": 36,
                                                                    "char": 47
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "client",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                                    "line": 36,
                                                                    "char": 54
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                                "line": 36,
                                                                "char": 54
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                            "line": 36,
                                                            "char": 54
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "method",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                                "line": 36,
                                                                "char": 62
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                            "line": 36,
                                                            "char": 62
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 36,
                                                    "char": 63
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 36,
                                                "char": 63
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "args",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 36,
                                                    "char": 69
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 36,
                                                "char": 69
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 36,
                                        "char": 70
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 37,
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
                                                    "type": "string",
                                                    "value": "method not exists",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                    "line": 38,
                                                    "char": 68
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                                "line": 38,
                                                "char": 68
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                        "line": 38,
                                        "char": 69
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                                    "line": 39,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                            "line": 40,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
                    "line": 32,
                    "last-line": 42,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Rpc\/Client\/Adapter\/Remote.zep",
        "line": 4,
        "char": 5
    }
]