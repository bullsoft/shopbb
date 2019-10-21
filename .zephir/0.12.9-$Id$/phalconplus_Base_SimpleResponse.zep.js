[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "SimpleResponse",
        "abstract": 0,
        "final": 1,
        "extends": "AbstractResponse",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "result",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                        "line": 8,
                        "char": 24
                    },
                    "docblock": "**\n     * @var array\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
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
                    "name": "softClone",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 10,
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
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 12,
                                    "char": 16
                                },
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 12,
                                    "char": 21
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 13,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "data",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 13,
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
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 14,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 14,
                                                "char": 36
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 14,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 14,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 14,
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
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 15,
                                                    "char": 22
                                                },
                                                "name": "__set",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                            "line": 15,
                                                            "char": 32
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 15,
                                                        "char": 32
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "val",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                            "line": 15,
                                                            "char": 37
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 15,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 15,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 16,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property-array-index",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "result",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                            "line": 17,
                                                            "char": 37
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 17,
                                                        "char": 44
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 17,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 18,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 19,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 20,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                    "line": 10,
                    "last-line": 22,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getResult",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "cast",
                                "left": "array",
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 24,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "result",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 24,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 24,
                                    "char": 36
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 24,
                                "char": 36
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                    "line": 22,
                    "last-line": 27,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setResult",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "result",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 27,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 27,
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
                                    "property": "result",
                                    "expr": {
                                        "type": "variable",
                                        "value": "result",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 29,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 29,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 30,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 30,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 31,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                    "line": 27,
                    "last-line": 35,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "pushItem",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "val",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 36,
                            "char": 37
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 36,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 36,
                            "char": 53
                        }
                    ],
                    "statements": [
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
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 38,
                                                "char": 24
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 38,
                                            "char": 24
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 38,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 38,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property-array-index",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "result",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 39,
                                                    "char": 33
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 39,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 39,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 40,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_push",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 41,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "result",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 41,
                                                        "char": 36
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 41,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 41,
                                                "char": 36
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 41,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 41,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 41,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 42,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 43,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 43,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 44,
                            "char": 5
                        }
                    ],
                    "docblock": "**\n    * @deprecated\n    *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                    "line": 36,
                    "last-line": 46,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setItem",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "val",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 46,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 46,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 46,
                            "char": 52
                        }
                    ],
                    "statements": [
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
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 48,
                                                "char": 24
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 48,
                                            "char": 24
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 48,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 48,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property-array-index",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "result",
                                            "index-expr": [
                                                {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 49,
                                                    "char": 33
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 49,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 49,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 50,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_push",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 51,
                                                        "char": 29
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "result",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 51,
                                                        "char": 36
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 51,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 51,
                                                "char": 36
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "val",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 51,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 51,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 51,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 52,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 53,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 53,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 54,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                    "line": 46,
                    "last-line": 56,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getItem",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 56,
                                "char": 43
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 56,
                            "char": 43
                        }
                    ],
                    "statements": [
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
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 58,
                                                "char": 24
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 58,
                                            "char": 24
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 58,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                "line": 58,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "val",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 59,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 60,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "val",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 60,
                                            "char": 45
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 60,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "result",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 60,
                                                    "char": 39
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 60,
                                                "char": 39
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 60,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 60,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 60,
                                        "char": 45
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "val",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 61,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                            "line": 62,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 63,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "reset",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 64,
                                                        "char": 31
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "result",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                        "line": 64,
                                                        "char": 38
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                    "line": 64,
                                                    "char": 38
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                                "line": 64,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                        "line": 64,
                                        "char": 39
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                                    "line": 65,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                            "line": 66,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
                    "line": 56,
                    "last-line": 68,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
            "line": 3,
            "char": 11
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/SimpleResponse.zep",
        "line": 3,
        "char": 11
    }
]