[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Volt\\Extension",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "PhpFunction",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "ns",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                        "line": 6,
                        "char": 18
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                    "line": 8,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "func",
                    "default": {
                        "type": "string",
                        "value": "__invoke__",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                        "line": 8,
                        "char": 30
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                    "line": 10,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setCustNamespace",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "ns",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 10,
                            "char": 48
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
                                    "property": "ns",
                                    "expr": {
                                        "type": "variable",
                                        "value": "ns",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 12,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 12,
                                    "char": 26
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 13,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                    "line": 10,
                    "last-line": 15,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setCustFuncName",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "func",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 15,
                            "char": 49
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
                                        "value": "func",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 17,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 17,
                                    "char": 24
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                "line": 17,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "func",
                                            "expr": {
                                                "type": "variable",
                                                "value": "func",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 18,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 18,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 19,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 20,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                    "line": 15,
                    "last-line": 22,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "compileFunction",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "params",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 24,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 24,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 25,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "name",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 25,
                                    "char": 17
                                },
                                {
                                    "variable": "args",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 25,
                                    "char": 23
                                },
                                {
                                    "variable": "code",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 25,
                                    "char": 29
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 26,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "params",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "func_get_args",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 26,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 26,
                                    "char": 37
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 27,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "name",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_shift",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 27,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 27,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 27,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 27,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 28,
                            "char": 17
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "array_pop",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "params",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 28,
                                            "char": 25
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 28,
                                        "char": 25
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                "line": 28,
                                "char": 26
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 30,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "args",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "join",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": ",",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 30,
                                                    "char": 26
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 30,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "params",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 30,
                                                    "char": 34
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 30,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 30,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 30,
                                    "char": 35
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 35,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "name",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 35,
                                    "char": 18
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 35,
                                        "char": 25
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "func",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 35,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 35,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                "line": 35,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "pos",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 36,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 37,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "pos",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "strpos",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "args",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                            "line": 37,
                                                            "char": 34
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 37,
                                                        "char": 34
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": ",",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                            "line": 37,
                                                            "char": 37
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 37,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 37,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 37,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 38,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "pos",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 38,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 38,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 38,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "name",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "trim",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "args",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 40,
                                                                    "char": 37
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 40,
                                                                "char": 37
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "'\\\"",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 40,
                                                                    "char": 42
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 40,
                                                                "char": 42
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 40,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 40,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 41,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "args",
                                                    "expr": {
                                                        "type": "string",
                                                        "value": "",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 41,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 41,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 42,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "name",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "trim",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "fcall",
                                                                    "name": "substr",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "args",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                                "line": 44,
                                                                                "char": 44
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                            "line": 44,
                                                                            "char": 44
                                                                        },
                                                                        {
                                                                            "parameter": {
                                                                                "type": "int",
                                                                                "value": "0",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                                "line": 44,
                                                                                "char": 47
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                            "line": 44,
                                                                            "char": 47
                                                                        },
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "pos",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                                "line": 44,
                                                                                "char": 52
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                            "line": 44,
                                                                            "char": 52
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 44,
                                                                    "char": 53
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 44,
                                                                "char": 53
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "'\\\"",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 44,
                                                                    "char": 58
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 44,
                                                                "char": 58
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 44,
                                                        "char": 59
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 44,
                                                    "char": 59
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 45,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "args",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "substr",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "args",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 45,
                                                                    "char": 39
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 45,
                                                                "char": 39
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "add",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "pos",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                        "line": 45,
                                                                        "char": 44
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "1",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                        "line": 45,
                                                                        "char": 46
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 45,
                                                                    "char": 46
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 45,
                                                                "char": 46
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 45,
                                                        "char": 47
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 45,
                                                    "char": 47
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 46,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 47,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "code",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "property-access",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 47,
                                                                    "char": 29
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "ns",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                    "line": 47,
                                                                    "char": 33
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 47,
                                                                "char": 33
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "name",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                                "line": 47,
                                                                "char": 40
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                            "line": 47,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "(",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                            "line": 47,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 47,
                                                        "char": 44
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "args",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 47,
                                                        "char": 51
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 47,
                                                    "char": 51
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": ")",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 47,
                                                    "char": 54
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 47,
                                                "char": 54
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 47,
                                            "char": 54
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 48,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "code",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 48,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 49,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 51,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 51,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 51,
                                        "char": 32
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                "line": 51,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "code",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "name",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                            "line": 52,
                                                            "char": 29
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "(",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                            "line": 52,
                                                            "char": 33
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 52,
                                                        "char": 33
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "args",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                        "line": 52,
                                                        "char": 40
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 52,
                                                    "char": 40
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": ")",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                    "line": 52,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                                "line": 52,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                            "line": 52,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 53,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "code",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                        "line": 53,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                                    "line": 54,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                            "line": 55,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
                    "line": 22,
                    "last-line": 56,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Volt\/Extension\/PhpFunction.zep",
        "line": 4,
        "char": 5
    }
]