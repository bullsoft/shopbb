[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "ProtoBuffer",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "\\JsonSerializable",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                "line": 4,
                "char": 1
            }
        ],
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "softClone",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 5,
                            "char": 41
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "key",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 7,
                                    "char": 16
                                },
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 7,
                                    "char": 21
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 8,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "data",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 8,
                                "char": 30
                            },
                            "key": "key",
                            "value": "val",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "property_exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 9,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 9,
                                                "char": 36
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 9,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 9,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 9,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 11,
                                                    "char": 22
                                                },
                                                "name": "__set",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 11,
                                                            "char": 32
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 11,
                                                        "char": 32
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "val",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 11,
                                                            "char": 37
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 11,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 11,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 12,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 13,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 14,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 5,
                    "last-line": 16,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__set",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 16,
                            "char": 38
                        },
                        {
                            "type": "parameter",
                            "name": "val",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 16,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "method",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 18,
                                    "char": 19
                                },
                                {
                                    "variable": "param",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 18,
                                    "char": 26
                                },
                                {
                                    "variable": "paramClass",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 18,
                                    "char": 38
                                },
                                {
                                    "variable": "paramClassRef",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 18,
                                    "char": 53
                                },
                                {
                                    "variable": "paramObj",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 18,
                                    "char": 63
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 19,
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
                                        "type": "concat",
                                        "left": {
                                            "type": "string",
                                            "value": "set",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 19,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 19,
                                                "char": 32
                                            },
                                            "name": "upperfirst",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 19,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 19,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 19,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 21,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "method_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 21,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 21,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "method",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 21,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 21,
                                        "char": 38
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 21,
                                "char": 40
                            },
                            "statements": [
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
                                                                        "value": "this",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                        "line": 22,
                                                                        "char": 55
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 22,
                                                                    "char": 55
                                                                },
                                                                {
                                                                    "value": {
                                                                        "type": "variable",
                                                                        "value": "method",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                        "line": 22,
                                                                        "char": 63
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 22,
                                                                    "char": 63
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 22,
                                                            "char": 64
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 22,
                                                        "char": 64
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 22,
                                                            "char": 67
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 22,
                                                        "char": 67
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 22,
                                                "char": 68
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 22,
                                            "char": 68
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 23,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "param",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 23,
                                            "char": 22
                                        },
                                        "name": "getClass",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 23,
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
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 26,
                                                                "char": 40
                                                            },
                                                            "name": "getClass",
                                                            "call-type": 1,
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 26,
                                                            "char": 52
                                                        },
                                                        "name": "getName",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 26,
                                                        "char": 62
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 26,
                                                    "char": 62
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 27,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "paramClassRef",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\ReflectionClass",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "paramClass",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 27,
                                                                    "char": 68
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 27,
                                                                "char": 68
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 27,
                                                        "char": 69
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 27,
                                                    "char": 69
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 29,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "paramClassRef",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 29,
                                                    "char": 34
                                                },
                                                "name": "isSubclassOf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\\\\PhalconPlus\\\\Base\\\\ProtoBuffer",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 29,
                                                            "char": 80
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 29,
                                                        "char": 80
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 29,
                                                "char": 82
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "paramObj",
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "paramClassRef",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 30,
                                                                    "char": 50
                                                                },
                                                                "name": "newInstance",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 30,
                                                                "char": 64
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 30,
                                                            "char": 64
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 31,
                                                    "char": 28
                                                },
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "paramObj",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 31,
                                                            "char": 30
                                                        },
                                                        "name": "softClone",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "val",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 31,
                                                                    "char": 44
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 31,
                                                                "char": 44
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 31,
                                                        "char": 45
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 32,
                                                    "char": 23
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "val",
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "paramObj",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 32,
                                                                "char": 39
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 32,
                                                            "char": 39
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 33,
                                                    "char": 17
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "paramObj",
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "paramClassRef",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 34,
                                                                    "char": 50
                                                                },
                                                                "name": "newInstance",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "val",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                            "line": 34,
                                                                            "char": 66
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                        "line": 34,
                                                                        "char": 66
                                                                    }
                                                                ],
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 34,
                                                                "char": 67
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 34,
                                                            "char": 67
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 35,
                                                    "char": 23
                                                },
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "val",
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "paramObj",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 35,
                                                                "char": 39
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 35,
                                                            "char": 39
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 36,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 37,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 38,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 38,
                                            "char": 25
                                        },
                                        "name": "method",
                                        "call-type": 2,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 38,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 38,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 38,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 39,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 42,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "or",
                                    "left": {
                                        "type": "fcall",
                                        "name": "is_scalar",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 42,
                                                    "char": 25
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 42,
                                                "char": 25
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 42,
                                        "char": 28
                                    },
                                    "right": {
                                        "type": "fcall",
                                        "name": "is_null",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 42,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 42,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 42,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 42,
                                    "char": 44
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "is_array",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 42,
                                                "char": 58
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 42,
                                            "char": 58
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 42,
                                    "char": 60
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 42,
                                "char": 60
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-dynamic-object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "key",
                                            "expr": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 43,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 43,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 44,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 44,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 45,
                                    "char": 9
                                }
                            ],
                            "elseif_statements": [
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
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 45,
                                                        "char": 31
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 45,
                                                    "char": 31
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 45,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "instanceof",
                                            "left": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 45,
                                                "char": 49
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "\\PhalconPlus\\Base\\ProtoBuffer",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 45,
                                                "char": 81
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 45,
                                            "char": 81
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 45,
                                        "char": 81
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable-dynamic-object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "key",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 46,
                                                        "char": 34
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 46,
                                                    "char": 34
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 47,
                                            "char": 18
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 47,
                                                "char": 24
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 48,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 48,
                                    "char": 14
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "Please add ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 49,
                                                            "char": 46
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "method",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 49,
                                                            "char": 55
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 49,
                                                        "char": 55
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " in your class, complex-type vars are not allowed to assign directly",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 49,
                                                        "char": 125
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 49,
                                                    "char": 125
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 49,
                                                "char": 125
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 49,
                                        "char": 126
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 50,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 51,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 16,
                    "last-line": 53,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__isset",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 53,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "property_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 55,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 55,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 55,
                                            "char": 37
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 55,
                                        "char": 37
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 55,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 56,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 57,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 58,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 58,
                                "char": 21
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 53,
                    "last-line": 61,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__get",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 61,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "method",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 63,
                                    "char": 19
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 64,
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
                                        "type": "concat",
                                        "left": {
                                            "type": "string",
                                            "value": "get",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 64,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 64,
                                                "char": 32
                                            },
                                            "name": "upperfirst",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 64,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 64,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 64,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 66,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "method_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 66,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 66,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "method",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 66,
                                            "char": 38
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 66,
                                        "char": 38
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 66,
                                "char": 40
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 67,
                                            "char": 25
                                        },
                                        "name": "method",
                                        "call-type": 2,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 67,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 68,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 70,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "property_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 70,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 70,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 70,
                                            "char": 37
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 70,
                                        "char": 37
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 70,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "property-dynamic-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 71,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "key",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 71,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 71,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 72,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 74,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 74,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 75,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 61,
                    "last-line": 77,
                    "char": 19
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "getSelfVars",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "objReflection",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 79,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 79,
                                    "char": 33
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 80,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "vars",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 80,
                                        "char": 22
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 80,
                                    "char": 22
                                },
                                {
                                    "variable": "pros",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 80,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 80,
                                    "char": 33
                                },
                                {
                                    "variable": "pro",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 80,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 80,
                                    "char": 45
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 82,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "objReflection",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\ReflectionObject",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 82,
                                                    "char": 55
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 82,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 82,
                                        "char": 56
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 82,
                                    "char": 56
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 83,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "pros",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "objReflection",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 83,
                                            "char": 34
                                        },
                                        "name": "getProperties",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 83,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 83,
                                    "char": 50
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 85,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "pros",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 85,
                                "char": 25
                            },
                            "value": "pro",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "pro",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 86,
                                            "char": 17
                                        },
                                        "name": "setAccessible",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 86,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 86,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 86,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 87,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "vars",
                                            "index-expr": [
                                                {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "pro",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 87,
                                                        "char": 26
                                                    },
                                                    "name": "getName",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 87,
                                                    "char": 36
                                                }
                                            ],
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "pro",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 87,
                                                    "char": 44
                                                },
                                                "name": "getValue",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 87,
                                                            "char": 58
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 87,
                                                        "char": 58
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 87,
                                                "char": 59
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 87,
                                            "char": 59
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 88,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 89,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "vars",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 89,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 90,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 78,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                        "line": 78,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 77,
                    "last-line": 92,
                    "char": 22
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "jsonSerialize",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 94,
                                    "char": 21
                                },
                                "name": "toArray",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 94,
                                "char": 31
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 95,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 92,
                    "last-line": 97,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "toArray",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 97,
                                "char": 44
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 97,
                            "char": 44
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "pros",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 99,
                                        "char": 22
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 99,
                                    "char": 22
                                },
                                {
                                    "variable": "newPros",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 99,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 99,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 101,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "data",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 101,
                                    "char": 23
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 101,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "pros",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 102,
                                                    "char": 29
                                                },
                                                "name": "getSelfVars",
                                                "call-type": 1,
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 102,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 102,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 103,
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
                                            "variable": "pros",
                                            "expr": {
                                                "type": "variable",
                                                "value": "data",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 104,
                                                "char": 28
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 104,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 105,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 107,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "key",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 107,
                                    "char": 16
                                },
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 107,
                                    "char": 21
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 108,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "pros",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 108,
                                "char": 30
                            },
                            "key": "key",
                            "value": "val",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "fcall",
                                            "name": "is_array",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 109,
                                                        "char": 28
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 109,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 109,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "not",
                                            "left": {
                                                "type": "empty",
                                                "left": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 109,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 109,
                                                    "char": 45
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 109,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 109,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                        "line": 109,
                                        "char": 45
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "newPros",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 110,
                                                            "char": 32
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 110,
                                                            "char": 41
                                                        },
                                                        "name": "toArray",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "val",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 110,
                                                                    "char": 53
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 110,
                                                                "char": 53
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 110,
                                                        "char": 54
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 110,
                                                    "char": 54
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 111,
                                            "char": 13
                                        }
                                    ],
                                    "elseif_statements": [
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
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 111,
                                                                "char": 35
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 111,
                                                            "char": 35
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 111,
                                                    "char": 38
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "method_exists",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 111,
                                                                "char": 57
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 111,
                                                            "char": 57
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "toArray",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 111,
                                                                "char": 66
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 111,
                                                            "char": 66
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 111,
                                                    "char": 68
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 111,
                                                "char": 68
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index",
                                                            "operator": "assign",
                                                            "variable": "newPros",
                                                            "index-expr": [
                                                                {
                                                                    "type": "variable",
                                                                    "value": "key",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 112,
                                                                    "char": 32
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "val",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 112,
                                                                    "char": 40
                                                                },
                                                                "name": "toArray",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 112,
                                                                "char": 50
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 112,
                                                            "char": 50
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 113,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 113,
                                            "char": 20
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
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 113,
                                                                "char": 35
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 113,
                                                            "char": 35
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 113,
                                                    "char": 38
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "method_exists",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 113,
                                                                "char": 57
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 113,
                                                            "char": 57
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "__toString",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 113,
                                                                "char": 69
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 113,
                                                            "char": 69
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 113,
                                                    "char": 71
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                "line": 113,
                                                "char": 71
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "array-index",
                                                            "operator": "assign",
                                                            "variable": "newPros",
                                                            "index-expr": [
                                                                {
                                                                    "type": "variable",
                                                                    "value": "key",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 114,
                                                                    "char": 32
                                                                }
                                                            ],
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "val",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                    "line": 114,
                                                                    "char": 40
                                                                },
                                                                "name": "__toString",
                                                                "call-type": 1,
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                                "line": 114,
                                                                "char": 53
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 114,
                                                            "char": 53
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 115,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 115,
                                            "char": 18
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "newPros",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                            "line": 116,
                                                            "char": 32
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                        "line": 116,
                                                        "char": 39
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                                    "line": 116,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                            "line": 117,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                    "line": 118,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 120,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "newPros",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                                "line": 120,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                            "line": 130,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
                    "line": 97,
                    "last-line": 131,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoBuffer.zep",
        "line": 3,
        "char": 5
    }
]