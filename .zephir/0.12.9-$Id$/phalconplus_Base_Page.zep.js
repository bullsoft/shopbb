[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Assert\\Assertion",
                "alias": "Assert",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                "line": 2,
                "char": 43
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
        "line": 3,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Phalcon\\Mvc\\Model\\Resultset",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                "line": 3,
                "char": 32
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
        "line": 5,
        "char": 5
    },
    {
        "type": "class",
        "name": "Page",
        "abstract": 0,
        "final": 0,
        "extends": "ProtoBuffer",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "pagable",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                        "line": 10,
                        "char": 27
                    },
                    "docblock": "**\n     * @var <\\Phalcon\\Base\\Pagable>\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 14,
                    "char": 6
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "data",
                    "default": {
                        "type": "null",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                        "line": 15,
                        "char": 24
                    },
                    "docblock": "**\n     * @var mixed array | <ArrayObject>\n     *",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 17,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "totalSize",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                        "line": 17,
                        "char": 26
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 19,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "pageNo",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                        "line": 19,
                        "char": 23
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 21,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "pageSize",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                        "line": 21,
                        "char": 25
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 23,
                    "char": 11
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "totalPage",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                        "line": 23,
                        "char": 26
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 25,
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
                            "name": "pagable",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "Pagable",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 25,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 25,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "totalSize",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 25,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\Phalcon\\Mvc\\Model\\Resultset",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 25,
                                "char": 97
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 25,
                            "char": 98
                        }
                    ],
                    "statements": [
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "Assert",
                                "dynamic": 0,
                                "name": "notNull",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "pagable",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 27,
                                            "char": 32
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 27,
                                        "char": 32
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 27,
                                "char": 33
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 29,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "hydrateMode",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 29,
                                    "char": 24
                                },
                                {
                                    "variable": "tmpData",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 29,
                                    "char": 33
                                },
                                {
                                    "variable": "item",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 29,
                                    "char": 39
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
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
                                    "property": "pagable",
                                    "expr": {
                                        "type": "variable",
                                        "value": "pagable",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 31,
                                        "char": 36
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 31,
                                    "char": 36
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 33,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "hydrateMode",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 33,
                                            "char": 32
                                        },
                                        "name": "getHydrateMode",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 33,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 33,
                                    "char": 49
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 35,
                            "char": 14
                        },
                        {
                            "type": "switch",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "variable",
                                    "value": "hydrateMode",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 35,
                                    "char": 27
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 35,
                                "char": 29
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Resultset",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 36,
                                            "char": 44
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "HYDRATE_RECORDS",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 36,
                                            "char": 44
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 36,
                                        "char": 44
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "tmpData",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\ArrayObject",
                                                        "dynamic": 0,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 37,
                                                        "char": 49
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 37,
                                                    "char": 49
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 38,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "tmpData",
                                                    "property": "modelName",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "get_class",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "variable",
                                                                        "value": "data",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                        "line": 38,
                                                                        "char": 57
                                                                    },
                                                                    "name": "getFirst",
                                                                    "call-type": 1,
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                    "line": 38,
                                                                    "char": 68
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                "line": 38,
                                                                "char": 68
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 38,
                                                        "char": 69
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 38,
                                                    "char": 69
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 39,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "tmpData",
                                                    "property": "columnMap",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "data",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                "line": 39,
                                                                "char": 47
                                                            },
                                                            "name": "getFirst",
                                                            "call-type": 1,
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 39,
                                                            "char": 59
                                                        },
                                                        "name": "columnMap",
                                                        "call-type": 1,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 39,
                                                        "char": 71
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 39,
                                                    "char": 71
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 40,
                                            "char": 19
                                        },
                                        {
                                            "type": "for",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "iterator",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "data",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 40,
                                                            "char": 42
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 40,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 40,
                                                "char": 44
                                            },
                                            "value": "item",
                                            "reverse": 0,
                                            "statements": [
                                                {
                                                    "type": "mcall",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "tmpData",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 41,
                                                            "char": 29
                                                        },
                                                        "name": "append",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "variable",
                                                                        "value": "item",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                        "line": 41,
                                                                        "char": 42
                                                                    },
                                                                    "name": "toArray",
                                                                    "call-type": 1,
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                    "line": 41,
                                                                    "char": 52
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                "line": 41,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 41,
                                                        "char": 53
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 42,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 43,
                                            "char": 21
                                        },
                                        {
                                            "type": "break",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 44,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 44,
                                    "char": 19
                                },
                                {
                                    "type": "default",
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "tmpData",
                                                    "expr": {
                                                        "type": "empty-array",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 45,
                                                        "char": 33
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 45,
                                                    "char": 33
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 46,
                                            "char": 19
                                        },
                                        {
                                            "type": "for",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "iterator",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "data",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 46,
                                                            "char": 42
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 46,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 46,
                                                "char": 44
                                            },
                                            "value": "item",
                                            "reverse": 0,
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable-append",
                                                            "operator": "assign",
                                                            "variable": "tmpData",
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "item",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                                "line": 47,
                                                                "char": 41
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 47,
                                                            "char": 41
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 48,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 49,
                                            "char": 21
                                        },
                                        {
                                            "type": "break",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 50,
                                            "char": 9
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 50,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 52,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "data",
                                    "expr": {
                                        "type": "variable",
                                        "value": "tmpData",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 52,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 52,
                                    "char": 33
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 53,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "totalSize",
                                    "expr": {
                                        "type": "variable",
                                        "value": "totalSize",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 53,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 53,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 56,
                            "char": 12
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 56,
                                            "char": 14
                                        },
                                        "name": "setPageNo",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 57,
                                        "char": 14
                                    },
                                    "name": "setPageSize",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 58,
                                    "char": 14
                                },
                                "name": "setTotalPage",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 58,
                                "char": 29
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 25,
                    "last-line": 61,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setPageNo",
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "pageNo",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 63,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "pagable",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 63,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 63,
                                            "char": 42
                                        },
                                        "name": "getPageNo",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 63,
                                        "char": 54
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 63,
                                    "char": 54
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 64,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 64,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 65,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 61,
                    "last-line": 67,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setPageSize",
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "pageSize",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 69,
                                                "char": 35
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "pagable",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 69,
                                                "char": 44
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 69,
                                            "char": 44
                                        },
                                        "name": "getPageSize",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 69,
                                        "char": 58
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 69,
                                    "char": 58
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 70,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 70,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 71,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 67,
                    "last-line": 73,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setTotalPage",
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "totalPage",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ceil",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "div",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 75,
                                                            "char": 41
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "totalSize",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 75,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 75,
                                                        "char": 52
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 75,
                                                            "char": 59
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "pageSize",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                            "line": 75,
                                                            "char": 68
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                        "line": 75,
                                                        "char": 68
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 75,
                                                    "char": 68
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 75,
                                                "char": 68
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 75,
                                        "char": 69
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 75,
                                    "char": 69
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 76,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 76,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 77,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 73,
                    "last-line": 79,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPageNo",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 81,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "pageNo",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 81,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 81,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 82,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 79,
                    "last-line": 84,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getTotalPage",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 86,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "totalPage",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 86,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 86,
                                "char": 31
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 87,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 84,
                    "last-line": 89,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getTotalSize",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 91,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "totalSize",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 91,
                                    "char": 31
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 91,
                                "char": 31
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 92,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 89,
                    "last-line": 94,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "hasPreviousPage",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "greater",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 96,
                                        "char": 21
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "pageNo",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 96,
                                        "char": 29
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 96,
                                    "char": 29
                                },
                                "right": {
                                    "type": "int",
                                    "value": "1",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 96,
                                    "char": 32
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 96,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 97,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 94,
                    "last-line": 99,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isFirstPage",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 101,
                                        "char": 22
                                    },
                                    "name": "hasPreviousPage",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 101,
                                    "char": 40
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 101,
                                "char": 40
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 102,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 99,
                    "last-line": 104,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isLastPage",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 106,
                                        "char": 22
                                    },
                                    "name": "hasNextPage",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 106,
                                    "char": 36
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 106,
                                "char": 36
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 107,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 104,
                    "last-line": 109,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "hasNextPage",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 111,
                                        "char": 21
                                    },
                                    "name": "getPageNo",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 111,
                                    "char": 34
                                },
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                        "line": 111,
                                        "char": 41
                                    },
                                    "name": "getTotalPage",
                                    "call-type": 1,
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 111,
                                    "char": 56
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 111,
                                "char": 56
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 112,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 109,
                    "last-line": 114,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getData",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 116,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "data",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 116,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 116,
                                "char": 26
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 117,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 114,
                    "last-line": 119,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isEmpty",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "fcall",
                                    "name": "count",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 121,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "data",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                    "line": 121,
                                                    "char": 32
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                                "line": 121,
                                                "char": 32
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                            "line": 121,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 121,
                                    "char": 35
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                    "line": 121,
                                    "char": 38
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                                "line": 121,
                                "char": 38
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                            "line": 122,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
                    "line": 119,
                    "last-line": 123,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
            "line": 5,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Page.zep",
        "line": 5,
        "char": 5
    }
]