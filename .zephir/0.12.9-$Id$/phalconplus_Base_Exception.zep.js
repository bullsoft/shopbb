[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
        "line": 7,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * throw new Exception(\"error message\");\n * throw new Exception([\"error message\", [\"foo\", \"bar\"]]);\n *\n *",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
        "line": 8,
        "char": 5
    },
    {
        "type": "class",
        "name": "Exception",
        "abstract": 0,
        "final": 0,
        "extends": "\\Exception",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "message",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                        "line": 10,
                        "char": 25
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 11,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "level",
                    "default": {
                        "type": "static-constant-access",
                        "left": {
                            "type": "variable",
                            "value": "\\Phalcon\\Logger",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 11,
                            "char": 45
                        },
                        "right": {
                            "type": "variable",
                            "value": "DEBUG",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 11,
                            "char": 45
                        },
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                        "line": 11,
                        "char": 45
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 12,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "code",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                        "line": 12,
                        "char": 23
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 14,
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
                            "name": "info",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 14,
                                "char": 44
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 14,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "logger",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\Logger\\Adapter",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 14,
                                "char": 77
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 14,
                                "char": 85
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 14,
                            "char": 85
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "message",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 16,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 16,
                                    "char": 23
                                },
                                {
                                    "variable": "args",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 16,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 16,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 17,
                            "char": 11
                        },
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
                                            "type": "string",
                                            "value": "An exception created: ",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 17,
                                            "char": 46
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "get_called_class",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 17,
                                            "char": 66
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 17,
                                        "char": 66
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 17,
                                    "char": 66
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 18,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "info",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 18,
                                    "char": 23
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 18,
                                "char": 23
                            },
                            "else_statements": [
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
                                                    "value": "info",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 21,
                                                    "char": 29
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 21,
                                                "char": 29
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 21,
                                        "char": 31
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
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 22,
                                                                "char": 39
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": ", message: ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 22,
                                                                "char": 53
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 22,
                                                            "char": 53
                                                        },
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "strval",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "array-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "info",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                            "line": 22,
                                                                            "char": 66
                                                                        },
                                                                        "right": {
                                                                            "type": "int",
                                                                            "value": "0",
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                            "line": 22,
                                                                            "char": 68
                                                                        },
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                        "line": 22,
                                                                        "char": 69
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 22,
                                                                    "char": 69
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 22,
                                                            "char": 70
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 22,
                                                        "char": 70
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 22,
                                                    "char": 70
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 23,
                                            "char": 18
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fetch",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "args",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 23,
                                                    "char": 40
                                                },
                                                "right": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "info",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 23,
                                                        "char": 36
                                                    },
                                                    "right": {
                                                        "type": "int",
                                                        "value": "1",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 23,
                                                        "char": 38
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 23,
                                                    "char": 40
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 23,
                                                "char": 40
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "args",
                                                            "expr": {
                                                                "type": "ternary",
                                                                "left": {
                                                                    "type": "fcall",
                                                                    "name": "is_array",
                                                                    "call-type": 1,
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "array-access",
                                                                                "left": {
                                                                                    "type": "variable",
                                                                                    "value": "info",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                    "line": 24,
                                                                                    "char": 45
                                                                                },
                                                                                "right": {
                                                                                    "type": "int",
                                                                                    "value": "1",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                    "line": 24,
                                                                                    "char": 47
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                "line": 24,
                                                                                "char": 48
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                            "line": 24,
                                                                            "char": 48
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 24,
                                                                    "char": 50
                                                                },
                                                                "right": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "info",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                        "line": 24,
                                                                        "char": 56
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "1",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                        "line": 24,
                                                                        "char": 58
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 24,
                                                                    "char": 60
                                                                },
                                                                "extra": {
                                                                    "type": "array",
                                                                    "left": [
                                                                        {
                                                                            "value": {
                                                                                "type": "fcall",
                                                                                "name": "strval",
                                                                                "call-type": 1,
                                                                                "parameters": [
                                                                                    {
                                                                                        "parameter": {
                                                                                            "type": "array-access",
                                                                                            "left": {
                                                                                                "type": "variable",
                                                                                                "value": "info",
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                                "line": 24,
                                                                                                "char": 74
                                                                                            },
                                                                                            "right": {
                                                                                                "type": "int",
                                                                                                "value": "1",
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                                "line": 24,
                                                                                                "char": 76
                                                                                            },
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                            "line": 24,
                                                                                            "char": 77
                                                                                        },
                                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                        "line": 24,
                                                                                        "char": 77
                                                                                    }
                                                                                ],
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                                "line": 24,
                                                                                "char": 78
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                            "line": 24,
                                                                            "char": 78
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 24,
                                                                    "char": 79
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 24,
                                                                "char": 79
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 24,
                                                            "char": 79
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 25,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 26,
                                            "char": 13
                                        }
                                    ],
                                    "elseif_statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "is_string",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "info",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 26,
                                                            "char": 36
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 26,
                                                        "char": 36
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 26,
                                                "char": 38
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
                                                                        "type": "variable",
                                                                        "value": "message",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                        "line": 27,
                                                                        "char": 39
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": ", message: ",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                        "line": 27,
                                                                        "char": 53
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 27,
                                                                    "char": 53
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "info",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 27,
                                                                    "char": 59
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 27,
                                                                "char": 59
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 27,
                                                            "char": 59
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 28,
                                                    "char": 13
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 29,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 29,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 31,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_null",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "logger",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 31,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 31,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 31,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 31,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "logger",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 32,
                                            "char": 20
                                        },
                                        "name": "log",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "message",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 32,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": ", args: ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 32,
                                                            "char": 43
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 32,
                                                        "char": 43
                                                    },
                                                    "right": {
                                                        "type": "fcall",
                                                        "name": "json_encode",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "args",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 32,
                                                                    "char": 61
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 32,
                                                                "char": 61
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "constant",
                                                                    "value": "JSON_UNESCAPED_UNICODE",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                    "line": 32,
                                                                    "char": 85
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 32,
                                                                "char": 85
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 32,
                                                        "char": 86
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 32,
                                                    "char": 86
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 32,
                                                "char": 86
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 32,
                                                        "char": 93
                                                    },
                                                    "name": "getLevel",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 32,
                                                    "char": 104
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 32,
                                                "char": 104
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 32,
                                        "char": 105
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 33,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 35,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 35,
                                        "char": 23
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "message",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 35,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 35,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 35,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "message",
                                            "expr": {
                                                "type": "variable",
                                                "value": "message",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 36,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 36,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 37,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 39,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "cnt",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 39,
                                    "char": 16
                                },
                                {
                                    "variable": "argsCnt",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 39,
                                    "char": 25
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 40,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cnt",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "substr_count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 40,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 40,
                                                        "char": 45
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 40,
                                                    "char": 45
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 40,
                                                "char": 45
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "%s",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 40,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 40,
                                                "char": 49
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 40,
                                        "char": 50
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 40,
                                    "char": 50
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "argsCnt",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "args",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                    "line": 41,
                                                    "char": 33
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 41,
                                                "char": 33
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 41,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 41,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 43,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "greater-equal",
                                "left": {
                                    "type": "variable",
                                    "value": "argsCnt",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 43,
                                    "char": 20
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "cnt",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 43,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 43,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "message",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "vsprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 44,
                                                                "char": 47
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                                "line": 44,
                                                                "char": 55
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 44,
                                                            "char": 55
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 44,
                                                        "char": 55
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "args",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                            "line": 44,
                                                            "char": 61
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                        "line": 44,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                                "line": 44,
                                                "char": 62
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                            "line": 44,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 45,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 46,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 14,
                    "last-line": 48,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getLevel",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 50,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "level",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 50,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 50,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 51,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 48,
                    "last-line": 53,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "code",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 53,
                            "char": 37
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
                                    "property": "code",
                                    "expr": {
                                        "type": "variable",
                                        "value": "code",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 55,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 55,
                                    "char": 30
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 56,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 56,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 57,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 53,
                    "last-line": 59,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setLevel",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "level",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 59,
                            "char": 39
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
                                    "property": "level",
                                    "expr": {
                                        "type": "variable",
                                        "value": "level",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 61,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 61,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 62,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 62,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 63,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 59,
                    "last-line": 65,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setMessage",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "msg",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 65,
                            "char": 39
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
                                    "property": "message",
                                    "expr": {
                                        "type": "variable",
                                        "value": "msg",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                        "line": 67,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                    "line": 67,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 68,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                                "line": 68,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                            "line": 69,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
                    "line": 65,
                    "last-line": 70,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
            "line": 8,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Exception.zep",
        "line": 8,
        "char": 5
    }
]