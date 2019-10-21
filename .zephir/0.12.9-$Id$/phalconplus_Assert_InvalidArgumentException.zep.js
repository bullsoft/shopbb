[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Assert",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "InvalidArgumentException",
        "abstract": 0,
        "final": 0,
        "extends": "\\InvalidArgumentException",
        "implements": [
            {
                "type": "variable",
                "value": "AssertionFailedException",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                "line": 4,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "propertyPath",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                    "line": 6,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "value",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                    "line": 7,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "constraints",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
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
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 9,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "code",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 9,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "propertyPath",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                "line": 9,
                                "char": 67
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 9,
                            "char": 67
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 9,
                            "char": 74
                        },
                        {
                            "type": "parameter",
                            "name": "constraints",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                "line": 9,
                                "char": 98
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 9,
                            "char": 98
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "__construct",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                            "line": 11,
                                            "char": 36
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                        "line": 11,
                                        "char": 36
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "code",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                            "line": 11,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                        "line": 11,
                                        "char": 42
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                "line": 11,
                                "char": 43
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 12,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "propertyPath",
                                    "expr": {
                                        "type": "variable",
                                        "value": "propertyPath",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                        "line": 12,
                                        "char": 46
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 12,
                                    "char": 46
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 13,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "value",
                                    "expr": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                        "line": 13,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 13,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 14,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "constraints",
                                    "expr": {
                                        "type": "variable",
                                        "value": "constraints",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                        "line": 14,
                                        "char": 44
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 14,
                                    "char": 44
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 15,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                    "line": 9,
                    "last-line": 17,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPropertyPath",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 19,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "propertyPath",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 19,
                                    "char": 34
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                "line": 19,
                                "char": 34
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 20,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                    "line": 17,
                    "last-line": 22,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getValue",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 24,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 24,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                "line": 24,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                    "line": 22,
                    "last-line": 27,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getConstraints",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 29,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "constraints",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                    "line": 29,
                                    "char": 33
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                                "line": 29,
                                "char": 33
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                            "line": 30,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
                    "line": 27,
                    "last-line": 31,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Assert\/InvalidArgumentException.zep",
        "line": 3,
        "char": 5
    }
]