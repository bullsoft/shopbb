[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Assert",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\AssertionCode",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                "line": 2,
                "char": 35
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
        "line": 7,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n *\n * @ref https:\/\/github.com\/beberlei\/assert\n *",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
        "line": 8,
        "char": 5
    },
    {
        "type": "class",
        "name": "Assertion",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "protected",
                        "static"
                    ],
                    "type": "method",
                    "name": "createException",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 10,
                            "char": 52
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 10,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "code",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 10,
                            "char": 67
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 10,
                            "char": 81
                        },
                        {
                            "type": "parameter",
                            "name": "constraints",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 10,
                                "char": 105
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 10,
                            "char": 105
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "new",
                                "class": "\\PhalconPlus\\Assert\\InvalidArgumentException",
                                "dynamic": 0,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 12,
                                            "char": 72
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 12,
                                        "char": 72
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "code",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 12,
                                            "char": 78
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 12,
                                        "char": 78
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 12,
                                            "char": 92
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 12,
                                        "char": 92
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 12,
                                            "char": 99
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 12,
                                        "char": 99
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "constraints",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 12,
                                            "char": 112
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 12,
                                        "char": 112
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 12,
                                "char": 113
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 13,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 10,
                    "last-line": 15,
                    "char": 29
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "eq",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value1",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 15,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "value2",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 15,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 15,
                                "char": 73
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 15,
                            "char": 73
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 15,
                                "char": 98
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 15,
                            "char": 98
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "variable",
                                    "value": "value1",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 17,
                                    "char": 20
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "value2",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 17,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 17,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "v1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 18,
                                            "char": 19
                                        },
                                        {
                                            "variable": "v2",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 18,
                                            "char": 23
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 19,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v1",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value1",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 19,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 19,
                                                        "char": 44
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 19,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 19,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 20,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v2",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value2",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 20,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 20,
                                                        "char": 44
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 20,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 20,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 22,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 22,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 22,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 22,
                                        "char": 33
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
                                                                        "type": "string",
                                                                        "value": "Value ",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 23,
                                                                        "char": 38
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "v1",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 23,
                                                                        "char": 43
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 23,
                                                                    "char": 43
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": " does not equal expected value ",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 23,
                                                                    "char": 77
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 23,
                                                                "char": 77
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "v2",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 23,
                                                                "char": 82
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 23,
                                                            "char": 82
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": ".",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 23,
                                                            "char": 85
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 23,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 23,
                                                    "char": 85
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 24,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 26,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value1",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 26,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 26,
                                                "char": 49
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 26,
                                                    "char": 58
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 26,
                                                "char": 58
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 26,
                                                        "char": 87
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_SAME",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 26,
                                                        "char": 87
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 26,
                                                    "char": 87
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 26,
                                                "char": 87
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 26,
                                                    "char": 101
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 26,
                                                "char": 101
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "expected",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 26,
                                                                "char": 112
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "value2",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 26,
                                                                "char": 120
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 26,
                                                            "char": 120
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 26,
                                                    "char": 121
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 26,
                                                "char": 121
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 26,
                                        "char": 122
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 27,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 29,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 29,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 30,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 16,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 16,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 15,
                    "last-line": 32,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "notEq",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value1",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 32,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "value2",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 32,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 32,
                                "char": 76
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 32,
                            "char": 76
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 32,
                                "char": 101
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 32,
                            "char": 101
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "value1",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 34,
                                    "char": 20
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "value2",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 34,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 34,
                                "char": 29
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 36,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 36,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is equal to expected value \\\"%s\\\".",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 36,
                                                                "char": 84
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 36,
                                                            "char": 84
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 36,
                                                        "char": 84
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value1",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 37,
                                                                        "char": 41
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 37,
                                                                    "char": 41
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 37,
                                                            "char": 42
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 37,
                                                        "char": 42
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value2",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 38,
                                                                        "char": 41
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 38,
                                                                    "char": 41
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 39,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 39,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 39,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 39,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 41,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value1",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 41,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 41,
                                                "char": 49
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 41,
                                                    "char": 58
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 41,
                                                "char": 58
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 41,
                                                        "char": 89
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_NOT_EQ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 41,
                                                        "char": 89
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 41,
                                                    "char": 89
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 41,
                                                "char": 89
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 41,
                                                    "char": 103
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 41,
                                                "char": 103
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "expected",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 41,
                                                                "char": 114
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "value2",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 41,
                                                                "char": 122
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 41,
                                                            "char": 122
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 41,
                                                    "char": 123
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 41,
                                                "char": 123
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 41,
                                        "char": 124
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 42,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 44,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 44,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 45,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 33,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 33,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 32,
                    "last-line": 47,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "same",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value1",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 47,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "value2",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 47,
                            "char": 55
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 47,
                                "char": 75
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 47,
                            "char": 75
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 47,
                                "char": 100
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 47,
                            "char": 100
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "variable",
                                    "value": "value1",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 49,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "value2",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 49,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 49,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "v1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 50,
                                            "char": 19
                                        },
                                        {
                                            "variable": "v2",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 50,
                                            "char": 23
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 51,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v1",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value1",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 51,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 51,
                                                        "char": 44
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 51,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 51,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 52,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v2",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value2",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 52,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 52,
                                                        "char": 44
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 52,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 52,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 54,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 54,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 54,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 54,
                                        "char": 33
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
                                                                        "type": "string",
                                                                        "value": "Value ",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 55,
                                                                        "char": 38
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "v1",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 55,
                                                                        "char": 43
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 55,
                                                                    "char": 43
                                                                },
                                                                "right": {
                                                                    "type": "string",
                                                                    "value": " does not equal expected value ",
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 55,
                                                                    "char": 77
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 55,
                                                                "char": 77
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "v2",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 55,
                                                                "char": 82
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 55,
                                                            "char": 82
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": ".",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 55,
                                                            "char": 85
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 55,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 55,
                                                    "char": 85
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 56,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 58,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value1",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 58,
                                                    "char": 49
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 58,
                                                "char": 49
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 58,
                                                    "char": 58
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 58,
                                                "char": 58
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 58,
                                                        "char": 85
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_EQ",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 58,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 58,
                                                    "char": 85
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 58,
                                                "char": 85
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 59,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 59,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "expected",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 59,
                                                                "char": 54
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "value2",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 59,
                                                                "char": 62
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 59,
                                                            "char": 62
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 59,
                                                    "char": 63
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 59,
                                                "char": 63
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 59,
                                        "char": 64
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 60,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 62,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 62,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 63,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 48,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 48,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 47,
                    "last-line": 65,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "notEmpty",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 65,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 65,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 65,
                            "char": 66
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 65,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 65,
                            "char": 91
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 67,
                                    "char": 24
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 67,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "v1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 68,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 69,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v1",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 69,
                                                            "char": 43
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 69,
                                                        "char": 43
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 69,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 69,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 70,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 70,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 70,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 70,
                                        "char": 33
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
                                                                "type": "string",
                                                                "value": "Value ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 71,
                                                                "char": 38
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "v1",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 71,
                                                                "char": 43
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 71,
                                                            "char": 43
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": " is empty, but non empty value was expected.",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 71,
                                                            "char": 89
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 71,
                                                        "char": 89
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 71,
                                                    "char": 89
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 72,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 73,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 73,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 73,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 73,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 73,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 73,
                                                        "char": 85
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "VALUE_EMPTY",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 73,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 73,
                                                    "char": 85
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 73,
                                                "char": 85
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 73,
                                                    "char": 99
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 73,
                                                "char": 99
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 73,
                                        "char": 100
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 74,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 76,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 76,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 77,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 66,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 66,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 65,
                    "last-line": 79,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "notNull",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 79,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 79,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 79,
                            "char": 65
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 79,
                                "char": 90
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 79,
                            "char": 90
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 81,
                                    "char": 20
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 81,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 81,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "v1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 82,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 83,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v1",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 83,
                                                            "char": 43
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 83,
                                                        "char": 43
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 83,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 83,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 84,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 84,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 84,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 84,
                                        "char": 33
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
                                                                "type": "string",
                                                                "value": "Value ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 85,
                                                                "char": 38
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "v1",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 85,
                                                                "char": 43
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 85,
                                                            "char": 43
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": " is null, but non null value was expected.",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 85,
                                                            "char": 87
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 85,
                                                        "char": 87
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 85,
                                                    "char": 87
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 86,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 87,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 87,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 87,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 87,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 87,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 87,
                                                        "char": 84
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "VALUE_NULL",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 87,
                                                        "char": 84
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 87,
                                                    "char": 84
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 87,
                                                "char": 84
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 87,
                                                    "char": 98
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 87,
                                                "char": 98
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 87,
                                        "char": 99
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 88,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 89,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 89,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 90,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 80,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 80,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 79,
                    "last-line": 92,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "notBlank",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 92,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 92,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 92,
                            "char": 66
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 92,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 92,
                            "char": 91
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "or",
                                    "left": {
                                        "type": "identical",
                                        "left": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 94,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 94,
                                            "char": 29
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 94,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "list",
                                        "left": {
                                            "type": "and",
                                            "left": {
                                                "type": "empty",
                                                "left": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "value",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 94,
                                                        "char": 43
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 94,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 94,
                                                "char": 46
                                            },
                                            "right": {
                                                "type": "not-equals",
                                                "left": {
                                                    "type": "string",
                                                    "value": "0",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 94,
                                                    "char": 51
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 94,
                                                    "char": 58
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 94,
                                                "char": 58
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 94,
                                            "char": 58
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 94,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 94,
                                    "char": 61
                                },
                                "right": {
                                    "type": "list",
                                    "left": {
                                        "type": "and",
                                        "left": {
                                            "type": "fcall",
                                            "name": "is_string",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "value",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 94,
                                                        "char": 79
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 94,
                                                    "char": 79
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 94,
                                            "char": 82
                                        },
                                        "right": {
                                            "type": "identical",
                                            "left": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 94,
                                                "char": 87
                                            },
                                            "right": {
                                                "type": "fcall",
                                                "name": "trim",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 94,
                                                            "char": 99
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 94,
                                                        "char": 99
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 94,
                                                "char": 100
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 94,
                                            "char": 100
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 94,
                                        "char": 100
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 94,
                                    "char": 102
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 94,
                                "char": 102
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 96,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 96,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is blank, but was expected to contain a value.",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 96,
                                                                "char": 96
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 96,
                                                            "char": 96
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 96,
                                                        "char": 96
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 97,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 97,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 98,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 98,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 98,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 98,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 99,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 99,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 99,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 99,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 99,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 99,
                                                        "char": 91
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_NOT_BLANK",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 99,
                                                        "char": 91
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 99,
                                                    "char": 91
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 99,
                                                "char": 91
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 99,
                                                    "char": 105
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 99,
                                                "char": 105
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 99,
                                        "char": 106
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 100,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 101,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 101,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 102,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 92,
                                "char": 104
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 93,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 93,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 92,
                    "last-line": 104,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "integer",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 104,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 104,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 104,
                            "char": 65
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 104,
                                "char": 90
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 104,
                            "char": 90
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "\\is_int",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 106,
                                                "char": 26
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 106,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 106,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 106,
                                "char": 28
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 107,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 107,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 107,
                                        "char": 33
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
                                                        "type": "fcall",
                                                        "name": "\\sprintf",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "ternary",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "message",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 109,
                                                                        "char": 29
                                                                    },
                                                                    "right": {
                                                                        "type": "variable",
                                                                        "value": "message",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 109,
                                                                        "char": 39
                                                                    },
                                                                    "extra": {
                                                                        "type": "string",
                                                                        "value": "Value \\\"%s\\\" is not an integer.",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 109,
                                                                        "char": 72
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 109,
                                                                    "char": 72
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 109,
                                                                "char": 72
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "scall",
                                                                    "dynamic-class": 0,
                                                                    "class": "static",
                                                                    "dynamic": 0,
                                                                    "name": "stringify",
                                                                    "parameters": [
                                                                        {
                                                                            "parameter": {
                                                                                "type": "variable",
                                                                                "value": "value",
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                "line": 110,
                                                                                "char": 44
                                                                            },
                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                            "line": 110,
                                                                            "char": 44
                                                                        }
                                                                    ],
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 111,
                                                                    "char": 17
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 111,
                                                                "char": 17
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 111,
                                                        "char": 18
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 111,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 112,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 113,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 113,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 113,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 113,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 113,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 113,
                                                        "char": 89
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_INTEGER",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 113,
                                                        "char": 89
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 113,
                                                    "char": 89
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 113,
                                                "char": 89
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 113,
                                                    "char": 103
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 113,
                                                "char": 103
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 113,
                                        "char": 104
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 114,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 115,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 115,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 116,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 105,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 105,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 104,
                    "last-line": 118,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "numeric",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 118,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 118,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 118,
                            "char": 65
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 118,
                                "char": 90
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 118,
                            "char": 90
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_numeric",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 120,
                                                "char": 29
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 120,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 120,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 120,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "v1",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 121,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 122,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "v1",
                                            "expr": {
                                                "type": "scall",
                                                "dynamic-class": 0,
                                                "class": "self",
                                                "dynamic": 0,
                                                "name": "stringify",
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 122,
                                                            "char": 43
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 122,
                                                        "char": 43
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 122,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 122,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 123,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 123,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 123,
                                            "char": 33
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 123,
                                        "char": 33
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
                                                                "type": "string",
                                                                "value": "Value ",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 124,
                                                                "char": 38
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "v1",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 124,
                                                                "char": 43
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 124,
                                                            "char": 43
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": " is not numeric.",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 124,
                                                            "char": 61
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 124,
                                                        "char": 61
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 124,
                                                    "char": 61
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 125,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 126,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 126,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 126,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 126,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 126,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 126,
                                                        "char": 89
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_NUMERIC",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 126,
                                                        "char": 89
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 126,
                                                    "char": 89
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 126,
                                                "char": 89
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 126,
                                                    "char": 103
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 126,
                                                "char": 103
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 126,
                                        "char": 104
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 127,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 129,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 129,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 130,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 119,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 119,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 118,
                    "last-line": 132,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "range",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 132,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "minValue",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 132,
                            "char": 57
                        },
                        {
                            "type": "parameter",
                            "name": "maxValue",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 132,
                            "char": 71
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 132,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 132,
                            "char": 91
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 132,
                                "char": 116
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 132,
                            "char": 116
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "numeric",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 134,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 134,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 134,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 134,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 134,
                                            "char": 53
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 134,
                                        "char": 53
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 134,
                                "char": 54
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 135,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "less",
                                    "left": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 135,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "minValue",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 135,
                                        "char": 30
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 135,
                                    "char": 30
                                },
                                "right": {
                                    "type": "greater",
                                    "left": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 135,
                                        "char": 38
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "maxValue",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 135,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 135,
                                    "char": 49
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 135,
                                "char": 49
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 137,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 137,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Number \\\"%s\\\" was expected to be at least \\\"%d\\\" and at most \\\"%d\\\".",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 137,
                                                                "char": 105
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 137,
                                                            "char": 105
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 137,
                                                        "char": 105
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 138,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 138,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 138,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 138,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "minValue",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 139,
                                                            "char": 25
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 139,
                                                        "char": 25
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "maxValue",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 141,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 141,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 141,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 141,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 142,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 142,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 142,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 142,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 142,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 142,
                                                        "char": 87
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_RANGE",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 142,
                                                        "char": 87
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 142,
                                                    "char": 87
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 142,
                                                "char": 87
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 143,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 143,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "min",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 143,
                                                                "char": 49
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "minValue",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 143,
                                                                "char": 59
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 143,
                                                            "char": 59
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "max",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 143,
                                                                "char": 64
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "maxValue",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 143,
                                                                "char": 74
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 143,
                                                            "char": 74
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 143,
                                                    "char": 75
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 143,
                                                "char": 75
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 143,
                                        "char": 76
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 144,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 146,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 146,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 147,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 133,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 133,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 132,
                    "last-line": 149,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "minLength",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 149,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "minLength",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 149,
                            "char": 62
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 149,
                                "char": 82
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 149,
                            "char": 82
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 149,
                                "char": 107
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 149,
                            "char": 107
                        },
                        {
                            "type": "parameter",
                            "name": "encodeing",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "utf8",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 149,
                                "char": 132
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 149,
                            "char": 132
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isString",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 151,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 151,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 151,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 151,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 151,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 151,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 151,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 152,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "fcall",
                                    "name": "mb_strlen",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 152,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 152,
                                            "char": 27
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "encodeing",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 152,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 152,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 152,
                                    "char": 40
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "minLength",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 152,
                                    "char": 52
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 152,
                                "char": 52
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 154,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 154,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is too short, it should at least %d characters, but only has %d characters.",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 154,
                                                                "char": 125
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 154,
                                                            "char": 125
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 154,
                                                        "char": 125
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 155,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 155,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 155,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 155,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "minLength",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 156,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 156,
                                                        "char": 26
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "mb_strlen",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 157,
                                                                        "char": 32
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 157,
                                                                    "char": 32
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "encodeing",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 157,
                                                                        "char": 43
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 157,
                                                                    "char": 43
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 158,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 158,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 158,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 158,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 159,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 159,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 159,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 159,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 159,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 159,
                                                        "char": 92
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_MIN_LENGTH",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 159,
                                                        "char": 92
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 159,
                                                    "char": 92
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 159,
                                                "char": 92
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 160,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 160,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "min_length",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 160,
                                                                "char": 56
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "minLength",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 160,
                                                                "char": 67
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 160,
                                                            "char": 67
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "encoding",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 160,
                                                                "char": 77
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "encodeing",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 160,
                                                                "char": 88
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 160,
                                                            "char": 88
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 160,
                                                    "char": 89
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 160,
                                                "char": 89
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 160,
                                        "char": 90
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 161,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 162,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 162,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 163,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 149,
                                "char": 145
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 150,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 150,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 149,
                    "last-line": 165,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "maxLength",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 165,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "maxLength",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 165,
                            "char": 62
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 165,
                                "char": 82
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 165,
                            "char": 82
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 165,
                                "char": 107
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 165,
                            "char": 107
                        },
                        {
                            "type": "parameter",
                            "name": "encodeing",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "utf8",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 165,
                                "char": 132
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 165,
                            "char": 132
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isString",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 167,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 167,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 167,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 167,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 167,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 167,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 167,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 168,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "fcall",
                                    "name": "mb_strlen",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 168,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 168,
                                            "char": 27
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "encodeing",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 168,
                                                "char": 38
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 168,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 168,
                                    "char": 40
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "maxLength",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 168,
                                    "char": 52
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 168,
                                "char": 52
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 170,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 170,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is too long, it should no more than %d characters, but has %d characters.",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 170,
                                                                "char": 123
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 170,
                                                            "char": 123
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 170,
                                                        "char": 123
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 171,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 171,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 171,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 171,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "maxLength",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 172,
                                                            "char": 26
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 172,
                                                        "char": 26
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "mb_strlen",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 173,
                                                                        "char": 32
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 173,
                                                                    "char": 32
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "encodeing",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 173,
                                                                        "char": 43
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 173,
                                                                    "char": 43
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 174,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 174,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 174,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 174,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 175,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 175,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 175,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 175,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 175,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 175,
                                                        "char": 92
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_MAX_LENGTH",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 175,
                                                        "char": 92
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 175,
                                                    "char": 92
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 175,
                                                "char": 92
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 176,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 176,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "max_length",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 176,
                                                                "char": 56
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "maxLength",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 176,
                                                                "char": 67
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 176,
                                                            "char": 67
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "encoding",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 176,
                                                                "char": 77
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "encodeing",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 176,
                                                                "char": 88
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 176,
                                                            "char": 88
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 176,
                                                    "char": 89
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 176,
                                                "char": 89
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 176,
                                        "char": 90
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 177,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 178,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 178,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 179,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 165,
                                "char": 145
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 166,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 166,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 165,
                    "last-line": 181,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "betweenLength",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 181,
                            "char": 51
                        },
                        {
                            "type": "parameter",
                            "name": "minLength",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 181,
                            "char": 66
                        },
                        {
                            "type": "parameter",
                            "name": "maxLength",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 181,
                            "char": 81
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 181,
                                "char": 101
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 181,
                            "char": 101
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 181,
                                "char": 126
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 181,
                            "char": 126
                        },
                        {
                            "type": "parameter",
                            "name": "encodeing",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "utf8",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 181,
                                "char": 151
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 181,
                            "char": 151
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isString",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 183,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 183,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 183,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 183,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 183,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 183,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 183,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 184,
                            "char": 14
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "minLength",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 184,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 184,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "minLength",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 184,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 184,
                                        "char": 43
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 184,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 184,
                                        "char": 52
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 184,
                                            "char": 66
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 184,
                                        "char": 66
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "encodeing",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 184,
                                            "char": 77
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 184,
                                        "char": 77
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 184,
                                "char": 78
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 185,
                            "char": 14
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "maxLength",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 185,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 185,
                                        "char": 32
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "maxLength",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 185,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 185,
                                        "char": 43
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 185,
                                            "char": 52
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 185,
                                        "char": 52
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 185,
                                            "char": 66
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 185,
                                        "char": 66
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "encodeing",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 185,
                                            "char": 77
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 185,
                                        "char": 77
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 185,
                                "char": 78
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 186,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 186,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 187,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 181,
                                "char": 164
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 182,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 182,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 181,
                    "last-line": 189,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "min",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 189,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "minValue",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 189,
                            "char": 55
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 189,
                                "char": 75
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 189,
                            "char": 75
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 189,
                                "char": 100
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 189,
                            "char": 100
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "numeric",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 191,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 191,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 191,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 191,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 191,
                                            "char": 53
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 191,
                                        "char": 53
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 191,
                                "char": 54
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 193,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 193,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "minValue",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 193,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 193,
                                "char": 29
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 195,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 195,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Number \\\"%s\\\" was expected to be at least \\\"%s\\\".",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 195,
                                                                "char": 86
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 195,
                                                            "char": 86
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 195,
                                                        "char": 86
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 196,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 196,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 196,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 196,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "minValue",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 197,
                                                                        "char": 43
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 197,
                                                                    "char": 43
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 198,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 198,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 198,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 198,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 199,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 199,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 199,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 199,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 199,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 199,
                                                        "char": 85
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_MIN",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 199,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 199,
                                                    "char": 85
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 199,
                                                "char": 85
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 200,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 200,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "min",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 200,
                                                                "char": 49
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "minValue",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 200,
                                                                "char": 59
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 200,
                                                            "char": 59
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 200,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 200,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 200,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 201,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 203,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 203,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 204,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 190,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 190,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 189,
                    "last-line": 206,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "max",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 206,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "maxValue",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 206,
                            "char": 55
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 206,
                                "char": 75
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 206,
                            "char": 75
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 206,
                                "char": 100
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 206,
                            "char": 100
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "numeric",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 208,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 208,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 208,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 208,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 208,
                                            "char": 53
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 208,
                                        "char": 53
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 208,
                                "char": 54
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 210,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 210,
                                    "char": 18
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "maxValue",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 210,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 210,
                                "char": 29
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 212,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 212,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Number \\\"%s\\\" was expected to be at most \\\"%s\\\".",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 212,
                                                                "char": 85
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 212,
                                                            "char": 85
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 212,
                                                        "char": 85
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 213,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 213,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 213,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 213,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "maxValue",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 214,
                                                                        "char": 43
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 214,
                                                                    "char": 43
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 215,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 215,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 215,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 215,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 216,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 216,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 216,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 216,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 216,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 216,
                                                        "char": 85
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_MAX",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 216,
                                                        "char": 85
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 216,
                                                    "char": 85
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 216,
                                                "char": 85
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 217,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 217,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "max",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 217,
                                                                "char": 49
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "maxValue",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 217,
                                                                "char": 59
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 217,
                                                            "char": 59
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 217,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 217,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 217,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 218,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 220,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 220,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 221,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 207,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 207,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 206,
                    "last-line": 223,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "contains",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 223,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "needle",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 223,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 223,
                                "char": 78
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 223,
                            "char": 78
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 223,
                                "char": 103
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 223,
                            "char": 103
                        },
                        {
                            "type": "parameter",
                            "name": "encodeing",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "utf8",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 223,
                                "char": 128
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 223,
                            "char": 128
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isString",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 225,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 225,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 225,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 225,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 225,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 225,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 225,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 226,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 226,
                                    "char": 20
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "mb_strpos",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 226,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 226,
                                            "char": 37
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "needle",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 226,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 226,
                                            "char": 45
                                        },
                                        {
                                            "parameter": {
                                                "type": "null",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 226,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 226,
                                            "char": 51
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "encodeing",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 226,
                                                "char": 62
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 226,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 226,
                                    "char": 64
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 226,
                                "char": 64
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 228,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 228,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" does not contain \\\"%s\\\".",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 228,
                                                                "char": 74
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 228,
                                                            "char": 74
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 228,
                                                        "char": 74
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 229,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 229,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 229,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 229,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "needle",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 230,
                                                                        "char": 41
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 230,
                                                                    "char": 41
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 231,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 231,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 231,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 231,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 232,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 232,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 232,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 232,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 232,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 232,
                                                        "char": 97
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_STRING_CONTAINS",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 232,
                                                        "char": 97
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 232,
                                                    "char": 97
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 232,
                                                "char": 97
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 233,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 233,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "needle",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 233,
                                                                "char": 52
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "needle",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 233,
                                                                "char": 60
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 233,
                                                            "char": 60
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "encoding",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 233,
                                                                "char": 71
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "encodeing",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 233,
                                                                "char": 82
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 233,
                                                            "char": 82
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 233,
                                                    "char": 83
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 233,
                                                "char": 83
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 233,
                                        "char": 84
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 234,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 235,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 235,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 236,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 223,
                                "char": 141
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 224,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 224,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 223,
                    "last-line": 238,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "notContains",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 238,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "needle",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 238,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 238,
                                "char": 81
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 238,
                            "char": 81
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 238,
                                "char": 106
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 238,
                            "char": 106
                        },
                        {
                            "type": "parameter",
                            "name": "encodeing",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "string",
                                "value": "utf8",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 238,
                                "char": 131
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 238,
                            "char": 131
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isString",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 240,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 240,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 240,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 240,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 240,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 240,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 240,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 241,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 241,
                                    "char": 20
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "mb_strpos",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 241,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 241,
                                            "char": 37
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "needle",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 241,
                                                "char": 45
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 241,
                                            "char": 45
                                        },
                                        {
                                            "parameter": {
                                                "type": "null",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 241,
                                                "char": 51
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 241,
                                            "char": 51
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "encodeing",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 241,
                                                "char": 62
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 241,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 241,
                                    "char": 64
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 241,
                                "char": 64
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 243,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 243,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" contain \\\"%s\\\".",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 243,
                                                                "char": 65
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 243,
                                                            "char": 65
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 243,
                                                        "char": 65
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 244,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 244,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 244,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 244,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "needle",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 245,
                                                                        "char": 41
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 245,
                                                                    "char": 41
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 246,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 246,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 246,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 246,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 247,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 247,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 247,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 247,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 247,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 247,
                                                        "char": 101
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_STRING_NOT_CONTAINS",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 247,
                                                        "char": 101
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 247,
                                                    "char": 101
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 247,
                                                "char": 101
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 248,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 248,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "needle",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 248,
                                                                "char": 52
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "needle",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 248,
                                                                "char": 60
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 248,
                                                            "char": 60
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "encoding",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 248,
                                                                "char": 71
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "encodeing",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 248,
                                                                "char": 82
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 248,
                                                            "char": 82
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 248,
                                                    "char": 83
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 248,
                                                "char": 83
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 248,
                                        "char": 84
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 249,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 250,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 250,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 251,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 238,
                                "char": 144
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 239,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 239,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 238,
                    "last-line": 253,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "inArray",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 253,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "choices",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 253,
                            "char": 60
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 253,
                                "char": 80
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 253,
                            "char": 80
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 253,
                                "char": 105
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 253,
                            "char": 105
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "in_array",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 255,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 255,
                                            "char": 27
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "choices",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 255,
                                                "char": 36
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 255,
                                            "char": 36
                                        },
                                        {
                                            "parameter": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 255,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 255,
                                            "char": 42
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 255,
                                    "char": 44
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 255,
                                "char": 44
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 257,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 257,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is not an element of the valid values: %s",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 257,
                                                                "char": 91
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 257,
                                                            "char": 91
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 257,
                                                        "char": 91
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 258,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 258,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 258,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 258,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "implode",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "string",
                                                                        "value": ", ",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 259,
                                                                        "char": 27
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 259,
                                                                    "char": 27
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "fcall",
                                                                        "name": "array_map",
                                                                        "call-type": 1,
                                                                        "parameters": [
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "array",
                                                                                    "left": [
                                                                                        {
                                                                                            "value": {
                                                                                                "type": "fcall",
                                                                                                "name": "get_called_class",
                                                                                                "call-type": 1,
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                                "line": 259,
                                                                                                "char": 58
                                                                                            },
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                            "line": 259,
                                                                                            "char": 58
                                                                                        },
                                                                                        {
                                                                                            "value": {
                                                                                                "type": "string",
                                                                                                "value": "stringify",
                                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                                "line": 259,
                                                                                                "char": 69
                                                                                            },
                                                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                            "line": 259,
                                                                                            "char": 69
                                                                                        }
                                                                                    ],
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                    "line": 259,
                                                                                    "char": 70
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                "line": 259,
                                                                                "char": 70
                                                                            },
                                                                            {
                                                                                "parameter": {
                                                                                    "type": "variable",
                                                                                    "value": "choices",
                                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                    "line": 259,
                                                                                    "char": 79
                                                                                },
                                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                                "line": 259,
                                                                                "char": 79
                                                                            }
                                                                        ],
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 259,
                                                                        "char": 80
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 259,
                                                                    "char": 80
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 260,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 260,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 260,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 260,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 261,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 261,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 261,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 261,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 261,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 261,
                                                        "char": 88
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_CHOICE",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 261,
                                                        "char": 88
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 261,
                                                    "char": 88
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 261,
                                                "char": 88
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 262,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 262,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "choices",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 262,
                                                                "char": 54
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "choices",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 262,
                                                                "char": 63
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 262,
                                                            "char": 63
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 262,
                                                    "char": 64
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 262,
                                                "char": 64
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 262,
                                        "char": 65
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 263,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 264,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 264,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 265,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 253,
                    "last-line": 267,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "keyExists",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 267,
                            "char": 47
                        },
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 267,
                            "char": 56
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 267,
                                "char": 76
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 267,
                            "char": 76
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 267,
                                "char": 101
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 267,
                            "char": 101
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isArray",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 269,
                                            "char": 30
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 269,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 269,
                                            "char": 39
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 269,
                                        "char": 39
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 269,
                                            "char": 53
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 269,
                                        "char": 53
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 269,
                                "char": 54
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 270,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "array_key_exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "key",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 270,
                                                "char": 33
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 270,
                                            "char": 33
                                        },
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 270,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 270,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 270,
                                    "char": 42
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 270,
                                "char": 42
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 272,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 272,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Array does not contain an element with key \\\"%s\\\"",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 272,
                                                                "char": 86
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 272,
                                                            "char": 86
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 272,
                                                        "char": 86
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "key",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 273,
                                                                        "char": 38
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 273,
                                                                    "char": 38
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 274,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 274,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 274,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 274,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 275,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 275,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 275,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 275,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 275,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 275,
                                                        "char": 92
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_KEY_EXISTS",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 275,
                                                        "char": 92
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 275,
                                                    "char": 92
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 275,
                                                "char": 92
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 276,
                                                    "char": 43
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 276,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "key",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 276,
                                                                "char": 50
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "key",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 276,
                                                                "char": 55
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 276,
                                                            "char": 55
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 276,
                                                    "char": 56
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 276,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 276,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 277,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 278,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 278,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 279,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 267,
                                "char": 114
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 268,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 268,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 267,
                    "last-line": 281,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "isResource",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 281,
                            "char": 48
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 281,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 281,
                            "char": 68
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 281,
                                "char": 93
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 281,
                            "char": 93
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_resource",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 283,
                                                "char": 30
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 283,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 283,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 283,
                                "char": 32
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 285,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 285,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is not a resource",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 285,
                                                                "char": 67
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 285,
                                                            "char": 67
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 285,
                                                        "char": 67
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 286,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 286,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 287,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 287,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 287,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 287,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 288,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 288,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 288,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 288,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 288,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 288,
                                                        "char": 90
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_RESOURCE",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 288,
                                                        "char": 90
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 288,
                                                    "char": 90
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 288,
                                                "char": 90
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 288,
                                                    "char": 104
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 288,
                                                "char": 104
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 288,
                                        "char": 105
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 289,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 290,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 290,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 291,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 281,
                                "char": 106
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 282,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 282,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 281,
                    "last-line": 293,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "isString",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 293,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 293,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 293,
                            "char": 66
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 293,
                                "char": 91
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 293,
                            "char": 91
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_string",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 295,
                                                "char": 28
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 295,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 295,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 295,
                                "char": 30
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 297,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 297,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" expected to be string, type %s given.",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 297,
                                                                "char": 87
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 297,
                                                            "char": 87
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 297,
                                                        "char": 87
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 298,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 298,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 298,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 298,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "gettype",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 299,
                                                                        "char": 30
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 299,
                                                                    "char": 30
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 300,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 300,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 300,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 300,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 301,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 301,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 301,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 301,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 301,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 301,
                                                        "char": 88
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_STRING",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 301,
                                                        "char": 88
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 301,
                                                    "char": 88
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 301,
                                                "char": 88
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 301,
                                                    "char": 102
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 301,
                                                "char": 102
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 301,
                                        "char": 103
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 302,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 304,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 304,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 305,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 294,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 294,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 293,
                    "last-line": 307,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "isArray",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 307,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 307,
                                "char": 65
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 307,
                            "char": 65
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 307,
                                "char": 90
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 307,
                            "char": 90
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_array",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 309,
                                                "char": 27
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 309,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 309,
                                    "char": 29
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 309,
                                "char": 29
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 311,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 311,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is not an array.",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 311,
                                                                "char": 66
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 311,
                                                            "char": 66
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 311,
                                                        "char": 66
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 312,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 312,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 313,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 313,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 313,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 313,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 314,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 314,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 314,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 314,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 314,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 314,
                                                        "char": 87
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_ARRAY",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 314,
                                                        "char": 87
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 314,
                                                    "char": 87
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 314,
                                                "char": 87
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 314,
                                                    "char": 101
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 314,
                                                "char": 101
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 314,
                                        "char": 102
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 315,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 316,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 316,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 317,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 308,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 308,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 307,
                    "last-line": 319,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "isJsonString",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 319,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 319,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 319,
                            "char": 70
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 319,
                                "char": 95
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 319,
                            "char": 95
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "static",
                                "dynamic": 0,
                                "name": "isString",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 321,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 321,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 321,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 321,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "propertyPath",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 321,
                                            "char": 54
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 321,
                                        "char": 54
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 321,
                                "char": 55
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 322,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 322,
                                        "char": 18
                                    },
                                    "right": {
                                        "type": "fcall",
                                        "name": "json_decode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 322,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 322,
                                                "char": 37
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 322,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 322,
                                    "char": 40
                                },
                                "right": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "constant",
                                        "value": "JSON_ERROR_NONE",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 322,
                                        "char": 59
                                    },
                                    "right": {
                                        "type": "fcall",
                                        "name": "json_last_error",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 322,
                                        "char": 79
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 322,
                                    "char": 79
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 322,
                                "char": 79
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
                                                "type": "fcall",
                                                "name": "sprintf",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "ternary",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 324,
                                                                "char": 25
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "message",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 324,
                                                                "char": 35
                                                            },
                                                            "extra": {
                                                                "type": "string",
                                                                "value": "Value \\\"%s\\\" is not a valid JSON string.",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 324,
                                                                "char": 77
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 324,
                                                            "char": 77
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 324,
                                                        "char": 77
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "scall",
                                                            "dynamic-class": 0,
                                                            "class": "static",
                                                            "dynamic": 0,
                                                            "name": "stringify",
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "value",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 325,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 325,
                                                                    "char": 40
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 326,
                                                            "char": 13
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 326,
                                                        "char": 13
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 326,
                                                "char": 14
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 326,
                                            "char": 14
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 328,
                                    "char": 17
                                },
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "createException",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 328,
                                                    "char": 48
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 328,
                                                "char": 48
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 328,
                                                    "char": 57
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 328,
                                                "char": 57
                                            },
                                            {
                                                "parameter": {
                                                    "type": "static-constant-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "AssertionCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 328,
                                                        "char": 93
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "INVALID_JSON_STRING",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 328,
                                                        "char": 93
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 328,
                                                    "char": 93
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 328,
                                                "char": 93
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "propertyPath",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 328,
                                                    "char": 107
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 328,
                                                "char": 107
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 328,
                                        "char": 108
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 329,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 331,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 331,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 332,
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 320,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                        "line": 320,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 319,
                    "last-line": 334,
                    "char": 26
                },
                {
                    "visibility": [
                        "private",
                        "static"
                    ],
                    "type": "method",
                    "name": "stringify",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 334,
                            "char": 44
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_bool",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 336,
                                            "char": 25
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 336,
                                        "char": 25
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 336,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "ternary",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 337,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 337,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 337,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "TRUE",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 337,
                                            "char": 41
                                        },
                                        "extra": {
                                            "type": "string",
                                            "value": "FALSE",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 337,
                                            "char": 48
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 337,
                                        "char": 48
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 338,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 340,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 340,
                                    "char": 20
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 340,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 340,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "string",
                                        "value": "NULL",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 340,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 340,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 342,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 342,
                                    "char": 16
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 343,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_scalar",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 343,
                                            "char": 27
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 343,
                                        "char": 27
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 343,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "val",
                                            "expr": {
                                                "type": "cast",
                                                "left": "string",
                                                "right": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 344,
                                                    "char": 37
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 344,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 344,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 345,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "fcall",
                                            "name": "strlen",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 345,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 345,
                                                    "char": 26
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 345,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "100",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 345,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 345,
                                        "char": 34
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "val",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "substr",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "val",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 346,
                                                                        "char": 37
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 346,
                                                                    "char": 37
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "int",
                                                                        "value": "0",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 346,
                                                                        "char": 40
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 346,
                                                                    "char": 40
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "int",
                                                                        "value": "96",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                        "line": 346,
                                                                        "char": 44
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                    "line": 346,
                                                                    "char": 44
                                                                }
                                                            ],
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 346,
                                                            "char": 46
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": " ...",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 346,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 346,
                                                        "char": 52
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 346,
                                                    "char": 52
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 347,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 348,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 348,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 349,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 351,
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
                                        "name": "is_array",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 351,
                                                    "char": 26
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 351,
                                                "char": 26
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 351,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "fcall",
                                        "name": "is_object",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 351,
                                                    "char": 46
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 351,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 351,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 351,
                                    "char": 49
                                },
                                "right": {
                                    "type": "fcall",
                                    "name": "is_resource",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 351,
                                                "char": 68
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 351,
                                            "char": 68
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 351,
                                    "char": 70
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 351,
                                "char": 70
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "val",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "print_r",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 352,
                                                            "char": 36
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 352,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 352,
                                                            "char": 42
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 352,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 352,
                                                "char": 43
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 352,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 353,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "val",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "preg_replace",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\/\\s+\/",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 353,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 353,
                                                        "char": 41
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": " ",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 353,
                                                            "char": 44
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 353,
                                                        "char": 44
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "val",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 353,
                                                            "char": 49
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 353,
                                                        "char": 49
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 353,
                                                "char": 50
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 353,
                                            "char": 50
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 354,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "fcall",
                                            "name": "strlen",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "val",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                        "line": 354,
                                                        "char": 26
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 354,
                                                    "char": 26
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 354,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "160",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 354,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 354,
                                        "char": 34
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "substr",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "val",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 355,
                                                                "char": 34
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 355,
                                                            "char": 34
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "int",
                                                                "value": "0",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 355,
                                                                "char": 37
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 355,
                                                            "char": 37
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "int",
                                                                "value": "156",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                                "line": 355,
                                                                "char": 42
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                            "line": 355,
                                                            "char": 42
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 355,
                                                    "char": 44
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": " ...",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                    "line": 355,
                                                    "char": 50
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                                "line": 355,
                                                "char": 50
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                            "line": 356,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 357,
                                    "char": 18
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                        "line": 357,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                    "line": 358,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 360,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "unknown",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                                "line": 360,
                                "char": 23
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                            "line": 361,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
                    "line": 334,
                    "last-line": 362,
                    "char": 27
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
            "line": 8,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/Assertion.zep",
        "line": 8,
        "char": 5
    }
]