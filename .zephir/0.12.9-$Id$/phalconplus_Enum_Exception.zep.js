[
    {
        "type": "namespace",
        "name": "PhalconPlus\\Enum",
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
        "line": 2,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "PhalconPlus\\Enum\\AbstractEnum",
                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                "line": 2,
                "char": 34
            }
        ],
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
        "line": 4,
        "char": 5
    },
    {
        "type": "class",
        "name": "Exception",
        "abstract": 0,
        "final": 0,
        "extends": "AbstractEnum",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected",
                        "static"
                    ],
                    "type": "property",
                    "name": "details",
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 8,
                    "char": 13
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "protected",
                        "static"
                    ],
                    "type": "method",
                    "name": "has",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "eCode",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 8,
                            "char": 44
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "code",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 10,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 10,
                                    "char": 24
                                },
                                {
                                    "variable": "details",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 10,
                                        "char": 38
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 10,
                                    "char": 38
                                },
                                {
                                    "variable": "className",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 10,
                                    "char": 49
                                },
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 10,
                                    "char": 54
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 11,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "className",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "get_called_class",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 11,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 11,
                                    "char": 43
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 12,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "code",
                                    "expr": {
                                        "type": "new",
                                        "class": "className",
                                        "dynamic": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "eCode",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 12,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 12,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 12,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 12,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 19,
                            "char": 8
                        },
                        {
                            "type": "cblock",
                            "value": "\n        #if PHP_VERSION_ID >= 70000\n        zephir_read_static_property_ce(&details, phalconplus_enum_exception_ce, SL(\"details\") TSRMLS_CC, 0);\n        #else\n        zephir_read_static_property_ce(&details, phalconplus_enum_exception_ce, SL(\"details\") TSRMLS_CC);\n        #endif\n        ",
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 20,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 20,
                                    "char": 51
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "details",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 20,
                                        "char": 30
                                    },
                                    "right": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "code",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 20,
                                            "char": 36
                                        },
                                        "name": "__toString",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 20,
                                        "char": 49
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 20,
                                    "char": 51
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 20,
                                "char": 51
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 21,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 22,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 23,
                                        "char": 22
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 24,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 25,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 8,
                    "last-line": 27,
                    "char": 29
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "getByCode",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "eCode",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 27,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "detail",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 29,
                                        "char": 24
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 29,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 30,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "detail",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "has",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "eCode",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 30,
                                                    "char": 39
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 30,
                                                "char": 39
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 30,
                                        "char": 40
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 30,
                                    "char": 40
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 31,
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
                                        "value": "detail",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 31,
                                        "char": 26
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 31,
                                    "char": 26
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 31,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "detail",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "code",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 32,
                                                    "char": 28
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "eCode",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 32,
                                                "char": 37
                                            },
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 32,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 33,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 34,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "detail",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 34,
                                "char": 22
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 35,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 27,
                    "last-line": 37,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "newException",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "e",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 37,
                            "char": 42
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
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 37,
                                "char": 75
                            },
                            "default": {
                                "type": "null",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 37,
                                "char": 83
                            },
                            "reference": 0,
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 37,
                            "char": 83
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "code",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 39,
                                    "char": 17
                                },
                                {
                                    "variable": "eCode",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 39,
                                    "char": 24
                                },
                                {
                                    "variable": "eName",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 39,
                                    "char": 31
                                },
                                {
                                    "variable": "map2Name",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 39,
                                    "char": 41
                                },
                                {
                                    "variable": "className",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 39,
                                    "char": 52
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 40,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "map2Name",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_flip",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "scall",
                                                    "dynamic-class": 0,
                                                    "class": "static",
                                                    "dynamic": 0,
                                                    "name": "validValues",
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "bool",
                                                                "value": "true",
                                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                                "line": 40,
                                                                "char": 59
                                                            },
                                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                            "line": 40,
                                                            "char": 59
                                                        }
                                                    ],
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 40,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 40,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 40,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 40,
                                    "char": 61
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "eCode",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "e",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 41,
                                            "char": 23
                                        },
                                        "name": "getCode",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 41,
                                        "char": 33
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 41,
                                    "char": 33
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 44,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "eName",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "\\Phalcon\\Text",
                                        "dynamic": 0,
                                        "name": "camelize",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "map2Name",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                        "line": 44,
                                                        "char": 53
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "eCode",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                        "line": 44,
                                                        "char": 59
                                                    },
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 44,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 44,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 44,
                                        "char": 61
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 44,
                                    "char": 61
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 46,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "eClassName",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 46,
                                    "char": 23
                                },
                                {
                                    "variable": "exception",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 46,
                                    "char": 34
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 47,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "eClassName",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "scall",
                                            "dynamic-class": 0,
                                            "class": "static",
                                            "dynamic": 0,
                                            "name": "exceptionClassPrefix",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 47,
                                            "char": 57
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "eName",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 47,
                                            "char": 64
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 47,
                                        "char": 64
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 47,
                                    "char": 64
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 49,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "className",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "get_called_class",
                                        "call-type": 1,
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 49,
                                        "char": 43
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 49,
                                    "char": 43
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 50,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "code",
                                    "expr": {
                                        "type": "new",
                                        "class": "className",
                                        "dynamic": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "eCode",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 50,
                                                    "char": 41
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 50,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 50,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 50,
                                    "char": 42
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 52,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "exception",
                                    "expr": {
                                        "type": "new",
                                        "class": "eClassName",
                                        "dynamic": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "code",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                        "line": 52,
                                                        "char": 47
                                                    },
                                                    "name": "getMessage",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 52,
                                                    "char": 60
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 52,
                                                "char": 60
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "logger",
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 52,
                                                    "char": 68
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 52,
                                                "char": 68
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 52,
                                        "char": 69
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 52,
                                    "char": 69
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 54,
                            "char": 17
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "exception",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 54,
                                    "char": 19
                                },
                                "name": "setCode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "code",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 54,
                                                "char": 33
                                            },
                                            "name": "getCode",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 54,
                                            "char": 43
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 54,
                                        "char": 43
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 54,
                                "char": 44
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 55,
                            "char": 17
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "exception",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 55,
                                    "char": 19
                                },
                                "name": "setLevel",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "code",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 55,
                                                "char": 34
                                            },
                                            "name": "getLevel",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 55,
                                            "char": 45
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 55,
                                        "char": 45
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 55,
                                "char": 46
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 56,
                            "char": 17
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "exception",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 56,
                                    "char": 19
                                },
                                "name": "setMessage",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "e",
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 56,
                                                "char": 33
                                            },
                                            "name": "getMessage",
                                            "call-type": 1,
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 56,
                                            "char": 46
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 56,
                                        "char": 46
                                    }
                                ],
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 56,
                                "char": 47
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 58,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "exception",
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 58,
                                "char": 25
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 59,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 37,
                    "last-line": 61,
                    "char": 26
                },
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "exceptionClassPrefix",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "constant",
                                    "value": "__NAMESPACE__",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 63,
                                    "char": 30
                                },
                                "right": {
                                    "type": "string",
                                    "value": "\\\\Exception\\\\",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 63,
                                    "char": 45
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 63,
                                "char": 45
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 64,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 61,
                    "last-line": 66,
                    "char": 26
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getMessage",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "detail",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 68,
                                    "char": 19
                                },
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 68,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 69,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "detail",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "getByCode",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                        "line": 69,
                                                        "char": 45
                                                    },
                                                    "name": "getValue",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 69,
                                                    "char": 56
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 69,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 69,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 69,
                                    "char": 57
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 70,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 70,
                                    "char": 39
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "detail",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 70,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "message",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 70,
                                        "char": 37
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 70,
                                    "char": 39
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 70,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 71,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 72,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 73,
                                        "char": 20
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 74,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 75,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 66,
                    "last-line": 77,
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
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "detail",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 79,
                                    "char": 19
                                },
                                {
                                    "variable": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 79,
                                    "char": 24
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 80,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "detail",
                                    "expr": {
                                        "type": "scall",
                                        "dynamic-class": 0,
                                        "class": "static",
                                        "dynamic": 0,
                                        "name": "getByCode",
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                        "line": 80,
                                                        "char": 45
                                                    },
                                                    "name": "getValue",
                                                    "call-type": 1,
                                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                    "line": 80,
                                                    "char": 56
                                                },
                                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                                "line": 80,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 80,
                                        "char": 57
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 80,
                                    "char": 57
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 81,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "val",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 81,
                                    "char": 37
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "detail",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 81,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "level",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 81,
                                        "char": 35
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 81,
                                    "char": 37
                                },
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 81,
                                "char": 37
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "val",
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 82,
                                        "char": 23
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "\\Phalcon\\Logger",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 84,
                                            "char": 42
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "DEBUG",
                                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                            "line": 84,
                                            "char": 42
                                        },
                                        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                        "line": 84,
                                        "char": 42
                                    },
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 85,
                                    "char": 9
                                }
                            ],
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 86,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 77,
                    "last-line": 88,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getCode",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                    "line": 90,
                                    "char": 21
                                },
                                "name": "getValue",
                                "call-type": 1,
                                "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                                "line": 90,
                                "char": 32
                            },
                            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                            "line": 91,
                            "char": 5
                        }
                    ],
                    "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
                    "line": 88,
                    "last-line": 92,
                    "char": 19
                }
            ],
            "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
            "line": 4,
            "char": 5
        },
        "file": "\/Users\/weigang\/Developments\/github\/phalconplus\/phalconplus\/Enum\/Exception.zep",
        "line": 4,
        "char": 5
    }
]