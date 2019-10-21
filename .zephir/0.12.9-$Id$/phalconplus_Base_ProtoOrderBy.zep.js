[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Assert\\Assertion",
                "alias": "Assert",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                "line": 2,
                "char": 43
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "ProtoOrderBy",
        "abstract": 0,
        "final": 0,
        "extends": "ProtoBuffer",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "property",
                    "docblock": "**\n     * @required\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 13,
                    "char": 6
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "direction",
                    "docblock": "**\n     * @required\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 18,
                    "char": 6
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "alias",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                        "line": 19,
                        "char": 21
                    },
                    "docblock": "**\n     * @optional\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 21,
                    "char": 10
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getProperty",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 23,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "property",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 23,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 23,
                                "char": 30
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 24,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 21,
                    "last-line": 26,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setProperty",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "property",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 26,
                            "char": 49
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
                                    "property": "property",
                                    "expr": {
                                        "type": "variable",
                                        "value": "property",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 28,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 28,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 29,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 26,
                    "last-line": 31,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setDirection",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "orderBy",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Enum\\OrderByDirection",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 31,
                                "char": 77
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 31,
                            "char": 78
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
                                    "property": "direction",
                                    "expr": {
                                        "type": "variable",
                                        "value": "orderBy",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 33,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 33,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 34,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 31,
                    "last-line": 36,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getDirection",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 38,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "direction",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 38,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 38,
                                "char": 31
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 39,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 36,
                    "last-line": 41,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getAlias",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 43,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "alias",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 43,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 43,
                                "char": 27
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 44,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 41,
                    "last-line": 46,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setAlias",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "alias",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 46,
                            "char": 43
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
                                    "property": "alias",
                                    "expr": {
                                        "type": "variable",
                                        "value": "alias",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 48,
                                        "char": 32
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 48,
                                    "char": 32
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 49,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 46,
                    "last-line": 51,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__toString",
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Assert",
                                "dynamic": 0,
                                "name": "notEmpty",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 53,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "property",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 53,
                                                "char": 40
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 53,
                                            "char": 40
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 53,
                                        "char": 40
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 53,
                                "char": 41
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 54,
                            "char": 14
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Assert",
                                "dynamic": 0,
                                "name": "notEmpty",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 54,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "direction",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 54,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 54,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 54,
                                        "char": 41
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 54,
                                "char": 42
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 55,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "orderBy",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 55,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 55,
                                    "char": 23
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 56,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 56,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "alias",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 56,
                                            "char": 31
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 56,
                                        "char": 31
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 56,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 56,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "orderBy",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "orderBy",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                        "line": 57,
                                                        "char": 35
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                            "line": 57,
                                                            "char": 42
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "alias",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                            "line": 57,
                                                            "char": 49
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                        "line": 57,
                                                        "char": 49
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                    "line": 57,
                                                    "char": 49
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": ".",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                    "line": 57,
                                                    "char": 52
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 57,
                                                "char": 52
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 57,
                                            "char": 52
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 58,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 59,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "concat",
                                    "left": {
                                        "type": "concat",
                                        "left": {
                                            "type": "variable",
                                            "value": "orderBy",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 59,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 59,
                                                "char": 31
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "property",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                                "line": 59,
                                                "char": 41
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                            "line": 59,
                                            "char": 41
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 59,
                                        "char": 41
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": " ",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 59,
                                        "char": 45
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 59,
                                    "char": 45
                                },
                                "right": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 59,
                                        "char": 52
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "direction",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                        "line": 59,
                                        "char": 62
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                    "line": 59,
                                    "char": 62
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                                "line": 59,
                                "char": 62
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                            "line": 60,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
                    "line": 51,
                    "last-line": 61,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/ProtoOrderBy.zep",
        "line": 4,
        "char": 5
    }
]