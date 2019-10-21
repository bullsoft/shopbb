[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Base",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\OrderByDirection",
                "alias": "OrderByDirection",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                "line": 2,
                "char": 58
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "Pagable",
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
                    "name": "pageNo",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                        "line": 9,
                        "char": 25
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 10,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "pageSize",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                        "line": 10,
                        "char": 27
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 11,
                    "char": 13
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "orderBys",
                    "default": {
                        "type": "empty-array",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                        "line": 11,
                        "char": 28
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 13,
                    "char": 10
                }
            ],
            "methods": [
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
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 15,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "pageNo",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 15,
                                    "char": 28
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 15,
                                "char": 28
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 16,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 13,
                    "last-line": 18,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getPageSize",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 20,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "pageSize",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 20,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 20,
                                "char": 30
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 21,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 18,
                    "last-line": 23,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getOrderBys",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 25,
                                    "char": 21
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "orderBys",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 25,
                                    "char": 30
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 25,
                                "char": 30
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 26,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "\\PhalconPlus\\Base\\ProtoOrderBy",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 24,
                                    "char": 5
                                },
                                "collection": 0,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 24,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                        "line": 24,
                        "char": 5
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 23,
                    "last-line": 28,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setOrderBy",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "orderBy",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "\\PhalconPlus\\Base\\ProtoOrderBy",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 28,
                                "char": 71
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 28,
                            "char": 72
                        }
                    ],
                    "statements": [
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
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 30,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "orderBys",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 30,
                                                "char": 34
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 30,
                                            "char": 34
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                        "line": 30,
                                        "char": 34
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "orderBy",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 30,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                        "line": 30,
                                        "char": 43
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 30,
                                "char": 44
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 31,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 31,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 32,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 28,
                    "last-line": 34,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setOrderBys",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "orderBys",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 34,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "item",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 36,
                                    "char": 17
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 37,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "orderBys",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 37,
                                "char": 30
                            },
                            "value": "item",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "isset",
                                            "left": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "item",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 38,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "property",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 38,
                                                        "char": 35
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 38,
                                                    "char": 36
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 38,
                                                "char": 39
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 38,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "isset",
                                            "left": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "item",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 38,
                                                        "char": 51
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "direction",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 38,
                                                        "char": 61
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 38,
                                                    "char": 62
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 38,
                                                "char": 64
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 38,
                                            "char": 64
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                        "line": 38,
                                        "char": 64
                                    },
                                    "statements": [
                                        {
                                            "type": "declare",
                                            "data-type": "variable",
                                            "variables": [
                                                {
                                                    "variable": "orderBy",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 39,
                                                    "char": 28
                                                },
                                                {
                                                    "variable": "direction",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 39,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 40,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "orderBy",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "ProtoOrderBy",
                                                        "dynamic": 0,
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 40,
                                                        "char": 49
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 40,
                                                    "char": 49
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 41,
                                            "char": 23
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "orderBy",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 41,
                                                    "char": 25
                                                },
                                                "name": "setProperty",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "item",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                                "line": 41,
                                                                "char": 42
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "property",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                                "line": 41,
                                                                "char": 51
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                            "line": 41,
                                                            "char": 52
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 41,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 41,
                                                "char": 53
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 42,
                                            "char": 19
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "direction",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "OrderByDirection",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "array-access",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "item",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                                        "line": 42,
                                                                        "char": 58
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": "direction",
                                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                                        "line": 42,
                                                                        "char": 68
                                                                    },
                                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                                    "line": 42,
                                                                    "char": 69
                                                                },
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                                "line": 42,
                                                                "char": 69
                                                            }
                                                        ],
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 42,
                                                        "char": 70
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 42,
                                                    "char": 70
                                                }
                                            ],
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 43,
                                            "char": 23
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "orderBy",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 43,
                                                    "char": 25
                                                },
                                                "name": "setDirection",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "direction",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                            "line": 43,
                                                            "char": 48
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 43,
                                                        "char": 48
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 43,
                                                "char": 49
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 44,
                                            "char": 20
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                    "line": 44,
                                                    "char": 22
                                                },
                                                "name": "setOrderBy",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "orderBy",
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                            "line": 44,
                                                            "char": 41
                                                        },
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                        "line": 44,
                                                        "char": 41
                                                    }
                                                ],
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                                "line": 44,
                                                "char": 42
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                            "line": 45,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 46,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 47,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 34,
                    "last-line": 49,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setPageNo",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "pageNo",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 49,
                            "char": 41
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
                                    "property": "pageNo",
                                    "expr": {
                                        "type": "variable",
                                        "value": "pageNo",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                        "line": 51,
                                        "char": 34
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 51,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 52,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 52,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 53,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 49,
                    "last-line": 55,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setPageSize",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "pageSize",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 55,
                            "char": 45
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
                                    "property": "pageSize",
                                    "expr": {
                                        "type": "variable",
                                        "value": "pageSize",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                        "line": 57,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                    "line": 57,
                                    "char": 38
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 58,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                                "line": 58,
                                "char": 20
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 55,
                    "last-line": 61,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "DEFAULT_PAGE_NO",
                    "default": {
                        "type": "int",
                        "value": "1",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                        "line": 6,
                        "char": 30
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 7,
                    "char": 9
                },
                {
                    "type": "const",
                    "name": "DEFAULT_PAGE_SIZE",
                    "default": {
                        "type": "int",
                        "value": "15",
                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                        "line": 7,
                        "char": 33
                    },
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
                    "line": 9,
                    "char": 13
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Base\/Pagable.zep",
        "line": 4,
        "char": 5
    }
]